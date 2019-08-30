<?php
/**
 * Created by PhpStorm.
 * User: ljx
 * Date: 2019/8/30
 * Time: 4:09 PM
 */

namespace App\Filters;

use App\User;

class ThreadsFilters extends Filters
{
    protected $filters = ['by'];

    protected function by($username)
    {
        $user = User::where('name',$username)->firstOrFail();

        return $this->builder->where('user_id',$user->id);
    }
}