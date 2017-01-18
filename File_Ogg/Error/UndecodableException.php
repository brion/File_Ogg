<?php

namespace File_Ogg;

class UndecodableException extends OggException {
    public function __construct($msg) {
        super::__construct($msg, OggException::UNDECODABLE);
    }
}
