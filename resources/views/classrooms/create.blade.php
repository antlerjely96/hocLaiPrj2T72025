<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add a class</title>
</head>
<body>
    <form action="{{ route('classrooms.store') }}" method="post">
        @csrf
        Name: <input type="text" name="name"><br>
        Number of student: <input type="number" name="number_student"><br>
        School year: <select name="school_year_id">
            @foreach($schoolYears as $schoolYear)
                <option value="{{ $schoolYear->id }}">
                    {{ $schoolYear->name }}
                </option>
            @endforeach
        </select><br>
        <button>Add</button>
    </form>
</body>
</html>
