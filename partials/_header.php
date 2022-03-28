<?php
    echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/Forum">iDiscuss</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/Forum">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" aria-haspopup="true" data-bs-toggle="dropdown" aria-expanded="false">
              Categories 
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="contact.php" class="nav-link">Contact</a>
          </li>
        </ul>
        <div class="mx-2 row">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success ml-2" type="submit">Search</button>
          </form>
          <button class="btn btn-outline-success ml-2" data-toggle="modal" data-target="#loginModal">Login</button>
          <button class="btn btn-outline-success mx-2" data-toggle="modal" data-target="#signupModal">Signup</button>
        </div>
      </div>
    </div>
  </nav>';

  include 'partials/_loginModal.php';
  include 'partials/_signupModal.php';
  if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true"){
    echo '<div style="position:absolute; top: 50px;z-index:2;width:100%;" class="alert alert-success alert-dismissible fade show my-0" role="alert">
              <strong>Success!</strong> You can now Login
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
  }
  if(isset($_GET['signuperror']) && $_GET['signuperror'] == "false"){
    echo '<div style="position:absolute; top: 50px;z-index:2;width:100%;" class="alert alert-danger alert-dismissible fade show my-0" role="alert">
              <strong>Failed!</strong> ' .  $_GET['error'] . '
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
  }
?>