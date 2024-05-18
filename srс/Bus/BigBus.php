<?php

    namespace FlameFox666\Project\Bus;

    final class BigBus extends Bus {
        public function startRoute() {
            echo "Автобус №" . $this->number . " почав їхати.\n";
            foreach ($this->stops as $stop) {
                $stop->announce();
            }
        }
    }