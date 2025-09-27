<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Customer;
class CustomerController extends Controller
{
    public function getAllCustomers() {
        $customerData = Customer::all();

        // dd do or die function similar to console.log()
        //dd($customerData);
        return $customerData;
    }

    public function showAllCustomers(){
        // Call getallcustomer function and return all data  and initialized the customerdata variable
        //$this-> basically means the function is inside of the same controller
        $customerData = $this->getAllCustomers();
        return view('home', compact('customerData'));

    }
}
