<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'score',
    ];

    /**
     * Get the user that owns the score.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
