<?php

namespace App\Providers;

use App\Models\Role;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    private function setupRBAC()
    {
        try {
            $roles = Role::with('permissions')->get();
        } catch (\Throwable $th) {
            $roles = [];
            //throw $th;
        }
        $permissionsArray = [];
        foreach ($roles as $role) {
            foreach ($role->permissions as $permissions) {
                $permissionsArray[$permissions->name][$role->id] = true;
            }
        }
        // Every permission may have multiple roles assigned
        foreach ($permissionsArray as $name => $roles) {
            Gate::define($name, function ($user) use ($name, $permissionsArray) {
                // We check if we have the needed roles among current user's roles
                $isRole = isset($permissionsArray[$name][$user->role->id]);
                //check if admin site

                return $isRole;
                //                    // We check if we have the needed roles among current user's roles
                //                    return count(array_intersect($user->roles->pluck('id')->toArray(), $roles)) > 0;
            });
        }
        $gate = array_filter(Gate::abilities(), function ($var, $key) {
            return str_contains($key, 'web');
        }, ARRAY_FILTER_USE_BOTH);
        Gate::define('admin', function ($user) use ($gate) {
            //check if admin site
            foreach ($gate as $key => $value) {
                if (Gate::any($key)) {
                    return true;
                }
            }
            return false;
        });
        // Gate::define('admin.dashboard', function ($user) {

        //     return false;
        // });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Paginator::useBootstrap();
        //
        App::setLocale('vi');
        try {
            $this->setupRBAC();
        } catch (\Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }
}
