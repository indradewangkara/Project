<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_name',
        'project_description'
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
    public function project_lists(){
        return $this->belongsTo(project_lists::class);
    }
}
