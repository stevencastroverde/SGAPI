<?php
require 'vendor/autoload.php';
use GuzzleHttp\Psr7;

$stream = Psr7\stream_for('this is a sample string data');

 echo $stream->getSize() . "\r\n";
 echo $stream->isReadable();
 echo $stream->isWritable();
 echo $stream->isSeekable();

 $stream->write('test');
 $stream->rewind();
echo $stream->read(5) . "\r\n";
 echo $stream->getContents() . "\r\n";
 echo $stream->eof() . "\r\n";
