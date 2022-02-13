<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        // 'price',
        'body',
        // 'describe',
        // 'isOpen',
        // 'thumbnail',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }
    public function carts(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'carts')
        ->withPivot(['id']);
    }

    public function likes(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\User', 'likes')->withTimestamps();
    }

     /**
     * コースにユーザーがすでにいいねをおしているかチェック
     * アクセサ - liked_by_user
     * @return boolean
     */
    public function isLikedBy(?User $user): bool
    {
        return $user
            ? (bool) $this->likes->where('id', $user->id)->count()
            : false;
    }

    /**
     * アクセサ - likes_count
     * @return integer
     */
    public function getCountLikesAttribute(): int
    {
        return $this->likes->count();
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Tag')->withTimestamps();
    }
}
