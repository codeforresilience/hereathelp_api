<?php

class CategoriesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /categories
	 *
	 * @return Response
	 */
	public function index()
	{
		$categories = Category::all();

		return $categories;
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /categories
	 *
	 * @return Response
	 */
	public function store()
	{
		$category = new Category();

		$input = Input::all();

		$category->slug = $input['slug'];
		$category->description = $input['description'];
		$category->title = $input['title'];

		$category->save();
	}

	/**
	 * Display the specified resource.
	 * GET /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$category = Category::find($id);

		return $category;
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$category = Category::find($id);

		$input = Input::all();

		$category->slug = $input['slug'];
		$category->description = $input['description'];
		$category->title = $input['title'];

		$category->save();
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Category::destroy($id);
	}

}