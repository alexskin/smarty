<?php

/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     resource.db.php
 * Type:     resource
 * Name:     db
 * Purpose:  Fetches templates from a database
 * -------------------------------------------------------------
 */

use Smarty\Resource\RecompiledPlugin;
use Smarty\Template;
use Smarty\Template\Source;

class Smarty_Resource_Db extends RecompiledPlugin {

    public function populate(Source $source, ?Template $_template = null) {
        $source->uid = sha1($source->resource);
        $source->timestamp = 1000000000;
        $source->exists = true;
    }

    public function getContent(Source $source) {
        return '{$x="hello world"}{$x}';
    }
}
