<?php

namespace App\Http\Controllers;

use App\DeliveriesDrivers;
use App\Http\Resources\DeliveriesDriversResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\DeliveriesDriversRequest;
use App\Http\Resources\Collections\DeliveriesDriversCollection;

class DeliveriesDriversControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\DeliveriesDriversCollection
     */
    public function index()
    {
        $this->authorize('viewAny', DeliveriesDrivers::class);

        $DeliveriesDrivers = DeliveriesDrivers::all();

        return new DeliveriesDriversCollection($DeliveriesDrivers);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\DeliveriesDriversRequest  $request
     * @return \App\Http\Resources\DeliveriesDriversResource
     */
    public function store(DeliveriesDriversRequest $request)
    {
        $this->authorize('create', DeliveriesDrivers::class);

        $DeliveriesDrivers = DeliveriesDrivers::create($request->validated());

        return new DeliveriesDriversResource($DeliveriesDrivers);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DeliveriesDrivers  $DeliveriesDrivers
     * @return \App\Http\Resources\DeliveriesDriversResource
     */
    public function show(DeliveriesDrivers $DeliveriesDrivers)
    {
        $this->authorize('view', $DeliveriesDrivers);

        return new DeliveriesDriversResource($DeliveriesDrivers);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\DeliveriesDriversRequest  $request
     * @param  \App\DeliveriesDrivers  $DeliveriesDrivers
     * @return \App\Http\Resources\DeliveriesDriversResource
     */
    public function update(DeliveriesDriversRequest $request, DeliveriesDrivers $DeliveriesDrivers)
    {
        $this->authorize('update', $DeliveriesDrivers);

        $DeliveriesDrivers->update($request->validated());

        return new DeliveriesDriversResource($DeliveriesDrivers);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DeliveriesDrivers  $DeliveriesDrivers
     * @return \App\Http\Resources\DeliveriesDriversResource
     */
    public function destroy(DeliveriesDrivers $DeliveriesDrivers)
    {
        $this->authorize('delete', $DeliveriesDrivers);

        $DeliveriesDrivers->delete();

        return new DeliveriesDriversResource($DeliveriesDrivers);

    }
}
