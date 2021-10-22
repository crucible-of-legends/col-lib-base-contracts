<?php

namespace COL\Librairy\BaseContracts\Domain\DataInteractor\DTOPersister;

use COL\Librairy\BaseContracts\Domain\DataInteractor\DTO\DTOInterface;

interface DTOPersisterInterface
{
    public function save(DTOInterface $dto): DTOInterface;

    public function delete(DTOInterface $dto): bool;
}
