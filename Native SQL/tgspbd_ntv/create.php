


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <br>
<a class="backLink" href='./index.php'>Back</a>

        <h2>Add</h2>
        <form action="create.php" method="post" name="form1" enctype="multipart/form-data">
            <table width="25%" border="0">
                <tr>
                    <td>Nama:</td>
                    <td><input type="text"  name="name"></td>
                </tr>

                <tr>
                    <td>Tipe Laptop:</td>
                    <td><input type="text" name="tipe"></td>
                </tr>

                
                
                
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
            </table>
        </form>

        <?php
            
            include_once('./config.php');

            if(isset($_POST['Submit'])) {
                $nama = $_POST['name'];
                $tipe = $_POST['tipe'];
                
        
             
                
               
        
             // Insert user data into table
                $result = mysqli_query($mysqli, 
                    "INSERT INTO laptop_tb(nama_laptop,tipe_laptop) 
                    VALUES('$nama','$tipe')"
                );
        
             // Show message when user added
                echo "ADDED   <a href='./index.php'>Click here to Continue</a>";
            }
        
        
        
        
            
            
            
        
        
        
        
        

           
            

        ?>


</body>
</html>