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

use App\Services\UserService;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;

class IndexController
{
    public function index(RequestInterface $request, ResponseInterface $response)
    {
        $method = $request->getMethod();

        $User = new UserService();
        $user = $User->getUserById(43);

        return $response->json([
            'method' => $method,
            'res' => $user,
        ]);
    }
}
