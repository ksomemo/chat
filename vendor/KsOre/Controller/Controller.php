<?php
namespace KsOre\Controller;

/**
 * Controller
 */
class Controller
{
    /**
     *
     * @var DBManager
     */
    protected $db_manager;

    /**
     *
     * @param DBManager $db_manager
     */
    public function __construct($db_manager) {
        $this->db_manager = $db_manager;
    }
}
