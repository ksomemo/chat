<?php
namespace KsOre\Controller;

/**
 * Controller
 */
class Controller
{
    /**
     * @var DBManager
     */
    protected $db_manager;

    /**
     * @var Request
     */
    protected $request;

    /**
     *
     * @param DBManager $db_manager
     */
    public function __construct($db_manager, $request)
    {
        $this->db_manager = $db_manager;
        $this->request    = $request;
    }
}
