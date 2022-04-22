<?php
defined("_JEXEC") or die("Restricted access");
require_once JPATH_COMPONENT_ADMINISTRATOR.  '/lib/PHPExcel/PHPExcel.php';

class PayslipControllerPayslips extends JControllerAdmin
{
	
	public function parsefile()
    {
        JSession::checkToken() or die('Invalid Token');
        $input  = JFactory::getApplication()->input;
        $editor = $input->get('editor');
        try {
            $files		= $input->files->get('jform');
            $filename	= $files['file_upload']['tmp_name'];

            $fileType	= PHPExcel_IOFactory::identify($filename);
            $reader		= PHPExcel_IOFactory::createReader($fileType);
            $content	= $reader->load($filename);
            $data		= $content->getActiveSheet()->toArray(null, true, true, false);
			
			$count		= count($data)-1;
			$labels		= array_shift($data);
			
			$keys		= array();
            $newArray	= array();

			foreach ($labels as $label)
			{
				$keys[] = $label;
			}
           // Add Ids, just in case we want them later
            $keys[] = 'id';
            for ($i = 0; $i < $count; $i++) 
			{
                $data[$i][] = $i;
            }
			
            for ($j = 0; $j < $count; $j++)
			{
                $d = array_combine($keys, $data[$j]);
                $newArray[$j] = $d;
            }
			
			$json_data = json_encode($newArray);
			$this->insertMultiple($newArray);
        }
		catch (Exception $e) {
			echo '<pre>';
            print_r($e);
			echo '<pre>';
        }
		  $url = 'index.php?option=com_payslip&view=payslips';
        $this->setRedirect($url);
        $this->redirect();

    }
	
	public function insertMultiple($data)
	{
			$db = JFactory::getDbo();
			$query = $db->getQuery(true);
			$columns = array('title', 'prs_no', 'values');
			
			$rows = array();
			$str='';
			
			$i = 0;
			$len = count($data);
			foreach($data as $row)
			{
				//die(print_r($row));
				$rows[] = array(
				$db->quote($row['نام'].' '.$row['نام خانوادگي'].' - '.$row['ماه / سال جاري']),
				$db->quote($row['کد پرسنلي']),
				$db->quote($row['کد پرسنلي'])//json_encode($row)
				);
				
				$str.='('.
				$db->quote($row['نام'].' '.$row['نام خانوادگي'].' - '.$row['ماه / سال جاري']).','.
				//$db->quote($row['نام']).','.
				$db->quote($row['کد پرسنلي']).','.
				$db->quote(json_encode($row));//json_encode($row);
				if ($i == $len - 1)
				$str.=')';
				else 
				$str.='),';
				
				$i++;
			}
			$query
				->insert($db->quoteName('#__payslip_payslips'))
				->columns($db->quoteName($columns))
				->values(
				substr($str, 1, -1) //implode(',', $rows)
				);

			// Set the query using our newly populated query object and execute it.
			$db->setQuery($query);
			$db->execute();
	}
	
	/**
	 * The URL view list variable.
	 *
	 * @var    string
	 * @since  12.2
	 */
	protected $view_list = 'payslips';
	
	/**
	 * Get the admin model and set it to default
	 *
	 * @param   string           $name    Name of the model.
	 * @param   string           $prefix  Prefix of the model.
	 * @param   array			 $config  The model configuration.
	 */
	public function getModel($name = 'Payslip', $prefix='PayslipModel', $config = array())
	{
		$config['ignore_request'] = true;
		$model = parent::getModel($name, $prefix, $config);
		return $model;
	}
}
?>