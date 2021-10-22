<?php

namespace COL\Librairy\Domain\DataInteractor\View\Presenter;

use COL\Librairy\Domain\DataInteractor\DTO\DTOInterface;
use COL\Librairy\Domain\DataInteractor\View\Wrapper\SingleViewModelWrapperInterface;

interface SingleObjectViewPresenterInterface
{
    public function buildSingleObjectVueModel(?DTOInterface $dto, ?string $displayFormat): SingleViewModelWrapperInterface;
}
