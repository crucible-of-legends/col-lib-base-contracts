<?php

namespace COL\Librairy\BaseContracts\Infrastructure\Adapter\Database;

use COL\Librairy\BaseContracts\Domain\DataInteractor\DTO\DTOInterface;

interface DatabaseAdapterInterface
{
    public function createQueryBuilder(string $dtoName, string $alias): QueryBuilderAdapterInterface;

    public function delete(DTOInterface $dto): bool;

    public function persist(DTOInterface $dto): DTOInterface;
}
