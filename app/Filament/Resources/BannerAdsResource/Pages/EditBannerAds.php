<?php

namespace App\Filament\Resources\BannerAdsResource\Pages;

use App\Filament\Resources\BannerAdsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBannerAds extends EditRecord
{
    protected static string $resource = BannerAdsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
