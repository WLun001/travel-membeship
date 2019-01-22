<?php

namespace App\Http\Controllers;

use App\Division;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $division = new Division();
        return view('divisions.create', ['division' => $division]);
    }

    /**
     * Store a newly created resource in storage
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     *
     */
    public function store(Request $request)
    {
        $division = new Division();
        $division->fill($request->all());
        $division->save();

        return redirect()->route('divisions.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $division = Division::orderBy('name', 'asc')->get();

        return view('divisions.index', ['divisions' => $division]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $division = Division::find($id);
        if (!$division) throw new ModelNotFoundException;
        return view('divisions.show', ['division' => $division]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $division = Division::find($id);
        if (!$division) throw new ModelNotFoundException;

        return view('divisions.edit', ['division' => $division]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $division = Division::find($id);
        if (!$division) throw new ModelNotFoundException;

        $division->fill($request->all());
        $division->save();

        return redirect()->route('division.index');
    }

}
