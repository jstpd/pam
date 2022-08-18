<?php

namespace App\MoonShine\Resources;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Model;

use Leeto\MoonShine\Resources\Resource;
use Leeto\MoonShine\Fields\ID;
use Leeto\MoonShine\Fields\Text;
use Leeto\MoonShine\Fields\Image;
use Leeto\MoonShine\Fields\Select;
use Leeto\MoonShine\Fields\Json;

class CatalogResource extends Resource
{
	public static string $model = \App\Models\Catalog::class;

	public static string $title = 'Продукция';

	public function fields(): array
	{
		return [
            ID::make()->sortable(),
            Text::make('Название', 'name')->required(),
            Select::make('Бренд', 'brand_id')->options(Brand::getList()),
            Image::make('Логотип', 'image')->dir('/')->disk('public')->allowedExtensions(['jpg', 'gif', 'png']),
            Json::make('Параметры', 'params')->fields([
                    Text::make('Заголовок', 'name'),
                    Text::make('Значение', 'value')
                ])->removable()->hideOnIndex()
            // Json::make('Параметры', 'params')->keyValue('Характиристика', 'Значение')->hideOnIndex()
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
