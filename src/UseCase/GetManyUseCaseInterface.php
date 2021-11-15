<?php

namespace COL\Librairy\BaseContracts\UseCase;

use COL\Librairy\BaseContracts\Domain\View\Model\ViewModelInterface;
use COL\Librairy\BaseContracts\Domain\View\Wrapper\MultipleViewModelWrapperInterface;

interface GetManyUseCaseInterface
{
    /**
     *  @return ViewModelInterface[]
     */
    public function execute(string $displayFormat, array $criteria = [], ?int $pageNumber = null, ?int $nbPerPage = null): MultipleViewModelWrapperInterface;
}
