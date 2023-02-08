<?php

use Botble\Widget\AbstractWidget;

class CoursesListWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * @var string
     */
    protected $widgetDirectory = 'courses-list';

    /**
     * TagsWidget constructor.
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function __construct()
    {
        parent::__construct([
            'name'           => __('Courses List'),
            'description'    => __('Popular Courses List'),
            'number_display' => 5,
            'name_custom_class' => '',
        ]);
    }
}
