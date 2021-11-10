<html>
<head>
<title>Voting System</title>
<link rel="stylesheet" href="css/bootstrap.css"/>
<script language="JavaScript" src="js/user.js">
</script>

</head>
<body id="top">
<div class="container " >
      <nav class="navbar navbar-default navbar-fixed-top "style="background-color:green;">
         <div class="container-fluid">
		 <div class="navbar-header">
		 <a href="index.php" class="navbar-brand"><b>ONLINE VOTING SYSTEM</b></a>
		 </div>
		 <ul class="nav navbar-nav">
		 <li class=<?php if($page=='admin'){echo 'active';}?>><a href="admin.php"><b>ADMIN</b></a></li>
		 <li class=<?php if($page=='reg'){echo 'active';}?>><a href="register.php"><b>REGISTRATION</b></a></li>
		 <li class=<?php if($page=='log'){echo 'active';}?>><a href="login.php"><b>LOGIN</b></a></li>
		 <li class=<?php if($page=='about'){echo 'active';}?>><a href="about.php"><b>ABOUT </b></a></li>
    </div>
  
  </nav>

</div>
</body>
</html>