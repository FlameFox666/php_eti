<?php

    namespace FlameFox666\Project\Passenger;

    use FlameFox666\Project\Bus\Bus;
    use FlameFox666\Project\Bus\Passenger;

    final class Babka extends Passenger {
        public function enterBus(Bus $bus)
        {
            echo "{$this->name} зайшла у транспорт.";   
        }
        public function leaveBus(Bus $bus)
        {
            echo "{$this->name} вийшла з транспорту.";
        }
    }