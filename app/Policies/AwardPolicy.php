<?php

namespace App\Policies;

use App\Models\Award;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class AwardPolicy
{

    use HandlesAuthorization;
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return $user->can('view awards');
        
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Award $award)
    {
        return $user->can('view awards details');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->can('create awards');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Award $award)
    {
        return $user->can('edit awards');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Award $award)
    {
        return $user->can('delete awards');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Award $award)
    {
        return $user->can('restore awards');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Award $award)
    {
        return $user->can('force delete awards');
    }
}
