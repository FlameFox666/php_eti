<?php

    namespace FlameFox666\Project\Bus;

    final class Tralik extends Bus {
        public function startRoute() {
            echo "Тролейбус №" . $this->number . " почав їхати.\n";
            foreach ($this->stops as $stop) {
                $stop->announce();
            }
        }
    }
