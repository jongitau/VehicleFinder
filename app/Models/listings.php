<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listings extends Model
{
    use HasFactory;

    protected $fillable = ['title','company','location','tags', 'email', 'website', 'description'];

    public function scopeFilter($query, array $filters)
    {
        if($filters['tag'] ?? false){
            $query->where('tags', 'like', '%'. request('tag').'%');
        }


        if($filters['search'] ?? false){
            $query->where('title', 'like', '%'. request('search').'%')
            ->orWhere('tags', 'like', '%'. request('search').'%')
            ->orWhere('company', 'like', '%'. request('search').'%')
            ->orWhere('location', 'like', '%'. request('search').'%')

            ;
        }
    }

}
