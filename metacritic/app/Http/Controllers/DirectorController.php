<?php
namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function index()
    {
        return Director::all();
    }

    public function store(Request $request)
    {
        $director = Director::create($request->all());
        return response()->json($director, 201);
    }

    public function show(Director $director)
    {
        return $director;
    }

    public function update(Request $request, Director $director)
    {
        $director->update($request->all());
        return response()->json($director, 200);
    }

    public function destroy(Director $director)
    {
        $director->delete();
        return response()->json(null, 204);
    }
}
