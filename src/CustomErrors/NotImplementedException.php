<?php

namespace app\CustomErrors;

use Throwable;

class NotImplementedException extends \Exception
{
    public static string $defaultMessage = "Not yet implemented";

    public function __construct(
        string $message = "",
        int $code = 0,
        ?Throwable $previous = null
    ) {
        if ($message === "") {
            $message = self::$defaultMessage;
        }
        parent::__construct($message, $code, $previous);
    }
}
