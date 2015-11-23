<?php

class ThemeHouse_JokePoll_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_JokePoll' => array(
                'controller' => array(
                    'XenForo_ControllerPublic_Forum',
                    'XenForo_ControllerPublic_Thread'
                ), 
                'datawriter' => array(
                    'XenForo_DataWriter_Discussion_Thread',
                    'XenForo_DataWriter_Poll'
                ), 
                'model' => array(
                    'XenForo_Model_Forum',
                    'XenForo_Model_Poll'
                ), 
            ), 
        );
    }

    public static function loadClassController($class, array &$extend)
    {
        $loadClassController = new ThemeHouse_JokePoll_Listener_LoadClass($class, $extend, 'controller');
        $extend = $loadClassController->run();
    }

    public static function loadClassDataWriter($class, array &$extend)
    {
        $loadClassDataWriter = new ThemeHouse_JokePoll_Listener_LoadClass($class, $extend, 'datawriter');
        $extend = $loadClassDataWriter->run();
    }

    public static function loadClassModel($class, array &$extend)
    {
        $loadClassModel = new ThemeHouse_JokePoll_Listener_LoadClass($class, $extend, 'model');
        $extend = $loadClassModel->run();
    }
}