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
namespace App\Exception\Handler;

use App\Constants\ErrorCode;
use App\Exception\ApiException;
use Hyperf\ExceptionHandler\ExceptionHandler;
use Hyperf\HttpMessage\Stream\SwooleStream;
use Psr\Http\Message\ResponseInterface;
use Throwable;

class ApiExceptionHandler extends ExceptionHandler
{
    public function handle(Throwable $throwable, ResponseInterface $response)
    {
        // 拦截所有api异常，
        if ($throwable instanceof ApiException) {
            $data = json_encode([
                'code' => $throwable->getCode(),
                'message' => $throwable->getMessage(),
            ]);

            $this->stopPropagation();

            return $response->withStatus(200)->withBody(new SwooleStream($data));
        }
        return $response;
    }

    public function isValid(Throwable $throwable): bool
    {
        return true;
    }
}
