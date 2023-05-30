<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>

</head>
<body>
    
<h1>Edit  Snack</h1>
<form method="post" action="{{ route('snack.update', $snack->id) }}">

    @csrf
    @method('put')
    <input type="hidden" name="_method" value="PUT">
  <label for="nama">Nama Snack:</label><br>
  <input type="text" id="nama" name="nama" value="{{ $snack->nama }}"><br>
  <label for="harga">Harga:</label><br>
  <input type="number" id="harga" name="harga" value={{ $snack->harga }}><br><br>
  <button type="submit" >Submit</button>
</form> 

</body>
</html>