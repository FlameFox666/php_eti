<?php

    namespace FlameFox666\Project\Bus;

    trait BusTrait {
        protected $number;

        public function getNumber($number) {
            return $this->number;
        }
    }