

<?php

function login($email, $password) {

    $email_entry = "chrisogili12@gmail.com";
    $password_entry = "12345678";

    if($email == $email_entry && $password == $password_entry) {

        session_start();

        $_SESSION['user']['email'] = $email_entry;
        $_SESSION['user']['password'] = $password_entry;

        echo "Yes";


    } else {

        echo "No";

    }
}


function registerEvent($event_head, $event_data, $photo_path) {

    require "database/connect.php";

    $event_headEntry = mysqli_real_escape_string($conn, $event_head);

    $event_dataEntry = mysqli_real_escape_string($conn, $event_data);

    $photo_pathEntry = mysqli_real_escape_string($conn, $photo_path);

    $event_count = 1;

    $event_register = "INSERT INTO `event` (`event_name`, `event_content`, `event_image`, `event_count`) VALUES('$event_headEntry', '$event_dataEntry', '$photo_pathEntry', '$event_count')";

    $event_result_register = mysqli_query($conn, $event_register);

    if($event_result_register) {

        echo "<div class='alert alert-success'>Entry Added Successfully</div>";
    } else  {
        
        echo mysqli_error($conn);
    }

}


function registerArticle($article_head, $article_data, $photo_path) {

    require "database/connect.php";

    $article_headEntry = mysqli_real_escape_string($conn, $article_head);

    $article_dataEntry = mysqli_real_escape_string($conn, $article_data);

    $photo_pathEntry = mysqli_real_escape_string($conn, $photo_path);

    $article_count = 1;

    $article_register = "INSERT INTO `article` (`article_name`, `article_content`, `article_image`, `article_count`) VALUES('$article_headEntry', '$article_dataEntry', '$photo_pathEntry', '$article_count')";

    $article_result_register = mysqli_query($conn, $article_register);

    if($article_result_register) {

        echo "<div class='alert alert-success'>Entry Added Successfully</div>";
    } else  {
        
        echo mysqli_error($conn);
    }

}



function registerImage($image_head, $photo_path) {

    require "database/connect.php";

    $image_headEntry = mysqli_real_escape_string($conn, $image_head);

    $photo_pathEntry = mysqli_real_escape_string($conn, $photo_path);

    $image_count = 1;

    $image_register = "INSERT INTO `image` (`image_name`, `image_photo`, `image_count`) VALUES('$image_headEntry', '$photo_pathEntry', '$image_count')";

    $image_result_register = mysqli_query($conn, $image_register);

    if($image_result_register) {

        echo "<div class='alert alert-success'>Entry Added Successfully</div>";
    } else  {
        
        echo mysqli_error($conn);
    }

}



?>