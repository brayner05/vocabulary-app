<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class LessonWord extends Model {
    protected $primaryKey = 'lesson_word_list_id';

    protected $fillable = [
        'lesson_id',
        'native_translation',
        'learner_translation',
    ];

    public static function boot() {
        parent::boot();
        self::creating(function ($model) {
            $model->lesson_word_id = (string) Str::uuid();
        });
    }

    public function lesson() {
        return $this->belongsTo(Lesson::class, 'lesson_id', 'lesson_id');
    }

    protected function casts() {
        return [
            'lesson_word_id' => 'string',
            'lesson_id' => 'string',
            'native_translation' => 'string',
            'learner_translation' => 'string'
        ];
    }
}
