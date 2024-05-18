<?php

    namespace FlameFox666\Project\Passenger;

    use FlameFox666\Project\Bus\Bus;
    use FlameFox666\Project\Bus\Passenger;

    final class Student extends Passenger {
        private static $isTired = true;

        public function enterBus(Bus $bus)
        {
            if ($this->isTired) {
                echo "{$this->name} заповз у транспорт.";   
            } else {
                echo "{$this->name} зайшов у транспорт.";   
            }
        }
        public function leaveBus(Bus $bus)
        {
            if ($this->isTired) {
                echo "{$this->name} виповз з транспорту.";
            } else {
                echo "{$this->name} вийшов транспорту.";
            }
        }
    }