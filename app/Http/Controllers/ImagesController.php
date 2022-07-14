<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectElements;
use Illuminate\Http\Request;
use App\Models\Images;
use App\Http\Requests\ProjectImages;
use App\Http\Requests\ProjectImageUp;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Images::all();
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

    public function store(ProjectImages $request)
    {
      
        $request->validate([ 
            'Element_id',  
            'image_link',
            'status'
        ]);

        $producto = $request->all();

        if($imagen = $request->file('image_link')) {
             $rutaGuardarImg = 'imagen/';
             $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
             $imagen->move($rutaGuardarImg, $imagenProducto);
             $producto['image_link'] = "$imagenProducto";             
        }
         
        Images::create($producto);
        return response()->json(['message' => 'Imagen Agregada Correctamente']);

    /*
        $project = new Images();

         $project->Element_id = $request-> Element_id;
         $project->PyID = $request->PyIDimage_link;
         $project->status = $request->status; 
         $project->save();
         return response()->json(['message' => 'Imagen Agregada Correctamente']);
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
    
  /*  public function update(ProjectImages $request, $projecto)
    {
        $project = ProjectImages::findOrFail($request->id);

        $project->Element_id = $request->Element_id;
        $project->image_link = $request->image_link;
        $project->status = $request->status;

        $project = $request->all();

        if($imagen = $request->file('image_link')){
            $rutaGuardarImg = 'imagen/';
            $imagenProducto = date('YmdHis') . "." . $imagen->getClientOriginalExtension(); 
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $project['image_link'] = "$imagenProducto";
        }else{
            unset($project['image_link']);
        }
        $projecto->update($project);
        
         $request->validate([
            'Element_id',  
            'image_link',
            'status'
        ]);
         $project = $request->all();
         if($imagen = $request->file('image_link')) {
            $rutaGuardarImg = 'imagen/';
            $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $producto['image_link'] = "$imagenProducto";             
        }else{
            unset($project['image_link']);
         }
         $projecto->update( $project);
}*/
  
public function destroy(Request $request)
    {
        $project =Images::destroy($request->id);
        return response()->json(['message' => 'Imagen Eliminada Correctamente']);
    }
}
