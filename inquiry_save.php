<?php
session_start();

$rname = base64_decode($_POST["formkey"]);
if ($rname == "") {
    print "<META http-equiv='refresh' content=0;URL='contact.php'>";
    exit;
}
if ($_POST["fmrkey"] == "") {
    print "<META http-equiv='refresh' content=0;URL='contact.php'>";
    exit;
}
if ($_POST["fmrkey"] != $_SESSION["fmr_united"]) {
    print "<META http-equiv='refresh' content=0;URL='contact.php'>";
    exit;
}

$cartkey = preg_split("/\//", base64_decode($_POST["formkey"]));
if ($cartkey[1] == "feedbackPassed") {
    $itemid = preg_replace('/[^\d]/', '', $cartkey[2]);
    if ($itemid != $_SESSION["fmr_united"]) {
        print "<META http-equiv='refresh' content=0;URL='contact.php'>";
        exit;
    }

    // $captchacode = $_POST["captcha_" . $_SESSION["fmr_united"]];
    // if ($_SESSION["digit"] != $captchacode) {
    //     $_SESSION["enqiry_Error"] = "Invalid Captcha Code";
    //     print "<META http-equiv='refresh' content=0;URL='contact.php'>";
    //     exit;
    // }

    echo $_SESSION["fmr_united"];
    $name = $_POST["name_" . $_SESSION["fmr_united"]];
    $phone = $_POST["phone_" . $_SESSION["fmr_united"]];
    $cemail = $_POST["email_" . $_SESSION["fmr_united"]];
    $message = $_POST["message_" . $_SESSION["fmr_united"]];
    $site_email = "brijmansuriya.ai@gmail.com";

    $body = '<table width="70%" border="0" cellspacing="0" cellpadding="2"  style=" font-size:12px;font-family:Verdana, Arial, Helvetica, sans-serif;border:3px solid #1A2733; background-color:#32383e;" align="center">';
    $body .= '<tr>';
    $body .= '<td width="100%" height="65" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td align="left" valign="top" class="fontclassboldbig"><div class="logo" style="font-family: Arial,Helvetica,sans-serif;float:left;font-size: 48px; margin-top:3px; font-weight: bold;letter-spacing: 2px;margin-left:9px;color:#1A2733;">Rudra Cotton</div><div class="slogan"></div></td></tr></table></td></tr>';
    $body .= '<tr class="border-class2">';
    $body .= '<td height="20" align="left" valign="top" style="border-top:2px solid #1A2733; background-color:#ffffff; "><table width="98%" border="0" cellspacing="0" cellpadding="2" class="fontclass" align="center">';
    $body .= '<tr>';
    $body .= '<td width="100%" align="left" colspan="2">&nbsp;</td>';
    $body .= '</tr>';
    $body .= '<tr>';
    $body .= '<td width="20%" align="left" valign="top"><b>Name :</b></td>';
    $body .= '<td width="80%" align="left" valign="top">' . $name . '</td>';
    $body .= '</tr>';
    $body .= '<tr>';
    $body .= '<td width="20%" align="left" valign="top"><b>Email :</b></td>';
    $body .= '<td width="80%" align="left" valign="top">' . $cemail . '&nbsp;</td>';
    $body .= '</tr>';
    $body .= '<tr>';
    $body .= '<td width="20%" align="left" valign="top"><b>subject :</b></td>';
    $body .= '<td width="80%" align="left" valign="top">' . $phone . '&nbsp;</td>';
    $body .= '</tr>';
    $body .= '<tr>';
    $body .= '<td width="20%" align="left" valign="top"><b>Message :</b></td>';
    $body .= '<td width="80%" align="left" valign="top">' . $message . '&nbsp;</td>';
    $body .= '</tr>';
    $body .= '<tr>';
    $body .= '<td width="20%" align="left">&nbsp;</td>';
    $body .= '<td width="80%" align="left"></td>';
    $body .= '</tr>';
    $body .= '<tr>';
    $body .= '<td width="20%" align="left"><b>Regards,</b></td>';
    $body .= '<td width="80%" align="left"></td>';
    $body .= '</tr>';
    $body .= '<tr>';
    $body .= '<td width="100%" align="left" colspan="2"><b>Rudra Cotton Team</b></td>';
    $body .= '</tr>';
    $body .= '<tr>';
    $body .= '<td width="100%" align="left" colspan="2">&nbsp;</td>';
    $body .= '</tr></table></td></tr>';
    $body .= '</table></td>';
    $body .= '</tr>';
    $body = $body . '</table>';

    $subject = "Feedback From " . $cemail;
    $headers = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    $headers .= "From: " . $cemail . "\r\n";
    @mail($site_email, $subject, $body, $headers);

    $_SESSION["enqiry_Success"] = "Message Sent Successfully";
    print "<META http-equiv='refresh' content=0;URL='contactus.php'>";
    exit;
} else {
    $_SESSION["enqiry_Error"] = "Message not sent";
    print "<META http-equiv='refresh' content=0;URL='contactus.php'>";
    exit;
}
