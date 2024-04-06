<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    /** 
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class,'menuid');
    }
    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class,'pelangganid');
    }

}
