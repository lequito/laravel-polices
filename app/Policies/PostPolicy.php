<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy{


    public function before(User $user){
        if($user->name === 'SUPER'){
            return true;
        }

        return null;
    }
    
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Post $post): bool{
        return ($user->role === 'admin' || $user->id === $post->user_id);
    }

 
    public function create(User $user): bool{
        return $user->permissions->contains('permission', 'create_post');
    }

    public function update(User $user, Post $post): bool{
        return $user->permissions->contains('permission', 'update_post');
    }

    public function delete(User $user, Post $post): bool{
        return $user->permissions->contains('permission', 'delete_post');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Post $post): bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Post $post): bool
    {
        return true;
    }
}
