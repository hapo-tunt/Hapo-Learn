<?php

namespace App\Services\Login;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

trait RememberMeExpiration
{
    protected $minutesExpiration = 43200;

    public function setRememberMeExpiration($user)
    {
        Cookie::queue($this->getRememberMeSeesionName(), encrypt($this->setRememberMeValue($user)), $this->minutesExpiration);
    }

    protected function setRememberMeValue($user)
    {
        return $user->id . "|" . $user->rememberToken . "|" . $user->password;
    }

    protected function getRememberMeSeesionName()
    {
        return Auth::getRecallerName();
    }
}
