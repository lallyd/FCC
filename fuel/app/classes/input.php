<?php
class Input extends Fuel\Core\Input {

public static function is_post()
{
return self::method() == 'POST';
}

}