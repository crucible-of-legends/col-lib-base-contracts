<?php

namespace COL\Librairy\Domain\DataInteractor\DTOProvider;

use COL\Librairy\Domain\DataInteractor\DTO\DTOInterface;

interface DTOProviderInterface
{
    public function getOneById(int|string $id): ?DTOInterface;
}
