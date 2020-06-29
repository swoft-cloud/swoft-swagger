<?php declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://swoft.org/docs
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace Swoft\Swagger\Contract;

/**
 * Class DtoInterface
 *
 * @since 2.0
 */
interface DtoInterface
{
    /**
     * @param object $object
     *
     * @return string
     */
    public function encode($object): string;
}
