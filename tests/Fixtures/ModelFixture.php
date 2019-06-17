<?php

namespace Dbt\Tests\Fixtures;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

/**
 * @property mixed created_by
 * @property mixed updated_by
 * @property mixed name
 * @property mixed deleted_by
 */
class ModelFixture extends Model
{
    use SoftDeletes;

    protected $table = 'blame';
    protected $guarded = [];

    public static function make (): self
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return self::query()->create([
            'name' => Str::random(16),
        ]);
    }
}
