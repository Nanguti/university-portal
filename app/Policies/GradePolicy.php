<?php

namespace App\Policies;

use App\Models\Grade;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class GradePolicy
{
    use HandlesAuthorization;
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return $user->can('view grades');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Grade $grade)
    {
        return $user->can('view grades details');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->can('create grades');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Grade $grade)
    {
        return $user->can('edit grades');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Grade $grade)
    {
        return $user->can('delete grades');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Grade $grade)
    {
        return $user->can('restore grades');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Grade $grade)
    {
        return $user->can('force delete grades');
    }
}
