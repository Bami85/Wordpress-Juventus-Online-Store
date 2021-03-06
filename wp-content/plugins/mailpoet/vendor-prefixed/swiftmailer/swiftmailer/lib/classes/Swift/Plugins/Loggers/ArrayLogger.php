<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
class Swift_Plugins_Loggers_ArrayLogger implements Swift_Plugins_Logger
{
 private $log = [];
 private $size = 0;
 public function __construct($size = 50)
 {
 $this->size = $size;
 }
 public function add($entry)
 {
 $this->log[] = $entry;
 while (\count($this->log) > $this->size) {
 \array_shift($this->log);
 }
 }
 public function clear()
 {
 $this->log = [];
 }
 public function dump()
 {
 return \implode(\PHP_EOL, $this->log);
 }
}
