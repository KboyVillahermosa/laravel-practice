<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'department', 'file_path'];

    // If department is a relationship, define it like this:
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
