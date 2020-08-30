<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use App\Entity\Products;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {   

       $listCategory=['Superette','Maison & Bureau','Santé & Beauté','Téléphone & Tablette','Électroniques','Jardin & Plein air',
                     'Jeux vidéos & Consoles','Auto & Moto','Articles de sport','Mode','Informatique','Autres catégories'];     

        foreach ($listCategory as $key=>$cat) {
            $cattegory= new Categories();
            $cattegory->setName($cat);
            $cattegory->setImage("https://dummyimage.com/600x400/".$key);
            $manager->persist($cattegory);
            for ($j = 0; $j < 20; $j++) {
                $product = new Products();
                $product->setName('product '.$j);
                $product->setPrice(mt_rand(10, 100));
                $product->setStock(mt_rand(10, 100));
                $product->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Morbi aliquet magna id purus posuere, eget iaculis justo facilisis. Duis euismod 
                    sapien non suscipit lacinia. Pellentesque sem orci, 
                    commodo vitae augue ac, facilisis ornare nisi. Duis luctus sapien at ante pellentesque fringilla.
                    Pellentesque nec nunc tellus. Fusce mollis ex vel imperdiet aliquam. Fusce pulvinar,
                    libero a pretium mollis, lorem neque congue felis, tincidunt tincidunt tellus est vitae mi.
                    Duis placerat arcu quam. Interdum et malesuada fames ac ante ipsum primis in
                    faucibus. Ut consectetur dictum mattis.");
                $product->setImage("https://dummyimage.com/600x400/".$j);
                $product->setCategory($cattegory);
                $product->setTags(['tage1']);
                $manager->persist($product);
            }
        }
        $manager->flush();

    }
}
