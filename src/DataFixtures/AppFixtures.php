<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 12; $i++) {
            $project = new Project();
            $project->setTitle('My project title')
                    ->setIntroduction('Lorem ipsum Lorem ipsum Lorem ipsum')
                    ->setDescription('Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum')
                    ->setImage('https://mobile-img.lpcdn.ca/lpca/924x/r3996/442dba2ec46933fd8a3f10cbe5575e53.jpeg')
                    ->setGithub('https://github.com/yannickbiheul/symfony4');
            $manager->persist($project);
        }

        $manager->flush();
    }
}
