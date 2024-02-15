<?php

namespace src\Users\Casters;

use Spatie\DataTransferObject\Caster;
use src\Users\Enums\UserRolesEnum;

class UserRolesCaster implements Caster
{
    public function cast(mixed $value): string
    {
        return UserRolesEnum::tryFrom($value) ? UserRolesEnum::from($value)->name : UserRolesEnum::USER->name;
    }
}
