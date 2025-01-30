<?php

declare(strict_types=1);

namespace App\Domain\User;

class UserId
{
    public function __construct(
        private string $value = ''
    ) {
        if (empty($value)) {
            $this->value = uniqid('user_');
        }
    }

    public function value(): string
    {
        return $this->value;
    }
} 