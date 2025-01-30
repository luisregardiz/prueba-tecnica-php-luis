<?php

declare(strict_types=1);

namespace Tests\Unit\Domain\User;

use App\Domain\User\User;
use App\Domain\User\UserId;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUserCreation(): void
    {
        $user = new User(
            new UserId(),
            'John Doe',
            'john@example.com',
            'password123'
        );

        $this->assertEquals('John Doe', $user->name());
        $this->assertEquals('john@example.com', $user->email());
        $this->assertEquals('password123', $user->password());
    }

    public function testInvalidEmailThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        new User(
            new UserId(),
            'John Doe',
            'invalid-email',
            'password123'
        );
    }
} 