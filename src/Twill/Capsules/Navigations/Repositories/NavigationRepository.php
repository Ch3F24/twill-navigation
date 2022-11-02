<?php

namespace TwilllNavigation\Twill\Capsules\Navigations\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleNesting;
use A17\Twill\Repositories\ModuleRepository;
use TwilllNavigation\Twill\Capsules\Navigations\Models\Navigation;

class NavigationRepository extends ModuleRepository
{
    use HandleTranslations, HandleSlugs, HandleNesting;

    public function __construct(Navigation $model)
    {
        $this->model = $model;
    }
}
