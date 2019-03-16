<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use App\Models\Hotel;
use App\Helpers\Convert;
use App\Traits\Authorizable;
use Validator;
use DataTables;
use Auth;
use Session;
use Carbon\Carbon;

class HotelController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index(Request $request, $type = "html") {
        $modelHotels = Hotel::all();
        return view('hotel.index', compact('modelHotels'));
    }

    public function create(Request $request) {
        $modelHotel = new Hotel();
        return view('hotel.create', compact('modelHotel', 'request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $data = Input::all();
        $modelHotel = new Hotel();
        $modelHotel->fill($data);
        $modelHotel->created_by = Auth::user()->id;
        $modelHotel->save();
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
        $modelHotel = Hotel::findOrFail($id);
        $title = __('hotel.title_show') . __('hotel.title');
        return view('hotel.show', compact('title', 'modelHotel', 'request'));
    }

    public function edit(Request $request, $id) {
        $modelHotel = Hotel::findOrFail($id);
        return view('hotel.edit', compact('modelHotel', 'request'));
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
        $modelHotel = Hotel::findOrFail($id);
        $modelHotel->fill($data);
        $modelHotel->updated_by = Auth::user()->id;
        $modelHotel->save();
        Session::flash('success', 'Successfully Updated');
        return back();
    }

    public function destroy(Request $request, $id) {
        $modelHotel = Hotel::findOrFail($id);
        $modelHotel->delete();
        Session::flash('success', 'Successfully Deleted');
        return redirect(url("hotel"));
    }

}
