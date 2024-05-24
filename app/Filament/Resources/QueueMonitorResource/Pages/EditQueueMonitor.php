<?php

namespace App\Filament\Resources\QueueMonitorResource\Pages;

use App\Filament\Resources\QueueMonitorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQueueMonitor extends EditRecord
{
    protected static string $resource = QueueMonitorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
