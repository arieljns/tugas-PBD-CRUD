<?php
// Create database connection using config file
include_once("./config.php");



// Display selected unit based on id
    // Getting id from url
    
    if (isset($_GET['id']))
    {$id = $_GET['id'];
    }
    else {
        header("Location: ./index.php");
    }
    // Fetch data based on id
    $result = mysqli_query($mysqli, "SELECT * FROM laptop_tb WHERE id_laptop='$id'");

    while($row = mysqli_fetch_array($result))
    {
    $nama = $row['nama_laptop'];
    $tipe = $row['tipe_laptop'];
    
    }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pages/styles_pages.css">
    <link rel="icon" type="image/x-icon" href="../assets/main/logo-transparent.ico">

    <title>Edit</title>
</head>
<body>
        <br/>
        <a class="backLink" href='./index.php'>Back</a>
        <h2>Edit Unit</h2>
        <form action="update.php" method="post" name="edit" enctype="multipart/form-data">
            <table width="25%" border="0">
                <tr>
                    <td>Nama:</td>
                    <td><input type="text"  name="nama_laptop" value='<?php echo $nama;?>'></td>
                    
                </tr>

                <tr>
                    <td>Tipe:</td>
                    <td><input type="text"  name="tipe_laptop" value='<?php echo $laptop;?>'></td>
                    
                </tr>

                
                <tr >
                    <td><input type="hidden" name="id_temp" value='<?php echo $_GET['id'];?>'>
                 
                    <td ><input type="submit" name="Update" value="Update" ></td>
                    
                </tr>
            </table>
        </form>


        <?php
           if(isset($_POST['Update']))
           {
              
               $nama = $_POST['nama_laptop'];
               $warna=$_POST['tipe_laptop']; 
               $id=$_POST['id_temp'];
           
              //global $mysqli;
               // update data
               $result = mysqli_query($mysqli, "UPDATE laptop_tb SET 

                          
                           nama_laptop='$nama', 
                           tipe_laptop='$tipe'
                           
           
                           
                           WHERE id_laptop='$id'");
               // Redirect to homepage to display updated data in list
            
            
               header("Location:./index.php");
           }

          

        ?>


</body>
</html>