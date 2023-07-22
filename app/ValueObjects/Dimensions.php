<?php

namespace App\ValueObjects;

use Illuminate\Contracts\Support\Arrayable;
use JsonSerializable;

class Dimensions implements Arrayable, JsonSerializable
{
    private function __construct(
        public readonly int $length,
        public readonly int $width,
        public readonly int $height,
        public readonly string $unit,
    ) {}

    public static function make(int $length, int $width, int $height, string $unit): self
    {
        return new self(
            length: $length,
            width: $width,
            height: $height,
            unit: $unit,
        );
    }

    public function toArray(): array
    {
        return [
            'length' => $this->length,
            'width' => $this->width,
            'height' => $this->height,
            'unit' => $this->unit,
        ];
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
