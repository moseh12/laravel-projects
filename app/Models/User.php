namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    // Check if the user has a specific role
    public function hasRole($role)
    {
        return $this->roles->contains('name', $role);
    }
}
