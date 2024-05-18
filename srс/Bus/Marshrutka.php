<?php

    namespace FlameFox666\Project\Bus;

    final class Marshrutka extends Bus {
        public function startRoute() {
            echo "Маршрутка №" . $this->number . " почала їхати.\n";
            foreach ($this->stops as $stop) {
                $stop->announce();
            }
        }
    }