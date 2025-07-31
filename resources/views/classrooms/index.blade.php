<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Class List</title>
</head>
<body>
    <a href="{{ route('classrooms.create') }}">Add a class</a>
    <table border="1px" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Number of students</th>
            <th>School year</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($classrooms as $classroom)
            <tr>
                <td> {{ $classroom->id }} </td>
                <td> {{ $classroom->name }} </td>
                <td> {{ $classroom->number_student }} </td>
                <td> {{ $classroom->schoolYear->name }} </td>
                <td>
                    <a href="{{ route('classrooms.edit', $classroom->id) }}">Edit</a>
                </td>
                <td>
                    <form action="{{ route('classrooms.destroy', $classroom->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
