<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str; 
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\Projects;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\ResponseFactory;
use App\Http\Requests\StoreCurso; 
use Illuminate\Support\Facades\Auth;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Projects::all();
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

public function store(StoreCurso $request)
{
    $request->validated();

    
        $project = new Projects();

        $project->name = $request-> name;   
$project->Customer_name = $request-> Customer_name;
$project->Location = $request-> Location;
$project->Date = $request-> Date;
$project->Status = $request-> Status;

$project->save();

return response()->json(['message' => 'Guardado Exitosamente']);

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    }
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
    public function update(StoreCurso $request, $id, $value)
    {
        $project = Projects::findOrFail($request->id);

        $project->name = $request-> name;   
        $project->Customer_name = $request-> Customer_name;
        $project->Location = $request-> Location;
        $project->Date = $request-> Date;
        $project->Status = $request-> Status;
        $project->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $project=Projects::destroy($request->id);
        return response()->json(['message' => 'Eliminado Exitosamente']);
    }
}
