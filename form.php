
<?xml version="1.0" encoding="iso-8859-1"?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
	<title>Form Reservasi Baru</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico">
	<script language="JavaScript" type="text/javascript" src="functions.js"></script>
	<style type="text/css">
	@import url(jscalendar/calendar-blue-custom.css);
	@import url(css.css);
	</style>
	<script type="text/javascript" src="jscalendar/calendar.js"></script>
	<script type="text/javascript" src="jscalendar/lang/calendar-en.js"></script>
	<script type="text/javascript" src="jscalendar/calendar-setup.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body>
		<p>&nbsp;</p>
	<table width="100%" border="0" cellspacing="0" cellpadding="10" style="border: solid #CCCCCC 1px;">
	  <tr>
		<td bgcolor="#FAFAFA">
		  <h3 align="center">Tennis Court A</h3>
<form name="reserve" method="post" action="/phpScheduleIt/reserve.php?is_blackout=0" style="margin: 0px" onsubmit="return check_reservation_form(this);">
<!-- begin_container() -->
<table width="100%" cellspacing="0" cellpadding="0" border="0" id="tab-container">
<tr class="tab-row">
<td class="tab-selected" id="tab_basic" onclick="javacript: clickTab(this, 'pnl_basic');"><a href="javascript:void(0);">Basic</a></td>
<td class="tab-not-selected" id="tab_advanced" onclick="javacript: clickTab(this, 'pnl_advanced');" style="border-left-width:0px;"><a href="javascript:void(0);">Participants</a></td>
<td class="tab-filler">&nbsp;</td>
</tr>
</table>
<table width="100%" cellspacing="0" cellpadding="0" border="0" class="tab-main">
  <tr>
    <td id="main-tab-panel" style="padding:7px;">
	<!-- Begin basic panel -->
      <div id="pnl_basic" style="display:table; width:100%; position: relative;">
        <table width="100%" cellpadding="0" cellspacing="0" border="0">
          <tr>
            <td width="330">
			<!-- Content begin -->
<table width="100%" border="0" cellspacing="0" cellpadding="1">
  <tr class="tableBorder">
    <td>
      <table width="100%" border="0" cellspacing="1" cellpadding="0">
        <tr>
          <td width="100" class="formNames">Location</td>
          <td class="cellColor">TC A          </td>
        </tr>
        <tr>
          <td width="100" class="formNames">Phone</td>
          <td class="cellColor">1130          </td>
        </tr>
        <tr>
          <td width="100" class="formNames">Notes</td>
          <td class="cellColor">          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
    <table width="100%" border="0" cellspacing="0" cellpadding="1">
     <tr class="tableBorder">
      <td>
       <table width="100%" border="0" cellspacing="1" cellpadding="0">
        <tr>
         <td colspan="2" class="cellColor">
         <h5 align='center'>
Pilih waktu mulai dan waktu selesai:        </h5>
        </td>
       </tr>
	   <tr>
	   <td class="formNames">Mulai</td>
	   <td class="formNames">Selesai</td>
	   </tr>
      <tr>
