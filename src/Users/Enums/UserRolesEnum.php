<?php

namespace src\Users\Enums;

enum UserRolesEnum: string
{
    case USER = "Пользователь";
    case ADMIN = "Админ";
    case EMPLOYER = "Сотрудник";
}
