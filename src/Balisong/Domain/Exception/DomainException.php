<?php

namespace Src\Balisong\Domain\Exception;

use Exception;
use Throwable;

class DomainException extends Exception
{
    private ?bool $logException;

    public function __construct(
        $message = "",
        $code = 0,
        ?Throwable $previous = null,
        ?bool $logException = null
    ) {
        parent::__construct($message, $code, $previous);
        $this->logException = $logException;
    }

    public function logException(): ?bool
    {
        return $this->logException;
    }
}