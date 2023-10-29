<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\NewStudents;
use App\Nova\Metrics\StudentsIntake;
use App\Nova\Metrics\StudentsPerCourse;
use App\Nova\Metrics\StudentsProgramLevel;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Dashboards\Main as Dashboard;

class MainDashboard extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            new StudentsPerCourse(),
            new StudentsProgramLevel(),
            new StudentsIntake,
            new NewStudents(),
        ];
    }

    public function uriKey()
    {
        return 'main-dashboard';
    }
}
