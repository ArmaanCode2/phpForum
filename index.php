<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Welcome to iDiscuss - Coding Forums</title>
</head>

<body>
    <?php include 'partials/_header.php';?>
    <?php include 'partials/_dbconnect.php';?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <ul data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></ul>
    <ul data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></ul>
    <ul data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></ul>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://source.unsplash.com/1800x600/?apple,code" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1800x600/?programmers,microsoft" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1800x600/?coding,python" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


      <div class="container my-4">
        <h2 class="text-center my-4">iDiscuss - Browse Categories</h2>
        <div class="row my-4">

          <!-- use a loop to iterate through Categories -->
      <?php 
      $sql = "SELECT * FROM `categories`";
      $result = mysqli_query($conn,$sql);
      while($row = mysqli_fetch_assoc($result)){
        // echo $row['category_id'];
        // echo $row['category_name'];
        $cat = $row['category_name']; 
        $desc = $row['category_discription']; 
        echo '<div class="col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                  <img src="https://source.unsplash.com/500x400/?' . $cat. ',coding" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">' . $cat . '</h5>
                    <p class="card-text">' . substr($desc ,0 ,90) . '...</p>
                    <a href="#" class="btn btn-primary">View Threads</a>
                  </div>
                </div>
            </div>';
      }
      
      ?>

  
          



        </div>
      </div>

    <?php include 'partials/_footer.php';?>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.24.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>