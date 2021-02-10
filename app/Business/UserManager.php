<?php

namespace App\Business;

use App\Repositories\UserRepository;
use Illuminate\Support\Arr;

class UserManager
{
	private $userRepo;

	public function __construct(UserRepository $userRepo)
	{
		$this->userRepo = $userRepo;
	}

	public function register(array $data)
	{
		$userData = Arr::only($data, ['name', 'email', 'password']);
		return $this->userRepo->create($userData);
	}
}
