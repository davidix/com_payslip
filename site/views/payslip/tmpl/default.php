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

			echo '<span class="pull-right">'. toPersianNum(rtrim($V[$val],"00")).'</span>';	

		else

		echo '<span class="pull-right">'. toPersianNum(rtrim($V[$val],".00")).'</span>';	

	echo '</p>';

	if($hr)echo '<hr>';

	echo '</div>';

}



?>

<style>


.prs-info {width: 19%;text-align: right;}

.prs-info hr {display: none;}

.prs-info div.p_span {min-height: 20px !important;margin: 0;}

.prs-info div.p_span span.pull-right{
    float: inherit;
margin-right: 5px;}

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

.linex {
    width: 100%;
    height: 2px;
    background: black;
    display: flex;
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

	.footerbtn,header.header,nav.navigation,.btn-row,footer.footer{

		display:none;

	}

  @page

  {

	size: landscape; 

	page-break-after: avoid;

  }

}

</style>





<p class="btn-row"><a class="btn btn-default footerbtn" href="<?php echo "#";//JRoute::_("index.php?option=com_payslip&view=payslip&id=".$this->item->id);?>"><?php echo JText::_('بازگشت'); ?></a>

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

<!-- <h2>

	<?php echo JText::_('COM_PAYSLIP_PAYSLIP_PAYSLIPS_VIEW_PAYSLIP_TITLE'); ?>:<?php echo toPersianNum($this->item->title); ?>

</h2> -->


<table style="direction: rtl; 3px #202d40 solid !important; margin:0;"  class="table table-bordered tbl_payslip">

<tbody>

<tr>

    <td style="text-align: center;" colspan="4">
        <div class="row">
            <div class="col-md-3 prs-info">
                <?php
                    _p('نام','نام',$Values,true,true,false); 
                    _p('نام خانوادگي','نام خانوادگي',$Values,true,true,false);  
                    _p('کد پرسنلي','کد پرسنلي',$Values,true,true);
                    _p('نام محل خدمت','نام محل خدمت',$Values,true,true,false); 
                    _p('كد ملي','كد ملي',$Values,true,true,false); 
                    _p('شماره تلفن همراه','شماره تلفن همراه',$Values,true,true,false); 
                    ?>
            </div>
            <div class="col-md-6" style="width: 50%;text-align: center;margin: 0 auto;">
                <p style="margin: 0;">شرح حقوق و مزایای کارکنان شرکت مهندسی متراسامان (سهامی خاص)</p>
            </div>
            <div class="col-md-3" style="width: fit-content;display: block;float: left;position: relative;top: -60px;">
                <img src="images/logo-3d--5.png" style="width: 100px;float: left;display: inline-block;">
            </div>
        </div>
    </td>

</tr>

 <tr>

<td colspan="2" width="45%">

<p> شرح حقوق و مزایا</p>

</td>

<td class="Loan_col" style="">
کسورات
</td>

<td style="">

<p>خالص پرداختی </p>

</td>

</tr> 

<tr>

<td width="22%">

<?php 

_p('حقوق مبنا ','متعلقه پرداختي - حقوق مبنا',$Values); 

_p('پایه سنوات','متعلقه پرداختي - سنوات',$Values); 

_p('حق اولاد','متعلقه پرداختي - حق اولاد',$Values); 

_p('آبونمان تلفن همراه','متعلقه پرداختي - آبونمان تلفن همراه',$Values); 

_p('معوقه حقوق','معوقه حقوق',$Values); 

_p('حق جذب ','متعلقه پرداختي - حق جذب ثابت',$Values); 

_p('حق مسکن','متعلقه پرداختي - حق مسکن',$Values); 

_p('بن','متعلقه پرداختي - بن',$Values); 
_p('هزینه خوار و بار','متعلقه پرداختي - خوار و بار',$Values); 

_p('اياب و ذهاب','متعلقه پرداختي - اياب و ذهاب',$Values); 

_p('تفاوت حقوق (ثابت)','تفاوت حقوق (ثابت)',$Values); 

_p('فوق العاده مهارت','متعلقه پرداختي - فوق العاده مهارت',$Values); 

_p('مبلغ اضافه كاري','مبلغ اضافه كاري',$Values); 

_p('ماموريت','مبلغ ماموريت',$Values); 

_p('مبلغ تعطيل كاري','مبلغ تعطيل كاري',$Values); 

_p('بستانكار 2','بستانكار 2',$Values); 
_p('حق سرويس','حق سرويس',$Values); 

	








?>



</td>

<td width="22%">

<?php

_p('بهره وري','بهره وري',$Values); 

_p('تفاوت حقوق','تفاوت حقوق',$Values); 

_p('نوبت کاري','نوبت کاري',$Values); 

_p('هزينه غذا','هزينه غذا',$Values); 


_p('فوق العاده سرپرستي','فوق العاده سرپرستي',$Values); 

_p('سایر مزایا','متعلقه پرداختني - ساير مزايا',$Values); 




?>

</td>

<td width="30%">

<?php 

_p('بيمه 20% سهم كارفرما','بيمه 20% سهم كارفرما',$Values);

_p('بیمه 7%سهم کارکنان','بيمه 7% سهم كارمند',$Values);

_p('ماليات','ماليات',$Values);

_p('بيمه حوادث ايران سهم كافرما','بيمه حوادث ايران سهم كافرما',$Values);

_p('بیمه حوادث ایران سهم کارکنان','بيمه حوادث ايران سهم كارمند',$Values);

_p('بيمه 3% سهم كارفرما','بيمه 3% سهم كارفرما',$Values);

_p('بيمه درمان تکميلي سهم کارفرما','بيمه تکميلي کارکنان ثابت سهم کارفرما',$Values);

_p('بيمه درمان تکميلي سهم کارکنان','بيمه تکميلي کارکنان ثابت',$Values);

_p('تاخير','مبلغ تاخير',$Values);

_p('مساعده','مساعده',$Values);


_p('تلفن همراه','تلفن همراه',$Values);
?>

</td>

<td style="">

<?php 


_p('مانده وام صندوق مشاركت','صندوق مشاركت',$Values,true,true);
_p('ساعت اضافه كار','ساعت اضافه كار',$Values,true,true);
_p('روز كاركرد','روز كاركرد',$Values,true,true);
_p('تعداد روز تعطیل کاری','تعداد',$Values,true,true);
echo'<div class="linex"></div>';

_p('پس انداز صندوق میثاق','پس انداز ميثاق',$Values,true,true);
_p('پس انداز صندوق متراسامان','پس انداز متراسامان',$Values,true,true);
_p('جمع پس اندازها','جمع پس اندازها',$Values,true,true);
echo'<div class="linex"></div>';



_p('مانده وام صندوق متراسامان','وام صندوق متراسامان',$Values,true,true);
_p('مانده وام صندوق میثاق','وام قرض الحسنه ميثاق',$Values,true,true);

_p('وام جاری','جاري',$Values,true,true);
_p('خسارت','خسارت',$Values,true,true);
_p('تعاوني اعتبار نصر','تعاوني اعتبار نصر',$Values,true,true);

echo'<div class="linex"></div>';

_p('جمع وام ها','جمع وام ها',$Values,true,true);
_p('جمع كسورات','جمع كسورات',$Values,true,true);
echo'<div class="linex"></div>';
_p('خالص پرداختي','خالص پرداختي',$Values,true,false);








 




?>

</td>

<!-- </tr>

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

</tr> -->

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