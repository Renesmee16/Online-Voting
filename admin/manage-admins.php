<!DOCTYPE html>
<html>
<head>
<title>online voting</title>
<meta charset="utf-8">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<script language="JavaScript" src="js/user.js">
</script>
</head>
<body id="top">

<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
   
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a class="drop" href="#">Admin Panel Pages</a>
          <ul>
            <li><a href="manage-admins.php">Manage Admin</a></li>
            <li><a href="positions.php">Manage Positions</a></li>
            <li><a href="candidates.php">Manage Candidates</a></li>
            <li><a href="refresh.php">Results</a></li>
          </ul>
        </li>
        
        <li><a href="http://localhost/onlineelectionsystem/login.php">Voter Panel</a></li>
        <li><a href="../index.php">Logout</a></li>

      </ul>
    </nav>
  </header>
<?php
 session_start();
 $db = mysqli_connect('localhost', 'root', '', 'registration');
				if (isset($_POST['submit']))
				{

					$myFirstName = addslashes( $_POST['firstname'] ); 
					$myEmail = $_POST['email'];
					$myPassword = $_POST['password'];

					$newpass = md5($myPassword); 

					$sql = mysqli_query( $db,"INSERT INTO tbAdministrators(name, email, password) VALUES ('$myName', '$myEmail', '$newpass')" )
					        or die( mysqli_error() );

					die( "A new administrator account has been created." );
				}
				if (isset($_GET['id']) && isset($_POST['update']))
				{
					$myId = addslashes( $_GET['id']);
					$myName = addslashes( $_POST['firstname'] ); 
					$myEmail = $_POST['email'];
					$myPassword = $_POST['password'];

					$newpass = md5($myPassword);

					$sql = mysqli_query($db, "UPDATE tbAdministrators SET name='$myName', email='$myEmail', password='$newpass' WHERE admin_id = '$myId'" )
					        or die( mysqli_error() );

					die( "An administrator account has been updated." );
				}
			?>
			<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/background1.jpg');">
			</div>
			 <blockquote>
            <table  border="0" width="620" align="center">
            <CAPTION><h3>ADD NEW ADMIN</h3></CAPTION>
            <form action="manage-profile.php?id=<?php echo $_SESSION['id']; ?>" method="post" onsubmit="return updateProfile(this)">
            <table align="center">
            <tr><td  style="background-color:#0000ff"  > Name:</td><td style="background-color:#0000ff"  ><input  style="color:#000000"; type="text" font-weight:bold;" name="firstname" maxlength="15" value=""></td></tr>

            <tr><td style="background-color:#0000ff" >Email Address:</td><td style="background-color:#0000ff"><input style="color:#000000";  type="text" font-weight:bold;" name="email" maxlength="100" value=""></td></tr>

            <tr><td style="background-color:#0000ff" >New Password:</td><td style="background-color:#0000ff" ><input  style="color:#000000";  type="password" font-weight:bold;" name="password" maxlength="15" value=""></td></tr>

            <tr><td style="background-color:#bf00ff" >Confirm New Password:</td><td style="background-color:#bf00ff" ><input   style="color:#000000";  type="password"  font-weight:bold;" name="ConfirmPassword" maxlength="15" value=""></td></tr>

            <tr><td style="background-color:#0000ff" >&nbsp;</td></td><td style="background-color:#0000ff" ><input style="color:#ff0000";  type="submit" name="update" value="Add New Admin"></td></tr>

            </table>
            </form>
            </table>



        </blockquote>
      
