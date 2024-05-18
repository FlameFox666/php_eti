<?php

    namespace FlameFox666\Project\Passenger;

    use FlameFox666\Project\Bus\Bus;
    use FlameFox666\Project\Bus\Passenger;

    final class Programist extends Passenger {
        public function enterBus(Bus $bus)
        {
            echo "{$this->name} зайшов у транспорт.";   
        }
        public function leaveBus(Bus $bus)
        {
            echo "{$this->name} вийшов транспорту.";
        }
    }