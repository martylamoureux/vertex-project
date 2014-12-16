<?php

namespace App\Controllers;

use Vertex\Vertex\Framework\Controller;

class DemoController extends Controller {

    public function getIndex() {
        $name = $this->needsOrDefault("name", "World");
        return $this->naturalView(compact('name'));
    }


}

?>