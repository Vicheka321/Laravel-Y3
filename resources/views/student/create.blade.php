<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="w-75 p-3">
            <h1 class="text-center">Create New Student</h1>
            <form action="{{ route('student.store') }}" method="POST">
                @csrf
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" class="form-control" name="name" id="name" placeholder="Enter Name"></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>
                                <select class="form-control" name="gender" id="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" class="form-control" name="email" id="email" placeholder="Enter Email"></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Enter Phone Number"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" class="btn btn-primary btn-sm" value="SAVE"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</body>

</html>
