<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color:Turquoise ">
    <div class="container">
        <h1 align="center">Data Guru </h1>
        <a href="/teachers/create">
            <button class="btn btn-success">Tambah Data</button>
        </a>
        <br>
        <table style="background-color: darkgray" class="table table-bordered">
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>J.kel</th>
                <th>Mapel</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            <?php
                $nomer=1;
            ?>
            @foreach ($dataguru as $isi )
            <tr>
                <td>{{$nomer++}}</td>
                <td>{{$isi->nik}}</td>
                <td>{{$isi->name}}</td>
                <td>{{$isi->gender}}</td>
                <td>{{$isi->subject}}</td>
                <td>{{$isi->religion}}</td>
                <td>{{$isi->address}}</td>
                <td>
                    <a href="/teachers/{{$isi->id}}/edit" class="btn btn-warning" title="edit data : {{$isi->id}}">
                        Edit
                    </a>

                    <form method="POST" action="/teachers/{{$isi->id}}">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger" title="hapus data  : {{$isi->id}}">Hapus</button>

                    </form>
                </td>
            </tr>

            @endforeach
        </table>
    </div>
</body>
</html>
