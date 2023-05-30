<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Laravel: Snack</title>
</head>
<body>
<h1>Tugas PBD</h1>
    <h2>Nathanael Zorens Y.I.</h2>
    <h3>21120119120021 | Kelas B</h3>
    <br/>
    <h3>CRUD ORM Laravel (Eloquent)</h3>
    <table>

    <th>ID</th>
    <th>Nama</th>
    <th>Harga</th>

    <th>Update</th>
    <th>Delete</th>

    <div>
    @foreach ($snacks as $snack)
        
<tr>

<td>{{$snack->id}}</td>

<td>{{$snack->nama}}</td>
<td>{{$snack->harga}}</td>


<td><a href="{{ route('snack.edit',$snack->id) }}">Update</a></td>

<td>

<form action="{{ route('snack.destroy',$snack->id) }}" method="POST">
   

   @csrf
   @method('DELETE')

   <button type="submit" >Delete</button>
</form>
</td>

</tr>

    @endforeach
    </div>
    
    </table>

<h3><a href="/crud/snack/create">Create</a></h3>

</body>
</html>