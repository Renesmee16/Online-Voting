<?php
  

  session_start();
    $db = mysqli_connect('localhost', 'root', '', 'registration');
	if (isset($_POST['Submit'])){   

  $position = addslashes( $_POST['position'] );
  
    $member= mysqli_query($db,"SELECT * FROM tbCandidates where candidate_position='$position'");
	}
	if (isset($_GET['id']))
     {
     $id = $_GET['id'];
     
     $member = mysqli_query($db ,"UPDATE tbCandidates SET candidate_cvotes=candidate_cvotes+1 WHERE candidate_id='$id'")
     or die("The candidate does not exist ... \n"); 
echo '<center><h4><font color="#FF0000">Congratulation, you have made your vote.</h4></center></font>';
     header("Location: candidate.php");
	 exit();
     }
	
	

	
?>	
 <?php
$positions= mysqli_query($db,"SELECT * FROM tbPositions")
or die("There are no records to display ... \n" . mysqli_error()); 
?>
<!DOCTYPE html>
<html>
<head>
<title>online voting</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<script language="JavaScript" src="js/user.js">
</script>
</head>

<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <div id="logo" class="fl_left">
      <h1><a href="index.html">ONLINE VOTING</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="voter.php">Home</a></li>
        <li><a class="drop" href="#">Voter Pages</a>
          <ul>
            <li><a href="vote.php">Vote</a></li>
            <li><a href="manage-profile.php">Manage my profile</a></li>
          </ul>
        </li>
        
        <li><a href="index.php">Logout</a></li>
      </ul>
    </nav>
  </header>
</div>
</br>
</br>
<div >
 
  <div >
    <table width="420" align="center">
    <form name="fmNames" id="fmNames" method="post" action="candidate.php" onSubmit="return positionValidate(this)">
    <tr>
        <td style="color:#000000";>Choose Position</td>
        <td><SELECT NAME="position" id="position">
        <OPTION  VALUE="select"><p style="color:black";>select</p>
    <?php   
while ($row= mysqli_fetch_array($positions)){
          echo "<OPTION VALUE=$row[position_name]>$row[position_name]"; 
        }
?>
        </SELECT></td>
        <td style="color:black";><input type="submit" name="Submit" value="See Candidates" /></td>
    </tr>
    <tr>
     
        
    </tr>
    </form> 
    </table>
</html>
