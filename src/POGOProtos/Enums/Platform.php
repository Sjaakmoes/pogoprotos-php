<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Enums/Platform.php');

namespace POGOProtos\Enums {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;

  // enum POGOProtos.Enums.Platform
  abstract class Platform extends ProtobufEnum {
    const NONE = 0;
    const IOS = 1;
    const ANDROID = 2;
    const OSX = 3;
    const WINDOWS = 4;

    public static $_values = array(
      0 => "NONE",
      1 => "IOS",
      2 => "ANDROID",
      3 => "OSX",
      4 => "WINDOWS",
    );

    public static function isValid($value) {
      return array_key_exists($value, self::$_values);
    }

    public static function toString($value) {
      checkArgument(is_int($value), 'value must be a integer');
      if (array_key_exists($value, self::$_values))
        return self::$_values[$value];
      return 'UNKNOWN';
    }
  }

}