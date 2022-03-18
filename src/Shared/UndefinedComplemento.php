<?php

declare(strict_types=1);

namespace PhpCfdi\SatWsDescargaMasiva\Shared;

use Eclipxe\Enum\Enum;

/**
 * Defines the generic complement type, only has undefined
 *
 * @method static self undefined()
 */
final class UndefinedComplemento extends Enum implements FilterComplement
{
    use FilterComplementTrait;

    /** @var array<string, array{satCode: string, label: string}> */
    private const MAP = [
        self::UNDEFINED_KEY => self::UNDEFINED_VALUES,
    ];
}
