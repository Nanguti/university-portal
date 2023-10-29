<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Actions\ExportAsCsv;
use Laravel\Nova\Http\Requests\NovaRequest;

class Marks extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Marks>
     */
    public static $model = \App\Models\Marks::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public function title()
    {
        return __("Student");
    }

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'student_id', 'course_id', 'batch_id', 'score', 'comment', 'semester'
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
            BelongsTo::make('Course')->required(),
            BelongsTo::make('Batch')->required(),
            BelongsTo::make('Student')->required(),
            BelongsTo::make('Unit')->required(),
            Number::make('Semester'),
            Number::make('Score')->required(),
            Select::make('Component Name')->options([
                'Assignment' => 'Assignment',
                'Cat'=> 'CAT',
                'Exam' => 'Exam'
            ]),
            Textarea::make('Comment'),
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
            ExportAsCsv::make(),
        ];
    }
}
