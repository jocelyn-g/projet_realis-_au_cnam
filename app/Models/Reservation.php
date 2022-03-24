<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    /**
     * The name of the table
     *
     * @var string
     */
    protected $table = 'reservation';

    /**
     * Undocumented variable
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Un tableau qui contient les valeurs par défaut
     *
     * @var array
     */
    protected $attributes = [];

}
