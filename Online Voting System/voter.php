<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<h4> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<h3>Make a Vote </h3>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><font size='6'> Vote for your political party? <BR>
<input type="radio" name="lan" value="BJP">  BJP/भारतीय जनता पार्टी<BR>
<input type="radio" name="lan" value="CONGRESS">CONGRESS/काँग्रेस<BR>
<input type="radio" name="lan" value="AAP">   AAP/आम आदमी पार्टी<BR>
<input type="radio" name="lan" value="NOTA">  NOTA/नोटा<BR>
<input type="radio" name="lan" value="NIRDLIY">  NIRDLIY/निर्दलीय<BR>
</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>
