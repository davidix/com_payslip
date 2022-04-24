<?php
defined("_JEXEC") or die("Restricted access");
$Values = json_decode($this->item->values);
$json_vls = $this->item->values;
function _gk($Keyid,$Values)
{
	foreach($Values as $key => $val)
	{
		
		if($key == $Keyid)
		{
			return $val;
		}
		
	}
}
?>
<style>
html.com_payslip.view-payslip table.table *,tblpayslips * {
    text-align: right;
}
</style>
<h2>
	<?php echo JText::_('فیش حقوقی'); ?>:<?php echo $this->item->title; ?>
	<!--<span class="pull-right" >[<a href="<?php echo JRoute::_('index.php?option=com_payslip&task=payslip.edit&id=' . (int) $this->item->id); ?>"><?php echo JText::_('JACTION_EDIT') ?></a>]</span>-->
</h2>
<div class="WordSection1">
<div align="right">
<table class="MsoNormalTable" dir="rtl" style="width: 526.05pt; border-collapse: collapse; margin-left: 6.75pt; margin-right: 6.75pt;" border="0" width="701" cellspacing="0" cellpadding="0" align="right">
<tbody>
<tr style="height: 21.0pt;">
<td style="width: 526.05pt; border-top: solid windowtext 1.0pt; border-left: solid black 1.0pt; border-bottom: none; border-right: solid windowtext 1.0pt; background: #244062; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.0pt;" colspan="8" nowrap="nowrap" width="701">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><b><span style="font-size: 12.0pt; color: white;">فیش حقوقی کارکنان شرکت نصر میثاق اهواز</span></b></p>
</td>
</tr>
<tr style="height: 19.5pt;">
<td style="width: 526.05pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; background: #31869B; padding: 0cm 5.4pt 0cm 5.4pt; height: 19.5pt;" colspan="8" nowrap="nowrap" width="701">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><b><span style="font-size: 12.0pt; color: white;">مشخصات کارمند</span></b></p>
</td>
</tr>
<tr style="height: 20.25pt;">
<td style="width: 121.65pt; border-top: none; border-left: solid windowtext 1.0pt; border-bottom: none; border-right: solid windowtext 1.0pt; background: #DCE6F1; padding: 0cm 5.4pt 0cm 5.4pt; height: 20.25pt;" colspan="2" nowrap="nowrap" width="162">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><span style="color: black;">شماره کارمندی</span></p>
</td>
<td style="width: 96.0pt; border: none; border-left: solid black 1.0pt; background: #DCE6F1; padding: 0cm 5.4pt 0cm 5.4pt; height: 20.25pt;" colspan="2" nowrap="nowrap" width="128">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="color: black;">
	<?php echo _gk('کد پرسنلي',$Values); ?></span></p>
</td>
<td style="width: 136.1pt; border: none; border-left: solid black 1.0pt; background: #DCE6F1; padding: 0cm 5.4pt 0cm 5.4pt; height: 20.25pt;" colspan="2" nowrap="nowrap" width="181">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><span style="color: black;">ماه / سال جاري</span></p>
</td>
<td style="width: 172.3pt; border: none; border-left: solid black 1.0pt; background: #DCE6F1; padding: 0cm 5.4pt 0cm 5.4pt; height: 20.25pt;" colspan="2" nowrap="nowrap" width="230">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="color: black;">
	<?php echo _gk('ماه / سال جاري',$Values); ?></span></p>
