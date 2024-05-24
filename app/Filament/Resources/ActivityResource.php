<?php

namespace App\Filament\Resources;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Z3d0X\FilamentLogger\Resources\ActivityResource as BaseResource;

class ActivityResource extends BaseResource
{
    use HasPageShield;
    /**
     * The resource navigation sort order.
     */
    protected static ?int $navigationSort = 1;

    /**
     * Get the navigation badge for the resource.
     */
    public static function getNavigationBadge(): ?string
    {
        return number_format(static::getModel()::count());
    }
}
