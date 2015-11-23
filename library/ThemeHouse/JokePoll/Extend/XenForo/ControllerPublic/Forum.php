<?php

/**
 *
 * @see XenForo_ControllerPublic_Forum
 */
class ThemeHouse_JokePoll_Extend_XenForo_ControllerPublic_Forum extends XFCP_ThemeHouse_JokePoll_Extend_XenForo_ControllerPublic_Forum
{

    /**
     *
     * @see XenForo_ControllerPublic_Forum::actionCreateThread()
     */
    public function actionCreateThread()
    {
        $response = parent::actionCreateThread();

        if ($response instanceof XenForo_ControllerResponse_View) {
            $forum = $response->params['forum'];
            $response->params['canMakeJokePoll'] = $this->_getForumModel()->canMakeJokePollInForum($forum);
        }

        return $response;
    }

    /**
     *
     * @see XenForo_ControllerPublic_Forum::actionAddThread()
     */
    public function actionAddThread()
    {
        $GLOBALS['XenForo_ControllerPublic_Forum'] = $this;

        return parent::actionAddThread();
    }
}