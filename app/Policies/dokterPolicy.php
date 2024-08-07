<?php

namespace App\Policies;

use App\Models\User;
use App\Models\dokter;
use Illuminate\Auth\Access\Response;

class dokterPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, dokter $dokter): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->role === 'A';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, dokter $dokter): bool
    {
        return $user->role === 'A';
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, dokter $dokter): bool
    {
        return $user->role === 'A';
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, dokter $dokter): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, dokter $dokter): bool
    {
        //
    }
}
