<?php

        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["uploadFile"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        
        $picture=$target_file;
        $title = $_POST['title'];
        $synopsis = $_POST['synopsis'];
        $duration = $_POST['duration'];
        $genre = $_POST['genre'];
        $release = $_POST['release'];

        include("config.php");

        $query0 = mysqli_query($db,"SELECT MAX(movie_id) as movie_id FROM movies");
        $row = $query0->fetch_assoc();
        $movie_id = (int)$row['movie_id'];
        $movie_id++;

        //$movie_id=uniqid('movie_id');

        $mergedGenre = implode(" ",$genre);

    
        $query = "INSERT INTO movies VALUES('$movie_id', '$picture', '$title','$synopsis', '$duration', '$mergedGenre', '$release')";
        $result = $db->query($query);
        
        if(move_uploaded_file($_FILES["uploadFile"]["tmp_name"],$target_file)){
            echo 'file uploaded';
        }
        else{
            echo "file did not get uploaded";
        }
        
        header("Location: ../movie.php");
        



?>