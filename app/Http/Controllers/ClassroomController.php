<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Http\Requests\StoreClassroomRequest;
use App\Http\Requests\UpdateClassroomRequest;
use App\Models\SchoolYear;
use Illuminate\Support\Facades\Redirect;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory
    {
        //Lay du lieu
        $classrooms = Classroom::with('schoolYear')->get();
        //Hien thi view
        return view('classrooms.index', [
            'classrooms' => $classrooms
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory
    {
        //Lay du lieu school year
        $schoolYears = SchoolYear::all();
        //Hien thi view them
        return view('classrooms.create', [
            'schoolYears' => $schoolYears
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClassroomRequest $request)
    {
        //Luu du lieu len db
        Classroom::create([
            'name' => $request->name,
            'number_student' => $request->number_student,
            'school_year_id' => $request->school_year_id
        ]);
        //Quay lai danh sach
        return Redirect::route('classrooms.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Classroom $classroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classroom $classroom): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory
    {
        //Lay school year
        $schoolYears = SchoolYear::all();
        //Hien thi view sua
        return view('classrooms.edit', [
            'schoolYears' => $schoolYears,
            'classroom' => $classroom
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClassroomRequest $request, Classroom $classroom): \Illuminate\Http\RedirectResponse
    {
        //Update du lieu
        $classroom->update([
            'name' => $request->name,
            'number_student' => $request->number_student,
            'school_year_id' => $request->school_year_id
        ]);
        //Quay ve danh sach
        return Redirect::route('classrooms.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classroom $classroom): \Illuminate\Http\RedirectResponse
    {
        //Xoa du lieu
        $classroom->delete();
        //Quay ve danh sach
        return Redirect::route('classrooms.index');
    }
}
