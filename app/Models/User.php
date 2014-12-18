<?php

namespace App\Models;

use Vertex\Framework\Modeling\Model;
use Vertex\Framework\Modeling\ModelSchema;

class User extends Model {

    protected function schema(ModelSchema $schema) {
        $schema->idField();
        $schema->stringField('username')->unique();
        $schema->passwordField('password');
        $schema->stringField('email')->unique();
        return $schema;
    }

}