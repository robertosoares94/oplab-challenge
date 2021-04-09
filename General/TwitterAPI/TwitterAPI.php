<?php
require_once('TwitterAPIExchange.php');

class SearchTweets
{
    /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
    private $oauth_access_token = "";
    private $oauth_access_token_secret = "";
    private $consumer_key = "";
    private $consumer_secret = "";

    /**
     * @param string $search
     * @return mixed
     * @throws Exception
     */
    function getLastTweets(string $search)
    {

        $settings = array(
            'oauth_access_token' => $this->oauth_access_token,
            'oauth_access_token_secret' => $this->oauth_access_token_secret,
            'consumer_key' => $this->consumer_key,
            'consumer_secret' => $this->consumer_secret
        );

        /** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
        $url = 'https://api.twitter.com/1.1/search/tweets.json';
        $getfield = '?q=' . $search . '&count=10&result_type=recent';
        $requestMethod = 'GET';

        $twitter = new TwitterAPIExchange($settings);
        $response = $twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest();

        return json_decode($response);

    }
}

// word to search
$search = 'developer';
// Instance to class
$searchTweets = new SearchTweets();

// Test Search
$result = $searchTweets->getLastTweets($search);

// Prints the result
var_dump($result);
