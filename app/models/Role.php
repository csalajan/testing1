<?php
 
class Role extends Eloquent
{
    /**
     * Set timestamps off
     */
    public $timestamps = false;
 
    /**
     * Get users with a certain role
     */
    public function users()
    {
        return $this->belongsToMany('User', 'user_roles');
    }
}