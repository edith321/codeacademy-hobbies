<?php namespace App\Http\Controllers;

use App\models\HBCities;
use Illuminate\Routing\Controller;

class HBCitiesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /hbcities
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('form');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /hbcities/create
	 *
	 * @return Response
	 */
	public function create()
	{
	    $data = request()->all();

	    HBCities::create(array(
	        'name' => $data['city'],
        ));

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /hbcities
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /hbcities/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /hbcities/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /hbcities/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /hbcities/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}