<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Meeting;
use Illuminate\Support\Facades\Hash;
use DateTime;

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
    public function boot()
    {
        Validator::extend('alpha_spaces', function ($attribute, $value) {
            return preg_match('/^[\pL\s]+$/u', $value); 
        });

        Validator::extend('current_password', function ($attribute, $value, $parameters) {
            $user = User::find($parameters[0]);
            return $user && Hash::check($value, $user->password);
        });

        Validator::extend('meeting_date_check', function ($attribute, $value, $parameters) {
            $date = new DateTime($parameters[0]);
            $endDate = new DateTime($parameters[0]);
            $endDate->modify('+59 minutes');
            return !Meeting::whereBetween('date', [$date, $endDate])->first();
        });
    }
}
