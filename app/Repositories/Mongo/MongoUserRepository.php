<?php
namespace App\Repositories\Mongo;

use App\Repositories\Mongo\MongoBaseRepository;
use App\Repositories\Contracts\UserRepositoryInterface;


class MongoUserRepository extends MongoBaseRepository implements UserRepositoryInterface
{

    public function getUserDetailsByEmail($email)
    {
        //
    }

}