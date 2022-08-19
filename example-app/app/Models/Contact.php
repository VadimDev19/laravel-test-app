<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    
    protected $table = 'contacts';
    protected $guarded  = false;

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    } 

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'contact_tags', 'contact_id', 'tag_id');
    }
}
