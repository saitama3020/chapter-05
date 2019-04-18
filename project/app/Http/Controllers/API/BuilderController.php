<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Builder;


class BuilderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * @SWG\Get(
     * path="/api/builders",
     * tags={"Builders"},
     * summary="List Builders",
     * @SWG\Response(
     * response="200",
     * description="Success: List all Builders",
     * @SWG\Schema(ref="#/definitions/Builder"),
     * ),
     * @SWG\Response(
     * response="404",
     * description="Not found"
     * ),
     * )
     */
    public function index()
    {
        $listBuilder = Builder::all();
        return $listBuilder;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * @SWG\Post(
     * path="/api/builders",
     * tags={"Builders"},
     * summary="Create Builder",
     * @SWG\Parameter(
     * name="body",
     * in="body",
     * required="true",
     * @SWG\Schema(ref="#/definitions/Builder"),
     * description="Json Format"
     * ),
     * @SWG\Response(
     * response="201",
     * description="Success: A Newly Created Builder",
     * @SWG\Schema(ref="#/definitions/Builder"),
     * ),
     * @SWG\Response(
     * response="422",
     * description="Missing mandatory field",
     * ),
     * @SWG\Response(
     * response="404",
     * description="Not found"
     * ),
     * @SWG\Response(
     * response="405",
     * description="Invalid HTTP method")
     * )
     */
    public function store(Request $request)
    {
        $createBuilder = Builder::create($request->all());
        return $createBuilder;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id\Get(
     * path="/api/builders/{id}",
     * )
     * @return \Illuminate\Http\Response
     * 
     * @SWG
     */
    public function show($id)
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
