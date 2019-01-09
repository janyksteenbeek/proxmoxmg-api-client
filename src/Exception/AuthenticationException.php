<?php

/**
 * This file is part of the ProxmoxMG PHP API wrapper library (unofficial).
 *
 * @copyright 2014 César Muñoz <zzantares@gmail.com>
 * @license http://opensource.org/licenses/MIT The MIT License.
 */

namespace ProxmoxMG\Exception;

/**
 * AuthenticationException class. Is the exception thrown when credentials
 * passed are not correct, thus the ProxmoxMG API client can not be used.
 *
 * @author César Muñoz <zzantares@gmail.com>
 */
class AuthenticationException extends \RuntimeException
{
}
