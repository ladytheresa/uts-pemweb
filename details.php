<?php 
include 'function/config.php';

session_start();

if($_SESSION['status'] !="login"){
	header("location: index.php");
}
$query2 = "SELECT * from employee where email_employee='{$_SESSION['email']}'";
$result2=$db->query($query2);

while($row = $result2->fetch_assoc()){
    $role = $row['role'];
}
$movie_id=$_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body style="background-color: #F7DCC8">

    
<nav class="navbar navbar-light" style="background-color: #8ce0c9;">
    <li class="nav-item list-unstyled col-7">
    Welcome, <?php 

                $arr = explode("@", $_SESSION['email'], 2);

                $name = $arr[0];
                echo $name;
                ?>

</li>
    <li class="nav-item list-unstyled col "><a href="movie.php">Home</li>
    <li class="nav-item list-unstyled col 2"><a href="profile.php">Coder's Profile</a></li>
    <li class="nav-item list-unstyled col " ><button class="btn btn-link" data-toggle="modal" data-target="#LogoutModal">Logout</button></li>
</nav>

<div class="modal" id="LogoutModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Logout</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="function/logout.php">
                <div class="alert alert-danger">Are you sure you want to logout?</div>
            </div>    
            <div class="modal-footer">
                <button type="submit" name="logout" class="btn btn-danger">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
            </form>

        </div>
    </div>
</div>

<br><br>

<div class="row">
            
            <?php 

                $query="SELECT * FROM movies where movie_id='$movie_id'";
                $result=$db->query($query) or die($db->error);
            
                while($row=$result->fetch_assoc()){
                    $poster=$row['poster'];
                    $title=$row['title'];
                    $synopsis=$row['synopsis'];
                    $genre=$row['genre'];
                    $duration=$row['duration'];
                    $release=$row['release_date'];

                    
                    echo "<div class='container' align='center'>";
                    echo "<div class='card' style='width: 30rem;'>";
                        
                        echo "<div class='card-body'>";
                            echo "<div class='card-title'>";
                            echo "<img src='function/".$poster."'/ width='400px;' alt='image not found' >";
                                echo "</div>";                                  
                            echo 'Title : '.$title;
                            
                            echo "<br><p>".$synopsis."</p>";
                            echo "Genre : ".$genre;
                            echo "<br>Duration : ".$duration;
                            echo "<br>Release : ".$release;
                            if($role ==1){
                                echo "<br><button type='button' class='btn btn-warning' data-toggle='modal' data-target='#edit'>Edit</button>";
                            }
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
                } 
            ?>
                    
        </div>
    
    </div>
    

<div class="modal" id="edit" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Edit Movie</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" align="center">
                <form action="function/editmovie.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="movieid" value="<?php echo $movie_id; ?>">  
                <label><br>Title</label>
                <br>
				<input type="text" name="title" id="title" value="<?php echo $title?>"/>
                <br>
                <label><br>Synopsis</label>
				<br>
                <input type="text" name="synopsis" id="synopsis" value="<?php echo $synopsis?>"/>
                <br>
                <label><br>Duration</label>
				<br>
                <input type="text" name="duration" id="duration" value="<?php echo $duration?>"/>
                <br>
                <label><br>Genre</label>
				<br>
                <input  type="checkbox" name="genre[]" value=" Action "> Action &nbsp&nbsp&nbsp</input>
                <input type="checkbox" name="genre[]" value=" Drama " > Drama &nbsp&nbsp&nbsp</input>
                <input type="checkbox" name="genre[]" value=" Fantasy " > Fantasy &nbsp&nbsp&nbsp</input>
                <br>
                <input  type="checkbox" name="genre[]" value=" Thriller" > Thriller &nbsp&nbsp&nbsp</input>
                <input  type="checkbox" name="genre[]" value=" Sci-Fi " > Sci-Fi &nbsp&nbsp&nbsp</input>
                <input type="checkbox" name="genre[]" value=" Comedy " > Comedy &nbsp&nbsp&nbsp</input>
                <br>
                <label><br>Release date</label>
                <br>
                <input type="date" name="release" id="release" value="2020-03-15"/>
                <br>
                <label><br>Movie Poster</label>
                <br>
                <input type="file" id="uploadFile " name="uploadFile">
                <br>
                
            </div>    
            <div class="modal-footer">
                <button type="submit" name="edit" class="btn btn-danger">Edit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
            </form>

        </div>
    </div>
</div>
</script>
</body>
</html>