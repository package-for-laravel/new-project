<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseEloquentModel
 * @package App\Models
 */
abstract class BaseEloquentModel extends Model
{
    /**
     * Get the table name of this model
     * @return string
     */
    public static function getTableName(): string
    {
        return with(new static())->getTable();
    }
}
