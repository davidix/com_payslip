<?php
/**
 * @author		
 * @copyright	
 * @license		
 */

defined("_JEXEC") or die("Restricted access");

// necessary libraries
JHtml::_('bootstrap.tooltip');
JHtml::_('behavior.multiselect');
JHtml::_('dropdown.init');
JHtml::_('formbehavior.chosen', 'select');

// sort ordering and direction
$listOrder = $this->state->get('list.ordering');
$listDirn = $this->state->get('list.direction');
$user = JFactory::getUser();
function toPersianNum($str)
{
	return str_replace(
		array('0','1','2','3','4','5','6','7','8','9'),
		array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'),
		$str
		);
}

?>
<style>
.row2 {
	background-color: #e4e4e4;
}

.wrap.t3-bottombar form#login-form {
    background-color: #cecece;
    padding: 15px;
}

.wrap.t3-bottombar form#login-form .btn {
    font-family: iransans;
}

input#filter_search {
    display: inline;
}

button.btn.hasTooltip {
    height: 42px;
}

.js-stools-container-bar {
    margin-bottom: 10px;
}
thead a {
    color: #fff !important;
}
</style>

<?php if ($user->id != 0){ ?>
	<a class="btn btn-default " style="font-family: iransans;text-align: center !important;" href="user-dashboard/profile.html">ویرایش اطلاعات فردی</a>
<h2><?php echo JText::_('فیش حقوقی'); ?></h2>

<form action="<?php JRoute::_('index.php?option=com_mythings&view=mythings'); ?>" method="post" name="adminForm" id="adminForm">
	<?php
		// Search tools bar
		echo JLayoutHelper::render('joomla.searchtools.default', array('view' => $this));
	?>
	<table class="category table table-striped table-bordered table-hover">	
		<thead>
			<tr style="background: #202d40;color: #fff;">
				<th width="1%" class="hidden-phone">
					<?php echo JHtml::_('grid.checkall'); ?>
				</th>
				<th id="itemlist_header_title">
					<?php echo JHtml::_('grid.sort', 'JGLOBAL_TITLE', 'a.title', $listDirn, $listOrder); ?>
				</th>
				<th class="nowrap left">
					<?php echo JHtml::_('grid.sort', JText::_('شماره پرسنلی'), 'a.prs_no', $listDirn, $listOrder) ?>
				</th>
				<!--<th class="nowrap left">
					<?php echo JHtml::_('grid.sort', JText::_('COM_PAYSLIP_PAYSLIP_PAYSLIPS_FIELD_VALUES_LABEL'), 'a.values', $listDirn, $listOrder) ?>
				</th>-->
				<?php if ($this->params->get('list_show_author', 0)) : ?>
				<th id="itemlist_header_author">
					<?php echo JHtml::_('grid.sort', 'JAUTHOR', 'author', $listDirn, $listOrder); ?>
				</th>
				<?php endif; ?>
				<?php if ($this->params->get('list_show_hits', 0)) : ?>
				<th id="itemlist_header_hits">
					<?php echo JHtml::_('grid.sort', 'JGLOBAL_HITS', 'a.hits', $listDirn, $listOrder); ?>
				</th>
				<?php endif; ?>			
			</tr>
		</thead>		
		<tbody>
		<?php foreach ($this->items as $i => $item) :
		$canEdit	= $this->user->authorise('core.edit',       'com_payslip');
		$canEditOwn	= $this->user->authorise('core.edit.own',   'com_payslip') && $item->created_by == $this->user->id;
		$canDelete	= $this->user->authorise('core.delete',       'com_payslip');
		$canCheckin	= $this->user->authorise('core.manage',     'com_checkin');
		$canChange	= $this->user->authorise('core.edit.state', 'com_payslip') && $canCheckin;
		?>
			<tr class="row<?php echo $i % 2; ?>">
				<td class="center"><?php echo JHtml::_('grid.id', $i, $item->id); ?></td>
				<td headers="itemlist_header_title" class="list-title">
					<?php if (true/**isset($item->access) && in_array($item->access, $this->user->getAuthorisedViewLevels())*/) : ?>
						<a href="<?php echo JRoute::_("index.php?option=com_payslip&view=payslip&id=" . $item->id); ?>">
							<?php echo toPersianNum($this->escape($item->title)); ?>
						</a>

					<?php endif; ?>
					<?php if (strtotime($item->publish_up) > strtotime(JFactory::getDate())) : ?>
						<span class="list-published label label-warning">
							<?php echo JText::_('JNOTPUBLISHEDYET'); ?>
						</span>
					<?php endif; ?>
					<?php if ((strtotime($item->publish_down) < strtotime(JFactory::getDate())) && $item->publish_down != '0000-00-00 00:00:00') : ?>
						<span class="list-published label label-warning">
							<?php echo JText::_('JEXPIRED'); ?>
						</span>
					<?php endif; ?>
				</td>
				<td style="width:50%"><?php echo toPersianNum($this->escape($item->prs_no)); ?></td>
				<?php if ($this->params->get('list_show_author', 0)) : ?>
				<td class="small hidden-phone">
					<?php echo $this->escape($item->author_name); ?>
				</td>
				<?php endif; ?>
				<?php if ($this->params->get('list_show_hits', 0)) : ?>
				<td headers="itemlist_header_hits" class="list-hits">
					<span class="badge badge-info">
						<?php echo JText::sprintf('JGLOBAL_HITS_COUNT', $item->hits); ?>
					</span>
				</td>
				<?php endif; ?>
				<?php if ($this->user->authorise("core.edit") || $this->user->authorise("core.edit.own")) : ?>
				
				<?php endif; ?>
			</tr>
		<?php endforeach ?>
		</tbody>		
		<tfoot>
			<tr>
				<td colspan="7"><?php echo $this->pagination->getListFooter(); ?></td>
			</tr>
		</tfoot>	
	</table>
	<div>
		<input type="hidden" name="task" value=" " />
		<input type="hidden" name="boxchecked" value="0" />
		<!-- Sortierkriterien -->
		<input type="hidden" name="filter_order" value="<?php echo $listOrder; ?>" />
		<input type="hidden" name="filter_order_Dir" value="<?php echo $listDirn; ?>" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>
<?php } else
{
			//	echo 'لطفا برای مشاهده فیش حقوقی ابتدا وارد حساب کاربری خود شوید';
}
				?>