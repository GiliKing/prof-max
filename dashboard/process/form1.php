

<?php


//uploading of image

if(isset($_POST['upload'])){

	$allowed_types = ['image/png', 'image/jpeg', 'image/PNG', 'image/JPG'];

	$image_file = $_FILES['image_upload'];
    $event_data = trim($_POST['editor']);
    $event_head = htmlspecialchars(trim($_POST['head']));

	$image_file_name = $image_file['name'];
	$image_file_type = $image_file['type'];
	$image_file_tmp = $image_file['tmp_name'];
    $id = "asset";

   

    if(empty($event_head)){
		$errors[] = "<div class='alert alert-info'>Please enter the event header</div>";
	}

    if(empty($event_data)){
		$errors[] = "<div class='alert alert-info'>Please enter the event data</div>";
	}

    if(empty($image_file_name)){
		$errors[] = "<div class='alert alert-info'>Please choose an image file</div>";
	}

    if(empty($errors)){

        if(in_array($image_file_type, $allowed_types)){

            if(!is_dir("{$id}")){
                mkdir("{$id}");
            }

            $photo_path = "{$id}/{$image_file_name}";

            move_uploaded_file($image_file_tmp, $photo_path);

            // add this to the database..
            require "function/control.php";

            $feedback = registerEvent($event_head, $event_data, $photo_path);

            echo $feedback;


        } else {
            echo "Your file type is not allowed";
        }
    } else {
        forEach($errors as $error) {
            echo "{$error}<br>";
        }
    }

}




//uploading of  pdf file 

if(isset($_POST['commit'])){

	$allowed_types = ['application/pdf', 'application/docx', 'application/PDF', 'application/DOCX', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];

	$image_file = $_FILES['file_upload'];
    $article_data = trim($_POST['editor_article']);
    $article_head = htmlspecialchars(trim($_POST['head_article']));

	$image_file_name = $image_file['name'];
	$image_file_type = $image_file['type'];
	$image_file_tmp = $image_file['tmp_name'];
    $id = "asset1";

    // echo $image_file_type;

   

    if(empty($article_head)){
		$errors[] = "<div class='alert alert-info'>Please enter the article header</div>";
	}

    if(empty($article_data)){
		$errors[] = "<div class='alert alert-info'>Please enter the article preview</div>";
	}

    if(empty($image_file_name)){
		$errors[] = "<div class='alert alert-info'>Please choose an image file</div>";
	}

    if(empty($errors)){

        if(in_array($image_file_type, $allowed_types)){

            if(!is_dir("{$id}")){
                mkdir("{$id}");
            }

            $photo_path = "{$id}/{$image_file_name}";

            move_uploaded_file($image_file_tmp, $photo_path);

            // add this to the database..
            require "function/control.php";

            $feedback = registerArticle($article_head, $article_data, $photo_path);

            echo $feedback;


        } else {
            echo "<div class='alert alert-info'>This file type is not allowed</div>";
        }
    } else {
        forEach($errors as $error) {
            echo "{$error}<br>";
        }
    }

}




// image uploading


if(isset($_POST['prof_image'])){

    $allowed_types = ['image/png', 'image/jpeg', 'image/PNG', 'image/JPG'];

	$image_file = $_FILES['local_upload'];
    $image_head = htmlspecialchars(trim($_POST['head_image']));

	$image_file_name = $image_file['name'];
	$image_file_type = $image_file['type'];
	$image_file_tmp = $image_file['tmp_name'];
    $id = "asset2";

    // echo $image_file_type;

   

    if(empty($image_head)){
		$errors[] = "<div class='alert alert-info'>Please enter the image detail</div>";
	}

    if(empty($image_file_name)){
		$errors[] = "<div class='alert alert-info'>Please choose an image file</div>";
	}

    if(empty($errors)){

        if(in_array($image_file_type, $allowed_types)){

            if(!is_dir("{$id}")){
                mkdir("{$id}");
            }

            $photo_path = "{$id}/{$image_file_name}";

            move_uploaded_file($image_file_tmp, $photo_path);

            // add this to the database..
            require "function/control.php";

            $feedback = registerImage($image_head, $photo_path);

            echo $feedback;


        } else {
            echo "<div class='alert alert-info'>This file type is not allowed</div>";
        }
    } else {
        forEach($errors as $error) {
            echo "{$error}<br>";
        }
    }

}




?>
