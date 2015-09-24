<?php

/**
 * Class IdiotException
 */
class IdiotException extends \Exception
{

    /**
     * A string to add on to the end of the message
     */
    const MESSAGE_SUFFIX = 'WW91ciBjb2RlIGlzIGJhZCBhbmQgeW91IHNob3VsZCBmZWVsIGJhZA==';

    /**
     * @param string         $message
     * @param int            $code
     * @param Exception|null $previous
     */
    public function __construct($message, $code = 0, Exception $previous = null)
    {
        // some code
        $message .= PHP_EOL . base64_decode(self::MESSAGE_PREFIX) . PHP_EOL;
        // make sure everything is assigned properly
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
