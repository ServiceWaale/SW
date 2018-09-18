<?php
	$to = $_POST['your_email'];
    $subject  = "Welcome to ServiceWaale";
	$headers  = "MIME-Version: 1.0;\n";
	$headers.= "Content-type: text/html; charset=iso-8859-1;\n";
	$headers.= "From: support@servicewaale.in";
	
	$message = "<p>Hi  <b>".$_POST["your_name"]."</b>,<br /><br /></p>
				<p><span style='font-size:12px;'>Welcome to ServiceWaale.<br/> Thanks for your interest in ServiceWaale. We have recieved your query and our team is working on it and will contact you within a working hour. If you require any immediate assistance, please give a missed call on +91 77-22-99-44-70. We look forward to help you.<br/><br/> Thanks,<br/><b>Team Servicewaale </b></span></b><br /><br /></p><br/>";
		
		
	/* and now mail it */	
	mail($to, $subject, $message, $headers); 
	
	/* Mail To Admin */
	$to_admin = "servicewaalebpl@gmail.com"; 
	$subject_admin  = "New Client Enquiry"; 
	$headers_admin  = "MIME-Version: 1.0;\n";
	$headers_admin .= "Content-type: text/html; charset=iso-8859-1;\n";
	$headers_admin .= "From: ".$_POST['your_email']."";
	$message_admin = "<p>Hi,<br><br></p>
		<p>".$_POST["your_email"]." visited to Servicewaale and following are the details entered by him/her.</p>
<table border='0' cellspacing='0' cellpadding='0' align='left' width='800'>
  <tr>
    <td>
    
    <table border='0' cellspacing='0' cellpadding='2' align='left' width='700' >
  <tr>
    <td colspan='2'><b><u>Contact Information</u></b></td>
  </tr>
  
  <tr>
    <td  class='formfile_email_text'  width='28%'><b>name:</b></td>
    <td width='72%'>".$_POST["your_name"]."</td>
  </tr>
  
  <tr>
    <td class='formfile_email_text' valign='top' ><b>email:</b></td>
    <td width='72%'>".$_POST["your_email"]."</td>
  </tr>
  
  <tr>
    <td  class='formfile_email_text'  width='28%'><b>phone:</b></td>
    <td width='72%'>".$_POST['your_phone']."</td>
  </tr>
  
  <tr>
    <td class='formfile_email_text' valign='top' ><b>time:</b></td>
    <td width='72%'>".$_POST["your_time"]."</td>
  </tr>

  <tr>
    <td class='formfile_email_text' valign='top' ><b>subject:</b></td>
    <td>".$_POST["your_subject"]."</td>
  </tr>
  
  <tr>
    <td class='formfile_email_text' valign='top' ><b>address:</b></td>
    <td> width='72%'>".$_POST["your_address"]."</td>
  </tr>

  <tr>
    <td class='formfile_email_text' valign='top' ><b>message:</b></td>
    <td>".nl2br($_POST["your_message"])."</td>
  </tr>

   <tr>
    <td class='formfile_email_text' valign='top' ><b>referral:</b></td>
    <td>".nl2br($_POST["your_referral"])."</td>
  </tr>

   <tr>
    <td class='formfile_email_text' valign='top' ><b>feedback:</b></td>
    <td>".nl2br($_POST["your_feedback"])."</td>
  </tr>
  

 <tr bgcolor='#FFFFFF'>
    <td  class='formfile_email_text' colspan='2'>
      <p><b>Thanks.</b></p>
	</td>
   </tr>
</table>  
    </td>
  </tr>
  
</table>";
		
	/* and now mail it */	
	mail($to_admin, $subject_admin, $message_admin, $headers_admin);
	//header("Location:thankYou.php?msg=success");
	header("Location:thankyou.html");
?>
<style>
.formfile_email_text{
	font-family:Arial;
	font-size:14px;
	color:#000;
	font-weight:bold;
	text-decoration:none;

	}
</style>