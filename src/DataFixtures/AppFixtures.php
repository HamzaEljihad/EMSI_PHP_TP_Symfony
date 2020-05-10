<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Article;
use App\Entity\Categorie;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('en_GB');
        for($i = 0; $i <= 10; $i++) {
            $categorie = new Categorie();
            $categorie->setName($faker->sentence(2));
            $manager->persist($categorie);
            $article = new Article();
            $article->setTitle($faker->sentence(2))
                ->setContent($faker->paragraph(3))
                ->setCategory($categorie);
            $manager->persist($article);
        }
        $manager->flush();
    }
}
