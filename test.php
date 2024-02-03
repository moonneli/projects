<!-- SESSION_start(); -->



<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_test";

 @$firstname = $_POST['name_1'];
 @$lastname = $_POST['family_2'];
$_SESSION['$firstname']='name_1';
$_SESSION['$lasttname']='family_2';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8");
$sql = "INSERT INTO `form1`( `firstname`, `lastname`) VALUES ('$firstname' , '$lastname' )" ;
 // if ($conn->query($sql) === TRUE) {
 //    echo "اطلاعات دریافتی شما با موفقیت ثبت شد !";
 // } else {
 //     echo "خطا - مشکلی پیش آمده است !";
 // }
  if (isset($_SESSION['$firstname' ])){
   echo " YESS";
  }
  else {
    echo "no";
  }
$conn->close();
?>
</body>
</html>
