<?php

namespace App\DataFixtures;

use Container4dsfIyq\getDoctrineMigrations_UpToDateCommandService;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Category;


class CategirieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 1 ; $i++) {
            $categories = new Category();

             $categories->setTitle("Piano");
             $categories->setDescreption("Vos cours de piano à domicile vous permettront de travailler tous les styles.
                                                    En effet, fini le temps où cours de piano était forcément synonyme 
                                                    de musique classique, de solfège et de gammes interminables Aujourdhui, 
                                                    les cours de piano se font autour de styles très différents comme le jazz,
                                                     le blues, le ragtime... Et même le rock, la pop ou la soul ! ");
             $categories->setCreateAt(new \DateTime());
             $categories->setSlug("Piano");
             $categories->setFile('img/pexels-pixabay-164769.jpeg');
             $categories->setUpdatedAt(new \DateTime());

              $manager->persist($categories);
        };
        for ($i = 0; $i < 1 ; $i++) {
            $categories = new Category();


            $categories->setTitle("Guitare");
            $categories->setDescreption("Vos cours de piano à domicile vous permettront de travailler tous les styles.
                                                    En effet, fini le temps où cours de piano était forcément synonyme 
                                                    de musique classique, de solfège et de gammes interminables Aujourdhui, 
                                                    les cours de piano se font autour de styles très différents comme le jazz,
                                                     le blues, le ragtime... Et même le rock, la pop ou la soul ! ");
            $categories->setCreateAt(new \DateTime());
            $categories->setSlug("Guitare");
            $categories->setFile("/img/pexels-suvan-chowdhury-144428.jpeg");
            $categories->setUpdatedAt(new \DateTime());

            $manager->persist($categories);
        };
        for ($i = 0; $i < 1 ; $i++) {
            $categories = new Category();


            $categories->setTitle("Violon");
            $categories->setDescreption("Il est possible de commencer le violon dès 6 ou 7 ans. Attention, ce n'est pas l'instrument le plus simple.
                                                  Cela demande donc à l'enfant une vraie motivation et une capacité à travailler régulièrement. ");
            $categories->setCreateAt(new \DateTime());
            $categories->setSlug("Violon");
            $categories->setFile("img/pexels-keith-wako-89909.jpeg");
            $categories->setUpdatedAt(new \DateTime());

            $manager->persist($categories);
        };
        for ($i = 0; $i < 1 ; $i++) {
            $categories = new Category();


            $categories->setTitle("Chant");
            $categories->setDescreption("os professeurs accordent du temps à la technique vocale en travaillant divers styles sur des chansons choisies en concertation avec l’élève selon ses goûts et ses besoins.
Il existe différents genres musicaux, classique, rock, lyrique, jazz…. Mais quel que soit votre registre de prédilection, chanter n'est pas seulement se servir de sa voix et de son corps, c'est aussi interpréter, exprimer et partager des émotions.");
            $categories->setCreateAt(new \DateTime());
            $categories->setSlug("Chant");
            $categories->setFile("img/pexels-clem-onojeghuo-111287.jpeg");
            $categories->setUpdatedAt(new \DateTime());

            $manager->persist($categories);
        };


        $manager->flush();
    }
}
