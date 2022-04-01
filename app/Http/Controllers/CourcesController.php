<?php

namespace App\Http\Controllers;
use App\Models\Cource;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use App\Models\CourceUser;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
class CourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cource=Cource::all();
        return view("mycoucrce",["data"=>$Cource]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("cources.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        $input['user_id']=auth()->user()->id;
        Cource::create($input);
        return redirect("/cources")->withSuccess(' Cource Added Successfuly ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cource  $cource
     * @return \Illuminate\Http\Response
     */
    public function show(Cource $cource)
    {
        return view("cources.show",["data"=>$cource]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cource  $cource
     * @return \Illuminate\Http\Response
     */
    public function edit(Cource $cource)
    {
       return view("cources.edit",["data"=>$cource]);
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cource  $cource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cource $cource)
    {
        $cource->update($request->all());
        return redirect("/cources");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cource  $cource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cource $cource)
    {
         $cource->delete();
        return redirect("/cources");
   
    }
    public function getCources()
    {   
        $data=auth()->user()->cources->pluck('id')->all();
        $Cource=Cource::whereNotIn('id',$data)->get();
        $user=auth()->user();
        return view("avilablecource",["data"=>$Cource,"user"=>$data]);
    }
    public function addusercorce($cource)
    {

        $input['user_id']=auth()->user()->id;
        $input['cource_id']=$cource;
        CourceUser::create($input);
        return redirect("/avaliblecource")->withSuccess(' Cource Enroll Successfuly ');
        
         
    }
    public function getenrollcource()
    {
         $data=auth()->user()->cources;
         return view("myenrollcource",["data"=>$data]);
    }

    public function deletusercorce($cource)
    {
        
        auth()->user()->cources()->detach($cource);
        return redirect("/getenrollcource")->withSuccess(' Cource Un-Enroll Successfuly ');
        
       
    }
    
}
