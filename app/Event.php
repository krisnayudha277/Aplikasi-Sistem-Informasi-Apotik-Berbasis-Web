<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
protected $table  = "tbl_tasks";
    //
    protected $fillable = [
        'event_name', 'start_date', 'end_date'
    ];
}
