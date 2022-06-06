<?php

declare(strict_types=1);

class  Charter
{
    private ?\DateTime $startDate = null;
    private ?\DateTime $endDate = null;

    /**
     * @var Collection<int, NavigationLog>
     */
    private Collection $navigationLogs;

    //...
}
