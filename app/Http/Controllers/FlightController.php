<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use App\Models\Flight;
use Validator;
use DataTables;
use Auth;
use Session;
use Carbon\Carbon;

class FlightController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index(Request $request, $type = "html") {
        $modelFlights = Flight::all();
        return view('flight.index',compact('modelFlights'));
    }

    public function create(Request $request) {
        $modelFlight = new Flight();
        return view('flight.create', compact('modelFlight', 'request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $data = Input::all();
        $modelFlight = new Flight();
        $modelFlight->fill($data);
        $modelFlight->created_by = Auth::user()->id;
        $modelFlight->save();
        Session::flash('success', 'Successfully Created');
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show(Request $request, $id) {
        $modelFlight = Flight::findOrFail($id);
        $title = __('flight.title_show') . __('flight.title');
        return view('flight.show', compact('title', 'modelFlight', 'request'));
    }

    public function edit(Request $request, $id) {
        $modelFlight = Flight::findOrFail($id);
        return view('flight.edit', compact('modelFlight', 'request'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $data = Input::all();
        $modelFlight = Flight::findOrFail($id);
        $modelFlight->fill($data);
        $modelFlight->updated_by = Auth::user()->id;
        $modelFlight->save();
        Session::flash('success', 'Successfully Updated');
        return back();
    }

    public function destroy(Request $request, $id) {
        $modelFlight = Flight::findOrFail($id);
        $modelFlight->delete();
        Session::flash('success', 'Successfully Deleted');
        return redirect(url("flight"));
    }

}
