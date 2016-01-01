<?php

namespace SimZal\Crawler;

class CrawlAllUrls implements CrawlProfile
{
    /**
     * Determine if the given url should be crawled.
     *
     * @param \SimZal\Crawler\Url $url
     *
     * @return bool
     */
    public function shouldCrawl(Url $url)
    {
        return true;
    }
}
