<?PHP
$email = $_POST['email'];
$to = "Axtriontech@gmail.com";
$subject = "New Email Address for Mailing List";
$headers = "From: $email\n";
$message = "A visitor to your site has sent the following email address to be added to your mailing list.\n

Email Address: $email";
$user = "$email";
$usersubject = "Thank You";
$userheaders = "From: Axtriontech@gmail.com.com\n";
$usermessage = "Thank you for subscribing to our mailing list.";

$thankyou_page = "http://teambillions.club/Private-FS/thank_you.html";
$error_page = "http://teambillions.club/Private-FS/error_message.html";
if(mail($to,$subject,$message,$headers)) 
{
	header( "Location: $thankyou_page" );
} 
else 
{
	header( "Location: $error_page" );
}
// mail($user,$usersubject,$usermessage,$userheaders);
?>