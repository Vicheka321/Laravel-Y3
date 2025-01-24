<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sample blade php</title>
</head>

<body>
    <h1>Create New Customer</h1>
    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        @method('POST')
        <table>
            <tbody>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" id="name"
                        placeholder="Enter Name"></td>
                </tr>
                <tr>
                    <td>Tel</td>
                    <td><input type="text" name="tel" id="tel"
                        placeholder="Enter Tel"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="SAVE"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>
