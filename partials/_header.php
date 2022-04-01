<?php include '_dbconnect.php';?>

<?php
session_start();
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
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false">
             Top Categories 
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">';

              $sql = "SELECT category_name, category_id FROM `categories` LIMIT 4";
              $result = mysqli_query($conn,$sql);
              while($row = mysqli_fetch_assoc($result)){
                echo '<a class="dropdown-item" href="threadslist.php?catid=' . $row['category_id'] . '">' . $row['category_name'] . '</a>';
              }
            echo '</div>
          </li>
          <li class="nav-item">
            <a href="contact.php" class="nav-link">Contact</a>
          </li>
        </ul>
        <div class="mx-2 row">';
        if(isset($_SESSION['loggedin'])  && $_SESSION['loggedin'] == true){
          echo '<form class="d-flex" action="search.php">
          <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
          <a href="partials/_logout.php" class="btn btn-outline-success ml-2">Logout</a>
        </form>';
        }else{
          echo '
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <button class="btn btn-outline-success ml-2" data-toggle="modal" data-target="#loginModal">Login</button>
            <button class="btn btn-outline-success mx-2" data-toggle="modal" data-target="#signupModal">Signup</button>
            ';
        }
        echo'</div>


      </div>
    </div>
  </nav>';

  include 'partials/_loginModal.php';
  include 'partials/_signupModal.php';
  //for signup
  if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true"){
    echo '<div style="position:absolute; top: 50px;z-index:2;width:100%;" class="alert alert-success alert-dismissible fade show my-0" role="alert">
              <strong>Success!</strong> Your account is Created
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

  //for login 

  if(isset($_GET['login']) && $_GET['login'] == "true"){
    echo '<div style="position:absolute; top: 50px;z-index:2;width:100%;" class="alert alert-success alert-dismissible fade show my-0" role="alert">
              <strong>Success!</strong> You are successfuly Logged in
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
  }
  if(isset($_GET['login']) && $_GET['login'] == "false"){
    echo '<div style="position:absolute; top: 50px;z-index:2;width:100%;" class="alert alert-danger alert-dismissible fade show my-0" role="alert">
              <strong>Failed!</strong> ' .  $_GET['error'] . '
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
  }
?>