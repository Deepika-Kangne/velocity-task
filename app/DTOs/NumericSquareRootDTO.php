<?php

namespace App\DTOs;

use App\Http\Requests\NumericSquareRootRequest;
use Spatie\DataTransferObject\DataTransferObject;

class NumericSquareRootDTO extends DataTransferObject
{
    public ?string $squareNo;

    public static function fromRequest(NumericSquareRootRequest $numericSquareRootRequest): self
    {
        return new self([
            "squareNo"    => $numericSquareRootRequest["squareNo"],
        ]);
    }
}
