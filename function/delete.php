<?php
        include("config.php");

        $delete_id = $_GET['id'];
        $poster=$_GET['poster'];

        echo $delete_id;
        echo $poster;

        mysqli_query($db, "DELETE FROM movies where movie_id = '$delete_id'") or die(mysqli_error());
        $path = $_SERVER["DOCUMENT_ROOT"]."/utslab/function/$poster";
        echo '<br><br>'.$path;
        unlink($path);

        header("Location: ../movie.php");
    
        
?>
