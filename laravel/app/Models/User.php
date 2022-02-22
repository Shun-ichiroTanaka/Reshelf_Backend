<?php

namespace App\Models;

use App\Models\Post;
use Laravel\Sanctum\HasApiTokens; // 追加
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email','password',
        // facebook
        // 'fb_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // public function sendPasswordResetNotification($token)
    // {
    //     $this->notify(new PasswordResetNotification($token, new BareMail()));
    // }

    public function posts(): HasMany
    {
        return $this->hasMany('App\Models\Post');
    }

    public function carts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'carts')
        ->withPivot(['id']);
    }

    /**
     * フォロー
     */
    public function followers(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\User', 'follows', 'followee_id', 'follower_id')->withTimestamps();
    }

    public function followings(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\User', 'follows', 'follower_id', 'followee_id')->withTimestamps();
    }
    public function isFollowedBy(?User $user): bool
    {
        return $user
            ? (bool)$this->followers->where('id', $user->id)->count()
            : false;
    }

    /**
     * いいね
     */
    public function likes(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Post', 'likes')->withTimestamps();
    }

    public function getCountFollowersAttribute(): int
    {
        return $this->followers->count();
    }

    public function getCountFollowingsAttribute(): int
    {
        return $this->followings->count();
    }
}
