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
</html>
 


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
     or die(mysqli_error($db)); 
echo '<center><h4><font color="#FF0000">Congratulation, you have made your vote.</h4></center></font>';
   
	 exit();
     }
	 if($member != null){
	
		echo '<table><tr bgcolor="#FF6600">
<td width="100px">ID</td>		
<td width="100px">NAME</td> 
<td width="100px">POSITION</td>
<td width="100px">VOTE</td>
</tr>';
	 }
	 else
	 {
		 header:"voter.php";
	 }
  
 while($mb=mysqli_fetch_array($member))
		{	
	echo '<tr bgcolor="#BBBEFF">';
	echo '<td>'. $mb['candidate_id'].'</td>';		
	echo '<td>'.$mb['candidate_name'].'</td>';
	echo '<td>'.$mb['candidate_position'].'</td>';
     echo '<td><a href="candidate.php?id=' . $mb['candidate_id'] . '">vote</a></td>';

	echo "</tr>";
		}

	
	
?>	
 <?php
$positions= mysqli_query($db,"SELECT * FROM tbPositions")
or die("There are no records to display ... \n" . mysqli_error()); 
?>
