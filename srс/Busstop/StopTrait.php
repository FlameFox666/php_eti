<?php

    namespace FlameFox666\Project\Busstop;

    trait StopTrait {
        protected $name;

        public function getName() {
            return $this->name;
        }
    }