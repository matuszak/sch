<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class libraryController extends Controller
{
   
    public function getIndex()
    {
        return view('library.index');
    }

    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        //
    }
   
    public function update(Request $request, $id)
    {
        //
    }
   
    public function destroy($id)
    {
        //
    }
}
