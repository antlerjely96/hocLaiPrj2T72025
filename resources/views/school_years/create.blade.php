<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add a school year</title>
</head>
<body>
    <form action="{{ route('school-years.store') }}" method="post">
        @csrf
        Name: <input type="text" name="name"><br>
        Start year: <input type="text" name="start_year"><br>
        End year: <input type="text" name="end_year"><br>
        <button>Add</button>
    </form>
</body>
</html>
