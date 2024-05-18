<?php

    namespace FlameFox666\Project\Bus;

    use FlameFox666\Project\Bus\Bus;

    abstract class Passenger implements PassengerInterface {
        protected $name;
        protected $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function __destruct() {
            echo "Пассажир {$this->name} прийшов на зупинку.";
        }

        abstract function enterBus(Bus $bus);
        abstract function leaveBus(Bus $bus);

        protected static $total_passengers = 0;

        public static function getTotalPassengers() {
            return self::$total_passengers;
        }
    }