<td class="formNames" width="50%"><div id="div_start_date" style="float:left;width:86px;">28/07/2020</div><input type="hidden" id="hdn_start_date" name="start_date" value="07/28/2020" onchange="checkCalendarDates();"/><select name="startTime" class="textbox">
<option value="360">06:00</option><option value="390">06:30</option><option value="420">07:00</option><option value="450">07:30</option><option value="480">08:00</option><option value="510">08:30</option><option value="540">09:00</option><option value="570">09:30</option><option value="600">10:00</option><option value="630">10:30</option><option value="660">11:00</option><option value="690">11:30</option><option value="720">12:00</option><option value="750">12:30</option><option value="780">13:00</option><option value="810">13:30</option><option value="840">14:00</option><option value="870">14:30</option><option value="900">15:00</option><option value="930">15:30</option><option value="960">16:00</option><option value="990">16:30</option><option value="1020">17:00</option><option value="1050">17:30</option><option value="1080">18:00</option><option value="1110">18:30</option><option value="1140">19:00</option><option value="1170">19:30</option><option value="1200">20:00</option><option value="1230">20:30</option><option value="1260">21:00</option><option value="1290">21:30</option><option value="1320">22:00</option></select>
</td>
<td class="formNames"><div id="div_end_date" style="float:left;width:86px;">28/07/2020</div><input type="hidden" id="hdn_end_date" name="end_date" value="07/28/2020" onchange="checkCalendarDates();"/><select name="endTime" class="textbox">
<option value="360">06:00</option>
<option value="390">06:30</option>
<option value="420">07:00</option>
<option value="450">07:30</option>
<option value="480">08:00</option>
<option value="510">08:30</option>
<option value="540">09:00</option>
<option value="570">09:30</option>
<option value="600">10:00</option>
<option value="630">10:30</option>
<option value="660">11:00</option>
<option value="690">11:30</option>
<option value="720">12:00</option>
<option value="750">12:30</option>
<option value="780">13:00</option>
<option value="810">13:30</option>
<option value="840">14:00</option>
<option value="870">14:30</option>
<option value="900">15:00</option>
<option value="930">15:30</option>
<option value="960">16:00</option>
<option value="990">16:30</option>
<option value="1020">17:00</option>
<option value="1050">17:30</option>
<option value="1080">18:00</option>
<option value="1110">18:30</option>
<option value="1140">19:00</option>
<option value="1170">19:30</option>
<option value="1200">20:00</option>
<option value="1230">20:30</option>
<option value="1260">21:00</option>
<option value="1290">21:30</option>
<option value="1320">22:00</option>
</select>
</td>
</tr><tr class="cellColor"><td colspan="2">Reservasi Minimum:  30 menit<input type="hidden" name="minRes" value="30" /></td></tr><tr class="cellColor"><td colspan="2">Maximum Reservation Length: 2 hours <input type="hidden" name="maxRes" value="120" /></td></tr>
</table>
</td>
</tr>
</table>
<p>&nbsp;</p>
   <table width="100%" border="0" cellspacing="0" cellpadding="1">
    <tr class="tableBorder">
     <td>
      <table width="100%" border="0" cellspacing="1" cellpadding="0">
       <tr>
        <td colspan="2" class="cellColor"><h5 align="center">Akan dipesan selama:</h5></td></tr>
       <tr>
        <td width="100" class="formNames">Nama</td>
         <td class="cellColor"><div id="name" style="position: relative;float:left;"> </div></td>
          </tr>
          <tr>
           <td width="100" class="formNames">Telepon</td>
           <td class="cellColor"><div id="phone" style="position: relative;"></div></td>
          </tr>
          <tr>
           <td width="100" class="formNames">Email</td>
           <td class="cellColor"><div id="email" style="position: relative;"></div></td>
          </tr>
        </table>
      </td>
     </tr>
    </table>
    <p>&nbsp;</p>
       <table width="100%" border="0" cellspacing="0" cellpadding="1">
    <tr class="tableBorder">
     <td>
      <table width="100%" border="0" cellspacing="1" cellpadding="0">
       <tr>
	    <td class="cellColor"><h5 align="center">Summary</h5></td>
		</tr>
		<tr>
		<td class="cellColor" style="text-align: left;">
		<div style="text-align:center;" id="summary_div"><textarea class="textbox" name="summary" rows="3" cols="40"></textarea></div>		</td>
	   </tr>
      </table>
     </td>
    </tr>
   </table>
   <br/>
   <table width="100%" border="0" cellspacing="0" cellpadding="1">
    <tr class="tableBorder">
     <td>
      <table width="100%" border="0" cellspacing="1" cellpadding="0">
		<tr>
		<td class="cellColor" width="100%" align="center">
		<div class='g-recaptcha' data-sitekey='6LfQLVEUAAAAAJKrqrDTcH9k5bPAFVIyiq6WNVty'></div>		</td>
	   </tr>
      </table>
     </td>
    </tr>
   </table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="1">
  <tr>
    <td>
      <table width="100%" border="0" cellspacing="1" cellpadding="0">
        <tr>
            <td style="padding: 5px;">
	           <p style="font-weight: bold;" align="center">Reservasi ini harus disetujui oleh Administrator.</p>
	       </td>
        </tr>
      </table>
     </td>
    </tr>
