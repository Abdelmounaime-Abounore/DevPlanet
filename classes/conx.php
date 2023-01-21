<?php
/**
 * 
 */
class conx
{
	static $pdo;
	static $i=0;

	function __construct()
	{
        try {
            if(self::$i==0){ 
                self::$pdo = mysqli_connect("localhost:3306", "root", "", "devplanet");
                 self::$i=1; }
        } catch (\Throwable $th) {
           echo 'error :'.$th;
        }
		
	}
}
  ?>