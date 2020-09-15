<?php

namespace App\Policies;

use App\DeliveriesDrivers;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DeliveriesDriversPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any DeliveriesDrivers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the DeliveriesDrivers.
     *
     * @param  \App\User  $user
     * @param  \App\DeliveriesDrivers  $DeliveriesDrivers
     * @return mixed
     */
    public function view(User $user, DeliveriesDrivers $DeliveriesDrivers)
    {
        //
    }

    /**
     * Determine whether the user can create DeliveriesDrivers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the DeliveriesDrivers.
     *
     * @param  \App\User  $user
     * @param  \App\DeliveriesDrivers  $DeliveriesDrivers
     * @return mixed
     */
    public function update(User $user, DeliveriesDrivers $DeliveriesDrivers)
    {
        //
    }

    /**
     * Determine whether the user can delete the DeliveriesDrivers.
     *
     * @param  \App\User  $user
     * @param  \App\DeliveriesDrivers  $DeliveriesDrivers
     * @return mixed
     */
    public function delete(User $user, DeliveriesDrivers $DeliveriesDrivers)
    {
        //
    }

    /**
     * Determine whether the user can restore the DeliveriesDrivers.
     *
     * @param  \App\User  $user
     * @param  \App\DeliveriesDrivers  $DeliveriesDrivers
     * @return mixed
     */
    public function restore(User $user, DeliveriesDrivers $DeliveriesDrivers)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the DeliveriesDrivers.
     *
     * @param  \App\User  $user
     * @param  \App\DeliveriesDrivers  $DeliveriesDrivers
     * @return mixed
     */
    public function forceDelete(User $user, DeliveriesDrivers $DeliveriesDrivers)
    {
        //
    }
}
