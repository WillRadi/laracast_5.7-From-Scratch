<?php

namespace App\Policies;

use App\User;
use App\Band;
use Illuminate\Auth\Access\HandlesAuthorization;

class BandPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the band.
     * 
     * Já que todos os critérios são os mesmos, pode-se utilizar apenas um método. Será o update();
     *
     * @param  \App\User  $user
     * @param  \App\Band  $band
     * @return mixed
     */
    public function update(User $user, Band $band)
    {
        return $band->owner_id == $user->id;
    }
}
