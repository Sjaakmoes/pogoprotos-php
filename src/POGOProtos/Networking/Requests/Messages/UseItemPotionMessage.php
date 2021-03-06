<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Networking/Requests/Messages/UseItemPotionMessage.php');

namespace POGOProtos\Networking\Requests\Messages {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;


  // message POGOProtos.Networking.Requests.Messages.UseItemPotionMessage
  final class UseItemPotionMessage extends ProtobufMessage {

    private $_unknown;
    private $itemId = \POGOProtos\Inventory\Item\ItemId::ITEM_UNKNOWN; // optional .POGOProtos.Inventory.Item.ItemId item_id = 1
    private $pokemonId = 0; // optional fixed64 pokemon_id = 2

    public function __construct($in = null, &$limit = PHP_INT_MAX) {
      parent::__construct($in, $limit);
    }

    public function read($fp, &$limit = PHP_INT_MAX) {
      $fp = ProtobufIO::toStream($fp, $limit);
      while(!feof($fp) && $limit > 0) {
        $tag = Protobuf::read_varint($fp, $limit);
        if ($tag === false) break;
        $wire  = $tag & 0x07;
        $field = $tag >> 3;
        switch($field) {
          case 1: // optional .POGOProtos.Inventory.Item.ItemId item_id = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->itemId = $tmp;

            break;
          case 2: // optional fixed64 pokemon_id = 2
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_uint64($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_unint64 returned false');
            $this->pokemonId = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->itemId !== \POGOProtos\Inventory\Item\ItemId::ITEM_UNKNOWN) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->itemId);
      }
      if ($this->pokemonId !== 0) {
        fwrite($fp, "\x11", 1);
        Protobuf::write_uint64($fp, $this->pokemonId);
      }
    }

    public function size() {
      $size = 0;
      if ($this->itemId !== \POGOProtos\Inventory\Item\ItemId::ITEM_UNKNOWN) {
        $size += 1 + Protobuf::size_varint($this->itemId);
      }
      if ($this->pokemonId !== 0) {
        $size += 9;
      }
      return $size;
    }

    public function clearItemId() { $this->itemId = \POGOProtos\Inventory\Item\ItemId::ITEM_UNKNOWN; }
    public function getItemId() { return $this->itemId;}
    public function setItemId($value) { $this->itemId = $value; }

    public function clearPokemonId() { $this->pokemonId = 0; }
    public function getPokemonId() { return $this->pokemonId;}
    public function setPokemonId($value) { $this->pokemonId = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('item_id', $this->itemId, \POGOProtos\Inventory\Item\ItemId::ITEM_UNKNOWN)
           . Protobuf::toString('pokemon_id', $this->pokemonId, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Requests.Messages.UseItemPotionMessage)
  }

}