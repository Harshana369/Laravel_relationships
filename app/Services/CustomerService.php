<?php

namespace App\Services;

use App\Models\Customers;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Prewk\Result\Ok;

class CustomerService
{
    public function addCustomer(Request $request): Result
    {
        $customer = new Customers();

        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->nic = $request->nic;
        $customer->email = $request->email;
        $customer->birthday = $request->birthday;

        $customer->save();

        return new Ok($customer);

    }
}
