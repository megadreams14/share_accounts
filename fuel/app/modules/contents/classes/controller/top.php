<?php

/*
 * @Admin
 */

namespace Contents;

class Controller_Top extends \Controller_Common {

    public function action_index() {
        $this->viewContent('top/index', '貸し借り管理');
    }
    
}