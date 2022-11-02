<?php

namespace TwilllNavigation\Twill\Capsules\Navigations\Http\Controllers;

use A17\Twill\Http\Controllers\Admin\NestedModuleController as BaseModuleController;

class NavigationController extends BaseModuleController
{
    protected $moduleName = 'navigations';

    protected $indexOptions = [
        'reorder' => true,
    ];

    protected $showOnlyParentItemsInBrowsers = true;

    protected $nestedItemsDepth = 1;
}
