<?php

namespace App\Providers;

use Auth;
use Illuminate\Support\ServiceProvider;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //  $role = Role::create(['name' => 'admin']);
        //  $permission = Permission::create(['name' => 'approve shop']);
        // $role = Role::create(['name' => 'user']);
       


        


    }
}
