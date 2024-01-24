<?php
SESSION_START();
include 'config/plugins.php';
if ($_SESSION['token'] == 1) {
    // anti bypass
    ?>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Link</a>
        </li>
      </ul>
      

        <form action = "index.php" method = "POST">
        <input type="Submit" value="Logout">
        </form>
      
    </div>
  </div>
</nav>

<?php
} else {
    $_SESSION['error'] = "YOU MUST LOGIN FIRST";
    Header('Location: index.php');
}
?>