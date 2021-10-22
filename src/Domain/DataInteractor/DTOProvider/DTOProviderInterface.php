<?php

namespace COL\Librairy\BaseContracts\Domain\DataInteractor\DTOProvider;

use COL\Librairy\BaseContracts\Domain\DataInteractor\DTO\DTOInterface;

interface DTOProviderInterface
{
    public function getOneById(int|string $id): ?DTOInterface;
}
