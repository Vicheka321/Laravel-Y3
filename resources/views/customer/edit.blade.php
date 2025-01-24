<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="w-75 p-3">
        <h1>Edit Customer</h1>
        <form action="{{ route('customers.update', $item->cid) }}" method="POST">
            @csrf
            @method('PUT')
            <table class="table table-sm">
                <tbody>
                    <tr>
                        <th>CID</th>
                        <td>{{ $item->cid }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><input type="text" class="form-control" name="name" id="name" value="{{ $item->name }}"></td>
                    </tr>
                    <tr>
                        <th>Tel</th>
                        <td><input type="text" class="form-control" name="tel" id="tel" value="{{ $item->tel }}"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" class="btn btn-primary btn-sm" value="UPDATE"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</body>

</html>
