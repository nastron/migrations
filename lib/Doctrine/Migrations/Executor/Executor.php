<?php

namespace Doctrine\Migrations\Executor;

interface Executor
{
    public function execute();
    public function getMigration();
}
