<?php

namespace App;

use App\TrucksList;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class TruckBrands extends Model
{
    //
    use Sortable;
    protected $table = "truck_brands";
    protected $fillable = ['markes_id', 'markes_pav'];
    public $sortable = ['markes_id', 'markes_pav'];

    public function truckslist()
    {
        return $this->hasMany(TrucksList::class);
    }
}
