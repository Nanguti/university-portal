<?php

namespace App\Policies;

use App\Models\Course;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursePolicy
{
    use HandlesAuthorization;
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return $user->can('view courses');
        
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Course $course)
    {
        return $user->can('view courses details');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->can('create courses');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Course $course)
    {
        return $user->can('edit courses');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Course $course)
    {
        return $user->can('delete courses');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Course $course)
    {
        return $user->can('restore courses');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Course $course)
    {
        return $user->can('force delete courses');
    }
}
