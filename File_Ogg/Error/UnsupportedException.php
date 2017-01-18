<?php

namespace File_Ogg;

class UnsupportedException extends OggException {
    public function __construct($msg) {
        super::__construct($msg, OggException::UNSUPPORTED);
    }
}
