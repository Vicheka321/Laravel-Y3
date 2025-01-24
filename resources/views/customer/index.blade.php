<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Index</title>
</head>
<body>
    {{-- @foreach ($customer as $item)
        cid {{$item->cid}} | Name: {{ $item->name }} | Tel: {{ $item->tel }} <br/>
    @endforeach --}}

    <h1>Customer Index</h1>
    <table border="1px">
        <thead>
            <th>Customer ID</th>
            <th>Name</th>
            <th>Tel</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($customer as $item)
                <tr>
                    <td>{{$item->cid}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->tel}}</td>
                    <td>
                        <a href="customers/{{$item->cid}}">View</a>
                        <a href="customers/{{ $item->cid }}/edit">Edit</a>
                        <form action="{{ route('customers.destroy', $item->cid) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
