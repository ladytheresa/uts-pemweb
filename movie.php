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
    <li class="nav-item list-unstyled col ">Home</li>
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
<div class="container" align="center">
<h1 >U-CINEMA</h1>
<br>
</div>
<?php 
if($role == 1){
    echo "<div class='container'><button style='float: right' margin='30px' class='btn btn-primary' onclick='toNewPost()'>Add Movie</button></div><br><br>";
}                    

?>
<br>
<div class="container">

        <table id='example' class='table table-bordered' style='width:100%'>
            <thead>
                <tr class="table-success">
                    <th>Movie ID</th>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Release Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-light">
                <?php
                    $host = "localhost";
                    $username = "root";
                    $dbname = "uts";//isi
                    $password = "";
                    $db = new mysqli($host, $username, $password, $dbname);
                    $json_array=array();
                
                    $query = "SELECT * FROM  movies";//isi
                    $result = $db->query($query);
                    
                   
                   
                    while($row1 = $result->fetch_assoc()){
                        //$movie_id=$row1['movie_id'];
                        //$poster = $row1['poster'];         

                        echo "<tr>";
                        echo "<td>". $row1['movie_id'] ."</td>";
                        echo "<td>". $row1['title'] ."</td>";
                        echo "<td>". $row1['genre'] ."</td>";
                        echo "<td>". $row1['release_date'] ."</td>";
                        if($role == 3){
                            echo "<td><a class='btn btn-info' href='details.php?id=".$row1['movie_id']."'>Details</a></td>";
                        }else{ 
                            echo "<td><a class='btn btn-info' href='details.php?id=".$row1['movie_id']."'>Details</a>
                            <a class='btn btn-danger' href='function/delete.php?id=".$row1['movie_id']."&poster=".$row1['poster']."' 
                            onclick='return confirm(\"Are you sure you want to delete this movie?\")'>Delete</a></td>";
                        }
                        echo "</tr>"; 
                        
                    } 
                    //<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#delete'>Delete</button></td>";                        
                    //href='delete.php?id=".$row1['movie_id']."picture=".$row['poster']."
                    //data-toggle='modal' data-target='#delete'

                ?>
            </tbody>
        </table>
    </div>


    

<!--<div class="modal" id="delete" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Delete Movie</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="delete.php">
                    <input type="hidden" name="movie_id">
                    <input type="hidden" name="poster"> 
                <div class="alert alert-danger">Are you sure you want delete this movie?</div>
            </div>    
            <div class="modal-footer">
                <button type="submit" name="delete" class="btn btn-danger">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
            </form>

        </div>
    </div>
</div> -->
<script>
function toDetails(){
    window.location = "details.php";
}

function toNewPost(){
    window.location = "addmovie.php";
}


//$(document).ready(function()){
//    $('.deletebtn').on('click', function()){
//        $('#delete').modal('show');
//        $tr = $(this).closest('tr');
//    }
//}

</script>

</body>
</html>