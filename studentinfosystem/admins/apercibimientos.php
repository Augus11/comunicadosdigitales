<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';


  if(isset($_SESSION['adminName'], $_SESSION['password'])) {

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Apercibimientos - Colegio Preuniversitario Escobar</title>

    <link href="../admins/css/custom.css" rel="stylesheet">
	<link href="../admins/css/bootstrap.min.css" rel="stylesheet">
    <link href="../admins/assets/css/styles.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>

  




    <div class="wrapper">


        <div class="body-overlay"></div>


        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="https://www.colegioubaescobar.gob.ar/wp-content/uploads/2020/07/cropped-WhatsApp-Image-2020-02-10-at-11.45.15.jpeg"  /><span></span></h3>
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="home.php" class="dashboard"><i class="material-icons">dashboard</i><span>Inicio</span></a>
                </li>
                
                


                <a href="Calificaciones/calificaciones.php">
                    <li class="dropdown">
                        <i class="material-icons">domain_verification</i><span>Calificacionnes</span></a>
                    </li>
                </a>

                <a href="autorized.php">
                    <li class="dropdown">
                            <i class="material-icons">library_books</i><span>Autorizados a retirar</span></a>
                    </li>
                </a>

                <a href="Events/eventos.php">
                    <li class="dropdown">
                            <i class="material-icons">event</i>

                            <span>Eventos</span></a>
                    </li>
                </a>


                <li class="dropdown">
                    <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">account_circle</i><span>Cuenta</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu5">
                        <li>
                            <a href="profile.php">Mi cuenta</a>
                        </li>
                        <li>
                            <a href="editprofile.php">Editar Usuario</a>
                        </li>
                        <li>
                            <a href="changepassword.php">Cambiar Contrase??a</a>
                        </li>
                    </ul>
                </li>

            </ul>


        </nav>



        <!-- Page Content  -->
        <div id="content">

            <div class="top-navbar">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                            <span class="material-icons">arrow_back_ios</span>
                        </button>

                        <div>
                        </div>
                        
                        <div class="welcome"><?php echo "<a href='profile.php' style='font-size:20px;'>".$_SESSION['adminName']."</a>";?></div>

                        <div>
                        <p style='font-size:20px; margin-top:10px; color:white;'>??????</p>
                        </div>

                        <a href="logout.php" style='font-size:18px; color:white; margin-left:40px;'>Cerrar sesi??n<span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>

                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button"
                            data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="material-icons">more_vert</span>
                        </button>

                        <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none"
                            id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            

            <div class="main-content">

                <div class="row">

                        
                    </div>

                    <div class="card" style="min-height: 600px; width: auto;">
                        <div class="card-header">
                        <a href="home.php" class="btn btn-primary" style="width: 270px; margin:15px; margin-right:5px;">??? Volver atras</a>
                                <h4 style="font-size: 20px; margin-left:17px;">Crear Apercibimiento</h4>

                            <div style="display: flex; align-items: center; ">

                                <div id="container">

                                <script type="text/javascript">
                                    function submitForm(action) {
                                        var form = document.getElementById('form1');
                                        form.action = action;
                                        form.submit();
                                    }
                                </script>

                                    <center>
                                        <div class="profile-box box-left">
                                            <form action="" method="post" name="form1">
                                            <center>
                                                <p>
                                                    <div class="form-group" style="width: auto;">
                                                        <label for="textarea" class="title" style="font-size:15px; margin-bottom:15px;">Raz??n</label>
                                                        <textarea class="form-control" name="reason" id="textarea" cols="80" rows="5" style="margin-bottom:25px;"> </textarea>

                                                        <label for="textarea" class="title" style="font-size:15px; margin-bottom:15px;">DNI del alumno</label>
                                                        <input class="form-control" type="number" style="margin-bottom:15px;" name="dni"></input>

                                                        <label for="textarea" class="title" style="font-size:15px; margin-bottom:15px;">Apercibimientos totales (contando este)</label>
                                                        <input class="form-control" type="number" style="margin-bottom:15px;" name="total"></input>
                                                    </div>
                                                </p>

                                                <p>
                                                    <input  type="submit" name="submit" class="btn btn-success" value="Enviar">
                                                    <a href="home.php" class="btn btn-primary">Cancelar</a>
                                                </p>
                                            </center>
                                            </form>
                                        </div>
                                    </center>

                                    <?php
                                        if(isset($_POST['submit'])) {

                                            $query = mysqli_query($con, "INSERT INTO apercibimientos (dni,reason,total,fecha) VALUES('".$_POST['dni']."','".$_POST['reason']."','".$_POST['total']."', NOW())");	
                                    
                                            if($query) {
                                              echo "<script> window.location.href='apercibimientos.php' </script>";
                                            }
                                        }
                                    ?>

                                    <div class="container my-5" style='float: left;'>
                                        <h2 style='font-size:20px; margin-bottom:10px; margin-top:25px;'>Buscar DNI de alumno por nombre</h2>
                                        <a href="search.php" class="btn btn-primary" style="width: 125px; height:35px; margin:15px; margin-left:0px; text-align:center; vertical-align: middle;">Buscar</a>                           
                                    </div>

                                

                                    <div class="container my-5" style='float: left; width:100%;'>
                                        <h2 style='font-size:20px; margin-bottom:10px;'>Lista de apercibimientos</h2>

                                        <form action="">
                                            <div class="input-group mb-3">
                                                <input value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" type="text" class="form-control" placeholder="Buscar Apercibimientos" name="search">
                                                <button type="submit" name="submit2" class="btn btn-primary" style="margin-left:3px;">Buscar</button>
                                            </div>
                                        </form>

                                        <br>
                                        <div style="overflow-x:auto;">
                                        <table class="table" style="width:100%;">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>DNI del alumno</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Curso</th>
                                                <th>Raz??n</th>
                                                <th>Apercibimientos totales</th>
                                                <th>Fecha</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php

                                                    $sql = "SELECT * FROM apercibimientos";
                                                    $result = $con->query($sql);

                                                    if(!$result) {
                                                        die("Invalid query.");
                                                    }

                                                    while($row = $result->fetch_assoc()) {
                                                        
                                                        $sql3 = "SELECT * FROM students WHERE dni = '".$row['dni']."'";
                                                        $result3 = $con->query($sql3);
                                                        
                                                        while($row3 = $result3->fetch_assoc()) {
                                                            
                                                        echo "
                                                            <tr>
                                                                <td style='font-size:15px;'>$row[id]</td>
                                                                <td style='font-size:15px;'>$row[dni]</td>
                                                                
                                                                <td style='font-size:15px;'>$row3[firstname]</td>
                                                                <td style='font-size:15px;'>$row3[lastname]</td>

                                                                <td style='font-size:15px;'>$row3[course]</td>
                                                                <td style='font-size:15px;'>$row[reason]</td>
                                                                <td style='font-size:15px;'>$row[total]</td>
                                                                <td style='font-size:15px;'>$row[fecha]</td>
                                                            <td>
                                                                <a class='btn btn-primary btn-sm' href='apercibimientosEdit.php?id=$row[id]'>Editar</a>
                                                                <a class='btn btn-danger btn-sm' href='apercibimientosDelete.php?id=$row[id]'>Eliminar</a>
                                                            </td>
                                                            </tr>
                                                        ";
                                                    }
                                                    }

                                                ?>
                                            
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <nav class="d-flex">
                                    <ul class="m-0 p-0">
                                        
                                    </ul>
                                </nav>

                            </div>
                            <div class="col-md-6">
                                <p class="copyright d-flex justify-content-end"> &copy 2021 
                                    <a href="#"></a> 
                                </p>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>



        </div>
    </div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });

            $('.more-button,.body-overlay').on('click', function () {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });

        });





    </script>
</body>
</html>

<?php


  } else {
    header("location:index.php");
    exit;
  }

  unset($_SESSION['prompt']);
  mysqli_close($con);

?>