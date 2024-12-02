<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
  
    public function index()
    {
        $computer = Computer::all();
        return response()->json($computer,200);
    }

    
    // public function search(string $search)
    // {
    //     $computer = Computer::where('brand', 'like' , "%".$request ['search'] . "%")-> get();

    //     if($computer){
    //      return response()->json($computer);
    //  }
    //  return response()->json(['response'=>'no records found!']);
    // }

   
    public function store(Request $request)
    {
        $validatedData=$request-> validate([
            'brand'=>'required|string',
            'model'=>'required|string'

        ]);

        Computer::create($validatedData);
        return response() -> json(['response' => 'success' ] , 200);
    }

   
    public function show(string $id)
    {
       
       $computer = Computer::find($id);

       if($computer){
        return response()->json($computer, 200);
    }
    return response()->json(['response'=>'no records found!']);
    }

    
    public function update(Request $request, string $id)
    {
        $computer = Computer::find($id);

        if($computer){

            $validatedData = $request->validate([
                'brand'=>'required|string',
                'model'=>'required|string'

            ]);

            $computer -> update($validatedData);
            return response() -> json(['response' => 'success' ] , 200);
    }
    return response()->json(['response'=>'no records found!']);
    }

   
    public function destroy(string $id)
    {
        $computer = Computer::find($id);

       if($computer){
        $computer -> delete();
        return response()->json(['response' => 'success']);
    }
    return response()->json(['response'=>'no records found!']);
    }
}
