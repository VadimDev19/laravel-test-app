<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function contacts()
    {
        return $this->belongsToMany(Contact::class, 'contact_tags', 'tag_id', 'contact_id');
    }
}
