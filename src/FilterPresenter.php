<?php

namespace Encore\ChinaDistpicker;

use Encore\Admin\Grid\Filter\Presenter\Presenter;

class FilterPresenter extends Presenter
{
    protected $value_type = 'code';

    public function view() : string
    {
        return 'laravel-admin-china-distpicker::filter';
    }

    public function nameForValue()
    {
        $this->value_type = 'name';

        return $this->filter;
    }

    public function variables(): array
    {
        return [
            'value_type' => $this->value_type
        ];
    }
}
