<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Actions\ExportAsCsv;
use Laravel\Nova\Http\Requests\NovaRequest;

class Student extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Student>
     */
    public static $model = \App\Models\Student::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public function title()
    {
        return $this->first_name." " .$this->last_name ." - RegNo ".$this->student_id;
    }
    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','first_name', 'last_name', 'student_id', 'course_id', 'batch_id'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('First Name')->required(),
            Text::make('Last Name')->required(),
            Text::make('Email')->required(),
            Text::make('Student ID')->required(),
            BelongsTo::make('Course')->required(),
            BelongsTo::make('Batch')->required(),
            Select::make('Program Level')
                ->options([
                    'PhD' => 'PhD',
                    'Masters' => 'Masters',
                    'Undergraduate' => 'Undergraduate',
                    'Diploma' => 'Diploma',
                    'Certificate' => 'Certificate'
                ]),
            BelongsTo::make('Award')
                ->hideWhenCreating()
                ->hideWhenUpdating(),
            HasMany::make("Marks", 'marks', Marks::class),
            Text::make('Award')->exceptOnForms()->resolveUsing(function () {
            // Retrieve the student's award based on your calculation logic
            return $this->getAward($this);
        }),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [
            ExportAsCsv::make()
        ];
    }
}
