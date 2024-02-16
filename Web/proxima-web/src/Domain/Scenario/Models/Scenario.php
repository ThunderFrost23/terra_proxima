<?php

namespace Domain\Scenario\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @mixin Builder
 *
 * @method static Builder|static query()
 * @method static static make(array $attributes = [])
 * @method static static create(array $attributes = [])
 * @method Scenario firstOrNew(array $attributes = [], array $values = [])
 * @method Scenario firstOrFail($columns = ['*'])
 * @method Scenario firstOrCreate(array $attributes, array $values = [])
 * @method Scenario updateOrCreate(array $attributes, array $values = [])
 * @method null|static first($columns = ['*'])
 * @method static static findOrFail($id, $columns = ['*'])
 * @method static static findOrNew($id, $columns = ['*'])
 * @method static null|static find($id, $columns = ['*'])
 *
 * @property-read int $id
 *
 * @property string $money
 *
 * @property-read Carbon $created_at
 * @property-read Carbon $updated_at
 */
class Scenario extends Model
{
    protected $fillable = [
        'money'
    ];
}
