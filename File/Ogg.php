<?php 

//
// Compatibility entry point for File_Ogg package.
//
// Defines previous PHP4-style class names and constants for things
// that have moved in 2017 to PSR-4 style layout with namespaces.
//

require_once __DIR__ . "/../File_Ogg/Error/OggException.php";
require_once __DIR__ . "/../File_Ogg/Error/InvalidFileException.php";
require_once __DIR__ . "/../File_Ogg/Error/UnsupportedException.php";
require_once __DIR__ . "/../File_Ogg/Error/BadSerialException.php";
require_once __DIR__ . "/../File_Ogg/Error/UndecodableException.php";

require_once __DIR__ . "/../File_Ogg/Stream/Bitstream.php";
require_once __DIR__ . "/../File_Ogg/Stream/Media.php";
require_once __DIR__ . "/../File_Ogg/Stream/Vorbis.php";
require_once __DIR__ . "/../File_Ogg/Stream/Speex.php";
require_once __DIR__ . "/../File_Ogg/Stream/Flac.php";
require_once __DIR__ . "/../File_Ogg/Stream/Theora.php";
require_once __DIR__ . "/../File_Ogg/Stream/Opus.php";

require_once __DIR__ . "/../File_Ogg/Reader.php";

define("OGG_MAXIMUM_PAGE_SIZE", \File_Ogg\Reader::MAXIMUM_PAGE_SIZE);

define("OGG_STREAM_VORBIS", \File_Ogg\Reader::STREAM_VORBIS);
define("OGG_STREAM_SPEEX", \File_Ogg\Reader::STREAM_SPEEX);
define("OGG_STREAM_THEORA", \File_Ogg\Reader::STREAM_THEORA);
define("OGG_STREAM_FLAC", \File_Ogg\Reader::STREAM_FLAC);
define("OGG_STREAM_OPUS", \File_Ogg\Reader::STREAM_OPUS);

define("OGG_ERROR_INVALID_FILE", \File_Ogg\OggException::INVALID_FILE);
define("OGG_ERROR_UNSUPPORTED", \File_Ogg\OggException::UNSUPPORTED);
define("OGG_ERROR_BAD_SERIAL", \File_Ogg\OggException::BAD_SERIAL);
define("OGG_ERROR_UNDECODABLE", \File_Ogg\OggException::UNDECODABLE);

class File_Ogg extends \File_Ogg\Reader {};
