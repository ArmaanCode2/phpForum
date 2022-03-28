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
    #ques {
        min-height: 433px;
    }
    </style>
    <title>Welcome to iDiscuss - Coding Forums</title>
</head>

<body>
    <?php include 'partials/_header.php';?>
    <?php include 'partials/_dbconnect.php';?>
    <?php
    $id = $_GET['threadid']; 
    $sql = "SELECT * FROM `threads` WHERE thread_id=$id"; 
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
      $title = $row['thread_title']; 
      $desc = $row['thread_desc']; 
    };
    ?>
    <?php
        $showAlert = false;
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == 'POST'){
            //Insert into comment db
            $comment = $_POST['comment'];
            
            $sql = "INSERT INTO `comments`( `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ('$comment','$id','0', current_timestamp())";
            $result = mysqli_query($conn,$sql);
            $showAlert = true;
            if($showAlert){
                echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Your Comment has been added!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
            }
        }
?>

    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4"><?php echo $title; ?></h1>
            <p class="lead"><?php echo $desc; ?></p>
            <hr class="my-4">
            <p>This peer to peer forum.
                No Spam / Advertising / Self-promote in the forums.
                Do not post copyright-infringing material.
                Do not post “offensive” posts, links or images.
                Do not cross post questions.
                Remain respectful of other members at all times.
            </p>
            <p>Posted by <b>Armaan</b></p>
        </div>
    </div>

    <div class="container">
        <h1 class="py-2">Post a Comment</h1>
        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
            <div class="form-group">
                <label for="">Type your Comment</label>
                <textarea id="comment" name="comment" rows="3" class="form-control">Elaborate Your Concern</textarea>
            </div>
            <button class="btn btn-success">Post Comment </button>
        </form>
    </div>

    <div class="container" id="ques">
        <h1 class="py-2">Discussions</h1>
        <?php
            $id = $_GET['threadid']; 
            $sql = "SELECT * FROM `comments` WHERE thread_id=$id"; 
            $result = mysqli_query($conn, $sql);
            $noResult = true;
            while($row = mysqli_fetch_assoc($result)){
            $noResult = false;
            $id = $row['comment_id'];
            $content = $row['comment_content'];
            $comment_time = $row['comment_time'];


    echo '<div class="media my-3">
            <img src="img/user-default.webp" width="54px" alt="" class="mr-3">
            <div class="media-body">
                <p class="font-weight-bold my-0">Armaan at ' . $comment_time . '</p>
                ' . $content .  '
            </div>
        </div>';

}

if($noResult){
    echo '<div class="jumbotron jumbotron-fluid"> 
            <div class="container">
                <p class="display-4">No Threads Found</p>
                <p class="lead">be the first person to ask a question</p>
            </div>
          </div>';
}
?>

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