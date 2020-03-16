<?php

        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["uploadFile"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        
        $picture=$target_file;
        $movieid = $_POST['movieid'];
        $title = $_POST['title'];
        $synopsis = $_POST['synopsis'];
        $duration = $_POST['duration'];
        $genre = $_POST['genre'];
        $release = $_POST['release'];
        
        $mergedGenre = implode(" ",$genre);

        include_once("config.php");
    
        $query = "UPDATE movies set title='$title',synopsis='$synopsis', genre='$mergedGenre', duration='$duration', release_date='$release', poster='$picture' where movie_id ='$movieid'";
        $result = $db->query($query);
        
        if(move_uploaded_file($_FILES["uploadFile"]["tmp_name"],$target_file)){
            echo 'file uploaded';
        }
        else{
            echo "file did not get uploaded";
        }
        
        header("Location: ../details.php?id=$movieid");
        



?>