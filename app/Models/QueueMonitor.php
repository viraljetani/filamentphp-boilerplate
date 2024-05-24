<?php

namespace App\Models;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use \Croustibat\FilamentJobsMonitor\Models\QueueMonitor as CroustibatQueueMonitor;

class QueueMonitor extends CroustibatQueueMonitor
{
    //use HasPageShield;
}
