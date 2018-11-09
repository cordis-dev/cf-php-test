<?php 

define("foo",     "something");

final CLASS SomeClass
{
   public final function SomeMethod()
    {
    }
}

if ( $test ) {
    // do nothing
}

if ($test = 'abc') {
    $output = `ls -al`;
}

public function saveFile($filename)
{
	$file = PhpFile::instance($filename);
	
	try {
		$file->lock();
	} catch (Exception $ex) {
	
	}
}

// $i is used in both loops
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $i++) {
		do_something($i, $j);
    }
}
?>
