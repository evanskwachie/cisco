<?php

class DUtil {
    /**
     * @param $name
     * @param $data
     */
    public static function send_data($name, $data) {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION[$name] = $data;
    }

    /**
     * @param $name
     * @return null
     */
    public static function get_data($name) {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION[$name])) {
            return $_SESSION[$name];
        } else {
            return null;
        }
    }

    /**
     * @param $input
     * @param $length
     * @param bool|true $ellipses
     * @param bool|true $strip_html
     * @return string
     */
    public static function trim_text($input, $length, $ellipses = true, $strip_html = true) {
        if ($strip_html === true) {
            $input = strip_tags($input);
        }

        if (strlen($input) <= $length) {
            return $input;
        }

        $last_space = strrpos(substr($input, 0, $length), ' ');
        $trimmed_text = substr($input, 0, $last_space);

        if ($ellipses === true) {
            $trimmed_text .= '...';
        }

        return $trimmed_text;
    }

    /**
     * @param $arr
     * @return bool
     */
    public static function is_multiArray($arr) {
        $rv = array_filter($arr,'is_array');
        return (count($rv)>0) ? true : false;
    }

    /**
     * @param $data
     * @return string
     */
    public static function json($data){
        if(is_array($data)){
            return json_encode($data);
        }
    }

    /**
     * @param array $array
     * @param array $keys
     * @return bool
     */
    public static function array_keys_exists($array, $keys) {
        if(count(array_intersect_key(array_flip($keys), $array)) === count($keys)){
            return true;
        } else {
            return false;
        }
    }

    /**
     * redirect - Shortcut for a page redirect
     *
     * @param string $url
     */
    public static function redirect($url) {
        header("Location: $url");
        exit(0);
    }

    /**
     * debug - print array elements nicely in the browser;
     *
     * @param array $data
     *
     *
     */
    public static function debug($data = array()){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        die();
    }

    public static function startsWith($haystack, $needle) {
        // search backwards starting from haystack length characters from the end
        return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
    }

    public static function endsWith($haystack, $needle) {
        // search forward starting from end minus needle length characters
        return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== false);
    }

    public static function isXmlHttpRequest(){
        return (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') ? true : false;
    }

    /**
     * genMessage - change an array into a string;
     *
     * @param array $data
     * @return string
     *
     */
    public static function genMessage($data){
        $message = "";
        if(is_array($data)){
            $message = "<ul>";
            foreach($data as $key => $value){
                $message .= "<li><b>" . $key . ":</b> " . $value . "</li>";
            }
            $message .= "</ul>";
        }

        return $message;
    }

    public static function array_flatten(array $arr){
        $return = array();
        array_walk_recursive($arr, function($a) use (&$return){ $return[] = $a; });
        return $return;
    }

    public static function sort_multi_array($arr, $key){
        uasort($arr, function($i, $j){
            $a = $i[$key];
            $b = $j[$key];
            if($a == $b) return 0;
            elseif($a > $b) return 1;
            else return -1;
        });
    }

    public static function hash_value($algo, $data, $salt = null) {
        if(is_null($salt) === true) {
            $context = hash_init($algo);
            hash_update($context, $data);
            return hash_final($context);
        } else {
            $context = hash_init($algo, HASH_HMAC, $salt);
            hash_update($context, $data);
            return hash_final($context);
        }
    }
}
