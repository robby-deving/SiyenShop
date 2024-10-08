<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['course_name']; // Add other fields if your table has more columns

    /**
     * Define the relationship with the User model.
     * A course can have many users.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
