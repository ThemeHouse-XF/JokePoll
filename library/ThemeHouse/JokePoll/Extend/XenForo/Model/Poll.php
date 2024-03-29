<?php

/**
 *
 * @see XenForo_Model_Poll
 */
class ThemeHouse_JokePoll_Extend_XenForo_Model_Poll extends XFCP_ThemeHouse_JokePoll_Extend_XenForo_Model_Poll
{

    /**
     *
     * @see XenForo_Model_Poll::voteOnPoll()
     */
    public function voteOnPoll($pollId, $votes, $userId = null, $voteDate = null)
    {
        $jokePolls = XenForo_Application::get('options')->th_jokePoll_firstChoicePollIds;
        if ($jokePolls) {
            $jokePolls = explode(',', $jokePolls);
            if (in_array($pollId, $jokePolls)) {
                $possibleResponses = $this->getPollResponsesInPoll($pollId);
                if ($possibleResponses) {
                    $votes = array(
                        key($possibleResponses)
                    );
                }
            }
        }

        return parent::voteOnPoll($pollId, $votes, $userId, $voteDate);
    }
}