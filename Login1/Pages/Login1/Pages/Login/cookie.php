<?php
require('db.php');
include("auth.php");

$value= $_SESSION['username'];

setcookie("user", $value, time()+300);
?>
<html>
<body>
<link rel="stylesheet" href="css/style.css" />
<?php
if (isset($_COOKIE["user"])){

 header("location:Pages/index.php");

}
else
{            
header("location:login.php");
}
?>
</body>
</html>