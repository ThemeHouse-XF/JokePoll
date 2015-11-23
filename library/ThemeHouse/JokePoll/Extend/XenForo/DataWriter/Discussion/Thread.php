<?php

/**
 *
 * @see XenForo_DataWriter_Discussion_Thread
 */
class ThemeHouse_JokePoll_Extend_XenForo_DataWriter_Discussion_Thread extends XFCP_ThemeHouse_JokePoll_Extend_XenForo_DataWriter_Discussion_Thread
{

    /**
     *
     * @see XenForo_DataWriter_Discussion_Thread::_discussionPostSave()
     */
    protected function _discussionPostSave()
    {
        if (isset($GLOBALS['XenForo_ControllerPublic_Forum'])) {
            $GLOBALS['XenForo_DataWriter_Discussion_Thread'] = $this;
        }
    }
}