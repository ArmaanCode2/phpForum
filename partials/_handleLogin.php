<?php 
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $email = $_POST['loginEmail'];
    $pass = $_POST['loginPass'];

    $sql = "SELECT * FROM `users` WHERE user_email = '$email'";
    $result = mysqli_query($conn,$sql);
    $numRows = mysqli_num_rows($result);
    if($numRows == 1){
        $row = mysqli_fetch_assoc($result);
        if (password_verify($pass,$row['user_pass'])) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['useremail'] = $email;
            // echo "logged in  " . $email;
            header("Location: /Forum/index.php?login=true");
            exit();
        }else{
            $showError = "Wrong Password for Email";
            // echo 'Wrong Password for Email';
            header("Location: /Forum/index.php?login=false&error=$showError");
        }
    }else{
        $showError = "Email does not exists Please try another Email";
        // echo 'Email does not exists';
        header("Location: /Forum/index.php?login=false&error=$showError");
    }
}

?>