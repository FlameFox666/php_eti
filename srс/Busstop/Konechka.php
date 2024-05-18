<?php

    namespace FlameFox666\Project\Busstop;

    final class Konechka extends Busstop {
        public function announce() {
            echo "Кінцева зупинка: {$this->name}";
        }
    }