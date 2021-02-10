<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    private $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function create(array $data)
    {
        return $this->userModel->create($data);
    }
}
