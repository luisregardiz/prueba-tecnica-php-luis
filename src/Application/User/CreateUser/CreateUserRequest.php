<?php

declare(strict_types=1);

namespace App\Application\User\CreateUser;

class CreateUserRequest
{
    public function __construct(
        private string $name,
        private string $email,
        private string $password
    ) {}

    public function name(): string
    {
        return $this->name;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function password(): string
    {
        return $this->password;
    }
} 