<?php

namespace App\Http\Controllers;

use App\User;
use App\Customer;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class 고객listController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        $id = Auth::id();
        $customers = Customer::where("user_id", "=", $id)->paginate(5);

        return view('pages.고객list')->withCustomers($customers);

    }
    public function show($id)
    {

        $user = User::find($id);
        $customers = $user->customers()->get();
        return view("pages.고객list")->with(array("customers" => $customers));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   

}
