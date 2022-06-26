

<?php

require "datahome/connect.php";

$event_info = "SELECT * FROM `image` ORDER BY `id` DESC LIMIT 5";

$result = mysqli_query($conn, $event_info);

if($result) {

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        $id = $row['id'];
        $image_header = $row['image_name'];
        $image_data = $row['image_photo'];

        

        echo"
            <div class='car'>
                <img src='dashboard/{$image_data}'>
                <div class='card__head'>{$image_header}</div>
            </div>
        ";

    }

    
} else {

    echo mysqli_error($conn);

}



?>