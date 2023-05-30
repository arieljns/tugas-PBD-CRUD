<?php
    
    include_once("./config.php");
    
    
    

    $data = mysqli_query($mysqli, 
                        "SELECT * FROM laptop_tb"
                        );
    
    
    
         

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS PBD CRUD</title>
</head>
<body>
    
<h1>Tugas PBD</h1>
<h2>Ariel Jones Dekock</h2>
<h3>21120119140148/Kelas B</h3>

<h3>CRUD Native</h3>
<table>

<tr>
            <th>ID</th> <th>Nama</th> <th>Tipe</th> 
            
            <th>Edit</th> <th>Hapus</th>
            
        </tr>
        
        <?php

        $queryResults=mysqli_num_rows($data);

        if($queryResults > 0){
            while($item = mysqli_fetch_array($data)) {
                echo "<tr>";
                
                
                
                echo "<td>".$item['id_laptop']."</td>";
                echo "<td>".$item['nama_laptop']."</td>";
                echo "<td>".$item['tipe_laptop']."</td>";
                
                
                echo "<td ><a href='./update.php? id=$item[id_laptop]'>Edit</a> </td>" ;
                echo "<td ><a href='./delete.php? id=$item[id_laptop]'>Delete</a> </td>" ;
                
                "</tr>";
            } }
            
        ?>
        

</table>

<h3><a href="./create.php">Create</a></h3>

</body>
</html>