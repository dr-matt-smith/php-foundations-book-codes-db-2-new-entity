<?php
require_once __DIR__ . '/../config/dbConstants.php';
require_once __DIR__ . '/../vendor/autoload.php';

use Tudublin\Movie;
use Tudublin\MovieRepository;
use Tudublin\Category;
use Tudublin\CategoryRepository;

//--------- MOVIE ---------
// (1) drop then create table
$movieRepository = new MovieRepository();
$movieRepository->dropTable();
$movieRepository->createTable();

// (2) delete any existing objects
$movieRepository->deleteAll();

// (3) create objects
$m1 = new Movie();
$m1->setTitle('Jaws');
$m1->setPrice(9.99);
$m1->setCategory('horror');

$m2 = new Movie();
$m2->setTitle('Jumanji');
$m2->setPrice(9.99);
$m2->setCategory('entertainment');

// (3) insert objects into DB
$movieRepository->create($m1);
$movieRepository->create($m2);

//--------- CATEGORY ---------
// (1) drop then create table
$categoryRepository = new CategoryRepository();
$categoryRepository->dropTable();
$categoryRepository->createTable();

// (2) delete any existing objects
$categoryRepository->deleteAll();

// (3) create objects
$c1 = new Category();
$c1->setName('comedy');

// (3) insert objects into DB
$categoryRepository->create($c1);

// (4) test objects are there
$categories = $categoryRepository->findAll();
print '<pre>';
var_dump($categories);
