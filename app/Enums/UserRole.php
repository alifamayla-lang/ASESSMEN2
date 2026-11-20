<?php
 
namespace App\Enums;
 
enum UserRole: string
{
    case Admin = 'admin';
    case User = 'nasabah';
 
    /**
     * Get the human readable label of the role.
     */
    public function label(): string
    {
        return match ($this) {
            self::Admin => 'Admin',
            self::User => 'nasabah',
        };
    }
}
