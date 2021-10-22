<?php

namespace COL\Librairy\Domain\DataInteractor\View\Presenter;

use COL\Librairy\Domain\DataInteractor\View\Wrapper\MultipleViewModelWrapperInterface;

interface MultipleObjectViewPresenterInterface
{
    public function buildMultipleObjectVueModel(
        array $dtos,
        string $displayFormat,
        ?int $nbTotal = null,
        ?int $pageNumber = null,
        ?int $nbPerPage = null
    ): MultipleViewModelWrapperInterface;
}