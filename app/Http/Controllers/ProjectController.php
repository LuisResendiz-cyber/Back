<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projectelement;
use App\Http\Requests\ProjectElements;

class ProjectController extends Controller
{


    public function index()
    {
        $projects = Projectelement::all();
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
    public function store(ProjectElements $request)
    {
        $project = new Projectelement();

        $project->System = $request-> System;
        $project->PyID = $request->PyID;
        $project->Line_Equipment = $request->Line_Equipment;
        $project->Service = $request->Service;
        $project->Area = $request->Area;
        $project->Tag = $request->Tag;
        $project->Num = $request->Num;
        $project->Step_1 = $request->Step_1;
        $project->Step_2 = $request->Step_2;
        $project->Step_3 = $request->Step_3;
        $project->Step_4 = $request->Step_4;
        $project->Step_5 = $request->Step_5;
        $project->Progress = $request->Progress;
        $project->Instrument_type = $request->Instrument_type;
        $project->project_id = $request->project_id;

        $project->save();
        return response()->json(['message' => 'Successfully Saved']);

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
    public function update(ProjectElements $request)
    {
        $project = Projectelement::findOrFail($request->id);
        $project->System = $request-> System;
        $project->PyID = $request->PyID;
        $project->Line_Equipment = $request->Line_Equipment;
        $project->Service = $request->Service;
        $project->Area = $request->Area;
        $project->Tag = $request->Tag;
        $project->Num = $request->Num;
        $project->Step_1 = $request->Step_1;
        $project->Step_2 = $request->Step_2;
        $project->Step_3 = $request->Step_3;
        $project->Step_4 = $request->Step_4;
        $project->Step_5 = $request->Step_5;
        $project->Progress = $request->Progress;
        $project->Instrument_type = $request->Instrument_type;
        $project->project_id = $request->project_id;
        $project->save();
        return $project;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $project =Projectelement::destroy($request->id);
        if($project === 0){
            return response()->json(['message' => 'Id no Encontrado']);
        } return response()->json(['message' => 'Id Eliminado']);       
    }
}
