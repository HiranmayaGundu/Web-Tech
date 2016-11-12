<?php
    /**
     * functions.php
     * Helper functions.
     */

    // your database's name
    define("DATABASE", "hiran_userLogin");

    // your database's password
    define("PASSWORD", "3rdsem");

    // your database's server
    define("SERVER", "localhost");

    // your database's username
    define("USERNAME", "hiran_admin");
	// root
	define("ROOT", "./");
	$ROOT = "./";

    /**
     * Apologizes to user with message.
     */
    function apologize($message)
    {
        echo $message;
        exit;
    }

    /**
     * Facilitates debugging by dumping contents of variable
     * to browser.
     */
    function dump($variable)
    {
        require("./templates/dump.php");
        exit;
    }

 
     /**
     * Returns a mysqli_connect handle to the MySQL
     * database defined in constants.php
     * 
     * Returns false if the connection failed.
     */
	 // not using this while I test my php code.
/*    function connectToDB() {
        $conn = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
        return $conn;
    }*/
	function connectToDB() {
        $conn = mysqli_connect("localhost", "root","", "project");
		if($conn)
        return $conn;
    }
 
    /**
     * Renders template, passing in values.
     */
    function render($template, $values = [])
    {
       // if template exists, render it
       global $ROOT;
       if (file_exists($ROOT."templates/$template"))
        //if(1)
        {
            // extract variables into local scope
            extract($values);

            // render template
            require($ROOT."templates/$template");

        }

        // else err
        else
        {
            trigger_error("Invalid template: $ROOT", E_USER_ERROR);
        }
    }

?>
