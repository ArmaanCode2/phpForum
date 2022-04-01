<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <style>
          #ques{
            min-height:433px;
        }
        .container{
            min-height:80.4vh;
          }
        </style>
    <title>Welcome to iDiscuss - Coding Forums</title>
</head>

<body>
    <?php include 'partials/_header.php';?>
    <?php include 'partials/_dbconnect.php';?>


        <!-- Search Results -->
        <div class="container my-3 text-center">
            <h1 class="py-2">Search Results for <em>"<?php  echo $_GET['search'];  ?>"</em></h1>
            
            <div class="result">
              <h3><a href="/category/sad" class="text-dark">Cannot </a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nisi minus quos, error cumque dicta nihil laudantium distinctio odit natus tempore accusantium sapiente iusto soluta architecto quidem earum nobis magni iure facere suscipit adipisci, non commodi. Corporis temporibus incidunt omnis iste totam tempore dicta nisi ea nemo inventore consequatur dolores voluptas doloremque earum quam, exercitationem ex sed explicabo voluptate? Nulla ab omnis repellendus, maiores reprehenderit non provident asperiores quam porro, libero quasi necessitatibus delectus placeat voluptate exercitationem! Error, debitis sed!
              </p>
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