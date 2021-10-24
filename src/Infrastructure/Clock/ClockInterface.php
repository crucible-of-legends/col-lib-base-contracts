<?php

namespace COL\Librairy\BaseContracts\Infrastructure\Clock;

use DateTimeImmutable;

interface ClockInterface
{
    public function now(): DateTimeImmutable;
}
