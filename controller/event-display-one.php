
<?php

require "datahome/connect.php";

$event_info = "SELECT * FROM `event` ORDER BY `id` DESC LIMIT 3";

$result = mysqli_query($conn, $event_info);

if($result) {

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        $id = $row['id'];
        $event_header = $row['event_name'];
        $event_data = $row['event_content'];
        $event_image = $row['event_image'];
        

        echo"
            <div class='col-sm-4 ok_border'>
                <img src='dashboard/{$event_image}' alt='' width='100%'>
                <h3 id='event_text'>$event_header</h3>
                <a href='read-event.php?id=".base64_encode($id)."'>Read More</a>
            </div>
        ";

    }

    
} else {

    echo mysqli_error($conn);

}



?>