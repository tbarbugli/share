<?php

class HousesController extends \BaseController {


	public function index()
	{
        $rooms = Room::where('share_basis', '=', 'House Share')->get();
        return View::make('houses.index', compact('rooms'));
	}

	public function show($id)
	{
        $room_id = Room::find($id);
        return View::make('houses.show', compact('room_id'));
	}


}