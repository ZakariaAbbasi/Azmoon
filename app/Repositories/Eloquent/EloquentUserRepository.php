<?php
namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\UserRepositoryInterface;

class EloquentUserRepository extends EloquentBaseRepository implements UserRepositoryInterface
{
    protected $model = User::class;

    public function getUserDetailsByEmail($email)
    {
        
    }

}