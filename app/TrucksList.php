<?php

namespace App;
use App\TruckBrands;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class TrucksList extends Model
{
    //
    use Sortable;



    protected $table = "trucks_lists";
    protected $fillable = ['marke_id', 'gamybos_metai', 'vardas_pavarde', 'savinink_sk', 'komentaras'];

    public $sortable = ['marke_id', 'gamybos_metai', 'vardas_pavarde', 'savinink_sk', 'komentaras'];

    public function truckbrands()
    {
        return $this->belongsTo(TruckBrands::class);
    }
}
