<?php
    require_once __DIR__ . '/vendor/autoload.php';
    
    use FlameFox666\Project\Bus\BigBus;
    use FlameFox666\Project\Bus\Marshrutka;
    use FlameFox666\Project\Bus\Tralik;
    use FlameFox666\Project\Busstop\Konechka;
    use FlameFox666\Project\Busstop\SimpleStop;
    use FlameFox666\Project\Passenger\Student;
    use FlameFox666\Project\Passenger\Babka;
    use FlameFox666\Project\Passenger\Programist;

    //транспорт
    $big_bus = new BigBus(1);
    $marshrutka = new Marshrutka(2);
    $tralik = new Tralik(3);

    //зупинки
    $stop_first = new SimpleStop("А");
    $stop_second = new SimpleStop("Б");
    $stop_final = new Konechka("Б");

    //прив'язую транспорту до зупинок
    $big_bus->addStop($stop_first);
    $big_bus->addStop($stop_second);
    $big_bus->addStop($stop_final);

    $marshrutka->addStop($stop_first);
    $marshrutka->addStop($stop_final);

    $tralik->addStop($stop_second);
    $tralik->addStop($stop_final);

    //пасажири
    $student = new Student("Qwerty",19);
    $babka = new Babka("Asdfgh", 78045);
    $programist = new Programist("Zxcvbn", 26);

    //хай їдуть
    $bigBus->startRoute();
    $marshrutka->startRoute();
    $tralik->startRoute();
    