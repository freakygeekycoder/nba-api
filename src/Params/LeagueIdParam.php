<?php

namespace JasonRoman\NbaApi\Params;

class LeagueIdParam extends AbstractParam
{
    const NBA            = '00';
    const ABA            = '01';
    const WNBA           = '10';
    const SUMMER_ORLANDO = '14';
    const SUMMER_VEGAS   = '15';
    const SUMMER_UTAH    = '16';
    const G_LEAGUE       = '20';

    const OPTIONS = [
        self::NBA,
        self::ABA,
        self::WNBA,
        self::D_LEAGUE,
    ];

    const OPTIONS_NBA = [
        self::NBA,
    ];

    const OPTIONS_NBA_AND_SUMMER = [
        self::NBA,
        self::SUMMER_ORLANDO,
        self::SUMMER_VEGAS,
        self::SUMMER_UTAH,
    ];

    const OPTIONS_NBA_WNBA = [
        self::NBA,
        self::WNBA,
    ];

    /**
     * Default to NBA.
     *
     * @return string
     */
    public static function getDefaultValue() : string
    {
        return self::NBA;
    }
}