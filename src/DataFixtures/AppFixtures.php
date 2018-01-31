<?php
/**
 * Created by PhpStorm.
 * User: saifeddine
 * Date: 31/01/18
 * Time: 03:18
 */

namespace DataFixtures;

use ProductBundle\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // create 5 products
        for ($i = 0; $i < 5; $i++) {
            $product = new Product();
            $product->setName('product '.$i);
            $product->setPrice(mt_rand(10, 100));
            $manager->persist($product);
        }
        $manager->flush();
    }
}