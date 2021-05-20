<?php

namespace App\Enum;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\ReadableEnum;

/**
 * Class CustomsTypeManual
 * @package App\Enum
 *
 * @method static CustomsTypeManual FISKAL4200()
 * @method static CustomsTypeManual IMPORT4000()
 * @method static CustomsTypeManual OZL()
 * @method static CustomsTypeManual T1()
 * @method static CustomsTypeManual AES()
 * @method static CustomsTypeManual AAP()
 * @method static CustomsTypeManual AEK()

 */
final class CustomsTypeManual extends ReadableEnum
{
    use AutoDiscoveredValuesTrait;

    const FISKAL4200 = 'FISKAL4200';
    const IMPORT4000 = 'IMPORT4000';
    const OZL = 'OZL';
    const T1 = 'T1';
    const AES = 'AES';
    const AAP = 'AAP';
    const AEK = 'AEK';

    /**
     * @inheritDoc
     */
    public static function readables(): array
    {
        return [
            self::FISKAL4200 => 'Fiskal 4200',
            self::IMPORT4000 => 'Import Verzollung 4000',
            self::OZL => 'OZL',
            self::T1 => 'T-1',
            self::AES => 'AES',
            self::AAP => 'Gest. A.AP',
            self::AEK => 'AE Konventionell',
        ];
    }
}
