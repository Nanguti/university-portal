<?php

namespace App\Providers;

use App\Nova\Announcement;
use App\Nova\Assignment;
use App\Nova\Award;
use App\Nova\Batch;
use App\Nova\CampusNews;
use App\Nova\Course;
use App\Nova\Dashboards\MainDashboard;
use App\Nova\FinancialInformation;
use App\Nova\Grade;
use App\Nova\Library;
use App\Nova\Student;
use App\Nova\StudentSupport;
use App\Nova\User;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use Vyuldashev\NovaPermission\NovaPermissionTool;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Nova::mainMenu(function (Request $request) {
            return [

                MenuSection::dashboard(MainDashboard::class)->icon('chart-bar'),

                MenuSection::make('User Management', [
                    MenuItem::resource(User::class),
                    MenuItem::resource(Student::class),
                ])->icon('users')->collapsable(),

                MenuSection::make('Course Management', [
                    MenuItem::resource(Course::class),
                    MenuItem::resource(Batch::class),
                    MenuItem::resource(Award::class),
                    MenuItem::resource(Grade::class),
                ])->icon('document-text')->collapsable(),

                MenuSection::make('Student Welfare', [
                    MenuItem::resource(Announcement::class),
                    MenuItem::resource(Assignment::class),
                    MenuItem::resource(Library::class),
                    MenuItem::resource(CampusNews::class),
                    MenuItem::resource(StudentSupport::class),
                ])->icon('document-text')->collapsable(),
                
                MenuSection::make('Fnancies', [
                    MenuItem::resource(FinancialInformation::class),
                ])->icon('briefcase')->collapsable(),
                MenuSection::make('Roles & Permissions', [
                    MenuItem::make('Roles',"/resources/roles"),
                    MenuItem::make('Permissions',"/resources/permissions"),
                ])->icon('lock-closed')->collapsable(),
                    
            ];
        });
        Nova::footer(function ($request) {
            return Blade::render('
                @env(\'dev\')
                    Zetech University Portal
                @endenv
            ');
        });
        
        Nova::style('custom-css', asset('custom/css/custom.css'));
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\MainDashboard,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            new NovaPermissionTool,
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
