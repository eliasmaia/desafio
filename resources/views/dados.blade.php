<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Import TXT & CSV File to Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     
<div class="container">
    <div class="card mt-3 mb-3">
        <div class="card-header text-center">
            <h4>Importando .txt / .csv para banco de dados PostgreSQL</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('dados.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-primary">Import Data</button>
            </form>
  
            <table class="table table-bordered mt-3">
                <tr>
                    <th colspan="3">
                        List Of Users
                    </th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                @foreach($dados as $dado)
                <tr>
                    <td>{{ $dado->id }}</td>
                    <td>{{ $dado->name }}</td>
                    <td>{{ $dado->email }}</td>
                </tr>
                @endforeach
            </table>
  
        </div>
    </div>
</div>
     
</body>
</html>