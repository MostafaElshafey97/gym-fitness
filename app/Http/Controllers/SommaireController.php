<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use DB;
use App\Chart;
class SommaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $GYM_subscribers=User::join('role_users', 'role_users.user_id', '=', 'users.id')
        ->where('role_users.role_id','=','1')->count();
        $Accounts_subscribers=User::join('role_users', 'role_users.user_id', '=', 'users.id')
        ->where('role_users.role_id','=','2')->count();

$groups = DB::table('users')
->select('created_at', DB::raw('count(*) as total'),DB::raw('YEAR(created_at) year, MONTH(created_at) month,MONTHNAME(created_at) month_name'))
->groupBy('created_at','month')
->pluck('total', 'month_name')->all();

for ($i=0; $i<=count($groups); $i++) {
    $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
    }
    // Prepare the data for returning with the view
    $chart = new Chart;
    $chart->labels = (array_keys($groups));
    $chart->dataset = (array_values($groups));
    $chart->colours = $colours;
        return view('admin.dashboard',compact('GYM_subscribers','Accounts_subscribers','chart','groups'));
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
