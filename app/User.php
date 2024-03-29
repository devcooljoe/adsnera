<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Session;
use App\Referral;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    protected static function boot()
    {
        parent::boot();
        static::created(function ($user) {
            $user->account()->create([
                'type' => Session::get('account_type') ?? 'promoter',
                'status' => 'not active',
                'category' => 'user',
            ]);
            $user->profile()->create([]);
            $user->wallet()->create(['amount' => 0]);
            $user->bank()->create([]);

            if (Session::has('referral_id')) {
                if (User::find(Session::get('referral_id')) != null) {
                    Referral::create([
                        'user_id' => Session::get('referral_id'),
                        'account_id' => $user->id,
                        'name' => $user->name,
                        'account_type' => Session::get('account_type'),
                        'account_status' => 'not active',
                        'paid' => false,
                    ]);
                    Session::forget('referral_id');
                }
            }
            Session::forget('account_type');
        });
    }
    public function advertiser()
    {
        return $this->account()->first()->type == 'advertiser';
    }
    public function promoter()
    {
        return $this->account()->first()->type == 'promoter';
    }
    public function admin()
    {
        return $this->account()->first()->category == 'admin';
    }
    public function active()
    {
        return $this->account()->first()->status == 'active';
    }
    public function banned()
    {
        return $this->account()->first()->status == 'banned';
    }

    public function account()
    {
        return $this->hasOne(Account::class);
    }
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    public function task()
    {
        return $this->hasMany(Task::class);
    }
    public function post()
    {
        return $this->hasMany(Post::class);
    }
    public function earning()
    {
        return $this->hasMany(Earning::class);
    }
    public function lead()
    {
        return $this->hasMany(Lead::class);
    }
    public function withdrawal()
    {
        return $this->hasMany(Withdrawal::class);
    }
    public function deposit()
    {
        return $this->hasMany(Deposit::class);
    }
    public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }
    public function bank()
    {
        return $this->hasOne(Bank::class);
    }
    public function referral()
    {
        return $this->hasMany(Referral::class)->orderBy('id', 'DESC');
    }
}
