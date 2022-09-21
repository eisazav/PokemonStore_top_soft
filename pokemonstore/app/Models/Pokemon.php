<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    /**
     * ATTRIBUTES
     * $this->attributes['id'] - bigInt
     * $this->attributes['created_at'] - timestamp
     * $this->attributes['updated_at'] - timestamp
     * $this->attributes['name'] - string
     * $this->attributes['type'] - string
     * $this->attributes['weakness'] - string
     * $this->attributes['ablity'] - string
     * $this->attributes['height'] - double
     * $this->attributes['weight'] - double
     * $this->attributes['description'] - string
     * $this->attributes['cost'] - double
     * $this->attributes['evolution'] - boolean
     * $this->attributes['evolutionId'] - bigInt
     * $this->attributes['stat_hp'] - integer
     * $this->attributes['stat_attack'] - integer
     * $this->attributes['stat_defense'] - integer
     * $this->attributes['stat_special_attack'] - integer
     * $this->attributes['stat_special_defense'] - integer
     * $this->attributes['stat_speed'] - integer
     * $this->attributes['of_the_month'] - boolean
     * $this->attributes['image'] - string
     */

    /* #region Properties */
    protected $fillable = [
        'name',
        'type',
        'weakness',
        'ablity',
        'height',
        'weight',
        'description',
        'cost',
        'evolution',
        'stat_hp',
        'stat_attack',
        'stat_defense',
        'stat_special_attack',
        'stat_special_defense',
        'stat_speed',
        'of_the_month',
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

    public function getType() {
        return $this->attributes['type'];
    }

    public function getWeakness() {
        return $this->attributes['weakness'];
    }

    public function getAblity() {
        return $this->attributes['ablity'];
    }

    public function getHeight() {
        return $this->attributes['height'];
    }

    public function getWeight() {
        return $this->attributes['weight'];
    }

    public function getDescription() {
        return $this->attributes['description'];
    }

    public function getCost() {
        return $this->attributes['cost'];
    }

    public function getEvolution() {
        return $this->attributes['evolution'];
    }

    public function getStatHp() {
        return $this->attributes['stat_hp'];
    }

    public function getStatAttack() {
        return $this->attributes['stat_attack'];
    }

    public function getStatDefense() {
        return $this->attributes['stat_defense'];
    }

    public function getStatSpecialAttack() {
        return $this->attributes['stat_special_attack'];
    }

    public function getStatSpecialDefense() {
        return $this->attributes['stat_special_defense'];
    }

    public function getStatSpeed() {
        return $this->attributes['stat_speed'];
    }

    public function getOfTheMonth() {
        return $this->attributes['of_the_month'];
    }

    public function getImage() {
        return $this->attributes['image'];
    }
    /* #endregion */

    /* #region Setters */
    public function setId($id) {
        $this->attributes['id'] = $id;
    }

    public function setName($name) {
        $this->attributes['name'] = $name;
    }

    public function setType($type) {
        $this->attributes['type'] = $type;
    }

    public function setWeakness($weakness) {
        $this->attributes['weakness'] = $weakness;
    }

    public function setAblity($ablity) {
        $this->attributes['ablity'] = $ablity;
    }

    public function setHeight($height) {
        $this->attributes['height'] = $height;
    }

    public function setWeight($weight) {
        $this->attributes['weight'] = $weight;
    }

    public function setDescription($description) {
        $this->attributes['description'] = $description;
    }

    public function setCost($cost) {
        $this->attributes['cost'] = $cost;
    }

    public function setEvolution($evolution) {
        $this->attributes['evolution'] = $evolution;
    }

    public function setStatHp($stat_hp) {
        $this->attributes['stat_hp'] = $stat_hp;
    }

    public function setStatAttack($stat_attack) {
        $this->attributes['stat_attack'] = $stat_attack;
    }

    public function setStatDefense($stat_defense) {
        $this->attributes['stat_defense'] = $stat_defense;
    }

    public function setStatSpecialAttack($stat_special_attack) {
        $this->attributes['stat_special_attack'] = $stat_special_attack;
    }

    public function setStatSpecialDefense($stat_special_defense) {
        $this->attributes['stat_special_defense'] = $stat_special_defense;
    }

    public function setStatSpeed($stat_speed) {
        $this->attributes['stat_speed'] = $stat_speed;
    }

    public function setOfTheMonth($of_the_month) {
        $this->attributes['of_the_month'] = $of_the_month;
    }

    public function setImage($image) {
        $this->attributes['image'] = $image;
    }
    /* #endregion */
}
