<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;

use Leeto\MoonShine\Resources\Resource;
use Leeto\MoonShine\Fields\ID;
use Leeto\MoonShine\Fields\Text;
use Leeto\MoonShine\Fields\Image;
use Leeto\MoonShine\Fields\WYSIWYG;
use Leeto\MoonShine\Fields\Textarea;

class BrandResource extends Resource
{
	public static string $model = \App\Models\Brand::class;

	public static string $title = 'Бренды';

	public function fields(): array
	{
		return [
            ID::make()->sortable(),
            Text::make('Название', 'name')->required(),
            Text::make('Заголовок', 'title')->required(),
            Textarea::make('Описание', 'description')->required()->hideOnIndex(),
            Image::make('Логотип', 'logo')->dir('/')->disk('public')->allowedExtensions(['jpg', 'gif', 'png']),
            Image::make('Логотип 2', 'logo_big')->dir('/')->disk('public')->allowedExtensions(['jpg', 'gif', 'png'])->hideOnIndex(),
            Image::make('Картинка', 'image')->dir('/')->disk('public')->allowedExtensions(['jpg', 'gif', 'png'])->hideOnIndex(),
            WYSIWYG::make('Пролог', 'prologue')->hideOnIndex()->required(),
            WYSIWYG::make('Страница', 'page')->hideOnIndex()->required(),
        ];
	}

	public function rules(Model $item): array
	{
	    return [];
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
