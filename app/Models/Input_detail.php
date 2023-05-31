<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Input_detail extends Model
{
    protected $table = 'input_details';
    protected $primaryKey = 'dt_id';
    protected $fillable = ['dt_quatity', 'dt_unit', 'dt_lotnumber', 'dt_expried', 'dt_vat', 'dt_inputprice', 'dt_saleprice', 'prd_id', 'ip_id'];


    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function input()
    {
        return $this->belongsTo(Input::class);
    }
    use HasFactory;
}
