<?php

namespace Drupal\twig_tables\Controller;

use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Database\Connection;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Route controller for twig_tables.
 */
class TwigTablesController implements ContainerInjectionInterface {

  /**
    * The database connection.
    *
    * @var \Drupal\Core\Database\Connection;
    */
  protected $database;

  /**
   * Constructs a \Drupal\twig_tables\Controller\TwigTablesController object.
   *
   * @param \Drupal\Core\Database\Connection $database
   *   The database connection.
   */
  public function __construct(Connection $database) {
    $this->database = $database;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static($container->get('database'));
  }

  /**
   * Displays a list of twig tables.
   */
  public function listTwigTables() {
    // query the database
    //$this->database->query('SELECT * from {trousers}');
    // return twig tables list here.

    return 'hello world';
  }

}
