<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Lesson;

class LessonFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       for ($i = 1 ;$i <= 2 ; $i++){
           $lesson = new Lesson();
           $lesson->setName("cour pour débutant $i");
           $lesson->setCreatedAt(new \DateTime());
           $lesson->setCategoryId($i);
           $lesson->setSlug("cours ");
           $lesson->setUpdatedAt(new \DateTime());


       $manager->persist($lesson);

       };
        for ($i = 1 ;$i <= 1 ; $i++){
            $lesson = new Lesson();
            $lesson->setName("cour pour professionnels $i");
            $lesson->setCreatedAt(new \DateTime());
            $lesson->setCategoryId($i);
            $lesson->setSlug("perfection ");
            $lesson->setUpdatedAt(new \DateTime());


            $manager->persist($lesson);

        };
        for ($i = 1 ;$i <= 1 ; $i++){
            $lesson = new Lesson();
            $lesson->setName("cour pour intermediare $i");
            $lesson->setCreatedAt(new \DateTime());
            $lesson->setCategoryId($i);
            $lesson->setSlug("moyen ");
            $lesson->setUpdatedAt(new \DateTime());


            $manager->persist($lesson);

        }

        $manager->flush();
    }
}
