<?php

declare(strict_types=1);

namespace Tests\Integration\Infrastructure\Persistence;

use App\Domain\User\Exceptions\UserNotFoundException;
use App\Domain\User\User;
use App\Domain\User\UserId;
use App\Infrastructure\Persistence\UserRepository;
use PHPUnit\Framework\TestCase;

class UserRepositoryTest extends TestCase
{
    private UserRepository $userRepository;

    protected function setUp(): void
    {
        $this->userRepository = new UserRepository();
    }

    public function testSaveAndRetrieveUser(): void
    {
        $user = new User(
            new UserId(),
            'John Doe',
            'john@example.com',
            'password123'
        );

        $this->userRepository->save($user);

        $retrievedUser = $this->userRepository->getByIdOrFail($user->id());
        $this->assertEquals($user, $retrievedUser);
    }

    public function testWhenUserIsNotFoundByIdErrorIsThrown(): void
    {
        $this->expectException(UserNotFoundException::class);
        $this->userRepository->getByIdOrFail(new UserId());
    }
} 