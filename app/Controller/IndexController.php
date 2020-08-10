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
namespace App\Controller;

use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;

class IndexController
{
    public function index(RequestInterface $request, ResponseInterface $response)
    {
        $user = $request->input('user', 'yexk');
        $method = $request->getMethod();
        return $response->json([
            'method' => $method,
            'message' => "Hello {$user}.",
        ]);
    }
}
