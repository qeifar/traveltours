<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use App\Models\Customer;
use App\Helpers\Convert;
use App\Traits\Authorizable;
use Validator;
use DataTables;
use Auth;
use Session;
use Carbon\Carbon;

class CustomerController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index(Request $request, $type = "html") {
        $modelCustomers = Customer::all();
        return view('customer.index', compact('modelCustomers'));
    }

    public function create(Request $request) {
        $modelCustomer = new Customer();
        return view('customer.create', compact('modelCustomer', 'request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $data = Input::all();
        $modelCustomer = new Customer();
        $modelCustomer->fill($data);
        $modelCustomer->created_by = Auth::user()->id;
        $modelCustomer->save();
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
        $modelCustomer = Customer::findOrFail($id);
        $title = __('customer.title_show') . __('customer.title');
        return view('customer.show', compact('title', 'modelCustomer', 'request'));
    }

    public function edit(Request $request, $id) {
        $modelCustomer = Customer::findOrFail($id);
        return view('customer.edit', compact('modelCustomer', 'request'));
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
        $modelCustomer = Customer::findOrFail($id);
        $modelCustomer->fill($data);
        $modelCustomer->updated_by = Auth::user()->id;
        $modelCustomer->save();
        Session::flash('success', 'Successfully Updated');
        return back();
    }

    public function destroy(Request $request, $id) {
        $modelCustomer = Customer::findOrFail($id);
        $modelCustomer->delete();
        Session::flash('success', 'Successfully Deleted');
        return redirect(url("customer"));
    }

}
