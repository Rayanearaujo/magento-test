<?php

class Rayane_Recentproducts_IndexController extends Mage_Core_Controller_Front_Action{

    /**
     * Index action
     *
     * @access public

     * @return void
     */
    public function indexAction()
    {
        Mage::log("Inside recent controller");
        echo "Frontend side!!";
        $this->loadLayout();
        $this->renderLayout();
    }
}