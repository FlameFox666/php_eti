<?php

    namespace FlameFox666\Project\Bus;

    use FlameFox666\Project\busstop\Busstop;

    abstract class Bus {
        use BusTrait;
        protected $number;
        protected $passengers = [];
        protected $stops = [];
        
        public function __construct($number) {
            $this->number = $number;
        }

        public function addStop(Busstop $stop) {
            $this->stops[] = $stop;
        }

        abstract public function startRoute();
    }