<?php
require_once ('incs-arahman/config.php');
require_once ('incs-arahman/gen_serv_con.php');


if(isset($_SESSION['primary_id']) AND $_SESSION['pri_admit'] == 1){  
	header("Location:".GEN_WEBSITE.'students/home.php');
	exit();
}



if(!isset($_SESSION['primary_id'])){  
	header("Location:".GEN_WEBSITE);
	exit();
}

mysqli_query($connect,"UPDATE primary_school_students SET pri_cookie_session = '' WHERE primary_id  = '".$_SESSION['primary_id']."'") or die(db_conn_error);	
session_destroy();
// setcookie("students_remember_me", "", time() - 31104000);		
	
header("Location:".GEN_WEBSITE."/students/school-fees-payment.php");
exit();


