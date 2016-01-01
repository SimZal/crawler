<?php

namespace SimZal\Crawler;

interface CrawlProfile
{
    /**
     * Determine if the given url should be crawled.
     *
     * @param \SimZal\Crawler\Url $url
     *
     * @return bool
     */
    public function shouldCrawl(Url $url);
}
