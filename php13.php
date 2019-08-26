<?php

	class Person1 {
 	public $message = 'Hello, ';
 	public function person($name)
 	{
		return $this->message.$name;
	}
 	}
	$mymessage = New Person1();
	echo $mymessage->person('Jonas Jonaitis!')."\n";

	class Person2 {
 	public $message = 'Guten Tag, ';
 	public function person($name)
 	{
		return $this->message.$name;
	}
 	}
	$mymessage = New Person2();
	echo $mymessage->person('Petras Petraitis!')."\n";

?>