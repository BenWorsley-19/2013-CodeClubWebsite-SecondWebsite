<?php

$fname = $_POST['fname'];
$sname = $_POST['sname'];
$pcode = $_POST['pcode'];
$hnumber = $_POST['hnumber'];
$email = $_POST['email'];
$pnumber = $_POST['pnumber'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$reason = $_POST['reason'];


$to = 'Ben Worsley';

$subject = 'Message recieved';

$message = $fname . $sname . $pcode . $hnumber . $email . $pnumber . $dob . $gender . $reason; 

mail($to, $subject, $message);

echo "<script type='text/javascript'>
	window.alert('Successfully sent');
	window.location.href='Ocontact.html';
	</script>";
?>
