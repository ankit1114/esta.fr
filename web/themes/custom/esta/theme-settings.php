<?php
  use Drupal\file\Entity\File;
  use Drupal\core\Url;

function esta_form_system_theme_settings_alter(&$form, &$form_state) {
  $form['esta_social_links'] = array(
    '#type'         => 'fieldset',
    '#title'        => t('social_links'),
    '#description'  => t('Social information is displayed in the footer'),
    '#weight'       => -999,
    '#open'         => TRUE,
    );

  $form['esta_social_links']['twitter_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter Link'),
    '#default_value' => theme_get_setting('twitter_link'),
  );
  $form['esta_social_links']['youtube_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Youtube Link'),
    '#default_value' => theme_get_setting('youtube_link'),
  );
  $form['esta_social_links']['instagram_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Instagram Link'),
    '#default_value' => theme_get_setting('instagram_link'),
  );

  $form['esta_contact_number'] = array(
    '#type' => 'textfield',
    '#title' => t('Contact Number '),
    '#default_value' => theme_get_setting('esta_contact_number'),
  );
  $form['esta_email'] = array(
    '#type' => 'textfield',
    '#title' => t('Email'),
    '#default_value' => theme_get_setting('esta_email'),
  );
  $form['esta_header_text'] = array(
    '#type' => 'textarea',
    '#title' => t('Header Text'),
    '#default_value' => theme_get_setting('esta_header_text'),
  );

  $form['esta_flag_image'] = array(
    '#type' => 'managed_file',
    '#title' => t('Flag Image'),
    '#required' => FALSE,
    '#upload_location' => 'public://',
    '#default_value' => theme_get_setting('esta_flag_image'),
    '#upload_validators' => array(
      'file_validate_extensions' => array('png jpg jpeg'),
    ),
  );
  $form['esta_twitter_icon'] = array(
    '#type' => 'managed_file',
    '#title' => t('Twitter Icon'),
    '#required' => FALSE,
    '#upload_location' => 'public://',
    '#default_value' => theme_get_setting('esta_twitter_icon'),
    '#upload_validators' => array(
      'file_validate_extensions' => array('png jpg jpeg'),
    ),
  );
  $form['esta_instagram_icon'] = array(
    '#type' => 'managed_file',
    '#title' => t('Instagram Icon'),
    '#required' => FALSE,
    '#upload_location' => 'public://',
    '#default_value' => theme_get_setting('esta_instagram_icon'),
    '#upload_validators' => array(
      'file_validate_extensions' => array('png jpg jpeg'),
    ),
  );
  $form['esta_youtube_icon'] = array(
    '#type' => 'managed_file',
    '#title' => t('Youtube Icon'),
    '#required' => FALSE,
    '#upload_location' => 'public://',
    '#default_value' => theme_get_setting('esta_youtube_icon'),
    '#upload_validators' => array(
      'file_validate_extensions' => array('png jpg jpeg'),
    ),
  );
  $form['#submit'][] = 'custom_image_save';
  return $form;
}

function custom_image_save(&$form, &$form_state) {

  $fid = $form_state->getValue('esta_flag_image');
  $file = File::load($fid[0]);
  $file->setPermanent();
  $file->save();

  $twitterfid = $form_state->getValue('esta_twitter_icon');
  $file = File::load($twitterfid[0]);
  $file->setPermanent();
  $file->save();

  $instagramfid = $form_state->getValue('esta_instagram_icon');
  $file = File::load($instagramfid[0]);
  $file->setPermanent();
  $file->save();

  $youtubefid = $form_state->getValue('esta_youtube_icon');
  $file = File::load($youtubefid[0]);
  $file->setPermanent();
  $file->save();
}
