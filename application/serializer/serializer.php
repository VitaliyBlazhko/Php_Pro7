<?php
require __DIR__ . '/vendor/autoload.php';

use App\serializer\Car;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

?>

<pre>
    <?php
    $bmw = new Car();
    $bmw->setColor('black');
    $bmw->setCompany('BMW');
    $bmw->setModel('X5');
    $bmw->setPrice('38000$');
    var_dump($bmw);
    echo PHP_EOL;

    $encoders = [new XmlEncoder(), new JsonEncoder()];
    $normalizers = [new ObjectNormalizer()];

    $serializer = new Serializer($normalizers, $encoders);

    $jsonBmw = $serializer->serialize($bmw, 'json');
    var_dump($jsonBmw);
    echo PHP_EOL;
    $unserializeBmw = $serializer->deserialize($jsonBmw, Car::class, 'json');

    var_dump($unserializeBmw);
    ?>

</pre>
