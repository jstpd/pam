<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use \App\Models\Navigation;

use Leeto\MoonShine\Resources\Resource;
use Leeto\MoonShine\Fields\ID;
use Leeto\MoonShine\Fields\Text;
use Leeto\MoonShine\Fields\Select;

class NavigationResource extends Resource
{
	public static string $model = Navigation::class;

	public static string $title = 'Навигация';

	public function fields(): array
	{
		return [
            ID::make()->sortable(),
            Text::make('Позиция', 'ordering')->sortable(),
            Select::make('Родительская категория', 'parent_id')->options(self::$model::getList()),
            Text::make('Название', 'name')->required(),
            Text::make('Адрес', 'link')->required(),
            Text::make('Стиль (class)', 'style')->hideOnIndex(),
            
        ];
	}

	public function rules(Model $item): array
	{
	    return [
            'parent_id' => ['nullable'],
            'name' => ['required', 'max:100'],
            'link' => ['required', 'max:255'],
            'style' => ['max:100', 'nullable'],
            'ordering' => ['nullable'],
        ];
    }

    public function search(): array
    {
        return ['id'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [];
    }
}
