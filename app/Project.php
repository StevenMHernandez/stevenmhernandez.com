<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $table = 'projects';

    protected $fillable = ['title', 'subtitle', 'date', 'slug', 'image', 'summary', 'body'];

    protected $hidden = [];

    public function portfolios()
    {
        return $this->belongsToMany('App\Portfolios');
    }
}