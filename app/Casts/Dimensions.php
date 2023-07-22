<?php

namespace App\Casts;

use App\ValueObjects\Dimensions as DimensionsValueObject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use InvalidArgumentException;

class Dimensions implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function get(Model $model, string $key, mixed $value, array $attributes): DimensionsValueObject
    {
        return new DimensionsValueObject(
            length: $value['length'],
            width: $value['width'],
            height: $value['height'],
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
        if ($value instanceof DimensionsValueObject) {
            return [
                'length' => $value->length,
                'width' => $value->width,
                'height' => $value->height,
                'unit' => $value->unit,
            ];
        }

        throw new InvalidArgumentException('The given value is not an Dimensions instance.');
    }
}
