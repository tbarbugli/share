<?php

class RoomsController extends \BaseController {


	public function index()
	{
        $rooms = Room::where('share_basis', '=', 'Room Share')->get();
		return View::make('rooms.index', compact('rooms'));
	}


	public function create()
	{
		return View::make('rooms.create');
	}


	public function store()
	{
        $room = new Room;
        $room->price = Input::get('price');
        $room->share_basis = Input::get('share_basis');
        $room->available = Input::get('available');
        $room->bedroom = Input::get('bedrooms');
        $room->bathrooms = Input::get('bathrooms');
        $room->smoking = Input::get('smoking');
        $room->furnished = Input::get('furnished');
        $room->parking = Input::get('parking');
        $room->pet_friendly = Input::get('pet_friendly');
        $room->gender_friendly  = Input::get('gender_friendly');
        $room->title = Input::get('title');
        $room->description = Input::get('description');
        $room->name = Input::get('name');
        $room->email = Input::get('email');
        $room->phone = Input::get('phone');
        $room->address = Input::get('address');

        If(Input::hasFile('photo'))
        {
            $photo = Input::file('photo');
            $filename = time().'-'.$photo->getClientOriginalName();
            $destination = public_path().'/img/'.$filename;
            if(!File::exists($destination))
            {
                try
                {
                    $photo_path =  $photo->move(public_path().'/img/', $filename);
                    $room->urls =$filename;
                }catch (Fileexception $e)
                {
                    return 'Sorry, Could not upload the file! Please, try again later!!';
                }
            }
            else
            {
                return 'This File already exist!! Please, upload another file!!!';
            }
        }

        if($room->save())
        {
            return Redirect::route('room_share_available');
        }
	}


	public function show($id)
	{
		$room_id = Room::find($id);
        return View::make('rooms.show', compact('room_id'));
	}


	public function edit($id)
	{
		//
	}


	public function update($id)
	{
		//
	}


	public function destroy($id)
	{
		//
	}

}