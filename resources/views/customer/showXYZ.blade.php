<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="w-75 p-3">
        <h1>Show Customer</h1>
        <table class="table table-sm">
            <tbody>
                <tr>
                    <th>CID</th>
                    <td>{{ $item->cid }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $item->name }}</td>
                </tr>
                <tr>
                    <th>Tel</th>
                    <td>{{ $item->tel }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
