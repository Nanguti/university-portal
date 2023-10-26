<?php

namespace App\Policies;

use App\Models\Student;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class StudentPolicy
{
    use HandlesAuthorization;
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return $user->can('view students');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Student $student)
    {
        return $user->can('view students details');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->can('create students');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Student $student)
    {
        return $user->can('edit students');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Student $student)
    {
        return $user->can('delete students');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Student $student)
    {
        return $user->can('restore students');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Student $student)
    {
        return $user->can('force delete students');
    }
}
