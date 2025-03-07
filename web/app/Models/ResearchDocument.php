<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchDocument extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'file_path', 'department_id', 'is_published'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
