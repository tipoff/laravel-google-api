<?php

declare(strict_types=1);

namespace Tipoff\GoogleApi\Models;

use Tipoff\Support\Models\BaseModel;
use Tipoff\Support\Traits\HasPackageFactory;

class Key extends BaseModel
{
    use HasPackageFactory;

    protected $casts = [];
}
