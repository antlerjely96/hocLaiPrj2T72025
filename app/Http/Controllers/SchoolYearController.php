<?php

namespace App\Http\Controllers;

use App\Models\SchoolYear;
use App\Http\Requests\StoreSchoolYearRequest;
use App\Http\Requests\UpdateSchoolYearRequest;
use Illuminate\Support\Facades\Redirect;

class SchoolYearController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory
    {
        //Lay du lieu tu db
        $schoolYears = SchoolYear::all();
        //Gui sang view de hien thi
        return view('school_years.index', [
            'schoolYears' => $schoolYears
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory
    {
        return view('school_years.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSchoolYearRequest $request): \Illuminate\Http\RedirectResponse
    {
        //Luu len db
        SchoolYear::create($request->all());
        //Quay lai danh sach
        return Redirect::route('school-years.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(SchoolYear $schoolYear)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SchoolYear $schoolYear): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory
    {
        //Hien thi form sua
        return view('school_years.edit', [
            'schoolYear' => $schoolYear
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchoolYearRequest $request, SchoolYear $schoolYear): \Illuminate\Http\RedirectResponse
    {
        //Update du lieu tren db
        $schoolYear->update($request->all());
        //Quay lai danh sach
        return Redirect::route('school-years.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SchoolYear $schoolYear): \Illuminate\Http\RedirectResponse
    {
        //Xoa du lieu
        $schoolYear->delete();
        //Quay ve danh sach
        return Redirect::route('school-years.index');
    }
}
