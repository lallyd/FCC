<?php

class Message {


protected static $_messages = array();

public static function _init()
{
$current = Session::get('_messages');
if ($current)
{
self::$_messages = unserialize($current);
}
else
{
self::reset();
}
//\Event::register('shutdown', 'self::write');
}

public static function success($m)
{
self::add("success", $m);
}

public static function error($m)
{
self::add("error", $m);
}

public static function info($m)
{
self::add("info", $m);
}

public static function add($type, $message)
{
self::$_messages->{$type}[] = $message;
self::write();
}

public static function get()
{
$msgs = self::$_messages;
foreach ($msgs as $k => $v)
{
if (!count($v))
{
unset($msgs->{$k});
}
}

self::reset();
self::write();

if (count( (array) $msgs) == 0)
{
return null;
}

return $msgs;
}

public static function reset()
{
self::$_messages = (object) array(
"notice" => array(),
"error" => array(),
"info" => array()
);
}

public static function write()
{
//Debug::Dump(self::$_messages);die;
Session::set('_messages', serialize(self::$_messages) );
}


}