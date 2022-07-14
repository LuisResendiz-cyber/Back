<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projectareas; 
use App\Http\Requests\ProjectTareas; 


class ProjectTareasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Projectareas::all();
        return $projects;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectTareas $request)
    {
        $project = new Projectareas();
        $project->Element_id = $request-> Element_id;
        $project->Pendiente = $request-> Pendiente;
        $project->status = $request-> status;
        $project->Element_Step = $request-> Element_Step;
        
        $project->save();
        return response()->json(['message' => 'Guardado Exitosamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectTareas $request, $id)
    {
        $project = Projectareas::findOrFail($request->id);
        $project->Element_id = $request-> Element_id;
        $project->Pendiente = $request-> Pendiente;
        $project->status = $request-> status;
        $project->Element_Step = $request-> Element_Step;
        $project->save();
        return response()->json(['message' => 'Successfully Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $project =Projectareas::destroy($request->id);
        return response()->json(['message' => 'Successfully Deleted']);
    }
}
