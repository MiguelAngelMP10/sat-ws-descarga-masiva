<?php

declare(strict_types=1);

namespace PhpCfdi\SatWsDescargaMasiva\Shared;

use Eclipxe\Enum\Enum;
use JsonSerializable;

/**
 * Defines the request type (cfdi or metadata)
 *
 * @method static self xml()
 * @method static self metadata()
 *
 * @method bool isXml()
 * @method bool isMetadata()
 */
final class RequestType extends Enum implements JsonSerializable
{
    public function getQueryAttributeValue(ServiceType $serviceType): string
    {
        if ($this->isXml() && $serviceType->isCfdi()) {
            return 'CFDI';
        }

        if ($this->isXml() && $serviceType->isRetenciones()) {
            return 'Retencion';
        }

        return 'Metadata';
    }

    public function jsonSerialize(): string
    {
        return $this->value();
    }
}
