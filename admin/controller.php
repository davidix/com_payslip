<?php
/**
 * @author		
 * @copyright	
 * @license		
 */

defined("_JEXEC") or die("Restricted access");

class PayslipController extends JControllerLegacy
{

	protected $default_view = 'payslips';

	protected function canView($view)
	{
		$canDo	= PayslipHelper::getActions();
		return true;
	}

    public function display($cachable = false, $urlparams = false)
	{
        // Get the document object.
		$document	= JFactory::getDocument();

		// Set the default view name and format from the Request.
		$vName   = $this->input->getCmd('view', 'payslips');
		$vFormat = $document->getType();
		$lName   = $this->input->getCmd('layout', 'default');
		
		// Check whether user is allowed to admin component 
		if (!$this->canView($vName))
		{
			JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
			return;
		}
		
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
}
?>