

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

<body style="background-color: #8ce0c9">

    
<nav class="navbar navbar-light" style="background-color: #F7DCC8;">
    <li class="nav-item list-unstyled col-7" >Coder's profile</li>
    <li class="nav-item list-unstyled col " ><a href="movie.php">Home</a></li>
    <li class="nav-item list-unstyled col 2">Coder's Profile</li>
    <li class="nav-item list-unstyled col " ><button class="btn btn-link" data-toggle='modal' data-target='#LogoutModal'>Logout</button></li>
</nav>
<br><br><br>
<div class="container" align="center">
  
            <div class="card" style="width: 25rem;">
                    <img class="card-img-top" src="https://i.imgur.com/jYifg4O.png">
                    <h5 class="card-title" align="center">Lady Theresa Tandiono<br>
                    NIM: 00000018326<br> Angkatan: 2017<br>Kode kelas: AL</h5>
            </div>
</div>



<div class="modal" id="LogoutModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Logout</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="logout.php">
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

</body>

</html>
