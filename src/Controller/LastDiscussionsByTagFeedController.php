<?php

namespace AmauryCarrade\FlarumFeeds\Controller;

use Flarum\Api\Client as ApiClient;
use Illuminate\Contracts\View\Factory;
use Symfony\Component\Translation\TranslatorInterface;


class LastDiscussionsByTagFeedController extends TagsFeedController
{
    public function __construct(Factory $view, ApiClient $api, TranslatorInterface $translator)
    {
        parent::__construct($view, $api, $translator, true);
    }
}