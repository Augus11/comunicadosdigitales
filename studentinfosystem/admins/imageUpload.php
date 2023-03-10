<?php 

 session_start();

require 'connect.php'; 

if(isset($_SESSION['adminName'], $_SESSION['password'])) { 

 
if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "connect.php";
    
    $dni = $_POST['dni'];
	$image = $_FILES['my_image'];
	//echo "<br>";
 
	//echo $dni;
	//print_r($image);
 
	$imagefilename=$image['name'];
	$imagefileerror=$image['error'];
	$imagefiletemp=$image['tmp_name']; 
	//print_r($imagefilename);
//	echo "<br>";
//	print_r($imagefileerror);
//	echo "<br>";
//	print_r($imagefiletemp);
//	echo "<br>";

	$filename_separate=explode('.',$imagefilename);
//  print_r($filename_separate);
	$file_extension=strtolower(end($filename_separate));

	$extension=array('jpeg', 'jpg', 'png');
	if(in_array($file_extension,$extension)) {
	   // echo $imagefilename;
		$upload_image='uploads/'.$imagefilename;
		//echo $upload_image;
		move_uploaded_file($imagefiletemp,$upload_image);
		$sql = "INSERT INTO images (dni, image_url) values('$dni', '$upload_image')";
		$result = mysqli_query($con, $sql);

		if($result) {
			//echo "Data Inserted";
		}
		else {
			die(mysqli_error($con));
		} 
	}

}

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Aptos y Certificados - Colegio Preuniversitario Escobar</title>

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
    

 <div class="container my-5" style='float: left;'>
     <a href="images.php" class="btn btn-primary" style="width:130px; margin-bottom:40px;">??? Volver atras</a>

    <h2 style='font-size:20px; margin-bottom:10px;'>Lista de Certificados</h2>

    <form action="">
        <div class="input-group mb-3">
                <input value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" type="text" class="form-control" placeholder="Buscar Certificados" name="search">
            <button type="submit" class="btn btn-primary" style="margin-left:3px;">Buscar</button>
        </div>
    </form>

    <br>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Curso</th>
            <th>Im??gen</th>
        </tr>
        </thead>
        <tbody>

            <?php

                if(isset($_GET['search'])) {
                    $filtervalues = $_GET['search'];
                    $sql = "SELECT * FROM images";
                    $result = mysqli_query($con, $sql);

                    if(!$result) {
                        die("Invalid query.");
                    }

                    if(mysqli_num_rows($result) > 0) {

                        foreach($result as $row){ 
                            $image = $row['image_url'];
                            $url = "uploads/$image";
                            
                            $sql3 = "SELECT * FROM students WHERE dni = '".$row['dni']."'";
                                                        $result3 = $con->query($sql3);
                                                        
                                                        while($row3 = $result3->fetch_assoc()) {
                            ?>

                            <tr>
                                <td style='font-size:15px;'> <?= $row['id']; ?> </td>
                                <td style='font-size:15px;'><?= $row['dni']; ?></td>
                                <td style='font-size:15px;'><?= $row3['firstname']; ?></td>
                                <td style='font-size:15px;'><?= $row3['lastname']; ?></td>
                                <td style='font-size:15px;'><?= $row3['course']; ?></td>
                                <td> <img style='width:500px;' src='$image'/> </td>
                            <td>
                                <?php
                                echo "
                                    <a class='btn btn-danger btn-sm' href='imagesDelete.php?id=$row[id]'>Eliminar</a>
                                ";
                                ?>
                            </td>
                            </tr>
                            <?php
                        }
                    }
                    }
                }
                else {

                $sql = "SELECT * FROM images";
                $result = $con->query($sql);

                if(!$result) {
                    die("Invalid query.");
                }

                while($row = $result->fetch_assoc()) {
                    $image =  $row['image_url'];
                    $url = "uploads/$image";
                    
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
                            <td> <img style='width:500px;' src='$image'/> </td>
                        <td>
                            <a class='btn btn-danger btn-sm' href='imagesDelete.php?id=$row[id]'>Eliminar</a>
                        </td>
                        </tr>
                    ";
                }
            }
                }

            ?>
                
        </tbody>
    </table>
</div>
</div>

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