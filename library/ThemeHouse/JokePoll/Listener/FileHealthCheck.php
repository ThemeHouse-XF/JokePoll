<?php

class ThemeHouse_JokePoll_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/JokePoll/DataWriter/Helper/JokePoll.php' => 'c2d32c95afefa5009018a7c525ed428e',
                'library/ThemeHouse/JokePoll/Extend/XenForo/ControllerPublic/Forum.php' => '58cd66242800b00beeeac316814e4cd9',
                'library/ThemeHouse/JokePoll/Extend/XenForo/ControllerPublic/Thread.php' => 'd069ca3894043ca5f934784cffb1abb5',
                'library/ThemeHouse/JokePoll/Extend/XenForo/DataWriter/Discussion/Thread.php' => 'da5abe1aeff933223a3fd97f21129201',
                'library/ThemeHouse/JokePoll/Extend/XenForo/DataWriter/Poll.php' => '93d54c1638018678f9786bf1480655bc',
                'library/ThemeHouse/JokePoll/Extend/XenForo/Model/Forum.php' => '91e2adfb9bb536b09520607aafe4466e',
                'library/ThemeHouse/JokePoll/Extend/XenForo/Model/Poll.php' => '3d5dce7741b96c40afa95d1c5b39c140',
                'library/ThemeHouse/JokePoll/Install/Controller.php' => '71efead491d4fea17e89e97acd5425b3',
                'library/ThemeHouse/JokePoll/Listener/LoadClass.php' => '3ae5e25c43698fd00ce5c39e2a69ca05',
                'library/ThemeHouse/Install.php' => '18f1441e00e3742460174ab197bec0b7',
                'library/ThemeHouse/Install/20151109.php' => '2e3f16d685652ea2fa82ba11b69204f4',
                'library/ThemeHouse/Deferred.php' => 'ebab3e432fe2f42520de0e36f7f45d88',
                'library/ThemeHouse/Deferred/20150106.php' => 'a311d9aa6f9a0412eeba878417ba7ede',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
                'library/ThemeHouse/Listener/Template.php' => '0aa5e8aabb255d39cf01d671f9df0091',
                'library/ThemeHouse/Listener/TemplateHook.php' => 'a767a03baad0ca958d19577200262d50',
                'library/ThemeHouse/Listener/TemplatePostRender.php' => 'b6da98a55074e4cde833abf576bc7b5d',
            ));
    }
}