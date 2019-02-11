<html lang="en">
<head>
	<title>Guestbook Response Message | Justin Luzong</title>
</head>

<body>
<?php

$date = date('Y-m-d');
$time = date('H:i');
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$subject = $_REQUEST["subject"];
$comment = $_REQUEST["comment"];

$name = trim($name);
$email = trim($email);
$subject = trim($subject);
$comment = trim($comment);

if(empty($name)){
 echo "Please enter your Name.</br>";
}
elseif(empty($email)){
 echo "Please enter your Email.</br>";
}
elseif(empty($subject)){
 echo "Please enter a Subject.</br>";
}
elseif(empty($comment)){
 echo "Please enter a Comment.</br>";
}
else{
		$data = "\n$date, $time\n$name\n$email\nSubject: $subject\nComment: $comment\r\n";
                $file = "comment.txt";
                $fp = fopen($file, "a") or die("Couldn't open $file for writing!");
                fwrite($fp, $data) or die("Couldn't write values to file!");
                fclose($fp);   //close the data file
                echo "Thank you for your submission!";
}
	header('Refresh: 2; URL = assignment6.html');
?>

</body>
</html>