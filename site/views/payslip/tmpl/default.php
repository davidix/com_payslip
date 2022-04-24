<?php
defined("_JEXEC") or die("Restricted access");
$Values = json_decode($this->item->values);

function object_to_array($obj) {
	if(is_object($obj)) $obj = (array) $obj;
	if(is_array($obj)) {
		$new = array();
		foreach($obj as $key => $val) {
			$new[$key] = object_to_array($val);
		}
	}
	else $new = $obj;
	return $new;
}
function toPersianNum($str)
{
	return str_replace(
		array('0','1','2','3','4','5','6','7','8','9'),
		array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'),
		$str
		);
}

function _pLoans($lbl, $val , $data,$hr=true,$removeComma = false)
{
	$V = object_to_array($data);
	echo '<div class="p_span p_loan">';
	echo '<p>';
    echo $lbl.' :';
    
    echo 
    '<div class="pull-right">
        <span class="label label-default">'
        .toPersianNum(number_format( $V[$val])).
        '</span>

		<span class="label label-default">';
		if (number_format($V['مانده '.$val]) != 0) 
			echo toPersianNum(number_format($V['مانده '.$val])).'</span></div>';
		else
			echo toPersianNum(number_format($V['مانده  '.$val])).'</span></div>';
    	
	echo '</p>';
	if($hr)echo '<hr>';
	echo '</div>';
}

function _p($lbl, $val , $data,$hr=true,$removeComma = false, $is_int = true)
{
	$V = object_to_array($data);
	echo '<div class="p_span">';
	echo '<p>';
	echo $lbl.' :';
	if($removeComma)
		echo '<span class="pull-right">'. toPersianNum(str_replace(',','',$V[$val])).'</span>';	
	else
		if($is_int)
			echo '<span class="pull-right">'. toPersianNum(number_format($V[$val])).'</span>';	
		else
		echo '<span class="pull-right">'. toPersianNum($V[$val]).'</span>';	
	echo '</p>';
	if($hr)echo '<hr>';
	echo '</div>';
}

?>
<style>
.p_span {display: contents;}
.p_span hr,.p_span p {margin: 0;}

.p_span.p_loan span.label.label-primary, td.Loan_col span.label.label-primary {
    background-color: #337ab7;
}

.p_loan p, td.Loan_col p {
	display: inline;
	font-weight: 500;
	font-size: 15px;
}

.p_loan .label, td.Loan_col .label {
    min-width: 80px !important;
    float: right;
	margin: 0 2px;
}
.footerbtn { font-family: iransans; width: 80px; text-align: center !important;}
table.table.table-bordered.tbl_payslip p { margin: 0;}
@media print
{
	table.table.table-bordered.tbl_payslip > thead > tr > th,
	table.table.table-bordered.tbl_payslip > tbody > tr > th,
	table.table.table-bordered.tbl_payslip > tfoot > tr > th,
	table.table.table-bordered.tbl_payslip > thead > tr > td,
	table.table.table-bordered.tbl_payslip > tbody > tr > td,
	table.table.table-bordered.tbl_payslip > tfoot > tr > td {
	border: 2px solid #000000 !important;
	}
	.footerbtn{
		display:none;
	}
  @page
  {
	size: landscape; 
	page-break-after: avoid;
  }
}
</style>


<p><a class="btn btn-default footerbtn" href="<?php echo "fa/اتوماسیون/فیش-حقوقی.html";//JRoute::_("index.php?option=com_payslip&view=payslip&id=".$this->item->id);?>"><?php echo JText::_('بازگشت'); ?></a>
<?php
	$isModal = JRequest::getVar( 'print' ) == 1; // 'print=1' will only be present in the url of the modal window, not in the presentation of the page
	if( $isModal) {
		$href = '"#" onclick="window.print(); return false;"';
	} else {
		$app       = JFactory::getApplication();
		$option    = str_replace('_', '-', $app->input->getCmd('option', ''));
		$view      = $app->input->getCmd('view', '');
		$layout    = $app->input->getCmd('layout', '');
		$task      = $app->input->getCmd('task', '');
		$itemid    = $this->item->id;


		$href = '"index.php?option='.$option.'&view='.$view.'&id='.$itemid.'&tmpl=component&print=1" '.$href;
	}

?>

 	<a class="btn btn-default footerbtn" href=<?php echo $href; ?> >چاپ</a>
</p>
<h2>
	<?php echo JText::_('COM_PAYSLIP_PAYSLIP_PAYSLIPS_VIEW_PAYSLIP_TITLE'); ?>:<?php echo toPersianNum($this->item->title); ?>
