<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Name;

class NameController extends Controller
{
    public readonly Name $name;

    public function __construct()
    {
        $this->name = new Name();
    }

    public function index()
    {
        $names = Name::all();
        return view ('names.index', compact('names'));
    }

    
    public function create()
    {
        return view('names.create');
    }


    public function store(Request $request)
    {
        $created = Name::create ([

            'name'=> $request->input('name'),
            
        ]);

        if ($created){
            return redirect()->route('names.index')->with('message', 'deu certo Ü');
        }else{
            return redirect()->back()->with('message', 'deu certo não Ü');
        }
    }

    
    public function show(string $id)
    {
        //
    }

   
    public function edit(string $id)
    {
        $names = Name::findOrFail($id);
        return view('names.edit', compact('names'));
    }

    
    public function update(Request $request, string $id)
    {
        $name = Name::findOrFail($id);
        $updated = $name->Update($request->all());

        if ($updated){
            return redirect()->route('names.index')->with('message', 'deu certo Ü');
        }else{
            return redirect()->back()->with('message', 'deu certo não Ü');
        }
    }

    
    public function destroy(string $id)
    {
        $name = Name::findOrFail($id);
        $deleted = $name->delete();

        return redirect()->route('names.index');
    }
}
