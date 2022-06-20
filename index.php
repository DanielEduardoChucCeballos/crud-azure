<?php
include 'conexion.php';
$con = connect();
$sql = 'SELECT * FROM Students';
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<body>
<section class=" py-4 " style="background-color: #eee;">
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-lg-12 col-xl-11">
          
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <center>
              <h1 >Estudiantes </h1>
            </center>
              
            <div class="row justify-content-center">
                
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
    <a href="create.php" class="btn btn-primary text-end">Crear</a>

              <table class="table">
                  
  <thead>
      
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Email</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Acciones</th>


    </tr>
  </thead>
  <tbody>
        <?php while ($row = mysqli_fetch_array($query)) { ?>
    <tr>
      <th><?php echo $row['id']; ?></th>
      <td><?php echo $row['fname']; ?></td>
      <td><?php echo $row['lname']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td>
        <a href="edit.php?id=<?php echo $row[
            'id'
        ]; ?>"  class="btn btn-info px-3">Editar</a>
      <a href="delete.php?id=<?php echo $row[
          'id'
      ]; ?>"class="btn btn-danger">Eliminar</a>

      </td>
     
    </tr>
    <?php } ?>
  </tbody>
</table>


              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>