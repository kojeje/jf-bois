<?php
  /**
   * template name: presta
   * Template Post Type: post, page
   */


  /**
   * prestation
   */

//OBLIGATOIRE : Récupère les variables globales de Wordpress
  $context = Timber::get_context();

// on récupère le contenu du post actuel grâce à TimberPost
  $post = new TimberPost();

// on ajoute la variable post (qui contient le post) à la variable
// qu'on enverra à la vue twig
  $context['post'] = $post;
  Timber::render('template-presta.twig', $context);
