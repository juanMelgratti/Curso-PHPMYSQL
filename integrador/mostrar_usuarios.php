<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Mostrar Usuarios</title>
    <link rel="stylesheet" href="./css/mu.css">
</head>
<body style="background-color: orangered;">
    <div class="jumbotron" style="background-color: orangered;" >
    <a href="index.php" id="register" >Registrarse</a>
</div>
    
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Nombre de usuario</th>
            <th scope="col">Mail</th>
            <th scope="col">Web</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include("var.php");

          $query=mysqli_query($database, "SELECT * FROM Usuarios");
         
          while($query_array=mysqli_fetch_assoc($query)){
          ?>
          <tr>
            <th scope="row"></th>
            <td><?php echo $query_array['Username']; ?></td>
            <td><?php echo $query_array['Email']; ?></td>
            <td><?php echo $query_array['Web']; ?></td>
          </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