</td>
</tr>
<tr style="height: 19.5pt;">
<td style="width: 80.5pt; border: solid windowtext 1.0pt; background: #DCE6F1; padding: 0cm 5.4pt 0cm 5.4pt; height: 19.5pt;" nowrap="nowrap" width="107">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><span style="color: black;">نام</span></p>
</td>
<td style="width: 41.15pt; border-top: solid windowtext 1.0pt; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: none; background: #DCE6F1; padding: 0cm 5.4pt 0cm 5.4pt; height: 19.5pt;" nowrap="nowrap" width="55">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><span style="color: black;"><?php echo _gk('نام',$Values); ?></span></p>
</td>
<td style="width: 41.35pt; border: solid windowtext 1.0pt; background: #DCE6F1; padding: 0cm 5.4pt 0cm 5.4pt; height: 19.5pt;" nowrap="nowrap" width="55">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><span style="color: black;">سمت</span></p>
</td>
<td style="width: 54.65pt; border: solid windowtext 1.0pt; border-right: none; background: #DCE6F1; padding: 0cm 5.4pt 0cm 5.4pt; height: 19.5pt;" nowrap="nowrap" width="73">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><span style="color: black;">--</span></p>
</td>
<td style="width: 93.25pt; border: solid windowtext 1.0pt; border-right: none; background: #DCE6F1; padding: 0cm 5.4pt 0cm 5.4pt; height: 19.5pt;" nowrap="nowrap" width="124">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><span style="color: black;">شماره حساب</span></p>
</td>
<td style="width: 42.85pt; border: solid windowtext 1.0pt; border-right: none; background: #DCE6F1; padding: 0cm 5.4pt 0cm 5.4pt; height: 19.5pt;" nowrap="nowrap" width="57">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><span style="color: black;"><?php echo _gk('شماره حساب',$Values); ?></span></p>
</td>
<td style="width: 96.25pt; border: solid windowtext 1.0pt; border-right: none; background: #DCE6F1; padding: 0cm 5.4pt 0cm 5.4pt; height: 19.5pt;" nowrap="nowrap" width="128">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><span style="color: black;">کد گروه شغلی</span></p>
</td>
<td style="width: 76.05pt; border: solid windowtext 1.0pt; border-right: none; background: #DCE6F1; padding: 0cm 5.4pt 0cm 5.4pt; height: 19.5pt;" nowrap="nowrap" width="101">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="color: #000000;">
--</span></p>
</td>
</tr>
<tr style="height: 21.0pt;">
<td style="width: 80.5pt; border: solid windowtext 1.0pt; border-top: none; background: #DCE6F1; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.0pt;" nowrap="nowrap" width="107">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><span style="color: black;">نام خانوادگی</span></p>
</td>
<td style="width: 41.15pt; border: none; border-bottom: solid windowtext 1.0pt; background: #DCE6F1; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.0pt;" nowrap="nowrap" width="55">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><span style="color: black;"><?php echo _gk('نام خانوادگي',$Values); ?></span></p>
</td>
<td style="width: 41.35pt; border: solid windowtext 1.0pt; border-top: none; background: #DCE6F1; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.0pt;" nowrap="nowrap" width="55">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><span style="color: black;">نام محل خدمت</span></p>
</td>
<td style="width: 54.65pt; border-top: none; border-left: solid windowtext 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #DCE6F1; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.0pt;" nowrap="nowrap" width="73">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><span style="color: black;"><?php echo _gk('نام محل خدمت',$Values); ?></span></p>
</td>
<td style="width: 93.25pt; border-top: none; border-left: solid windowtext 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #DCE6F1; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.0pt;" nowrap="nowrap" width="124">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><span style="color: black;">روز كاركرد</span></p>
</td>
<td style="width: 42.85pt; border-top: none; border-left: solid windowtext 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #DCE6F1; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.0pt;" nowrap="nowrap" width="57">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="color: black;">
<?php echo _gk('روز كاركرد',$Values); ?></span></p>
</td>
<td style="width: 96.25pt; border-top: none; border-left: solid windowtext 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #DCE6F1; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.0pt;" nowrap="nowrap" width="128">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><span style="color: black;">معوقه حقوق</span></p>
</td>
<td style="width: 76.05pt; border-top: none; border-left: solid windowtext 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #DCE6F1; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.0pt;" nowrap="nowrap" width="101">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><span style="color: black;"><?php echo _gk('معوقه حقوق',$Values); ?></span></p>
</td>
</tr>
<tr style="height: 21.0pt;">
<td style="width: 217.65pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; background: #FFEB9C; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.0pt;" colspan="4" nowrap="nowrap" width="290">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><b><span style="font-size: 12.0pt; color: #00b050;">دریافتی ها:</span></b></p>
</td>
<td style="width: 308.4pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #FFEB9C; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.0pt;" colspan="4" nowrap="nowrap" width="411">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><b><span style="font-size: 12.0pt; color: red;">کسورات:</span></b></p>
</td>
</tr>
<tr style="height: 18.0pt;">
<td style="width: 121.65pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; background: #4F81BD; padding: 0cm 5.4pt 0cm 5.4pt; height: 18.0pt;" colspan="2" nowrap="nowrap" width="162">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><b><span style="font-size: 12.0pt; color: white;">پایه حقوق</span></b></p>
</td>
<td style="width: 96.0pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #95B3D7; padding: 0cm 5.4pt 0cm 5.4pt; height: 18.0pt;" colspan="2" nowrap="nowrap" width="128">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="color: white;"><span style="font-size: 12.0pt; color: white;">--</span></span></p>
</td>
<td style="width: 136.1pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #4F81BD; padding: 0cm 5.4pt 0cm 5.4pt; height: 18.0pt;" colspan="2" nowrap="nowrap" width="181">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><b><span style="font-size: 12.0pt; color: white;">بازنشستگي سهم كارمند</span></b></p>
</td>
<td style="width: 172.3pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #95B3D7; padding: 0cm 5.4pt 0cm 5.4pt; height: 18.0pt;" colspan="2" nowrap="nowrap" width="230">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="color: white;"><span style="font-size: 12.0pt; color: white;"><?php echo _gk('بازنشستگي سهم كارمند',$Values); ?></span></span></p>
</td>
</tr>
<tr style="height: 18.75pt;">
<td style="width: 121.65pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; background: #4F81BD; padding: 0cm 5.4pt 0cm 5.4pt; height: 18.75pt;" colspan="2" nowrap="nowrap" width="162">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><b><span style="font-size: 12.0pt; color: white;">مبلغ حق ماموريت</span></b></p>
</td>
<td style="width: 96.0pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #95B3D7; padding: 0cm 5.4pt 0cm 5.4pt; height: 18.75pt;" colspan="2" nowrap="nowrap" width="128">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="color: white;"><span style="font-size: 12.0pt; color: white;"><?php echo _gk('مبلغ حق ماموريت',$Values); ?></span></span></p>
</td>
<td style="width: 136.1pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #4F81BD; padding: 0cm 5.4pt 0cm 5.4pt; height: 18.75pt;" colspan="2" nowrap="nowrap" width="181">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><b><span style="font-size: 12.0pt; color: white;">بیمه درمانی</span></b></p>
</td>
<td style="width: 172.3pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #95B3D7; padding: 0cm 5.4pt 0cm 5.4pt; height: 18.75pt;" colspan="2" nowrap="nowrap" width="230">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="color: white;"><span style="font-size: 12.0pt; color: white;"><?php echo _gk('بيمه خدمات درماني سهم كارمند',$Values); ?></span></span></p>
</td>
</tr>
<tr style="height: 16.5pt;">
<td style="width: 121.65pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; background: #4F81BD; padding: 0cm 5.4pt 0cm 5.4pt; height: 16.5pt;" colspan="2" nowrap="nowrap" width="162">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><b><span style="font-size: 12.0pt; color: white;">حق جذب</span></b></p>
</td>
<td style="width: 96.0pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #95B3D7; padding: 0cm 5.4pt 0cm 5.4pt; height: 16.5pt;" colspan="2" nowrap="nowrap" width="128">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="color: white;"><span style="font-size: 12.0pt; color: white;">--</span></span></p>
</td>
<td style="width: 136.1pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #4F81BD; padding: 0cm 5.4pt 0cm 5.4pt; height: 16.5pt;" colspan="2" nowrap="nowrap" width="181">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><b><span style="font-size: 12.0pt; color: white;">مالیات</span></b></p>
</td>
<td style="width: 172.3pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #95B3D7; padding: 0cm 5.4pt 0cm 5.4pt; height: 16.5pt;" colspan="2" nowrap="nowrap" width="230">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="color: white;"><span style="font-size: 12.0pt; color: white;">
<?php echo _gk('مالیات',$Values); ?>
</span></span></p>
</td>
</tr>
<tr style="height: 18.0pt;">
<td style="width: 121.65pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; background: #4F81BD; padding: 0cm 5.4pt 0cm 5.4pt; height: 18.0pt;" colspan="2" nowrap="nowrap" width="162">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><b><span style="font-size: 12.0pt; color: white;">ف - بهره وري</span></b></p>
</td>
<td style="width: 96.0pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #95B3D7; padding: 0cm 5.4pt 0cm 5.4pt; height: 18.0pt;" colspan="2" nowrap="nowrap" width="128">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="color: white;"><span style="font-size: 12.0pt; color: white;"><?php echo _gk('ف - بهره وري',$Values); ?></span></span></p>
</td>
<td style="width: 136.1pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #4F81BD; padding: 0cm 5.4pt 0cm 5.4pt; height: 18.0pt;" colspan="2" nowrap="nowrap" width="181">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><b><span style="font-size: 12.0pt; color: white;">قسط وام</span></b></p>
</td>
<td style="width: 172.3pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #95B3D7; padding: 0cm 5.4pt 0cm 5.4pt; height: 18.0pt;" colspan="2" nowrap="nowrap" width="230">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="color: white;"><span style="font-size: 12.0pt; color: white;"><?php echo _gk('قسط وام',$Values); ?></span></span></p>
</td>
</tr>
<tr style="height: 23.25pt;">
<td style="width: 121.65pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; background: #4F81BD; padding: 0cm 5.4pt 0cm 5.4pt; height: 23.25pt;" colspan="2" nowrap="nowrap" width="162">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><b><span style="font-size: 12.0pt; color: white;">مساعده</span></b></p>
</td>
<td style="width: 96.0pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #95B3D7; padding: 0cm 5.4pt 0cm 5.4pt; height: 23.25pt;" colspan="2" nowrap="nowrap" width="128">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="color: white;"><span style="font-size: 12.0pt; color: white;"><?php echo _gk('مساعده',$Values); ?></span></span></p>
</td>
<td style="width: 136.1pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #4F81BD; padding: 0cm 5.4pt 0cm 5.4pt; height: 23.25pt;" colspan="2" nowrap="nowrap" width="181">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><b><span style="font-size: 12.0pt; color: white;">کسر حقوق</span></b></p>
</td>
<td style="width: 172.3pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #95B3D7; padding: 0cm 5.4pt 0cm 5.4pt; height: 23.25pt;" colspan="2" nowrap="nowrap" width="230">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="color: white;"><span style="font-size: 12.0pt; color: white;"><?php echo _gk('کسر حقوق',$Values); ?></span></span></p>
</td>
</tr>
<tr style="height: 18.75pt;">
<td style="width: 121.65pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; background: #4F81BD; padding: 0cm 5.4pt 0cm 5.4pt; height: 18.75pt;" colspan="2" nowrap="nowrap" width="162">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><b><span style="font-size: 12.0pt; color: white;">مبلغ اضافه كاري</span></b></p>
</td>
<td style="width: 96.0pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #95B3D7; padding: 0cm 5.4pt 0cm 5.4pt; height: 18.75pt;" colspan="2" nowrap="nowrap" width="128">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="color: white;"><span style="font-size: 12.0pt; color: white;">
	<?php echo _gk('مبلغ اضافه كاري',$Values); ?>	</span></span></p>
