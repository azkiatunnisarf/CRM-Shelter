<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {  
        $data['customers'] = customer::all();
        $data['no'] = 1;
        return view('admin/customer/customer', $data);
    }
}
