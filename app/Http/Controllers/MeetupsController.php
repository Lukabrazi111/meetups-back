<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMeetupsRequest;
use App\Http\Requests\UpdateMeetupsRequest;
use App\Models\Meetups;

class MeetupsController extends Controller
{
    public function getAllMeetups()
    {
        return Meetups::orderBy('id', 'desc')->get();
    }

    public function getSpecificMeetup($id)
    {
        return Meetups::find($id);
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $meetups = Meetups::orderBy('id', 'desc')->get();

        return view('meetup', ['meetups' => $meetups]);
    }

    public function newMeetupPage()
    {
        return view('new-meetup');
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
     * @param \App\Http\Requests\StoreMeetupsRequest $request
     */
    public function store(StoreMeetupsRequest $request)
    {
        $request->validated();

        Meetups::create([
            'title' => $request->title,
            'image' => $request->image,
            'address' => $request->address,
            'description' => $request->description,
        ]);

        session()->flash('success', 'You added meetup successfully!');

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Meetups $meetups
     */
    public function show(Meetups $meetups, $id)
    {
        $meetup = $meetups::find($id);

        return view('components.meetups.meetup-detail', ['meetup' => $meetup]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Meetups $meetups
     */
    public function edit(Meetups $meetups)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateMeetupsRequest $request
     * @param \App\Models\Meetups $meetups
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMeetupsRequest $request, Meetups $meetups)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Meetups $meetups
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meetups $meetups)
    {
        //
    }
}
