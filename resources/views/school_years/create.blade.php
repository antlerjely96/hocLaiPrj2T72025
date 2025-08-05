@extends('layouts.layout')
@section('page-heading')
    Add a school year
@endsection
@section('content')
    <form action="{{ route('school-years.store') }}" method="post">
        @csrf
        Name: <input type="text" name="name"><br>
        Start year: <input type="text" name="start_year"><br>
        End year: <input type="text" name="end_year"><br>
        <button>Add</button>
    </form>
@endsection
