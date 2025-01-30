<?php

declare(strict_types=1);

namespace App\Infrastructure\Persistence;

use App\Domain\User\Interfaces\UserRepositoryInterface;
use App\Domain\User\User;
use App\Domain\User\UserId;
use App\Domain\User\Exceptions\UserNotFoundException;

class UserRepository implements UserRepositoryInterface
{
    private array $users = [];

    public function save(User $user): void
    {
        $this->users[$user->id()->value()] = $user;
    }

    public function getByIdOrFail(UserId $id): User
    {
        if (!isset($this->users[$id->value()])) {
            throw new UserNotFoundException();
        }

        return $this->users[$id->value()];
    }

    public function update(User $user): void
    {
        $this->getByIdOrFail($user->id());
        $this->users[$user->id()->value()] = $user;
    }

    public function delete(UserId $id): void
    {
        $this->getByIdOrFail($id);
        unset($this->users[$id->value()]);
    }
} 