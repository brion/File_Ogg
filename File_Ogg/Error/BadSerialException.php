<?php

namespace File_Ogg;

class BadSerialException extends OggException {
    public function __construct($msg) {
        super::__construct($msg, OggException::BAD_SERIAL);
    }
}
