<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Customer</title>
</head>
<body>
    <h1>Edit Customer</h1>
    <form action="{{ route('customers.update', $item->cid) }}" method="POST">
      @csrf
      @method("PUT")
        <table>
            <tbody>
                <tr>
                    <td>CID</td>
                    <td>{{ $item->cid }}</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" id="name" value="{{ $item->name }}"></td>
                </tr>
                <tr>
                    <td>Tel</td>
                    <td><input type="text" name="tel" id="tel" value="{{ $item->tel }}"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="UPDATE"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>


