<!--By Ingenious Gurus:  https://ingeniousgurus.com-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome | Login with Facebook using PHP and MySQL | Ingenious Gurus </title>
<style>
body, html {
	padding:0;
	margin:0;
}

.header {
	border:1px solid #ccc;
	background-color:#FF9900;
}
.header ul {
	float:right;
	margin-right:5px;
}
.header ul li {
	display:inline-table;
	list-style:none;
}
span { clear:both; display:block; margin-bottom:30px; }
span a { font-weight:bold; color:#0099FF; }
.wrapperDiv {
    margin:0 auto;
	max-width:600px;
	background-color:#6495ed;
}

.clearfix {
	clear:both;
}
h2 {
	text-align:center;
}
h1 {
	width: 215px;
    float: left;
    font-size: 20px;
    margin-left: 10px;
}
h1 a {
	font-size:20px;
	color:#fff;
	text-decoration:none;
}
ul a {
	color:#fff;
	text-decoration:none;
}
ul a:hover {
	text-decoration:underline;
}
.content {
	margin: 0 auto;
	color:#fff;
}
table {
	border-top:1px solid #cac2c2;
}
img {
	border: 2px solid #ccc;
    padding: 2px;
}

</style>
</head>
<?php session_start(); ?>
<?php 
if(!isset($_SESSION['user_is_login']) || @$_SESSION['user_is_login'] == false) { 
	header('location:index.php');
}
?>

<body> 
 
	<div class="wrapperDiv">
		<div class="header">
			<h1><a href="https://ingeniousgurus.com">Ingenious Gurus</a></h1>
			<ul> 
				<li><a href="<?php echo @$_SESSION['user_link'];?>" target="_blank"><div><?php echo @$_SESSION['user_name'];?></div></a></li>
				<li>|</li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
		
		
		<div class="content">
			<h2>Welcome to your account</h2>
			<table width="100%" border="0">
			  <tr>
				<th rowspan="3" scope="row"><img src="<?php echo $_SESSION['user_picture'];?>" /></th>
				<td>Name</td>
				<td>:</td>
				<td><?php echo $_SESSION['user_name'];?></td>
			  </tr>
			  <tr>
				<td>First Name </td>
				<td>:</td>
				<td><?php echo $_SESSION['user_fname'];?></td>
			  </tr>
			  <tr>
				<td>Last Name </td>
				<td>:</td>
				<td><?php echo $_SESSION['user_lname'];?></td>
			  </tr>
			  <tr>
				<th scope="row">&nbsp;</th>
				<td>Email</td>
				<td>:</td>
				<td><?php echo $_SESSION['user_email'];?></td>
			  </tr>
		
			</table>
		</div>
	</div>

</body>
</html>
