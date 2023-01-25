<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputersController extends Controller
{
    public function index()
    {
        return view("computers.index", ["computers" => Computer::all()]);
    }

    public function create()
    {
        return view("computers.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string|min:2",
            "price" => "required|numeric",
            "origin" => "required|string|min:2",
        ]);
        $computer = new Computer();
        $computer->name = $request->input("name");
        $computer->price = $request->input("price");
        $computer->origin = $request->input("origin");
        $computer->save();
        return redirect()->route("computers.index");
    }
    public function show($id)
    {
        $data = Computer::find($id);
        abort_unless($data, 404);
        return view("computers.show", ["computer" => $data]);
    }
    public function edit($id)
    {
        $data = Computer::find($id);
        abort_unless($data, 404);
        return view("computers.edit", ["computer" => $data]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => "required|string|min:2",
            "price" => "required|numeric",
            "origin" => "required|string|min:2",
        ]);

        $computer = Computer::find($id);

        $computer["name"] = $request->input("name");
        $computer->price = $request->input("price");
        $computer->origin = $request->input("origin");
        $computer->save();
        return redirect()->route("computers.show", $id);
    }

    public function destroy($id)
    {
        $computer = Computer::find($id);
        $computer->delete();
        return redirect()->route("computers.index");
    }
}
