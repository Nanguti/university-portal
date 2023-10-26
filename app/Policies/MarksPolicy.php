<?php

namespace App\Policies;

use App\Models\Marks;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class MarksPolicy
{
    use HandlesAuthorization;
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return $user->can('view marks');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Marks $marks)
    {
        return $user->can('view marks details');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->can('create marks');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Marks $marks)
    {
        return $user->can('edit marks');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Marks $marks)
    {
        return $user->can('delete marks');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Marks $marks)
    {
        return $user->can('restore marks');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Marks $marks)
    {
        return $user->can('force delete marks');
    }
}
