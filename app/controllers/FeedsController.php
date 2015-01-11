<?php
use GetStream\StreamLaravel\Enrich;
class FeedsController extends \BaseController {

	public function feed()
    {
        $feed = FeedManager::getUserFeed('global');
        $enricher = new Enrich;
        $activities = $feed->getActivities(0,25)['results'];
        $activities = $enricher->enrichActivities($activities);
        return View::make('feeds.flat_feed', compact('activities'));
    }

}