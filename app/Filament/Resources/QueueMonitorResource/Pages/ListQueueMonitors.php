<?php

namespace App\Filament\Resources\QueueMonitorResource\Pages;

use App\Filament\Resources\QueueMonitorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQueueMonitors extends ListRecords
{
    protected static string $resource = QueueMonitorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
