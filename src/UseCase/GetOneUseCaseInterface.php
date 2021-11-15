<?php

namespace COL\Librairy\BaseContracts\UseCase;

use COL\Librairy\BaseContracts\Domain\View\Wrapper\SingleViewModelWrapperInterface;

interface GetOneUseCaseInterface
{
    public function execute(string|int $identifier, array $extraParameters = []): SingleViewModelWrapperInterface;
}
