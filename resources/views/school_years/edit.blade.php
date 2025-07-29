<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update a school year</title>
</head>
<body>
    <form action="{{ route('school-years.update', $schoolYear->id) }}" method="post">
        @csrf
        @method('PUT')
        Name: <input type="text" name="name" value="{{ $schoolYear->name }}"><br>
        Start year: <input type="text" name="start_year" value="{{ $schoolYear->start_year }}"><br>
        End year: <input type="text" name="end_year" value="{{ $schoolYear->end_year }}"><br>
        <button>Edit</button>
    </form>
</body>
</html>
