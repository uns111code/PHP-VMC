<?php

use App\Autoloader;
use App\Models\Poste;

require_once '/app/Autoloader.php';

Autoloader::register();

//1.
// $postes = (new Poste())
//     ->findAll();

// var_dump($postes);


//2.
// $postes = (new Poste())
//     ->findBy([
//         'enabled' => true
//     ]);

// var_dump($postes);


//3.
// $postes = (new Poste())
//     ->find(1);

// var_dump($postes);



//4.
// $poste = new Poste();
// $poste
//     ->setTitle('Développeur Symfony')
//     ->setDescription('Développeur Symfony')
//     ->setEnabled(true);

// var_dump($poste);


//5.
// $poste = (new Poste())
//     ->setTitle('Développeur Symfony')
//     ->setDescription('Développeur Symfony')
//     ->setEnabled(true)
//     ->setCreatedAt(new \DateTime())
//     ->created();

// var_dump($poste);

//6.
// $donnes = [
//     'title' => 'Mon titre',
//     'description' => 'Ma description',
//     'enabled' => true,
//     'createdAt' => ('2023-10-01 12:00:00'),
// ];

// $poste = (new Poste())
//     ->hydrate($donnes)
//     ->created();
    
// var_dump($poste);

//7.
// $poste = (new Poste())->find(5);

// var_dump($poste);

// $poste = (new Poste)->hydrate($poste);

// var_dump($poste);

// $poste
//     ->setTitle('titre de poste')
//     ->update();
// var_dump($poste);

//8.
// $poste = (new Poste())->find(5);

// var_dump($poste);

// $poste = (new Poste)->hydrate($poste);

// var_dump($poste);

// $poste
//     ->delete();

// var_dump($poste);

//9.
$poste = (new Poste())->findALL();

var_dump($poste);
