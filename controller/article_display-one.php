

<?php

require "datahome/connect.php";

$event_info = "SELECT * FROM `article` ORDER BY `id` DESC LIMIT 3";

$result = mysqli_query($conn, $event_info);

if($result) {

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        $id = $row['id'];
        $article_name = $row['article_name'];
        $article_content = $row['article_content'];
        $article_image = $row['article_image'];

        

        echo"
            <div class='col-sm-4'>
                <div class='my_card'>
                    <img src='img/home1.jpg' alt='' width='100%'>
                    <h3>{$article_name}</h3>

                    <a href='read-article.php?id=".base64_encode($id)."'>Read More</a>
                </div>
            </div>
        ";

    }

    
} else {

    echo mysqli_error($conn);

}



?>