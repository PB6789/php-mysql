<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">
	<img style="max-width:120%; margin-top: -15px;margin-left: -10px;" height="250%" src="logo/logo1.jpg">
	</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="<?php if(basename($_SERVER['PHP_SELF'])=='index.php'){ echo 'active'; } ?>" ><a href="index.php">Home</a></li>
        <li class="<?php if(basename($_SERVER['PHP_SELF'])=='About.php'){ echo 'active'; } ?>" ><a href="About.php">About</a></li>
        <li class="<?php if(basename($_SERVER['PHP_SELF'])=='Projects.php'){ echo 'active'; } ?>"><a href="Projects.php">Projects</a></li>
        <li class="<?php if(basename($_SERVER['PHP_SELF'])=='Contact.php'){ echo 'active'; } ?>"><a href="Contact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="index.php">Home</a></p>
      <p><a href="About.php">About Us</a></p>
      <p><a href="Contact.php">Contact Us</a></p>
    </div>

