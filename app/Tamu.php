<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    /**
     * @var string
     */
    protected $table = 'tamu';
    protected $primaryKey = 'id';
    /**
     * @var array
     */
    protected $guarded = [];

    public $timestamps = false;
}