</table>

			</td>
          </tr>
        </table>
      </div>

     <div id="pnl_advanced" style="display:none; width:100%; position: relative;">
        <table width="100%" cellpadding="0" cellspacing="0" border="0">
          <tr>

		  	<td colspan="3"><p align="center" style="font-weight: bold;">
	Invite Users	</p>
	</td>
	</tr>
	<tr>
	<td width="200" align="center">
	All Users<br/>
	<select name="all_users[]" id="all_users" class="textbox" multiple="multiple" size="10" style="width:195px;">
	<option value="sc14ceb3c17f2e87|joni@pakubuwono-residence.com">-, Joni</option><option value="sc15dc50d174432a|alim@alan.co.id"></td>
	<td valign="middle" align="center">
	<button type="button" id="add_to_invite" class="button" onclick="javascript: moveSelectItems('all_users','invited_users');" style="width:75px;font-size:12px;">&raquo;&raquo;</button>
	<br/><br/>
	Tahan CTRL untuk memilih banyak data	<br/><br/>
	<button type="button" id="remove_from_invite" class="button" onclick="javascript: moveSelectItems('invited_users','all_users');" style="width:75px;font-size:12px;">&laquo;&laquo;</button>
	</td>
	<td width="200" align="center">
	Pengguna yang diundang<br/>
	<select name="invited_users[]" id="invited_users" class="textbox" multiple="multiple" size="10" style="width:195px;">
		</select>
	</td>
		</tr><tr><td colspan="3"><p align="center" style="font-weight: bold;padding-top:10px;">
	Hapus partisipan	</p>
	</td>
	</tr><tr>
	<td width="200" align="center">
	All Users<br/>
	<select name="removed_users[]" id="removed_users" class="textbox" multiple="multiple" size="10" style="width:195px;">
	</select>
	</td>
	<td valign="middle" align="center">
	<button type="button" id="add_to_participate" class="button" onclick="javascript: moveSelectItems('removed_users','participating_users');" style="width:75px;font-size:12px;">&raquo;&raquo;</button>
	<br/><br/>
Tahan CTRL untuk memilih banyak data	<br/><br/>
	<button type="button" id="remove_from_participate" class="button" onclick="javascript: moveSelectItems('participating_users','removed_users');" style="width:75px;font-size:12px;">&laquo;&laquo;</button>
	</td>
	<td width="200" align="center">
	Partisipan<br/>
	<select name="participating_users[]" id="participating_users" class="textbox" multiple="multiple" size="10" style="width:195px;">
		</select>
	</td>

			<!-- End content -->
          </tr>
        </table>
      </div>
	  <!-- End advanced panel -->
	<!-- end_container() -->
    </td>
  </tr>
</table>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr>
    <td>
<p><input type="submit" name="submit" value="Save" class="button" onclick="selectUsers();"/><input type="hidden" name="fn" value="create" />&nbsp;&nbsp;&nbsp;<input type="button" name="close" value="Cancel" class="button" onclick="window.close();" /></p><input type="hidden" name="machid" value="sc14513662e5c96b" />
<input type="hidden" name="scheduleid" value="sc145136eb51d003" />
<input type="hidden" name="pending" value="1" />
<input type="hidden" name="memberid" value="" />
    </td>
  </tr>
</table>
</form>
<script type="text/javascript">
var now = new Date(2020,6,28);
// Recurring calendar
// Start date calendar
Calendar.setup(
{
inputField : "hdn_start_date", // ID of the input field
ifFormat : "%m/%d/%Y", // the date format
daFormat : "%d/%m/%Y", // the date format
button : "img_start_date", // ID of the button
date : now,
displayArea : "div_start_date"
}
);
// End date calendar
Calendar.setup(
{
inputField : "hdn_end_date", // ID of the input field
ifFormat : "%m/%d/%Y", // the date format
daFormat : "%d/%m/%Y", // the date format
button : "img_end_date", // ID of the button
date : now,
displayArea : "div_end_date"
}
);
</script>		</td>
	  </tr>
	</table>
		<p align="center"><a href="127.0.0.1/lapangan">Back to SMD</a></p>
	</body>
	</html>
