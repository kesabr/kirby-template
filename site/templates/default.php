<?php 
/* MAIN SNIPPET * must be loaded in every template */
snippet('site-structure', slots: true) 
?>

<?php slot('head') ?>
<!-- Add stylesheets or other elements that you want to link to in the head -->
<?php endslot() ?>

<?php slot('header') ?>
<!-- Add elements that should be displayed in the <header> -->
<?php endslot() ?>

<?php slot('default') ?>
<!-- Add elements that should be displayed in the <main> -->
<?php endslot() ?>

<?php slot('footer') ?>
<!-- Add elements that should be displayed in the <main> -->
<?php endslot() ?>

<?php endsnippet() ?>