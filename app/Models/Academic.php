<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'professor_id',
        'semester_id',
        'course_id',
        'curricula_id',
        'portfolio_id',
    ];

    // Relación inversa (professor)
    public function professor() {
        return $this->belongsTo(Professor::class);
    }

    // Relación inversa (semester)
    public function semester() {
        return $this->belongsTo(Semester::class);
    }

    // Relación inversa (course)
    public function course() {
        return $this->belongsTo(Course::class);
    }

    // Relación inversa (curricula)
    public function curricula() {
        return $this->belongsTo(Curricula::class);
    }

    // Relación inversa (portfolio)
    public function portfolio() {
        return $this->belongsTo(Portfolio::class);
    }
}
