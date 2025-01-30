<?php

declare(strict_types=1);

namespace App\Domain\User\Interfaces;

use App\Domain\User\User;
use App\Domain\User\UserId;

interface UserRepositoryInterface
{
    public function save(User $user): void;
    public function getByIdOrFail(UserId $id): User;
    public function update(User $user): void;
    public function delete(UserId $id): void;
} 