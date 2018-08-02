<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.php"><i class="fa fa-fw fa-vcard"></i> Hall Ticket Generator</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li <?php if (strpos($_SERVER['PHP_SELF'], 'index.php')) echo'class="active"'; ?>><a href="index.php">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if (isset($_SESSION) and isset($_SESSION['log']) and $_SESSION['log'] == 'active') { ?>          
        <li><a href="#" data-toggle="modal" data-target="#logoutModal"><i class="fa fa-fw fa-sign-out"></i> Logout</a></li>
        <li <?php if (strpos($_SERVER['PHP_SELF'], 'card.php')) echo'class="active"'; ?>><a href="card.php"><i class="fa fa-fw fa-vcard"></i> Admit Card</a></li>
        <?php } else { ?>
        <li <?php if (strpos($_SERVER['PHP_SELF'], 'register.php')) echo'class="active"'; ?>><a href="register.php"><i class="fa fa-fw fa-user-circle"></i> Register</a></li>
        <li data-toggle="modal" data-target="#loginModal"><a href="#"><i class="fa fa-fw fa-sign-in"></i> Login</a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>