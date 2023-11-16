<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bb extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'content', 'price'];
    protected $touches = ['rubric'];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault(
            function ($user, $bb) {
                $user->name = 'quest.' . config('app.name');
            }
        );
    }

    public function rubric()
    {
        return $this->belongsTo(Rubric::class);
    }
}
