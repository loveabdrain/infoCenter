<?php

namespace src\Users\DTO;

use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\DataTransferObject;
use src\Users\Casters\UserRolesCaster;
use src\Users\Enums\UserRolesEnum;

class CreateUserDto extends DataTransferObject
{
    public string $name;
    public string $email;
    public string $password;
    public string $password_confirm;

    #[CastWith(UserRolesCaster::class)]
    public ?string $role;
}
