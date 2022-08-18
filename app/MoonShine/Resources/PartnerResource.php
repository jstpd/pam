<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;

use Leeto\MoonShine\Resources\Resource;
use Leeto\MoonShine\Fields\ID;
use Leeto\MoonShine\Fields\Text;
use Leeto\MoonShine\Fields\Image;

class PartnerResource extends Resource
{
	public static string $model = \App\Models\Partner::class;

	public static string $title = 'Партнеры';

	public function fields(): array
	{
		return [
            ID::make()->sortable(),
            Text::make('Название', 'name'),
            Image::make('Логотип', 'src')
                ->dir('/') // Директория где будут хранится файлы в storage (по умолчанию /)
                ->disk('public') // filesystems disk
                ->allowedExtensions(['jpg', 'gif', 'png']) // Допустимые расширения
 
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
