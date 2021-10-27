<?php

namespace COL\Librairy\BaseContracts\Domain\View\Presenter;

use COL\Librairy\BaseContracts\Domain\DataInteractor\DTO\DTOInterface;
use COL\Librairy\BaseContracts\Domain\View\Model\ViewModelInterface;
use COL\Librairy\BaseContracts\Domain\View\Wrapper\SingleViewModelWrapperInterface;

interface SingleObjectViewPresenterInterface
{
    public function buildSingleObjectVueModel(?DTOInterface $dto, ?string $displayFormat): SingleViewModelWrapperInterface;

    public function buildVueModelLargeFormat(DTOInterface $dto): ViewModelInterface;

    public function buildVueModelMediumFormat(DTOInterface $dto): ViewModelInterface;

    public function buildVueModelSmallFormat(DTOInterface $dto): ViewModelInterface;
}
