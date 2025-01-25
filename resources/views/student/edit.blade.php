<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="w-75 p-3">
            <h1 class="text-center">Edit Student Data</h1>
            <form action="{{ route('student.update', $item->student_id) }}" method="POST">
                @csrf
                @method('PUT')
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th>Student ID</th>
                            <td>{{ $item->student_id}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td><input type="text" class="form-control" name="name" id="name" value="{{ $item->name }}"></td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>
                                <select class="form-control" name="gender" id="gender">
                                    <option value="Male" {{ $item->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ $item->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                    <option value="Other" {{ $item->gender == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><input type="text" class="form-control" name="email" id="email" value="{{ $item->email }}"></td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td><input type="text" class="form-control" name="phone_number" id="phone_number" value="{{ $item->phone_number }}"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" class="btn btn-primary btn-sm" value="UPDATE"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</body>

</html>
