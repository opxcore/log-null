<?php
/*
 * This file is part of the OpxCore.
 *
 * Copyright (c) Lozovoy Vyacheslav <opxcore@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use OpxCore\Log\AbstractLogger;
use OpxCore\Log\Interfaces\LoggerInterface;

class LogNull extends AbstractLogger implements LoggerInterface
{
    /**
     * Null logger do not write anything, so just do nothing.
     *
     * @param mixed $level
     * @param $message
     * @param array $context
     *
     * @return  void
     */
    public function log($level, $message, array $context = []): void
    {
    }
}