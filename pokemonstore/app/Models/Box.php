<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\BoxItem;
use App\Models\Pokemon;

class Box extends Model
{
    protected $table = 'box';

    use HasFactory;

    /**
     * ATTRIBUTES
     * $this->attributes['id'] - bigInt
     * $this->attributes['created_at'] - timestamp
     * $this->attributes['updated_at'] - timestamp
     * $this->attributes['name'] - string
     * $this->attributes['cost'] - double
     * $this->attributes['image'] - string
     */

    /* #region Properties */
    protected $fillable = [
        'name',
        'cost',
        'image',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    /* #endregion */

    /* #region Getters */
    public function getById($id) {
        return Pokemon::findOrFail($id);
    }

    public function getId() {
        return $this->attributes['id'];
    }

    public function getName() {
        return $this->attributes['name'];
    }

    public function getCost() {
        return $this->attributes['cost'];
    }

    public function getImage() {
        return $this->attributes['image'];
    }

    public function getBoxItems($id) {
        $ids = BoxItem::select('pokemon_id')->where('box_id', $id)->get();
        $pokemons = array();
        foreach ($ids as $id) {
            $pokemons[] = Pokemon::findOrFail($id['pokemon_id']);
        }
        return $pokemons;
    }
    /* #endregion */

    /* #region Setters */
    public function setId($id) {
        $this->attributes['id'] = $id;
    }

    public function setName($name) {
        $this->attributes['name'] = $name;
    }

    public function setCost($cost) {
        $this->attributes['cost'] = $cost;
    }

    public function setImage($image) {
        $this->attributes['image'] = $image;
    }
    /* #endregion */
}
