<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use App\Models\Pic;
use App\Helpers\Convert;
use App\Traits\Authorizable;
use Validator;
use DataTables;
use Auth;
use Session;
use Carbon\Carbon;

class PicController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index(Request $request, $type = "html") {
        $modelPics = Pic::all();
        return view('pic.index', compact('modelPics'));
    }

    public function create(Request $request) {
        $modelPic = new Pic();
        return view('pic.create', compact('modelPic', 'request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $data = Input::all();
        $modelPic = new Pic();
        $modelPic->fill($data);
        $modelPic->created_by = Auth::user()->id;
        $modelPic->save();
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
        $modelPic = Pic::findOrFail($id);
        $title = __('pic.title_show') . __('pic.title');
        return view('pic.show', compact('title', 'modelPic', 'request'));
    }

    public function edit(Request $request, $id) {
        $modelPic = Pic::findOrFail($id);
        return view('pic.edit', compact('modelPic', 'request'));
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
        $modelPic = Pic::findOrFail($id);
        $modelPic->fill($data);
        $modelPic->updated_by = Auth::user()->id;
        $modelPic->save();
        Session::flash('success', 'Successfully Updated');
        return back();
    }

    public function destroy(Request $request, $id) {
        $modelPic = Pic::findOrFail($id);
        $modelPic->delete();
        Session::flash('success', 'Successfully Deleted');
        return redirect(url("pic"));
    }

}
