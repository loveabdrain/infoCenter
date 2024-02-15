<?php

namespace src\Users\Actions;

use App\Models\User;
use src\Users\DTO\CreateUserDto;
use src\Users\Enums\UserRolesEnum;

class CreateUserAction
{
    public function __invoke(CreateUserDto $dto): array
    {
        if (!$dto->role) {
            $dto->role = UserRolesEnum::USER->name;
        }

        $user = User::query()->create($dto->toArray());

        return $user->toArray();
    }
}
