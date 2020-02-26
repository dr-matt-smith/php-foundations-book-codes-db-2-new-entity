<!DOCTYPE html>
<html><head><title>list page</title>
</head><body>

<h1>List of categories</h1>
<ul>

<?php   foreach($categories as $category): ?>

<li>
    <?= $category->getName() ?>
</li>

<?php   endforeach;                 ?>
</ul>
