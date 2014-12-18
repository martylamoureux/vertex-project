<?php

namespace App\Controllers;

use Vertex\Framework\Controller;

class DemoController extends Controller {

    public function getIndex() {
        $name = $this->needsOrDefault("name", "World");
        return $this->naturalView(compact('name'));
    }

    public function getUsers() {
        $users = $this->repo('User')->all();
        return $this->naturalView(compact('users'));
    }


}

?>