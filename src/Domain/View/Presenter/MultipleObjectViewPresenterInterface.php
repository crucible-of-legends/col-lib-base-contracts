<?php

namespace COL\Librairy\BaseContracts\Domain\View\Presenter;

use COL\Librairy\BaseContracts\Domain\View\Wrapper\MultipleViewModelWrapperInterface;

interface MultipleObjectViewPresenterInterface
{
    public function buildMultipleObjectVueModel(
        array $dtos,
        string $displayFormat,
        ?int $nbTotal = null,
        ?int $pageNumber = null,
        ?int $nbPerPage = null,
    ): MultipleViewModelWrapperInterface;
}
