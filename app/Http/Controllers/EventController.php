<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
 
use Calendar;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
 $tasks = Event::all();
 //        $event_list = [];
 //        foreach ($events as $key => $event) {
 //            $event_list[] = Calendar::event(
 //                $event->event_name,
 //                true,
 //                new \DateTime($event->start_date),
 //                new \DateTime($event->end_date.' +1 day')
 //            );
 //        }
 //        $calendar_details = Calendar::addEvents($event_list);
    return view('/event/calendar', compact('tasks'));
    }

// public function addEvent(Request $request)
//     {
//         $validator = Validator::make($request->all(), [
//             'event_name' => 'required',
//             'start_date' => 'required',
//             'end_date' => 'required'
//         ]);
 
//         if ($validator->fails()) {
//             \Session::flash('warnning','Please enter the valid details');
//             return Redirect::to('/events')->withInput()->withErrors($validator);
//         }
 
//         $event = new Event;
//         $event->event_name = $request['event_name'];
//         $event->start_date = $request['start_date'];
//         $event->end_date = $request['end_date'];
//         $event->save();
 
//         \Session::flash('success','Event added successfully.');
//         return redirect::to('/event/calendar');
//     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('tasks.create');
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
        Event::create($request->all());
    return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
