<style>
body{
        background-image:url("sky.jpg");
        background-size:cover;
        background-attachment:fixed;
        background-repeat:no-repeat;

}
 </style>

<?php include "rg.php"; 
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	
}
?>
<br>
<center>
<legend> <h3>Flight Registration</h3></legend> 
<br>
</center>
<?php global $nam; echo $nam; ?>
<?php global $error; echo $error; ?>
<br>
<center><font size="4" >
<form action=" " method="post" id="myform" >
Username : 
<input type="text" name="username" value="" > 
<br>
<br>
Password : 
<input type="password" name="password" value="" >
<br>
<br>
<input type="submit" name="login" value="login" > 
</form></font>
</center>

<script type="text/javascript" > 
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("username" , "req" , "Please Enter Username");
frmvalidator.addValidation("username", "maxlen=50");
frmvalidator.addValidation("password", "req" , "Please Enter Password");
</script>
