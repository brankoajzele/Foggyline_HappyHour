<?php

class Foggyline_HappyHour_HelloController extends Mage_Core_Controller_Front_Action {

    public function helloWorldAction() {
        /*
          echo 'Hello World #1.';
         */

        /*
          $this->loadLayout();

          $block = $this->getLayout()->createBlock('foggyline_happyhour/hello');
          $block->setText('Hello World #2.');

          $this->getLayout()->getBlock('content')->insert($block);

          $this->renderLayout();
         */


        $this->loadLayout();

        $block = $this->getLayout()->createBlock('foggyline_happyhour/hello');

        $this->getLayout()->getBlock('content')->insert($block);

        $this->renderLayout();
    }

    public function testUserSaveAction() {
        $user = Mage::getModel('foggyline_happyhour/user');

        $user->setFirstname('John');
        /* or: $user->setData('firstname', 'John'); */

        $user->setLastname('Doe');
        /* or: $user->setDatata('lastname', 'Doe'); */

        try {
            $user->save();
            echo 'Successfully saved user.';
        } catch (Exception $e) {
            echo $e->getMessage();
            Mage::logException($e);
            /* oror: Mage::log($e->getTraceAsString(), null, 'exception.log', true); */
        }
    }

    public function testUserCollectionAction() {
        $users = Mage::getModel('foggyline_happyhour/user')
                ->getCollection();

        foreach ($users as $user) {
            $firstname = $user->getFirstname();
            /* or: $user->getData('firstname') */

            $lastname = $user->getLastname();
            /* or: $user->getData('lastname') */

            echo "$firstname $lastname<br />";
        }
    }

    public function helperTestAction() {
        echo Mage::helper('foggyline_happyhour')->getCustomMessage();
    }

}
