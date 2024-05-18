<?php

    namespace FlameFox666\Project\Bus;

    use FlameFox666\Project\Bus\Bus;

    interface PassengerInterface {
        public function enterBus(Bus $bus);
        public function leaveBus(Bus $bus);
    }