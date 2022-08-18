<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;

use Leeto\MoonShine\Resources\Resource;
use Leeto\MoonShine\Fields\ID;
use Leeto\MoonShine\Fields\Text;
use Leeto\MoonShine\Fields\Image;
use Leeto\MoonShine\Fields\WYSIWYG;
// use Leeto\MoonShine\Fields\Date;

class ArticleResource extends Resource
{
	public static string $model = \App\Models\Article::class;

	public static string $title = 'Статьи';

	public function fields(): array
	{
		return [
            ID::make()->sortable(),
            Text::make('Заголовок', 'title')->required(),
            Image::make('Логотип', 'logo')->dir('/')->disk('public')->allowedExtensions(['jpg', 'gif', 'png']),
            WYSIWYG::make('Описание', 'description')->hideOnIndex()->required(),
            WYSIWYG::make('Текст', 'text')->hideOnIndex()->required(),
            // Date::make('Дата создания', 'created_at')->format('d.m.Y')
        ];
	}

	public function rules(Model $item): array
	{
	    return [
            'title' => ['required', 'max:100'],
            'description' => ['required', 'max:500'],
            'text' => ['required', 'max:2000'],
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
