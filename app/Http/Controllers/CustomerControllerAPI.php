<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Resources\CustomerResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Http\Resources\Collections\CustomerCollection;

class CustomerControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\CustomerCollection
     */
    public function index()
    {
        $this->authorize('viewAny', Customer::class);

        $customer = Customer::all();

        return new CustomerCollection($customer);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CustomerRequest  $request
     * @return \App\Http\Resources\CustomerResource
     */
    public function store(CustomerRequest $request)
    {
        $this->authorize('create', Customer::class);

        $customer = Customer::create($request->validated());

        return new CustomerResource($customer);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \App\Http\Resources\CustomerResource
     */
    public function show(Customer $customer)
    {
        $this->authorize('view', $customer);

        return new CustomerResource($customer);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CustomerRequest  $request
     * @param  \App\Customer  $customer
     * @return \App\Http\Resources\CustomerResource
     */
    public function update(CustomerRequest $request, Customer $customer)
    {
        $this->authorize('update', $customer);

        $customer->update($request->validated());

        return new CustomerResource($customer);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \App\Http\Resources\CustomerResource
     */
    public function destroy(Customer $customer)
    {
        $this->authorize('delete', $customer);

        $customer->delete();

        return new CustomerResource($customer);

    }
}
