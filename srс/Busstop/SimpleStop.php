<?php

    namespace FlameFox666\Project\Busstop;

    final class SimpleStop extends Busstop {
        public function announce() {
            echo "Зупинка: {$this->name}";
        }
    }