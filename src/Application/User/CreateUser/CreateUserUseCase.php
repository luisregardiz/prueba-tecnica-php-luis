<?php

declare(strict_types=1);

namespace App\Application\User\CreateUser;

use App\Domain\User\Interfaces\UserRepositoryInterface;
use App\Domain\User\User;
use App\Domain\User\UserId;

class CreateUserUseCase
{
    public function __construct(
        private UserRepositoryInterface $userRepository
    ) {}

    public function execute(CreateUserRequest $request): void
    {
        $user = new User(
            new UserId(),
            $request->name(),
            $request->email(),
            password_hash($request->password(), PASSWORD_BCRYPT)
        );

        $this->userRepository->save($user);
    }
} 