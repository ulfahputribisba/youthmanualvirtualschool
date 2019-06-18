<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['siswa_id', 'mapel_id', 'parent_id', 'body'];

    /**
     * The belongs to Relationship
     *
     * @var array
     */
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    /**
     * The has Many Relationship
     *
     * @var array
     */
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
