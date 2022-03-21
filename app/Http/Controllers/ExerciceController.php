<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exercice;
class ExerciceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exercices=Exercice::all();
        return view('admin.exercices.listes',compact('exercices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.exercices.create_exercice');
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
          // return $request->all();
           $user= new Exercice;
           $user->name_exercice =$request->name_exercice;
           $user->id_muscle_group =$request->DRR;
           $user->muscle_id =$request->regions;
           $user->level =$request->level;
           $user->id_gym_room=$request->id_gym_room;
           $user->time_exercice=$request->time_exercice;
           
           $user->Description =$request->Description;
           if ($request->hasFile('image')) {
           
            $data = $request->input('image');
            $photo = $request->file('image')->getClientOriginalName();
            $destination = base_path() . '/public/storage/muscles/muscles';
            $request->file('image')->move($destination, $photo);
           
            $user->image=$photo;
           
        }
        //
        if ($request->hasFile('device')) {
           
            $data = $request->input('device');
            $photo = $request->file('device')->getClientOriginalName();
            $destination = base_path() . '/public/storage/exercices';
            $request->file('device')->move($destination, $photo);
           
            $user->image=$photo;
           
        }
           $user->save();
           return redirect()->to('exercices');

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
    public function update(Request $request, $id)
    {
        //
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
    }
}
