<?php

    namespace FlameFox666\Project\Busstop;

    abstract class Busstop {
        use StopTrait;

        public function __construct($name) {
            $this->name = $name;
        }

        public function __destruct() {
            echo "Зупинка {$this->name} існує.";
        }        

        abstract public function announce();

        protected static $total_stops = 0;

        public static function getTotalStops() {
            return self::$total_stops;
        }
    }