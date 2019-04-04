<div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Math sucks</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>
          </ul>
          <?php if (isset($_SESSION['username'])) : ?>
            <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
              <p class="navbar-text"> Welcome <strong><?php echo $_SESSION['username']; ?></strong></p> 
            </li>
            <li class="nav-item">
            <p> <a href="index.php?logout='1'" class="nav-link" style="color: red;">logout</a> </p>
            </li>
            </ul>
            <?php endif ?> 
        </div>
</nav>
</div>