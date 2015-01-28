<?php

class Palabra extends Model {
    protected $table = 'palabras';
    public $timestamp = true;

    protected $fillable = ['palabra', 'silabas', 'imagen', 'sorp', 'type'];

	protected static $rules = [
        'palabra' => 'required',
    ];

    /* Scopes */

    public function scopeType($query, $type)
    {
        return $query->where('type', '=', $type);
    }

    public function scopeCada($query)
    {
        return $query->where('type', '=', 'camino')->where('imagen', '<>', '');
    }
   
    /* Relationships */

    /* function */

    public function sustituir()
    {
        return str_replace("_", $this->silabas, $this->palabra);
    }

     public function getType()
    {
        switch ($this->imagen) {
            case 'J':
            return "Juguete";
            break;
            
            case 'A':
            return "Animal";
            break;

            case 'F':
            return "Fruta";
            break;

            case 'N':
            return "Nombre";
            break;
        }
    }

}