<?php

class EventsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /events
	 *
	 * @return Response
	 */
	public function index()
	{
		$events = Event::get();

		return $events;
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /events
	 *
	 * @return Response
	 */
	public function store()
	{
		$event = new Event();

		$input = Input::all();

		$event->category_id = $input['category_id'];
		$event->est_alive = $input['est_alive'];
		$event->est_dead = $input['est_dead'];
		$event->location = $input['location'];
		$event->geobounds = $input['geobounds'];

		$event->save();

	}

	/**
	 * Display the specified resource.
	 * GET /events/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$event = Event::find($id);

		return $event;
	}


	/**
	 * Update the specified resource in storage.
	 * PUT /events/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$event = new Event($id);

		$input = Input::all();

		$event->category_id = $input['category_id'];
		$event->est_alive = $input['est_alive'];
		$event->est_dead = $input['est_dead'];
		$event->location = $input['location'];
		$event->geobounds = $input['geobounds'];

		$event->save();
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /events/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Event::destroy($id);
		Provision::destroy(Provision::where('event_id','=',$id)->get(['id'])->toArray());
	}

}