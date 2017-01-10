<?php
/**
 * Created by PhpStorm.
 * User: MaolmeoX
 * Date: 10/01/2017
 * Time: 12:09
 */

use src;

$jockey1 = new src\Jockey();
$jockey1->setAge(22);
$jockey1->setCouleurYeux('bleu');
$jockey1->setNbDefaites(12);
$jockey1->setNbVictoires(43);

$jockey2 = new src\Jockey();
$jockey2->setAge(43);
$jockey2->setCouleurYeux('rouge');
$jockey2->setNbDefaites(41);
$jockey2->setNbVictoires(32);

$poney1 = new src\Poney();
$poney1->setAge(3);