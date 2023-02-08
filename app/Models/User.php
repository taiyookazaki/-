<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
     //多対多のリレーションを書く
    public function likes()
    {
        return $this->belongsToMany('App\Models\Gotouti_men','likes','user_id','Gotouti_men_id')->withTimestamps();
    }

    //この投稿に対して既にlikeしたかどうかを判別する
    public function isLike($gotouti_menId)
    {
      return $this->likes()->where('gotouti_men_id',$gotouti_menId)->exists();
    }

    //isLikeを使って、既にlikeしたか確認したあと、いいねする（重複させない）
    public function like($gotouti_menId)
    {
      if($this->isLike($postId)){
        //もし既に「いいね」していたら何もしない
      } else {
        $this->likes()->attach($gotouti_menId);
      }
    }

    //isLikeを使って、既にlikeしたか確認して、もししていたら解除する
    public function unlike($gotouti_menId)
    {
      if($this->isLike($gotouti_menId)){
        //もし既に「いいね」していたら消す
        $this->likes()->detach($gotouti_menId);
      } else {
      }
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
