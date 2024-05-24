<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QueueMonitorResource\Pages;
use App\Filament\Resources\QueueMonitorResource\RelationManagers;
use App\Models\QueueMonitor;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QueueMonitorResource extends \Croustibat\FilamentJobsMonitor\Resources\QueueMonitorResource
{
   use HasPageShield;
}
