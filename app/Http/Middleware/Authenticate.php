<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route;

class Authenticate extends Middleware
{
    protected $user_root = 'user.login'; // user.　はRouteServiceProviderの値
    protected $owner_root = 'owner.login'; // owner.　はRouteServiceProviderの値
    protected $admin_root = 'admin.login'; // admin.　はRouteServiceProviderの値
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            if (Route::is('owner.*')) {
                // ownerの場合に未認証の場合は、ownerのログインに遷移
                return route($this->owner_root);
            } else if (Route::is('admin.*')) {
                // adminの場合に未認証の場合は、adminのログインに遷移
                return route($this->admin_root);
            } else {
                // それ以外で未認証の場合、userのログインに遷移
                return route($this->user_root);
            }
        }
    }
}
