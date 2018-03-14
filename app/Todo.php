<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'todos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titles', 'description', 'priority'];

    /**
    * Scope a query to prioritize todos.
    *
    * @param \Illuminate\Database\Eloquent\Builder $query
    * @return \Illuminate\Database\Eloquent\Builder
    */

    public static function scopePrioritize( $query){
        return $query->orderBy('priority','desc');
    }

    
}
