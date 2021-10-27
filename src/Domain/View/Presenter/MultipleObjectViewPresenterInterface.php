<?php

namespace COL\Librairy\BaseContracts\Domain\View\Presenter;

use COL\Librairy\BaseContracts\Domain\DataInteractor\DTO\DTOInterface;
use COL\Librairy\BaseContracts\Domain\View\Model\ViewModelInterface;
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

    public function buildVueModelLargeFormat(DTOInterface $dto): ViewModelInterface;

    public function buildVueModelMediumFormat(DTOInterface $dto): ViewModelInterface;

    public function buildVueModelSmallFormat(DTOInterface $dto): ViewModelInterface;
}
