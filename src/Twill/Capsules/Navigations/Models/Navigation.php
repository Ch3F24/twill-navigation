<?php

namespace TwilllNavigation\Twill\Capsules\Navigations\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\HasNesting;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Navigation extends Model implements Sortable
{
    use HasTranslation, HasSlug, HasPosition, HasNesting;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
    ];
    
    public $translatedAttributes = [
        'title',
        'description',
        'active',
    ];
    
    public $slugAttributes = [
        'title',
    ];
    
}
