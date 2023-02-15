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
     //多対多のリレーション
    public function likes()
    {
        return $this->belongsToMany('App\Models\Gotouti_men','likes','user_id','Gotouti_men_id')->withTimestamps();
    }

    //likeしたかどうかを判別する
    public function isLike($gotouti_men)
    {
      return $this->likes()->where('gotouti_men_id',$gotouti_men)->exists();
    }

    //isLikeを使って、既にlikeしたか確認したあといいね(重複させない）
    public function like($gotouti_men)
    {
      if($this->isLike($gotouti_men)){
        //もし既に「いいね」していたら何もしない
      } else {
        $this->likes()->attach($gotouti_men);
      }
    }

    //isLikeを使って、既にlikeしたか確認して、もししていたら解除する
    public function unlike($gotouti_men)
    {
      if($this->isLike($gotouti_men)){
        //もし既に「いいね」していたら消す
        $this->likes()->detach($gotouti_men);
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
        'email',
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
    public function gotouti_mens()   
    {
      return $this->hasMany(Gotouti_men::class);  
    
    }
    public function likedgotouti_men()
      {
         return $this->belongsToMany(Gotouti_men::class, "likes", "user_id", "gotouti_men_id");
      }
    
}
