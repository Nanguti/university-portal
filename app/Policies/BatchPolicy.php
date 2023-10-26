<?php

namespace App\Policies;

use App\Models\Batch;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class BatchPolicy
{
    use HandlesAuthorization;
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return $user->can('view batches');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Batch $batch)
    {
        return $user->can('view batches details');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->can('create batches');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Batch $batch)
    {
        return $user->can('update batches');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Batch $batch)
    {
        return $user->can('delete batches');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Batch $batch)
    {
        return $user->can('restore batches');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Batch $batch)
    {
        return $user->can('force delete batches');
    }
}
