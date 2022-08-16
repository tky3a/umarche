<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    // 以下定数はconfig/auth.phpで設定した「guards」の値と同じものを設定する
    private const GUARD_USER = 'users';
    private const GUARD_OWNER = 'owners';
    private const GUARD_ADMIN = 'admin';
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     * 認証済みユーザーがアクセスしたら特定の画面にリダイレクトする
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        // Userが認証済み && ルートがuserの場合
        if (Auth::guard(self::GUARD_USER)->check() && $request->routeIs('user.*')) {
            return redirect(RouteServiceProvider::HOME);
        }

        // Ownerが認証済み && ルートがownerの場合
        if (Auth::guard(self::GUARD_OWNER)->check() && $request->routeIs('owner.*')) {
            return redirect(RouteServiceProvider::OWNER_HOME);
        }

        // Adminが認証済み && ルートがadminの場合
        if (Auth::guard(self::GUARD_ADMIN)->check() && $request->routeIs('admin.*')) {
            return redirect(RouteServiceProvider::ADMIN_HOME);
        }

        return $next($request);
    }
}
