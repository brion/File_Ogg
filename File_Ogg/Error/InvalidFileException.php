<?php

namespace File_Ogg;

class InvalidFileException extends OggException {
    public function __construct($msg) {
        super::__construct($msg, OggException::INVALID_FILE);
    }
}
