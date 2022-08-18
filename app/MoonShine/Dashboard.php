<?php

namespace App\MoonShine;

use App\Models\User;
use App\Models\Article;

use Leeto\MoonShine\Dashboard\DashboardBlock;
use Leeto\MoonShine\Dashboard\DashboardScreen;
use Leeto\MoonShine\Metrics\ValueMetric;

class Dashboard extends DashboardScreen
{
	public function blocks(): array
	{
		return [
			DashboardBlock::make([
				ValueMetric::make('Пользователей')->value(User::query()->count())
			]),
			DashboardBlock::make([
				ValueMetric::make('Статьи')->value(Article::query()->count())
			]),
		];
	}
}
