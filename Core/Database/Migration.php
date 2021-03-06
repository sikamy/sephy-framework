<?php

namespace Core\Database;

use Core\Application;
use Illuminate\Database\Migrations\Migration as MigrationDatabase;

class Migration extends MigrationDatabase
{
    public $schema;
    public $application;

    public function __construct()
    {
        $this->application = new Application();
        $this->schema = $this->application->db->getSchemaBuilder();
    }
}
