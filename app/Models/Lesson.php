<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Lesson extends Model {
    protected $primaryKey = 'lesson_id';

    protected $fillable = [
        'language_id',
        'lesson_name',
        'lesson_number'
    ];

    public static function boot() {
        parent::boot();
        self::creating(function ($model) {
            $model->lesson_id = (string) Str::uuid();
        });
    }

    public function language() {
        return $this->belongsTo(Language::class, 'language_id', 'language_id');
    }

    public function word_lists() {
        return $this->hasMany(LessonWord::class, 'lesson_id', 'lesson_id');
    }

    protected function casts() {
        return [
            'language_id' => 'string',
            'lesson_name' => 'string',
            'lesson_number' => 'integer'
        ];
    }
}
