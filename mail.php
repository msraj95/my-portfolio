<<<<<<< HEAD
git <?php
$page_success = "sent.html";
$page_failed = "failed.html";

$contact_name=$_POST['name'];
$contact_email=$_POST['mail'];
$contact_phone=$_POST['mobile'];
$contact_service=$_POST['subject'];
$contact_message=$_POST['message'];
$to_email = 'Qmdseraj@gmail.com';
$to_ccemail = 'seraj@alityart.com';

//you can give email id to whom you need to send
$html = 'New Message From Website';
$subject =  $html;

//mailing function
<?php
    $errors = '';
    $myemail = 'Qmdseraj@gmail.com';
    if(empty($_POST['email'])  ||
       empty($_POST['name']) ||
       empty($_POST['mobile']))||
       empty($_POST['subject']))||
       empty($_POST['message']))
    {
    $errors .= "\n Error: Required Field";
    }
    $email = $_POST['email'];
    $name = $_POST['name'];
    $contact_phone=$_POST['mobile'];
    $contact_service=$_POST['subject'];
    $message = $_POST['message'];

    if( empty($errors)){
        $to = $myemail;
        $email_subject = "Contact Form: Seraj Hassan";
        $email_body='<h3>You have received a new message. Details are given below.</h3>
        <table width="100%" border="1" cellspacing="1" cellpadding="1">
        <tr><td style="padding:10px;">Email: </td><td style="padding:10px;">'.$email.'</td></tr>
        <tr><td style="padding:10px;">Name: </td><td style="padding:10px;">'.$name.'</td></tr>
        <tr><td style="padding:10px;">Message: </td><td style="padding:10px;">'.$message.'</td></tr>
        </table>';
>>>>>>> ab9ce8875e904e7d1949d7b41b0431b03cea7f4a

        $headers = "From: " . $email. "\r\n";
        $headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

<<<<<<< HEAD
//$subject =  $email_sub;
$message = "You have received a new message from contact us page:\n\n".

"Customer Name: $contact_name\n\n".
"Customer E-mail Id: $contact_email \n\n".

"Customer Mobile Number: $contact_phone\n\n".
    "Message: $contact_service.\n\n".

$headers .= $email_sub;
$headers .= 'From: SerajPortfolio' . "\r\nReply-to: $contact_email"; //DONT GIVE SPACE IN "ABC"  //you can replace your value but no space.. if u give space you can get email in spam only..
$response = mail($to_email,$subject,$message,$headers);
mail($to_ccemail,$subject,$message,$headers);
//mail($to_ccccemail,$subject,$message,$headers);
if($response)
{
	
 
 header("Refresh: 0; url=$page_success");
}
else
{

   header("Refresh: 0; url=$page_failed");
}
=======
        mail($to, $email_subject, $email_body, $headers);
    }
>>>>>>> ab9ce8875e904e7d1949d7b41b0431b03cea7f4a
?>

