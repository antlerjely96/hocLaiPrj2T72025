<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>School year list</title>
</head>
<body>
    <a href="{{ route('school-years.create') }}">Add a school year</a>
    <table border="1px" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Start year</th>
            <th>End year</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($schoolYears as $schoolYear)
            <tr>
                <td> {{ $schoolYear->id }} </td>
                <td> {{ $schoolYear->name }} </td>
                <td> {{ $schoolYear->start_year }} </td>
                <td> {{ $schoolYear->end_year }} </td>
                <td>
                    <a href="{{ route('school-years.edit', $schoolYear->id) }}">Edit</a>
                </td>
                <td>
                    <form action="{{ route('school-years.destroy', $schoolYear->id) }}" method="post">
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
