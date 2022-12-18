<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    private function getData()
    {
        return [
            ["id" => 1, "name" => "American Standard Street", "brand" => "Fendy"],
            ["id" => 2, "name" => "Starlar s2", "brand" => "Scarlar"],
            ["id" => 3, "name" => "Explorer", "brand" => "Gibon"],
            ["id" => 4, "name" => "Tallman", "brand" => "Taiwan"]
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gallery.index', [
            'galleries' => self::getData(),
            'userInput' => "<script>alert('Some messages');</script>"
        ]);
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
        $galleries = self::getData();

        $index = array_search($id, array_column($galleries, 'id'));

        if ( !$index ) 
        {
            abort(404);
        }

        return view('gallery.show', [
            'gallery' => $galleries[$index]
        ]);
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
