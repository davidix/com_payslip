<?php
/**
 * @author		
 * @copyright	
 * @license		
 */

defined("_JEXEC") or die("Restricted access");

/**
 * Payslip item controller class.
 *
 * @package     Payslip
 * @subpackage  Controllers
 */
class PayslipControllerPayslip extends JControllerForm
{
	/**
	 * The URL view item variable.
	 *
	 * @var    string
	 * @since  12.2
	 */
	protected $view_item = 'payslip';

	/**
	 * The URL view list variable.
	 *
	 * @var    string
	 * @since  12.2
	 */
	protected $view_list = 'payslips';
	
	/**
	 * Method to run batch operations.
	 *
	 * @param   object  $model  The model.
	 *
	 * @return  boolean   True if successful, false otherwise and internal error is set.
	 *
	 * @since   2.5
	 */
	public function batch($model = null)
	{
		JSession::checkToken() or jexit(JText::_('JINVALID_TOKEN'));

		// Set the model
		$model = $this->getModel('Payslip', 'PayslipModel', array());

		// Preset the redirect
		$this->setRedirect(JRoute::_('index.php?option=com_payslip&view=payslips' . $this->getRedirectToListAppend(), false));

		return parent::batch($model);
	}
}
?>