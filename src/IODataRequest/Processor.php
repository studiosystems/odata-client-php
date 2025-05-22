<?php

namespace Studiosystems\OData\IODataRequest;

use Studiosystems\OData\Query\Builder;
use Studiosystems\OData\Query\IProcessor;

class Processor implements IProcessor
{
    /**
     * @inheritdoc
     */
    public function processSelect(Builder $query, array $results): array
    {
        return $results;
    }
}
