<?php

class Controller
{

    public $layout = 'main';

    public function render($_file_ = '', $_arr_ = [])
    {

        // get the current class name ( ex : DefaultController)
        $get_class = get_class($this);

        /*
         * we need to extract the base controller name ( ex : Default )
         * we need to know the usefull information ( from where does it start and where it ends )
         */
        $pos_controller = strpos($get_class, 'Controller');

        //extracting the base controller name
        $controller_name = substr($get_class, 0, $pos_controller);

        // output buffer start
        ob_start();
        //convert all keys to variables
        extract($_arr_, EXTR_REFS);
        //load the view content
        require_once '../views/' . $controller_name . '/' . $_file_ . '.php';
        /*
         * store the view data
         * the `$view_content` php variable is available when called from within the layout
         */
        $view_content = ob_get_contents();
        /*
         * clean all the content loaded
         * this does not put data on the screen (clean)
         * http://php.net/manual/ro/function.ob-end-clean.php
         */
        ob_end_clean();

        ob_start();
        require_once '../views/layouts/'.($this->layout).'.php';
        /*
         * put data on screen (flush)
         * http://php.net/manual/ro/function.ob-end-flush.php
         */
        return ob_end_flush();

    }

}