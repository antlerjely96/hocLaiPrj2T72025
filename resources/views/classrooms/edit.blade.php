<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update a class</title>
</head>
<body>
    <form action="{{ route('classrooms.update', $classroom->id) }}" method="post">
        @csrf
        @method('PUT')
        Name: <input type="text" name="name" value="{{ $classroom->name }}"><br>
        Number of student: <input type="number" name="number_student" value="{{ $classroom->number_student }}"><br>
        School year: <select name="school_year_id">
            @foreach($schoolYears as $schoolYear)
                <option value="{{ $schoolYear->id }}"
                    @if($schoolYear->id == $classroom->school_year_id)
                        {{ 'selected' }}
                    @endif
                >
                    {{ $schoolYear->name }}
                </option>
            @endforeach
        </select><br>
        <button>Update</button>
    </form>
</body>
</html>
