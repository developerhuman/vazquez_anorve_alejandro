<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Carbon\Carbon;
use Illuminate\Foundation\format;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $date = new Home();
        $date_f = $date->date();


        return view('home.index', compact('date_f'));
    }

    public function fecha(Request $request)
    {
        //
        
        $pos = strpos($request->hrs, ':');
        if($pos == false ){
            //dd($request);
            alert('Formato de fecha invalido');
            //return false;
            return redirect()->back();
        }else{
               if(strlen($request->hrs) > 5){
                alert('Formato de fecha invalido');
                //return false;
                return redirect()->back();
               }else{
                    $partes = explode(':', $request->hrs);
                    
                    if($partes[0] <= 24){
                        if($partes[1] < 60){
                            alert('Hora valida');
                            return redirect()->back();
                        }else{
                            alert('Hora no valida');
                            return redirect()->back();
                        }
                   }else{
                        alert('Hora no valida');
                        return redirect()->back();

                    }
                
                }
        }
    }

    public function eliminadato(Request $request){
        
        if(strlen($request->arreglo) > 4){
                if(strlen($request->arreglo) > 15){
                alert('El arreglo excede el tamaño permitido');
                return redirect()->back();

                }else{
                    $arr1 = str_split($request->arreglo);
                    $clave = array_search($request->dato, $arr1);
                    //dd($clave);
                    if($clave == false){
                        alert('El dato no se encuentra en el arreglo');
                        return redirect()->back();
                    }else{
                        unset($arr1[$clave]);

                        dd($arr1);
                    }
                    
                }
        }else{
            alert('El arreglo es muy pequeño');
                return redirect()->back();
        }
        
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
