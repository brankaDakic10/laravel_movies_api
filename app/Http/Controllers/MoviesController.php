<?php

namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\JsonResponse;
use Illuminate\Http\Request;
use App\Movie;
class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Movie::all();
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

        // $request->validate([
        //     'title' => 'required|string|max:50',
        //     'director' => 'required|string',
        //     'imageUrl' => 'required|string',
        //     'duration'=>'required|integer|min:1',
        //     'releaseDate' => 'required',
        //     'genre' => 'required|string'

        // ]);
        
        $movie=new Movie();
        
        $movie->title=$request->input('title');
        $movie->director=$request->input('director');
        $movie->imageUrl=$request->input('imageUrl');
        $movie->duration=$request->input('duration');
        $movie->releaseDate=$request->input('releaseDate');
        $movie->genre=$request->input('genre');
        $movie->save();
        return $movie;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Movie::find($id);
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
        $movie= Movie::find($id);
        $movie->delete();
        return new JsonResponse(true);
    }
}
