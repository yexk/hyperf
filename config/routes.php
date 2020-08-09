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
use Hyperf\HttpServer\Router\Router;

Router::addRoute(['GET', 'POST'], '/', 'App\Controller\IndexController@index');

Router::addGroup('/v1/', function () {
    Router::addRoute(['GET', 'POST'], 'as', 'App\Controller\V1\IndexController@index');
});