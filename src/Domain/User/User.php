<?php

declare(strict_types=1);

namespace App\Domain\User;

class User
{
    public function __construct(
        private UserId $id,
        private string $name,
        private string $email,
        private string $password
    ) {
        $this->validateEmail($email);
    }

    public function id(): UserId
    {
        return $this->id;
    }

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

    public function updateName(string $name): void
    {
        $this->name = $name;
    }

    public function updateEmail(string $email): void
    {
        $this->validateEmail($email);
        $this->email = $email;
    }

    private function validateEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('Invalid email format');
        }
    }
} 