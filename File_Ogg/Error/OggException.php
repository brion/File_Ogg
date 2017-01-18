<?php 

namespace File_Ogg;

/**
 * Parent class for File_Ogg's exceptions
 */
class OggException extends \Exception {
  /**
   * Error thrown if the file location passed is nonexistant or unreadable.
   */
  const INVALID_FILE = 1;

  /**
   * Error thrown if the user attempts to extract an unsupported logical stream.
   */
  const UNSUPPORTED = 2;

  /**
   * Error thrown if the user attempts to extract an logical stream with no
   * corresponding serial number.
   */
  const BAD_SERIAL = 3;

  /**
   * Error thrown if the stream appears to be corrupted.
   */
  const UNDECODABLE = 4;
}
