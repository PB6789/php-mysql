<head>
<title>
<?php
$arr = array("Home"=>"index.php","About Us"=>"About.php","Contact Us"=>"Contact.php","Projects"=>"Projects.php");
foreach($arr as $key=>$value)
{
	if(basename($_SERVER['PHP_SELF']) == $value)
	{
		echo $key;
	}
}
?>
</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/custom.css">  
</head>

