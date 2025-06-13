<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Language extends Model {
    protected $primaryKey = 'language_id';

    protected $fillable = [
        'name'
    ];

    public static function boot() {
        parent::boot();
        self::creating(function ($model) {
            $model->language_id = (string) Str::uuid();
        });
    }

    public function lessons() {
        return $this->hasMany(Lesson::class, 'language_id', 'language_id');
    }

    public function casts() {
        return [
            'language_id' => 'string',
            'name' => 'string'
        ];
    }
}
