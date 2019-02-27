<?php

class DB {

    private static $ins;
    private static $db;

    private function __construct($dbConfig) {
        list($ip, $dbname, $username, $password) = $dbConfig;
        self::$db = new PDO("mysql:host=$ip;dbname=$dbname;charset=utf8", $username, $password);
    }

    private function __clone() {
        
    }

    /*
     * 获取当前类的实例
     */

    public static function getIns(...$dbConfig) {
        if (self::$ins instanceof SELF) {
            return self::$ins;
        }
        return self::$ins = new SELF($dbConfig);
    }

    function create($sql) {
        return self::$db->exec($sql);
    }

    function select($sql) {
        return self::$db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    function find($sql) {
        return self::$db->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    function delete($sql) {
        return self::$db->exec($sql);
    }

    function update($sql) {
        return self::$db->exec($sql);
    }

    function getError(){
        return self::$db->errorInfo()[2];
    }
}

$dbConfig = ['127.0.0.1', '1607phpA', 'root', 'root'];
$db = DB::getIns(...$dbConfig);

