<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Home extends Model
{
    use HasFactory;

    public function date(){
        $date = Carbon::now('America/Monterrey');
        $date = date('Y-m-s', strtotime($date));
        return $date;
    }

}
