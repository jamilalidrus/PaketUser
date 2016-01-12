<?php 
namespace Jamil\User\Entities\Eloquent;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user';
	public $timestamps =false;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['username', 'password','level'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function barang(){
		return $this->hasMany("Jamil\KelolahData\Entities\Eloquent\ModelBarang");
	}

	public function lowongan(){
		return $this->hasMany("Jamil\KelolahData\Entities\Eloquent\ModelLowongan");
	}

	public function profil(){
		return $this->hasOne("Jamil\Main\Entities\Eloquent\Profil");
	}

}
