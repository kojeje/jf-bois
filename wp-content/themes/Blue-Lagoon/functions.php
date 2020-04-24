<?php

function dr_adding_styles() {
    wp_enqueue_style('style', get_template_directory_uri(). '/style.css');
}

add_action( 'wp_enqueue_scripts', 'js_adding_styles' );

add_theme_support( 'post-thumbnails' );

  register_nav_menus( array(
    'header-menu' => 'Header-menu',
    'footer-menu'=> 'Footer-menu'


  ) );

// fonction pour créer des variables globales, accessibles dans tous les fichiers twig
  function add_to_context($data){

    // on appelle une instance de TimberMenu avec en parametre le menu qu'on veut récupérer
    //$data['menu'] = new TimberMenu('header-menu');
    $data['menu'] = new \Timber\Menu( 'header-menu' );

    return $data;


  }

// On ajoute le résultat de notre fonction au context de twig (contexte globale)
  add_filter( 'timber/context', 'add_to_context' );

  add_filter('acf/settings/remove_wp_meta_box', '__return_false');

  add_filter( 'wp_mail_from', 'my_mail_from' );
  function my_mail_from( $email ) {
    return "jerome@kojeje.fr";


  }
  add_filter( 'wp_mail_from_name', 'my_mail_from_name' );
  function my_mail_from_name( $name ) {
    return "My Name";
  }

  /**
   * Caldera Forms - PHP Export
   * Contact
   * @see https://calderaforms.com/doc/exporting-caldera-forms/
   * @version    1.8.6
   * @license   GPL-2.0+
   *
   */


  /**
   * Hooks to load form.
   * Remove "caldera_forms_admin_forms" if you do not want this form to show in admin entry viewer
   */
  add_filter( "caldera_forms_get_forms", "slug_register_caldera_forms_form" );
  add_filter( "caldera_forms_admin_forms", "slug_register_caldera_forms_form" );
  /**
   * Add form to front-end and admin
   *
   * @param array $forms All registered forms
   *
   * @return array
   */
  function slug_register_caldera_forms_form( $forms ) {
    $forms["form"] = apply_filters( "caldera_forms_get_form-form", array() );
    return $forms;
  };

  /**
   * Filter form request to include form structure to be rendered
   *
   * @since 1.3.1
   *
   * @param $form array form structure
   */
  add_filter( 'caldera_forms_get_form-form', function( $form ){
    return array(
      '_last_updated' => 'Mon, 24 Jun 2019 20:55:35 +0000',
      'ID' => 'form',
      'cf_version' => '1.8.5',
      'name' => 'Contact',
      'scroll_top' => 0,
      'success' => 'Le formulaire a été envoyé. Merci pour votre contribution.																																																																																	',
      'db_support' => 1,
      'pinned' => 0,
      'hide_form' => 1,
      'avatar_field' => NULL,
      'form_ajax' => 1,
      'custom_callback' => '',
      'layout_grid' =>
        array(
          'fields' =>
            array(
              'fld_8503377' => '1:1',
              'fld_778405' => '1:1',
              'fld_1102501' => '1:1',
              'fld_5808595' => '1:1',
              'fld_5764948' => '1:1',
              'fld_1510205' => '1:1',
              'fld_5640409' => '1:1',
              'fld_8488028' => '1:2',
              'fld_2330917' => '1:2',
              'fld_8221063' => '2:1',
              'fld_7377645' => '2:2',
              'fld_7015799' => '2:2',
              'fld_1883050' => '3:1',
              'fld_7406511' => '3:1',
              'fld_8441410' => '3:1',
              'fld_4628485' => '3:1',
              'fld_7695161' => '3:1',
              'fld_2186296' => '3:1',
              'fld_4292650' => '3:1',
            ),
          'structure' => '6:6|6:6|12',
        ),
      'fields' =>
        array(
          'fld_8503377' =>
            array(
              'ID' => 'fld_8503377',
              'type' => 'dropdown',
              'label' => 'vous êtes:',
              'slug' => 'vous_tes',
              'conditions' =>
                array(
                  'type' => '',
                ),
              'required' => 1,
              'caption' => '',
              'config' =>
                array(
                  'custom_class' => 'statut',
                  'placeholder' => '',
                  'default_option' => '',
                  'auto_type' => '',
                  'taxonomy' => 'category',
                  'post_type' => 'post',
                  'value_field' => 'name',
                  'orderby_tax' => 'name',
                  'orderby_post' => 'name',
                  'order' => 'ASC',
                  'default' => 'opt2862568',
                  'option' =>
                    array(
                      'opt2862568' =>
                        array(
                          'calc_value' => ' ',
                          'value' => ' ',
                          'label' => ' ',
                        ),
                      'opt505608' =>
                        array(
                          'calc_value' => 'Un particulier',
                          'value' => 'Un particulier',
                          'label' => 'Un particulier',
                        ),
                      'opt1539354' =>
                        array(
                          'calc_value' => 'Un professionnel/ Une Entreprise',
                          'value' => 'Un professionnel/ Une Entreprise',
                          'label' => 'Un professionnel/ Une Entreprise',
                        ),
                    ),
                  'email_identifier' => 0,
                  'personally_identifying' => 0,
                ),
            ),
          'fld_778405' =>
            array(
              'ID' => 'fld_778405',
              'type' => 'dropdown',
              'label' => 'civilité',
              'slug' => 'civilit',
              'conditions' =>
                array(
                  'type' => '',
                ),
              'required' => 1,
              'caption' => '',
              'config' =>
                array(
                  'custom_class' => 'civil',
                  'placeholder' => '',
                  'default_option' => '',
                  'auto_type' => '',
                  'taxonomy' => 'category',
                  'post_type' => 'post',
                  'value_field' => 'name',
                  'orderby_tax' => 'name',
                  'orderby_post' => 'name',
                  'order' => 'ASC',
                  'default' => 'opt1710561',
                  'option' =>
                    array(
                      'opt1710561' =>
                        array(
                          'calc_value' => ' ',
                          'value' => ' ',
                          'label' => ' ',
                        ),
                      'opt786805' =>
                        array(
                          'calc_value' => 'Mr',
                          'value' => 'Mr',
                          'label' => 'Mr',
                        ),
                      'opt1322159' =>
                        array(
                          'calc_value' => 'Mme',
                          'value' => 'Mme',
                          'label' => 'Mme',
                        ),
                    ),
                  'email_identifier' => 0,
                  'personally_identifying' => 1,
                ),
            ),
          'fld_1102501' =>
            array(
              'ID' => 'fld_1102501',
              'type' => 'text',
              'label' => 'nom',
              'slug' => 'nom',
              'conditions' =>
                array(
                  'type' => '',
                ),
              'required' => 1,
              'caption' => '',
              'config' =>
                array(
                  'custom_class' => 'fname',
                  'placeholder' => '',
                  'default' => '',
                  'type_override' => 'text',
                  'mask' => '',
                  'email_identifier' => 0,
                  'personally_identifying' => 0,
                ),
            ),
          'fld_5808595' =>
            array(
              'ID' => 'fld_5808595',
              'type' => 'text',
              'label' => 'prénom',
              'slug' => 'prnom',
              'conditions' =>
                array(
                  'type' => '',
                ),
              'caption' => '',
              'config' =>
                array(
                  'custom_class' => 'fname',
                  'placeholder' => '',
                  'default' => '',
                  'type_override' => 'text',
                  'mask' => '',
                  'email_identifier' => 0,
                  'personally_identifying' => 1,
                ),
            ),
          'fld_5764948' =>
            array(
              'ID' => 'fld_5764948',
              'type' => 'email',
              'label' => 'email',
              'slug' => 'email',
              'conditions' =>
                array(
                  'type' => '',
                ),
              'required' => 1,
              'caption' => '',
              'config' =>
                array(
                  'custom_class' => 'mail',
                  'placeholder' => '',
                  'default' => '',
                  'email_identifier' => 0,
                  'personally_identifying' => 1,
                ),
            ),
          'fld_1510205' =>
            array(
              'ID' => 'fld_1510205',
              'type' => 'text',
              'label' => 'raison sociale',
              'slug' => 'raison_sociale',
              'conditions' =>
                array(
                  'type' => '',
                ),
              'caption' => 'le cas échéant',
              'config' =>
                array(
                  'custom_class' => 'rs',
                  'placeholder' => '',
                  'default' => '',
                  'type_override' => 'text',
                  'mask' => '',
                  'email_identifier' => 0,
                  'personally_identifying' => 1,
                ),
            ),
          'fld_5640409' =>
            array(
              'ID' => 'fld_5640409',
              'type' => 'phone',
              'label' => 'tel',
              'slug' => 'tel',
              'conditions' =>
                array(
                  'type' => '',
                ),
              'caption' => '',
              'config' =>
                array(
                  'custom_class' => 'tel',
                  'placeholder' => '',
                  'default' => '',
                  'type' => 'custom',
                  'custom' => '99 - 99 - 99 - 99 - 99',
                  'email_identifier' => 0,
                  'personally_identifying' => 1,
                ),
            ),
          'fld_8488028' =>
            array(
              'ID' => 'fld_8488028',
              'type' => 'html',
              'label' => 'html__fld_8488028',
              'slug' => 'html__fld_8488028',
              'conditions' =>
                array(
                  'type' => '',
                ),
              'caption' => '',
              'config' =>
                array(
                  'custom_class' => 'coo',
                  'default' => '<div id="img">
<a href="http://www.jeromefaure-bois.fr"><img src="http://www.jeromefaure-bois.fr/wp-content/uploads/2018/08/logowhite.png"></a></div>

<p class="st_form">7, Penot</p>
<p class="town"> 33490 - Le Pian sur Garonne</p>
<p class="tel_jf">06 61 23 14 77‬</p>',
                ),
            ),
          'fld_2330917' =>
            array(
              'ID' => 'fld_2330917',
              'type' => 'html',
              'label' => 'html__fld_8488028',
              'slug' => 'bloc',
              'conditions' =>
                array(
                  'type' => '',
                ),
              'caption' => '',
              'config' =>
                array(
                  'custom_class' => 'coo2',
                  'default' => '<div id="block"><ul><li>aménagement intérieur/extérieur bois</li><li>terrasses bois</li><li>pergolas</li><li>Habillage/coffrage piscine hors-sols</li><li>Planchers, sols</li><li>lambris, bardages</li><li>cuisines sur mesure</li><li>etc.</li></ul></div>',
                ),
            ),
          'fld_8221063' =>
            array(
              'ID' => 'fld_8221063',
              'type' => 'paragraph',
              'label' => 'adresse',
              'slug' => 'adresse',
              'conditions' =>
                array(
                  'type' => '',
                ),
              'caption' => '',
              'config' =>
                array(
                  'custom_class' => 'address',
                  'placeholder' => '',
                  'rows' => 5,
                  'default' => '',
                  'email_identifier' => 0,
                  'personally_identifying' => 1,
                ),
            ),
          'fld_7377645' =>
            array(
              'ID' => 'fld_7377645',
              'type' => 'number',
              'label' => 'cp',
              'slug' => 'cp',
              'conditions' =>
                array(
                  'type' => '',
                ),
              'required' => 1,
              'caption' => '',
              'config' =>
                array(
                  'custom_class' => 'cp',
                  'placeholder' => '',
                  'default' => '',
                  'min' => '',
                  'max' => '',
                  'step' => '',
                  'email_identifier' => 0,
                  'personally_identifying' => 1,
                ),
            ),
          'fld_7015799' =>
            array(
              'ID' => 'fld_7015799',
              'type' => 'text',
              'label' => 'ville',
              'slug' => 'ville',
              'conditions' =>
                array(
                  'type' => '',
                ),
              'required' => 1,
              'caption' => '',
              'config' =>
                array(
                  'custom_class' => 'town2',
                  'placeholder' => '',
                  'default' => '',
                  'type_override' => 'text',
                  'mask' => '',
                  'email_identifier' => 0,
                  'personally_identifying' => 1,
                ),
            ),
          'fld_1883050' =>
            array(
              'ID' => 'fld_1883050',
              'type' => 'dropdown',
              'label' => 'objet',
              'slug' => 'objet',
              'conditions' =>
                array(
                  'type' => '',
                ),
              'required' => 1,
              'caption' => '',
              'config' =>
                array(
                  'custom_class' => 'objet',
                  'placeholder' => '',
                  'default_option' => '',
                  'auto_type' => '',
                  'taxonomy' => 'category',
                  'post_type' => 'post',
                  'value_field' => 'name',
                  'orderby_tax' => 'name',
                  'orderby_post' => 'name',
                  'order' => 'ASC',
                  'default' => 'opt5938516',
                  'option' =>
                    array(
                      'opt5938516' =>
                        array(
                          'calc_value' => ' ',
                          'value' => ' ',
                          'label' => ' ',
                        ),
                      'opt103256' =>
                        array(
                          'calc_value' => 'Demande de devis',
                          'value' => 'Demande de devis',
                          'label' => 'Demande de devis',
                        ),
                      'opt1097140' =>
                        array(
                          'calc_value' => 'SAV',
                          'value' => 'SAV',
                          'label' => 'SAV',
                        ),
                      'opt2319674' =>
                        array(
                          'calc_value' => 'Facturation',
                          'value' => 'Facturation',
                          'label' => 'Facturation',
                        ),
                      'opt3661609' =>
                        array(
                          'calc_value' => 'Fournisseurs',
                          'value' => 'Fournisseurs',
                          'label' => 'Fournisseurs',
                        ),
                      'opt4297380' =>
                        array(
                          'calc_value' => 'Autre',
                          'value' => 'Autre',
                          'label' => 'Autre',
                        ),
                    ),
                  'email_identifier' => 0,
                  'personally_identifying' => 0,
                ),
            ),
          'fld_7406511' =>
            array(
              'ID' => 'fld_7406511',
              'type' => 'paragraph',
              'label' => 'votre message',
              'slug' => 'votre_message',
              'conditions' =>
                array(
                  'type' => '',
                ),
              'required' => 1,
              'caption' => '',
              'config' =>
                array(
                  'custom_class' => 'message',
                  'placeholder' => '',
                  'rows' => 10,
                  'default' => '',
                  'email_identifier' => 0,
                  'personally_identifying' => 0,
                ),
            ),
          'fld_8441410' =>
            array(
              'ID' => 'fld_8441410',
              'type' => 'file',
              'label' => 'Vos fichiers',
              'slug' => 'vos_fichiers',
              'conditions' =>
                array(
                  'type' => '',
                ),
              'caption' => 'le cas échéant: plans, photos,etc (jpg, pdf)',
              'config' =>
                array(
                  'custom_class' => '',
                  'attach' => 1,
                  'multi_upload' => 1,
                  'multi_upload_text' => 'Vos fichiers',
                  'media_lib' => 1,
                  'allowed' => 'pdf,jpg,jpeg',
                  'max_upload' => '',
                  'email_identifier' => 0,
                  'personally_identifying' => 0,
                ),
            ),
          'fld_4628485' =>
            array(
              'ID' => 'fld_4628485',
              'type' => 'html',
              'label' => 'html__fld_4628485',
              'slug' => 'html__fld_4628485',
              'conditions' =>
                array(
                  'type' => '',
                ),
              'caption' => '',
              'config' =>
                array(
                  'custom_class' => 'abonnement',
                  'default' => '<div class="news"><iframe width="100%" height="100%" scrolling="no" frameborder="0" src="http://www.jeromefaure-bois.fr?mailpoet_form_iframe=1" class="mailpoet_form_iframe" id="mailpoet_form_iframe" vspace="0" tabindex="0" onload="if(window[\'MailPoet\']) MailPoet.Iframe.autoSize(this);" marginwidth="0" marginheight="0" hspace="0" allowtransparency="true"></iframe></div>',
                ),
            ),
          'fld_7695161' =>
            array(
              'ID' => 'fld_7695161',
              'type' => 'radio',
              'label' => 'J\'accepte que mes données soient traitées et stockées par le site, selon notre politique de confidentialité.',
              'slug' => 'jaccepte_que_mes_donnes_soient_traites_et_stockes_par_le_site_selon_notre_politique_de_confidentialit',
              'conditions' =>
                array(
                  'type' => '',
                ),
              'caption' => '',
              'config' =>
                array(
                  'custom_class' => 'consent',
                  'default_option' => '',
                  'auto_type' => '',
                  'taxonomy' => 'category',
                  'post_type' => 'post',
                  'value_field' => 'name',
                  'orderby_tax' => 'name',
                  'orderby_post' => 'name',
                  'order' => 'ASC',
                  'default' => '',
                  'email_identifier' => 0,
                  'personally_identifying' => 0,
                ),
            ),
          'fld_2186296' =>
            array(
              'ID' => 'fld_2186296',
              'type' => 'recaptcha',
              'label' => 'sécurité',
              'slug' => 'scurit',
              'conditions' =>
                array(
                  'type' => '',
                ),
              'caption' => '',
              'config' =>
                array(
                  'custom_class' => 'captcha',
                  'public_key' => '6LeqvGwUAAAAACBBilrhCMTZid0bAwl4BR_3gkz9',
                  'private_key' => '6LeqvGwUAAAAAPvOobXsLCndteuhRodbYlYCqWyw',
                  'email_identifier' => 0,
                  'personally_identifying' => 0,
                ),
              'required' => 1,
            ),
          'fld_4292650' =>
            array(
              'ID' => 'fld_4292650',
              'type' => 'button',
              'label' => 'Envoyer',
              'slug' => 'envoyer',
              'conditions' =>
                array(
                  'type' => '',
                ),
              'caption' => '',
              'config' =>
                array(
                  'custom_class' => 'envoi',
                  'type' => 'submit',
                  'class' => 'btn btn-default',
                  'target' => '',
                ),
            ),
        ),
      'page_names' =>
        array(
          0 => 'Page 1',
        ),
      'mailer' =>
        array(
          'on_insert' => 1,
          'sender_name' => 'Nouveau Message de jeromefaure-bois.fr',
          'sender_email' => 'contact@jeromefaure-bois.fr',
          'reply_to' => '%email%',
          'email_type' => 'html',
          'recipients' => '',
          'bcc_to' => '',
          'email_subject' => 'demande de renseignements',
          'email_message' => '{summary}',
        ),
      'processors' =>
        array(
          'fp_7547161' =>
            array(
              'ID' => 'fp_7547161',
              'runtimes' =>
                array(
                  'insert' => 1,
                ),
              'type' => 'auto_responder',
              'config' =>
                array(
                  'sender_name' => '%email%',
                  'sender_email' => 'admin@jeromefaure-bois.fr',
                  'reply_to' => 'admin@jeromefaure-bois.fr',
                  'cc' => '',
                  'bcc' => '',
                  'subject' => 'Votre message',
                  'recipient_name' => '%nom%%prnom%',
                  'recipient_email' => '%email%',
                  'message' => 'Bonjour %civilit% %nom%. %prnom%
Mail bien reçu!
Mais pas encore eu le temps de le lire car je passe ma vie sur les planches...
Laissez-moi quelques heures et je vous répondrais dans les plus brefs délais.
Merci!

Jérôme Faure - ',
                ),
              'conditions' =>
                array(
                  'type' => '',
                ),
            ),
          'fp_33946932' =>
            array(
              'ID' => 'fp_33946932',
              'runtimes' =>
                array(
                  'insert' => 1,
                ),
              'type' => 'sheets',
              'config' =>
                array(
                  'sheet-name' => 'base-clients',
                  'sheet-tab-name' => 'base',
                  'header' => 1,
                ),
              'conditions' =>
                array(
                  'type' => '',
                ),
            ),
        ),
      'check_honey' => 1,
      'antispam' =>
        array(
          'sender_name' => '',
          'sender_email' => '',
        ),
      'conditional_groups' =>
        array(
          '_open_condition' => '',
        ),
      'settings' =>
        array(
          'responsive' =>
            array(
              'break_point' => 'sm',
            ),
        ),
      'privacy_exporter_enabled' => true,
      'version' => '1.8.5',
      'db_id' => '104',
      'type' => 'primary',
      '_external_form' => 1,
    );
  } );


