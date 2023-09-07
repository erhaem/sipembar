<?php
namespace App\Helpers;

use Illuminate\Support\Facades\DB;
use App\Models\User;

class AuthHelper {
    public static function redirectToDashboard($role)
    {
        switch ($role) {
            case 'super_admin':
                return '/superadmin';
            case 'admin_lab':
                return '/adminlab';
            case 'mahasiswa':
                return '/mahasiswa';
        }
    }

    public static function getAuthUserByEmailOrUsername($login)
    {
        return User::where('email', $login)->orWhere('username', $login)->first();
    }
}