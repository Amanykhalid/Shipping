<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lang extends Model
{
    //
    protected $table = "langs";
    protected $guarded =[];

    
    // public function scopeStatus($query)
    // {
    //     return $query->where('status', 1);
    // }
    // public function getStatus()
    // {
    //   return   $this ->status == 0 ? 'مفعل'  : 'غير مفعل';
    // }
}
