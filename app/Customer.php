<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = ['name', 'number'];

    protected $dates = ['published_at'];

    public function scopePublished($query)
    {
        return $query->where('added_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query) {
        return $query->where('added_at', '>', Carbon::now());
    }

    public function setPublishedAtAttribute($date) {
        $this->attributes['added_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    public function user() {
        return $this->belongsTo('App\User','user_id');
    }
    public function getImageUrl(){
        return asset($this->photo);
    }

}
