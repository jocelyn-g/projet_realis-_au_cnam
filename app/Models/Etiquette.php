<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Etiquette extends Model
{
    use HasFactory;

    /**
     * Le nom de table
     *
     * @var string
     */
    protected $table = 'etiquette';

    /**
     * Undocumented variable
     *
     * @var string
     */
    protected $premaryKey = 'id';

    /**
     * Undocumented variable
     *
     * @var array
     */
    protected $attributes = [];

    /**
     * Cette fonction renvoie une collection contenant la liste des plats rattachés à cette étiquette
     *
     * @return Collection
     */
    public function plats()
    {
        return $this->belongsToMany(Plat::class);
    }
}