</td>
<td style="width: 136.1pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #4F81BD; padding: 0cm 5.4pt 0cm 5.4pt; height: 18.75pt;" colspan="2" nowrap="nowrap" width="181">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><b><span style="font-size: 12.0pt; color: white;">جمع پس انداز</span></b></p>
</td>
<td style="width: 172.3pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #95B3D7; padding: 0cm 5.4pt 0cm 5.4pt; height: 18.75pt;" colspan="2" nowrap="nowrap" width="230">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="color: white;">
<?php echo _gk('جمع پس انداز',$Values); ?></p>
</td>
</tr>
<tr style="height: 19.5pt;">
<td style="width: 121.65pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; background: #4F81BD; padding: 0cm 5.4pt 0cm 5.4pt; height: 19.5pt;" colspan="2" nowrap="nowrap" width="162">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><b><span style="font-size: 12.0pt; color: white;">پاداش</span></b></p>
</td>
<td style="width: 96.0pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #95B3D7; padding: 0cm 5.4pt 0cm 5.4pt; height: 19.5pt;" colspan="2" nowrap="nowrap" width="128">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="color: white;">--</p>
</td>
<td style="width: 136.1pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #4F81BD; padding: 0cm 5.4pt 0cm 5.4pt; height: 19.5pt;" colspan="2" nowrap="nowrap" width="181">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><b><span style="font-size: 12.0pt; color: white;">سایر</span></b></p>
</td>
<td style="width: 172.3pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #95B3D7; padding: 0cm 5.4pt 0cm 5.4pt; height: 19.5pt;" colspan="2" nowrap="nowrap" width="230">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="color: white;"> </span></p>
</td>
</tr>
<tr style="height: 18.75pt;">
<td style="width: 121.65pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; background: #4F81BD; padding: 0cm 5.4pt 0cm 5.4pt; height: 18.75pt;" colspan="2" nowrap="nowrap" width="162">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><b><span style="font-size: 12.0pt; color: white;">ساير مزايا</span></b></p>
</td>
<td style="width: 96.0pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #95B3D7; padding: 0cm 5.4pt 0cm 5.4pt; height: 18.75pt;" colspan="2" nowrap="nowrap" width="128">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="color: white;"><span style="font-size: 12.0pt; color: white;"><?php echo _gk('ساير مزايا',$Values); ?></p>
</td>
<td style="width: 136.1pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #4F81BD; padding: 0cm 5.4pt 0cm 5.4pt; height: 18.75pt;" colspan="2" nowrap="nowrap" width="181">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><b><span style="font-size: 12.0pt; color: white;"> </span></b></p>
</td>
<td style="width: 172.3pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #95B3D7; padding: 0cm 5.4pt 0cm 5.4pt; height: 18.75pt;" colspan="2" nowrap="nowrap" width="230">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="color: white;"> </span></p>
</td>
</tr>
<tr style="height: 20.25pt;">
<td style="width: 121.65pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; background: #4F81BD; padding: 0cm 5.4pt 0cm 5.4pt; height: 20.25pt;" colspan="2" nowrap="nowrap" width="162">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><b><span style="font-size: 12.0pt; color: white;">جمع حقوق و مزايا فيش</span></b></p>
</td>
<td style="width: 96.0pt; border: none; border-left: solid black 1.0pt; background: #95B3D7; padding: 0cm 5.4pt 0cm 5.4pt; height: 20.25pt;" colspan="2" nowrap="nowrap" width="128">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; color: white;">
	<?php echo _gk('جمع حقوق و مزايا فيش',$Values); ?>
	</span></p>
