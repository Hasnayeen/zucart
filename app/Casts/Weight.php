<?php

namespace App\Casts;

use App\ValueObjects\Weight as WeightValueObject;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

class Weight implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function get(Model $model, string $key, mixed $value, array $attributes): WeightValueObject
    {
        return new WeightValueObject(
            value: $value['value'],
            unit: $value['unit'],
        );
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function set(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        if ($value instanceof WeightValueObject) {
            return [
                'value' => $value->value,
                'unit' => $value->unit,
            ];
        }

        throw new InvalidArgumentException('The given value is not an Weight instance.');
    }
}
