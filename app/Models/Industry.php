<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;

    protected $fillable = [
       'user_id',
       'name',
       'bidang',
       'alamat',
       'longitude',
       'latitude',
        'industryMentorName',
        'industryMentorNo',
        'duration'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function students()
    {
        return $this->hasOne(Student::class);
    }

    public function visits()
    {
        return $this->hasMany(Visits::class);
    }
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function evaluations(){
        return $this->hasMany(Evaluation::class);
    }
       public function produktif(){
        return $this->hasMany(AspekProduktif::class);
    }

}
