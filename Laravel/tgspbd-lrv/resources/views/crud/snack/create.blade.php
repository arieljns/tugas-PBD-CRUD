<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>

</head>
<body>
    
<h1>Create Snack</h1>
<form method="post" action="/crud/snack">
    @csrf
  <label for="nama">Nama Snack:</label><br>
  <input type="text" id="nama" name="nama" ><br>
  <label for="harga">Harga:</label><br>
  <input type="number" id="harga" name="harga" ><br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>