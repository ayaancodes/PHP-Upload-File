<?php
    $err = $_FILES['uploadFile']['error'];
    if ($err<=0){
        $file_name = $_FILES['uploadFile']['name'];
        $file_temp_location = $_FILES['uploadFile']['tmp_name'];
        move_uploaded_file($file_temp_location, "/uploads/".$file_name);

        echo "File uploaded to: uploads/".$file_name;
            echo"<br />";
        echo "File Type: ". $_FILES["uploadedFile"]["type"];
    } else {
        echo $err;
    }
    





?>
