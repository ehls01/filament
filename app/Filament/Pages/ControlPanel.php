<?php

namespace App\Filament\Pages;

use Kanuni\FilamentCards\Filament\Pages\CardsPage;
use Kanuni\FilamentCards\CardItem;
use App\Filament\Pages\CompanySettings;

class ControlPanel extends CardsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-8-tooth';

    public static function getCards(): array
    {
        return [
            CardItem::make('/path/to/docs')
                ->title('Documentation')
                ->icon('heroicon-o-document-text')
                ->description('Read the docs')
        ];
    }
}