<?php

class NeedsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /needs
	 *
	 * @return Response
	 */
	public function index()
	{
		$needs = Need::all();

		return $needs;
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /needs
	 *
	 * @return Response
	 */
	public function store()
	{
		$need = new Need();

		$input = Input::all();

		$need->slug = $input['slug'];
		$need->description = $input['description'];
		$need->title = $input['title'];

		$need->save();
	}

	/**
	 * Display the specified resource.
	 * GET /needs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$need = Need::find($id);

		return $need;
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /needs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$need = Need::find($id);

		$input = Input::all();

		$need->slug = $input['slug'];
		$need->description = $input['description'];
		$need->title = $input['title'];

		$need->save();
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /needs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Need::destroy($id);
	}

}