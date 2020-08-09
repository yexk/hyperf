<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller\V1;

use App\Constants\ErrorCode;
use App\Controller\AbstractController;
use App\Exception\ApiException;
use App\Model\User;

class IndexController extends AbstractController
{
    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();
        $User = new User();
        $User->name = 'asffsdsf';
        $User->save();
        // TODO
        throw new ApiException(ErrorCode::SERVER_ERROR);
        return [
            'method' => $method,
            'message' => "Hello {$user}.",
            'res' => $User,
        ];
    }
}
