<?php

namespace app;

class MagicClass {
    
    public function __construct() {
        echo "Здесь был вызов магической функции '__construct'\n";
    }

    public function __destruct() {
        echo "Это вызов магической функции '__destruct'\n";
    }

    public function __call($name, $arguments) {
        echo "Здесь был вызов магической функции '__call'\n";
    }

    public static function __callStatic($name, $arguments) {
        echo "Здесь был вызов магической статической функции '__callStatick'\n";
    }

    public function __get($name) {
        echo "Здесь был вызов магической функции '__get'\n";
    }

    public function __set($name, $value) {
        echo "Здесь был вызов магической функции '__set'\n";
    }

    public function __isset($name) {
        echo "Здесь был вызов магической функции '__isset'\n";
    }

    public function __unset($name) {
        echo "Здесь был вызов магической функции '__unset'\n";
    }

    public function __toString() {
        return "Здесь был вызов магической функции '__toString'\n";
    }

    public function __invoke() {
        echo "Здесь был вызов магической функции '__invoke'\n";
    }

    public function __set_state($an_array) {
        echo "Здесь был вызов магической функции '__set_state'\n";
    }

    public function __clone() {
        echo "Здесь был вызов магической функции '__clone'\n";
    }

    public function __debugInfo() {
        echo "Здесь был вызов магической функции '__debugInfo'\n";
        return ['качество проверки' => 'значение'];
    }

    public function __sleep() {
        echo "Здесь был вызов магической функции '__sleep\n";
        return ['значение'];
    }

    public function __wakeup() {
        echo "Здесь был вызов магической функции '__wakeup'\n";
    }
}
?>
