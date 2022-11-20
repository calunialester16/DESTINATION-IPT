<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;

class DestinationController extends Controller
{
    public function index(){

        $data = Destination::all();

        return view('destinations.index', ['destinations'=>$data]);
    }

    public function create() {
        return view('destinations.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'type' => 'required',
            'rating' => 'required|numeric'
        ]);

        Destination::create([
            'name' => $request['name'],
            'address' => $request['address'],
            'type' => $request['type'],
            'rating' => $request['rating'],
        ]);
        
        return redirect('/destinations')->with('info', 'A new destination has been added.');
    }

    public function edit(Destination $des){

        return view ('destinations.edit', compact('des'));
    }
    
    public function update(Destination $des, Request $request){
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'type' => 'required',
            'rating' => 'required|numeric'
        ]);

        $des->update($request->all());

        return redirect("/destinations")->with('info', 'Destination has been updated.');
    }

    public function delete($des){
        Destination::find($des)->delete();

        return redirect('/destinations')->with('info', 'Destination deleted!');
    }
}
