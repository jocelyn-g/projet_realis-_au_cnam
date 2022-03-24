<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;

    /**
     * The name of the table
     *
     * @var string
     */
    protected $table = 'plat';

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
    protected $attributes = [
        'description' => "Origine :\nEpicé :\n",
    ];

    /**
     * Cette fonction renvoie la catégorie auquelle ce plat est ratache
     *
     * @return Catégorie
     */
    public function categorie()
    {
        // 'categorie_id' correspond à la colonne de la clé étrangère dans la table 'plat'
        // 'id' correspond à la colonne de clé primaire dans la table 'categorie'
        return $this->belongsTo(Categorie::class,
        'categorie_id', 'id');
    }

    /**
     * Cette fonction renvoie une collection contenant les étiquettes des plats rattachés
     *
     * @return Collection
     */
    public function etiquette()
    {
        return $this->belongsToMany(Etiquette::class);
    }
}
