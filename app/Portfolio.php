<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model
{
    use SoftDeletes;

    protected $table = 'portfolios';

    protected $fillable = ['title', 'slug', 'summary'];

    protected $hidden = [];

    public function projects()
    {
        return $this->belongsToMany('App\Project')->withTimestamps();
    }
}