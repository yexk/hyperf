<?php

declare(strict_types=1);

namespace App\Controller;

use App\Constants\ErrorCode;
use App\Exception\ApiException;

class NotFoundController
{
    public function index()
    {
        throw new ApiException(ErrorCode::NOT_FOUND);
    }
}
