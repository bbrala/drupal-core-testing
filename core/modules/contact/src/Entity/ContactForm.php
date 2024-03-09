<?php

namespace Drupal\contact\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;
use Drupal\contact\ContactFormInterface;
use Drupal\Core\Url;

/**
 * Defines the contact form entity.
 */
#[\Drupal\Core\Entity\Attribute\ConfigEntityType(id: 'contact_form', label: new Drupal\Core\StringTranslation\TranslatableMarkup('Contact form'), label_collection: new Drupal\Core\StringTranslation\TranslatableMarkup('Contact forms'), label_singular: new Drupal\Core\StringTranslation\TranslatableMarkup('contact form'), label_plural: new Drupal\Core\StringTranslation\TranslatableMarkup('contact forms'), label_count: ['singular' => '@count contact form', 'plural' => '@count contact forms'], handlers: ['access' => 'Drupal\contact\ContactFormAccessControlHandler', 'list_builder' => 'Drupal\contact\ContactFormListBuilder', 'form' => ['add' => 'Drupal\contact\ContactFormEditForm', 'edit' => 'Drupal\contact\ContactFormEditForm', 'delete' => 'Drupal\Core\Entity\EntityDeleteForm'], 'route_provider' => ['permissions' => 'Drupal\user\Entity\EntityPermissionsRouteProviderWithCheck']], config_prefix: 'form', admin_permission: 'administer contact forms', bundle_of: 'contact_message', entity_keys: ['id' => 'id', 'label' => 'label'], links: ['delete-form' => '/admin/structure/contact/manage/{contact_form}/delete', 'edit-form' => '/admin/structure/contact/manage/{contact_form}', 'entity-permissions-form' => '/admin/structure/contact/manage/{contact_form}/permissions', 'collection' => '/admin/structure/contact', 'canonical' => '/contact/{contact_form}'], config_export: ['id', 'label', 'recipients', 'reply', 'weight', 'message', 'redirect'])]
class ContactForm extends ConfigEntityBundleBase implements ContactFormInterface {

  /**
   * The form ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The human-readable label of the category.
   *
   * @var string
   */
  protected $label;

  /**
   * The message displayed to user on form submission.
   *
   * @var string
   */
  protected $message;

  /**
   * List of recipient email addresses.
   *
   * @var array
   */
  protected $recipients = [];

  /**
   * The path to redirect to on form submission.
   *
   * @var string
   */
  protected $redirect;

  /**
   * An auto-reply message.
   *
   * @var string
   */
  protected $reply = '';

  /**
   * The weight of the category.
   *
   * @var int
   */
  protected $weight = 0;

  /**
   * {@inheritdoc}
   */
  public function getMessage() {
    return $this->message;
  }

  /**
   * {@inheritdoc}
   */
  public function setMessage($message) {
    $this->message = $message;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getRecipients() {
    return $this->recipients;
  }

  /**
   * {@inheritdoc}
   */
  public function setRecipients($recipients) {
    $this->recipients = $recipients;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getRedirectPath() {
    return $this->redirect;
  }

  /**
   * {@inheritdoc}
   */
  public function getRedirectUrl() {
    if ($this->redirect) {
      $url = Url::fromUserInput($this->redirect);
    }
    else {
      $url = Url::fromRoute('<front>');
    }
    return $url;
  }

  /**
   * {@inheritdoc}
   */
  public function setRedirectPath($redirect) {
    $this->redirect = $redirect;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getReply() {
    return $this->reply;
  }

  /**
   * {@inheritdoc}
   */
  public function setReply($reply) {
    $this->reply = $reply;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getWeight() {
    return $this->weight;
  }

  /**
   * {@inheritdoc}
   */
  public function setWeight($weight) {
    $this->weight = $weight;
    return $this;
  }

}
