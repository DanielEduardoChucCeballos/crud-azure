<?php
include 'conexion.php';
$con = connect();

$id = $_GET['id'];
$sql = "SELECT * FROM Students WHERE id = $id";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear | Alumnos</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<body>
<section class=" py-4 " style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
              <?php if (empty($errores) && !empty($_POST['submit'])): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Se creo el alumno Exitosamente</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                  <?php endif; ?>
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Alumnos</p>

                <form action="update.php" method="POST"class="mx-1 mx-md-4">
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
                
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="fname">Nombre del alumno</label>

                      <input type="text" class="form-control shadow" name="fname" value="<?php echo $row['fname']; ?>" placeholder="Nombre del" alumno"/>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="lname">Apellido del alumno</label>

                      <input type="text" class="form-control shadow" name="lname" value="<?php echo $row['lname']; ?>" placeholder="Apellido del alumno" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="email">Email</label>

                      <input type="email" name="email" class="form-control shadow" value="<?php echo $row['email']; ?>"  placeholder="example@gmail.com" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="phone">Teléfono</label>
                      <input type="tel" class="form-control shadow" name="phone" value="<?php echo $row['phone']; ?>" placeholder="ejem: 9999999999" />
                    </div>
                  </div>

                  <?php if (!empty($errores)): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><?php echo $errores; ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                  <?php endif; ?>
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-lg">Actualizar</button><br>
                    <a href="index.php" class="btn btn-info text-center">Regresar</a>

                  </div>

                </form>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
</body>
</html>