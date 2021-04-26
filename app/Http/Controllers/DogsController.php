<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dogs;
class DogsController extends Controller
{
    public function index(){

        return Dogs::all();
    }
    public function store(Request $request){
        Dogs::create($request->all());
    }

    public function show($id){
        return Dogs::findOrFail($id);
    }

    public function update(Request $request , $id){
      Dogs::findOrFail($id)->update($request->all());
    }

    public function destroy($id){
        Dogs::findOrFail($id)->delete();

    }
}
