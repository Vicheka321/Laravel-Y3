<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Student Index</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="w-75 p-3">
            <h1 class="text-center">Student Index</h1>
            <p><a href="{{ route('student.create') }}" class="btn btn-primary btn-sm">INSERT NEW</a></p>
            <table border="1px" class="table table-hover">
                <thead class="table-primary">
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Action</th>

                </thead>
                <tbody>
                    @foreach ($student as $item)
                        <tr>
                            <td>{{ $item->student_id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->gender }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone_number }}</td>
                            <td>
                                <a href="{{ route('student.view', $item->student_id) }}" class="btn btn-sm btn-info">View</a>
                                <a href="{{ route('student.edit', $item->student_id) }}" class="btn btn-secondary btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm" onclick="confirmDelete({{ $item->student_id }})">DELETE</button>
                                <form id="delete-form-{{ $item->student_id }}" action="{{ route('student.destroy', $item->student_id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form> 
                            </td> 
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function confirmDelete(studentId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + studentId).submit();
                }
            })
        }
    </script>
</body>

</html>