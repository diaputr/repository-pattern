<?php
namespace App\Repositories\User;

class UserRepositoryImplement implements UserRepositoryInterface
{
    public function getAll()
    {
        return User::all();
    }
}
```