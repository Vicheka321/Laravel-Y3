<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Customer Index</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="w-75 p-3">
        <h1>Customer Index</h1>
        <p><a href="{{ route('customers.create') }}" class="btn btn-primary btn-sm">INSERT NEW</a></p>
        <table border="1px" class="table table-hover">
            <thead class="table-primary">
                <th>Customer ID</th>
                <th>Name</th>
                <th>Tel</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($customer as $item)
                    <tr>
                        <td>{{ $item->cid }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->tel }}</td>
                        <td>
                            <a href="{{ route('customers.show', $item->cid) }}" class="btn btn-sm btn-info">View</a>
                            <a href="{{ route('customers.edit', $item->cid) }}" class="btn btn-secondary btn-sm">Edit</a>
                            <form action="{{ route('customers.destroy', $item->cid) }}" method="POST"
                                class="d-inline"
                                onsubmit="return confirm('Delete this item?');">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="DELETE" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
