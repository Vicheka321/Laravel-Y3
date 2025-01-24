<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sample blade php</title>
</head>
<body>
    <h1>Show Customer</h1>
    <table border="1px">
        <tbody>
            <tr>
                <td>CID</td>
                <td>{{ $item->cid}}</td>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{ $item->name}}</td>
            </tr>
            <tr>
                <td>Tel</td>
                <td>{{ $item->tel}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
