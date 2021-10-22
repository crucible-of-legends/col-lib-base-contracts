<?php

namespace COL\Librairy\BaseContracts\Domain\DataInteractor\View\Presenter;

use COL\Librairy\BaseContracts\Domain\DataInteractor\DTO\DTOInterface;
use COL\Librairy\BaseContracts\Domain\DataInteractor\View\Wrapper\SingleViewModelWrapperInterface;

interface SingleObjectViewPresenterInterface
{
    public function buildSingleObjectVueModel(?DTOInterface $dto, ?string $displayFormat): SingleViewModelWrapperInterface;
}
