<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'answer',
        'marks',
        'is_approved',
        'bise_frequency',
        'is_from_exercise',
        'chapter_id',
        'question_type',
        'mcq_id',
        'user_id', //owner id
    ];


    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }

    public function mcq()
    {
        return $this->belongsTo(Mcq::class);
    }

    public function scopeShort($query)
    {
        return $query->where('question_type', 'short');
    }
    public function scopeLong($query)
    {
        return $query->where('question_type', 'long');
    }
    public function scopeMcqs($query)
    {
        return $query->where('question_type', 'mcq');
    }
}
