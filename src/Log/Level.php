<?php

declare(strict_types=1);

namespace RpHaven\App\Log;

enum Level: string
{
    case EMERGENCY = 'emergency';
    case ALERT     = 'alert';
    case CRITICAL  = 'critical';
    case ERROR     = 'error';
    case WARNING   = 'warning';
    case NOTICE    = 'notice';
    case INFO      = 'info';
    case DEBUG     = 'debug';
}