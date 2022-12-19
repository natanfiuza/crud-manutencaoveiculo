<?php

namespace App\Providers;

use App\Models\PrivilegioUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        //
        Gate::define('permissao-admin', function ($user) {

            return $user->is_admin();
        });
        Gate::define('permissao-comum', function ($user) {


            return !$user->is_admin();
        });
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {

            (!Auth::user()->is_admin() && (
                PrivilegioUser::where('privilegio_id', 1)->where('user_id', Auth::user()->id)->exists()
                ||
                PrivilegioUser::where('privilegio_id', 2)->where('user_id', Auth::user()->id)->exists()
                ||
                PrivilegioUser::where('privilegio_id', 3)->where('user_id', Auth::user()->id)->exists()
                )
            ) ? $event->menu->add([
                        'header' => 'Cadastros',
                ]) : null;
            (!Auth::user()->is_admin() && PrivilegioUser::where('privilegio_id', 1)->where('user_id', Auth::user()->id)->exists()) ? $event->menu->add([
                'text'        => 'Veículos',
                'url'         => 'veiculos/list',
                'icon'        => 'fas fa-car-side',
            ]) : null;
            (!Auth::user()->is_admin() && PrivilegioUser::where('privilegio_id', 2)->where('user_id', Auth::user()->id)->exists()) ? $event->menu->add([
                'text'        => 'Manutenções',
                'url'         => 'manutencoes/list',
                'icon'        => 'fas fa-fw fa-wrench',
            ]) : null;
        });
    }
}
