<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\Author;
use App\Models\BannerAds;
use App\Models\Page;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;
    protected function getStats(): array
    {
        return [
            Stat::make('Total Article', Article::get()->count())
            ->icon('heroicon-o-newspaper'),
            Stat::make('Total Author', Author::get()->count())
            ->icon('heroicon-o-user-group'),
            Stat::make('Total Banner Ads', BannerAds::get()->count())
            ->icon('heroicon-o-rectangle-stack'),
            Stat::make('Total Page', Page::get()->count())
            ->icon('heroicon-o-window'),
        ];
    }
}
