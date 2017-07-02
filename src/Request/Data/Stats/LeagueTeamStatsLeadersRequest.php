<?php

namespace JasonRoman\NbaApi\Request\Data\Stats;

use Symfony\Component\Validator\Constraints as Assert;
use JasonRoman\NbaApi\Request\AbstractDataRequest;

/**
 * Get team rankings for various stats for a season. This includes preseason, regular season, and playoffs.
 */
class LeagueTeamStatsLeadersRequest extends AbstractDataRequest
{
    const ENDPOINT = '/data/prod/v1/{year}/team_stats_rankings.json';

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = 2015)
     *
     * @var int
     */
    public $year;
}