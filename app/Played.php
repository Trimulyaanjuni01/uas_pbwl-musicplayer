<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Played extends Model
{
    protected $table = "tb_played";

   protected $primaryKey= 'played_id';

   protected $fillable = ['play_id_track', 'play_date'];
}
