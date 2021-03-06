<?php

namespace JasonRoman\NbaApi\Request\Stats\Stats\Charts;

use JasonRoman\NbaApi\Constraints as ApiAssert;
use JasonRoman\NbaApi\Params\GameIdParam;
use JasonRoman\NbaApi\Params\Stats\RunTypeParam;
use JasonRoman\NbaApi\Request\Stats\Stats\AbstractStatsStatsRequest;
use Symfony\Component\Validator\Constraints as Assert;

class WinProbabilityPlayByPlayRequest extends AbstractStatsStatsRequest
{
    const ENDPOINT = '/stats/winprobabilitypbp';

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiRegex(GameIdParam::FORMAT)
     *
     * @var string
     */
    public $gameId;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(RunTypeParam::OPTIONS)
     *
     * @var string
     */
    public $runType;
}