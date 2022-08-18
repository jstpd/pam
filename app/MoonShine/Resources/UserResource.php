<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;

use Leeto\MoonShine\Resources\Resource;
use Leeto\MoonShine\Fields\ID;
use Leeto\MoonShine\Fields\Text;
use Leeto\MoonShine\Fields\Email;
use Leeto\MoonShine\Fields\Password;
use Leeto\MoonShine\Fields\PasswordRepeat;

class UserResource extends Resource
{
	public static string $model = \App\Models\User::class;

	public static string $title = 'Пользователи';

	public function fields(): array
	{
		return [
            ID::make()->sortable(),
            Text::make('Имя', 'name')->required(),
            Email::make('E-mail', 'email')->required(),
            Password::make('Пароль', 'password')->hideOnIndex(),
            PasswordRepeat::make('Повторите пароль', 'password_repeat')->hideOnIndex(),
        ];
	}

	public function rules(Model $item): array
	{
	    return [
            'name' => ['required', 'max:50'],
            'email' => ['required', 'max:255'], // 'unique:users'
            'password' => ['sometimes', 'nullable', 'min:8', 'required_with:password_repeat', 'same:password_repeat'],
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
