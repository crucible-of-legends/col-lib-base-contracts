<?php

namespace COL\Librairy\Infrastructure\Adapter\Database;

use COL\Librairy\Domain\DataInteractor\DTO\DTOInterface;

interface QueryBuilderAdapterInterface
{
    public function addCount(string $objectAlias, string $fieldName): void;

    public function pagination(int $pageNumber, int $nbPerPage): void;

    public function addOrderBy(string $fieldName, string $direction = 'ASC'): void;

    /**
     * @return DTOInterface[]
     */
    public function getMultipleResults(): array;

    public function getSingleResult(): ?DTOInterface;

    public function getCountResult(): int;

    public function exists(): bool;

    public function limit(int $limit): void;
}
