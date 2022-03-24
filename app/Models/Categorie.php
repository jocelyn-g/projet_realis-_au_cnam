<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    /**
     * Le nom de table
     *
     * @var string
     */
    protected $table = 'categorie';

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
     * Cette fonction renvoie un tableau contenant la liste des plats rattachés à cette catégorie
     *
     * @return Collection
     */
    public function plats()
    {
        // 'categorie_id' correspond à la colonne de la clé étrangère dans la table 'plat'
        // 'id' correspond à la colonne de clé primaire dans la table 'categorie'
        return $this->hasMany(Plat::class, 'categorie_id', 'id');
    }
}
