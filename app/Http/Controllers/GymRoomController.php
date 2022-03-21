<?php

namespace App\Http\Controllers;

use App\Gym_room;
use Illuminate\Http\Request;

class GymRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gymroom=Gym_room::all();
        return view('GymRoom.index',compact('gymroom'));
        //return view('GymRoom.Dashboard');
        /**
 */
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gym_room  $gym_room
     * @return \Illuminate\Http\Response
     */
    public function show(Gym_room $gym_room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gym_room  $gym_room
     * @return \Illuminate\Http\Response
     */
    public function edit(Gym_room $gym_room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gym_room  $gym_room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gym_room $gym_room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gym_room  $gym_room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gym_room $gym_room)
    {
        //
    }
}
