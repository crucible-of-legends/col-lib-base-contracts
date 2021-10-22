<?php

namespace COL\Librairy\Domain\DataInteractor\DTOPersister;

use COL\Librairy\Domain\DataInteractor\DTO\DTOInterface;

interface DTOPersisterInterface
{
    public function save(DTOInterface $dto): DTOInterface;

    public function delete(DTOInterface $dto): bool;
}
