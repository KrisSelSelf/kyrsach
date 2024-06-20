<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Korzina extends Model
{
    use HasFactory;

    protected $fillable = [
        'User_id',
        'Tovar_id',
    ];



    /**
     * Get all of the korpbyf for the Korzina
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function (): HasMany
    {
         $this->hasMany(Comment::class)->orderBy ( column: "created_at");
    }
}
