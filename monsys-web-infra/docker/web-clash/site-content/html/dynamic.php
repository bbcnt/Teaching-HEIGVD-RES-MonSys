<?php
session_start();
if(isset($_SESSION['views']))
	$_SESSION['views']=$_SESSION['views']+1;
else
	$_SESSION['views']=1;
?>

<html>
<body>

<?php
//retrieve session data
echo "Pageviews=". $_SESSION['views'];
?>

</body>
</html>