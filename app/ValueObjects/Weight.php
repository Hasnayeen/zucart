<?php

namespace App\ValueObjects;

use Illuminate\Contracts\Support\Arrayable;
use JsonSerializable;

class Weight implements Arrayable, JsonSerializable
{
    private function __construct(
        public readonly int $value,
        public readonly string $unit,
    ) {}

    public static function make(int $value, string $unit): self
    {
        return new self($value, $unit);
    }

    public function toArray(): array
    {
        return [
            'value' => $this->value,
            'unit' => $this->unit,
        ];
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