</td>
<td style="width: 136.1pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-right: none; background: #4F81BD; padding: 0cm 5.4pt 0cm 5.4pt; height: 20.25pt;" colspan="2" nowrap="nowrap" width="181">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><b><span style="font-size: 12.0pt; color: white;">جمع کسورات</span></b></p>
</td>
<td style="width: 172.3pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #95B3D7; padding: 0cm 5.4pt 0cm 5.4pt; height: 20.25pt;" colspan="2" nowrap="nowrap" width="230">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="color: white;">
<?php echo _gk('جمع كسورات',$Values);?></p>
</td>
</tr>
<tr style="height: 21.75pt;">
<td style="width: 121.65pt; border-top: none; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; background: #F79646; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.75pt;" colspan="2" nowrap="nowrap" width="162">
<p class="MsoNormal" dir="RTL" style="margin-bottom: .0001pt; text-align: center; line-height: normal; direction: rtl; unicode-bidi: embed;" align="center"><b><span style="font-size: 12.0pt; color: white;">مبلغ خالص پرداختی:</span></b></p>
</td>
<td style="width: 96.0pt; border-top: solid windowtext 1.0pt; border-left: solid black 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #F79646; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.75pt;" colspan="2" nowrap="nowrap" width="128">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center">
<?php echo _gk('خالص پرداختي',$Values); ?></p>
</td>
<td style="width: 93.25pt; border: none; border-bottom: solid windowtext 1.0pt; background: #F79646; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.75pt;" nowrap="nowrap" width="124">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; line-height: normal;"><b><span style="font-size: 12.0pt; color: white;"> </span></b></p>
</td>
<td style="width: 42.85pt; border: none; border-bottom: solid windowtext 1.0pt; background: #F79646; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.75pt;" nowrap="nowrap" width="57">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; line-height: normal;"><b><span style="font-size: 12.0pt; color: white;"> </span></b></p>
</td>
<td style="width: 96.25pt; border: none; border-bottom: solid windowtext 1.0pt; background: #F79646; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.75pt;" nowrap="nowrap" width="128">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; line-height: normal;"><b><span style="font-size: 12.0pt; color: white;"> </span></b></p>
</td>
<td style="width: 76.05pt; border-top: none; border-left: solid windowtext 1.0pt; border-bottom: solid windowtext 1.0pt; border-right: none; background: #F79646; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.75pt;" nowrap="nowrap" width="101">
<p class="MsoNormal" dir="LTR" style="margin-bottom: .0001pt; line-height: normal;"><b><span style="font-size: 12.0pt; color: white;"> </span></b></p>
</td>
</tr>
</tbody>
</table>
</div>
<p class="MsoNormal"> </p>
</div>
<!--
<table class="table table-striped">
	<tbody>		
			<tr>
				<td>مقادیر</td>
				<td>
				<?php //echo $this->escape($this->item->values);
					
					
					foreach($Values as $key => $val)
					{
						echo $key.' :-> '.$val;
						echo '<br>';
					}

				?>
				</td>
			</tr>
		<tr>
			
		</tr>
	</tbody>
</table>
-->
<p><a href="index.php?option=com_payslip&view=payslips"><?php echo JText::_('JPREVIOUS'); ?></a></p>