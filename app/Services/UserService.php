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
namespace App\Services;

use App\Model\User;
use Hyperf\Cache\Annotation\CachePut;

class UserService
{
    /**
     * @CachePut(prefix="getUserById", ttl=9000)
     */
    public function getUserById(int $id)
    {
        $user = User::query()->where('id', $id)->first();

        if ($user) {
            return $user->toArray();
        }

        return null;
    }
}
