<?php

namespace Drupal\kp_main\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class kp_mainSettingsForm extends ConfigFormBase{

  public function getFormId()
  {
    // TODO: Implement getFormId() method.
    return 'kp_mainSettingsForm_admin_settings';
  }

  protected function getEditableConfigNames()
  {
    // TODO: Implement getEditableConfigNames() method.
    return[
      'kp_main.settings',
    ];
  }

  public function  buildForm(array $form, FormStateInterface $form_state){

    $config = $this->config('kp_main.settings');

    $form['kp_main_api_key'] = [
      '#type' => 'textfield',
      '#title' => $this->t('API Key'),
      '#default_value' => $config->get('kp_main_api_key'),
    ];

    $form['kp_main_api_client_id'] = [
      '#type' => 'textfield',
      '#title' => $this->t('API Client ID'),
      '#default_value' => $config->get('kp_main_api_client_id'),
    ];
    return parent::buildForm($form, $form_state);
  }

  public function submitForm(array &$form, FormStateInterface $form_state)
  {
    // TODO: Implement submitForm() method.
    $this->configFactory->getEditable('kp_main.settings')->set('kp_main_api_key', $form_state->getValue('kp_main_api_key'))->set('kp_main_api_client_id', $form_state->getValue('kp_main_api_client_id'))->save();
    parent::submitForm($form, $form_state);
  }

}
