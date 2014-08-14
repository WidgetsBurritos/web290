<?php

/**
 * Adds custom error handling to PDO
 *
 * This is just an example and is in no way complete.
 *
 * Class ErrorPDO
 */

class ErrorPDO extends PDO {
    /**
     * Creates our PDO or dies trying!
     *
     * @param $dsn
     * @param null $user
     * @param null $pass
     * @param null $options
     */
    public function __construct( $dsn , $user = null, $pass = null, $options = array()) {
        try {
            // Constructs our PDO
            parent::__construct($dsn, $user, $pass, $options);

            // Forces exceptions to be thrown on error
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            self::setError("Can't connect to database!");
        }
    }


    /**
     * Attempts to run the specified statement
     */
    public function query($statement) {
        try {
            $ret = parent::query($statement);
        } catch (Exception $e) {
            self::setError("Error executing query");
        }
    }


    /**
     * Does some sort of error handling here
     *
     * @param $error
     */
    private static function setError($error) {
        $error_msg = "Oh no! There was a PDO error: $error";
        error_log($error_msg);
        die('<div style="color: #cc0000; font-size: 20px; padding: 20px 0;">' .$error_msg . ' </div>');
    }


}