<?php

declare(strict_types=1);

namespace App\Domain\User\Exceptions;

class UserNotFoundException extends \Exception
{
    public function __construct()
    {
        parent::__construct('User not found');
    }
} 