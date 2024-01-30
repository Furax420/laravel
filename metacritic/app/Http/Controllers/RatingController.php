<?php
namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index()
    {
        return Rating::all();
    }

    public function store(Request $request)
    {
        $rating = Rating::create($request->all());
        return response()->json($rating, 201);
    }

    public function show(Rating $rating)
    {
        return $rating;
    }

    public function update(Request $request, Rating $rating)
    {
        $rating->update($request->all());
        return response()->json($rating, 200);
    }

    public function destroy(Rating $rating)
    {
        $rating->delete();
        return response()->json(null, 204);
    }
}
