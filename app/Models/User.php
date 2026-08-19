<?php
namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;

    protected $fillable = ['name','email','password','role','phone'];
    protected $hidden = ['password','remember_token'];
    protected $casts = ['email_verified_at' => 'datetime', 'password' => 'hashed'];

    public function appointments(): HasMany { return $this->hasMany(Appointment::class, 'patient_id'); }
    public function doctor() { return $this->hasOne(Doctor::class); }
    public function reports(): HasMany { return $this->hasMany(MedicalReport::class, 'patient_id'); }
    public function medicalRecords(): HasMany { return $this->hasMany(MedicalRecord::class, 'patient_id'); }
    public function notifications(): HasMany { return $this->hasMany(Notification::class)->latest(); }
    public function passwordSetupTokens(): HasMany { return $this->hasMany(PasswordSetupToken::class); }

    public function isAdmin(): bool { return $this->role === 'admin'; }
    public function isDoctor(): bool { return $this->role === 'doctor'; }
    public function isPatient(): bool { return $this->role === 'patient'; }

    public function canAccessPanel(Panel $panel): bool
    {
        return $panel->getId() === 'admin' && $this->isAdmin();
    }
}
