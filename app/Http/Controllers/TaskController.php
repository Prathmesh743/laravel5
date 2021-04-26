<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\TaskCollection;
use App\Http\Resources\Task;
use App\Task as Item;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
         $this->middleware('cors');
    }
    public function index()
    {
        //
         // return new TaskCollection(Item::all());
            return Item::all();
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
    public function store(Request $request)
    {
        //
           $title= $request->title;
           $task=  $request->task;
           $data = ['task' => $task];
           $item =Item::create(['title' => $title , 'task' => $data]);
           return response()->json($item,201);
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
        try 
        {
            $task = Item::findOrFail($id);
            //$task= Item::where('title','Avenger Series')->first();
            return $task;
        }
        catch(ModelNotFoundException $exception)
        {
            return response()->json('Sry No Record Found!',404);
        }
        
          
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
    public function update(Request $request, $id)
    {
          $title= $request->title;
         $task= $request->task;

         $data= ['task' => $task];

          Item::updateOrCreate(['id' => $id],['title' => $title,'task' => $task]);
         
          return response()->json('Task Updated..', 200);
          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $model= Item::find($id);
         $model->delete();
         return response()->json('Task Deleted Successfully...', 200);
    }
}
