<?php

session_start();

if(isset($_SESSION['user']['email'])) {
  // do something
} else {
  header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/prof.css">
    <script src="https://kit.fontawesome.com/3aad532998.js" crossorigin="anonymous"></script>
</head>

    <!-- require fo the side bar -->
    <?php 
      require "components/sidebar.php";
    ?>
    <!-- end of side bar -->


    <div class="wrapper1">
      <div class="display_events">
        <div class="container-fluid">
          <div class="col-sm-12">
            <!-- first section -->
            <div class="first_section">
              <div class="row">
                <div class="col-sm-4">
                  <div class="card">
                    <div class="event_card">
                    <i class="fa-solid fa-calendar-days"></i>
                      <h3>Event: 
                        <?php

                            require "database/connect.php";



                            $sum_query = "SELECT SUM(`event_count`) FROM `event`";

                            $sum_result = mysqli_query($conn, $sum_query);

                            if($sum_result) {

                                $row = mysqli_fetch_row($sum_result);

                                $sum = $row[0];


                                echo $sum;

                            }
                        ?>
                      </h3>
                    </div>
                  </div>
                </div>
  
                <div class="col-sm-4">
                  <div class="card">
                    <div class="event_card">
                      <i class="fa-solid fa-newspaper"></i>
                      <h3>Article: 
                        <?php

                            require "database/connect.php";



                            $sum_query = "SELECT SUM(`article_count`) FROM `article`";

                            $sum_result = mysqli_query($conn, $sum_query);

                            if($sum_result) {

                                $row = mysqli_fetch_row($sum_result);

                                $sum = $row[0];


                                echo $sum;

                            }
                        ?>
                      </h3>
                    </div>
                  </div>
                </div>
  
                <div class="col-sm-4">
                  <div class="card">
                    <div class="event_card">
                      <i class="fa-solid fa-image"></i>
                      <h3>Image: 
                        <?php

                            require "database/connect.php";



                            $sum_query = "SELECT SUM(`image_count`) FROM `image`";

                            $sum_result = mysqli_query($conn, $sum_query);

                            if($sum_result) {

                                $row = mysqli_fetch_row($sum_result);

                                $sum = $row[0];


                                echo $sum;

                            }
                        ?>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end of first section -->
  
            <!-- second section -->
            <div class="second_section">
              <div class="row">
                <div class="col-sm-4">
                  <div class="card">
                    <div class="event_card">
                      <i class="fa-solid fa-calendar-days"></i>
                      <p>
                      <a href="update_event.php">Update Event</a>
                      </p>
                      <p>
                      <a href="delete_event.php">Delete Event</a>
                      </p>
                    </div>
                  </div>
                </div>
  
                <div class="col-sm-4">
                  <div class="card">
                    <div class="event_card">
                      <i class="fa-solid fa-newspaper"></i>
                      <p><a href="update_article.php">Update Article</a></p>
                      <p><a href="delete_article.php">Delete Article</a></p>
                    </div>
                  </div>
                </div>
  
                <div class="col-sm-4">
                  <div class="card">
                    <div class="event_card">
                      <i class="fa-solid fa-image"></i>
                      <p>
                      <a href="update_image.php">Update Image</a>
                      </p>
                      <p>
                      <a href="delete_image.php">Delete Image</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end of second section -->
          </div>
        </div>
      </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/prof.js"></script>
</body>
</html>