</h2>
<table style="direction: rtl; 3px #202d40 solid !important; margin:0;"  class="table table-bordered tbl_payslip">
<tbody>
<tr>
<td style="text-align: center; background: #202d40; color: #fff;" colspan="4">
<p style="margin: 0;">شرح حقوق و مزایای کارکنان شرکت نصر میثاق اهواز</p>
</td>
</tr>
<tr>
<td style="">
<p> شرح حقوق و مزایا</p>
</td>
<td style="">
<p> کسورات</p>
</td>
<td class="Loan_col" style="">
<p>&nbsp;وام&zwnj;ها</p>
<div class="pull-right">
        <span class="label label-default">کل وام</span>
        <span class="label label-default">مانده وام</span>
    </div>
</td>
<td style="">
<p>مشخصات پرسنلی و سایر اطلاعات </p>
</td>
</tr>
<tr>
<td style="">
<?php 
_p('حقوق مبنا ','متعلقه پرداختي - حقوق مبنا',$Values); 
_p('پایه سنوات','متعلقه پرداختي - سنوات',$Values); 
_p('حق اولاد','متعلقه پرداختي - حق اولاد',$Values); 
_p('آبونمان تلفن همراه','متعلقه پرداختي - آبونمان تلفن همراه',$Values); 
_p('معوقه حقوق','معوقه حقوق',$Values); 
_p('حق جذب ','متعلقه پرداختي - حق جذب ثابت',$Values); 
_p('حق مسکن','متعلقه پرداختي - حق مسکن',$Values); 
_p('بن','متعلقه پرداختي - بن',$Values); 
_p('اياب و ذهاب','متعلقه پرداختي - اياب و ذهاب',$Values); 
_p('تفاوت حقوق (ثابت)','تفاوت حقوق (ثابت)',$Values); 
_p('فوق العاده مهارت','متعلقه پرداختي - فوق العاده مهارت',$Values); 
_p('مبلغ اضافه كاري','مبلغ اضافه كاري',$Values); 
_p('ماموريت','مبلغ ماموريت',$Values); 
_p('مبلغ تعطيل كاري','مبلغ تعطيل كاري',$Values); 
_p('بستانكار 2','بستانكار 2',$Values); 




?>

</td>
<td style="">
<?php
_p('بهره وري','بهره وري',$Values); 
_p('تفاوت حقوق','تفاوت حقوق',$Values); 
_p('نوبت کاري','نوبت کاري',$Values); 
_p('هزينه غذا','هزينه غذا',$Values); 
_p('فوق العاده سرپرستي','فوق العاده سرپرستي',$Values); 


?>
</td>
<td style="">
<?php 
_p('بيمه تکميلي کارکنان ثابت سهم کارفرما','بيمه تکميلي کارکنان ثابت سهم کارفرما',$Values);
_p('بيمه تکميلي کارکنان ثابت','بيمه تکميلي کارکنان ثابت',$Values);
_p('تاخير','مبلغ تاخير',$Values);
_p('مساعده','مساعده',$Values);









 

?>
</td>
<td style="">
<?php 
_p('کد پرسنلي','کد پرسنلي',$Values,true,true); 
_p('نام','نام',$Values,true,true,false); 
_p('نام خانوادگي','نام خانوادگي',$Values,true,true,false);  
_p('نام محل خدمت','نام محل خدمت',$Values,true,true,false); 

_p('روز كاركرد','روز كاركرد',$Values); 
_p('ساعت اضافه كار','ساعت اضافه كار',$Values); 
_p('شماره حساب','شماره حساب', $Values, true, true ); 


 

?>
</td>
</tr>
<tr>
<td style="">
<?php _p('جمع حقوق و مزايا','جمع حقوق و مزايا فيش',$Values,false); ?>
</td>
<td style="" colspan="2">
<?php _p('جمع كسورات','جمع كسورات',$Values,false); ?>
<p> </p>
</td>
<td style="">

<?php _p('خالص پرداختي','خالص پرداختي',$Values,false); ?>
</td>
</tr>
</tbody>
</table>
<!--
<table class="table table-striped">
	<tbody>
			<tr>
				<td>Title</td>
				<td><?php echo $this->escape($this->item->title); ?></td>
			</tr>
			<tr>
				<td>Prs_no</td>
				<td><?php echo $this->escape($this->item->prs_no); ?></td>
			</tr>
			<tr>
				<td>Values</td>
				<td>
				<?php //echo $this->escape($this->item->values);
					
					/*
					foreach($Values as $key => $val)
					{
						echo $key.' :-> '.$val;
						echo '<br>';
					}
*/
				?>
				</td>
			</tr>
		<tr>
			
		</tr>
	</tbody>
</table>
-->


<script>

jQuery(document).ready(function($){
var is_print = <?php echo $isModal; ?>;
	if(is_print)
	{
		window.print();
	}


	});

</script>