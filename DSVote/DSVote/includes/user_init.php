<?php
date_default_timezone_set('Asia/Manila');
//header("refresh: 1;url=logout.php");

error_reporting(0);

// error_reporting(E_ALL);
// ini_set('display_errors', '1');



include ('database/connect.php');

session_start(); //session start

//ob_start();
$idnum = $_SESSION['idnum'];
$user_id = $_SESSION['user_id']; 
$cur_date = date('Y-m-d');
$cur_time = date('g:i:s a');

$timestamp = date('Y-m-d g:i:s a');

$cur_year = date('Y');
$nxt_year = $cur_year + 1;


/* general query of all info of user, employee and student here
$gen_info_user = mysql_fetch_assoc(mysql_query("SELECT * FROM user_info WHERE user_id = '$user_id'"));
$gen_info_emp = mysql_fetch_assoc(mysql_query("SELECT * FROM emp_info WHERE user_id = '$user_id'"));// or die(mysql_error());
$own_dtr = mysql_query("SELECT * FROM dtr WHERE user_id = '$user_id' AND recorded != '1'");
$own_all_dtr = mysql_query("SELECT * FROM dtr WHERE user_id = '$user_id'");
$own_payout = mysql_query("SELECT * FROM payouts WHERE user_id = '$user_id'") or die(mysql_error());
$gen_dtr = mysql_query("SELECT * FROM dtr WHERE dtr_date = '$cur_date' ORDER BY ord DESC");
$gen_info_stud = mysql_fetch_assoc(mysql_query("SELECT * FROM stud_info WHERE user_id = '$user_id'"));// or die(mysql_error());
$stud_id = $gen_info_stud['stud_id'];
$all_emp = mysql_query("SELECT * FROM emp_info");
$all_stud = mysql_query("SELECT * FROM stud_info");

include ('function.php');
$actual_link = actual_link(); //basename of link

if(!isset($user_id) && $actual_link != "index.php" && $actual_link != "timeinout.php" && $actual_link != "signup.php")
{
	header("Location:404.php");
}

// Student details in assessment
$a_id = $_GET['assessment'];
$a_stud_info = mysql_fetch_assoc(mysql_query("SELECT * FROM stud_info WHERE stud_id = '$a_id'"));// or die(mysql_error());
$a_stud_fname = $a_stud_info['firstname'];
$a_stud_lname = $a_stud_info['lastname'];

// reset user_info ctr and status to 0 if alreay next day
reset_ctr_status_userinfo();
//update employee's remaining hours if OJT
//update_hours();
update_after_edit();
//update_emp_hours();
update_ojt_hours();
// update events to Ongoing or Done depending on the date
update_event_status();
// update database if needed
// --- apply_overtime();
// get value of variable without using variable
$url_id = get_value_without_variable();
$_SESSION['global_emp_id'] = $url_id;
// add all payrolls then put the sum in payouts then label as 1 (recorded)
add_payroll($user_id, $gen_info_emp);
// for admin purposes
$actual_emp_info = mysql_fetch_assoc(mysql_query("SELECT * FROM emp_info WHERE user_id = '$url_id'"));
$dtr_info = mysql_fetch_assoc(mysql_query("SELECT * FROM dtr WHERE dtr_id = '$url_id'"));
$actual_emp_info_dtr = mysql_fetch_assoc(mysql_query("SELECT * FROM emp_info WHERE user_id = '$dtr_info[user_id]'"));
$actual_stud_info = mysql_fetch_assoc(mysql_query("SELECT * FROM stud_info WHERE user_id = '$url_id'"));
*/



?>
<link rel="icon" href="images/logo/favicon.png" />