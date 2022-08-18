<?php

namespace App\MoonShine\Resources;

use App\Models\Faq;
use Illuminate\Database\Eloquent\Model;

use Leeto\MoonShine\Resources\Resource;
use Leeto\MoonShine\Fields\ID;
use Leeto\MoonShine\Fields\Text;
use Leeto\MoonShine\Fields\WYSIWYG;
use Leeto\MoonShine\Fields\SwitchBoolean;


class FaqResource extends Resource
{
	public static string $model = Faq::class;

	public static string $title = 'FAQs';

	public function fields(): array
	{
		return [
            ID::make()->sortable(),
            Text::make('Заголовок', 'title')->required(),
            WYSIWYG::make('Текст', 'text')->hideOnIndex()->required(),
            SwitchBoolean::make('Развернуть?', 'collapsed')->onValue(1)->offValue(0)
        ];
	}

	public function rules(Model $item): array
	{
	    return [
            'title' => ['required', 'max:100'],
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
