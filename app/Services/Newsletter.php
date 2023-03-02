<?php

namespace App\Services;
use MailchimpMarketing\ApiClient;

class Newsletter
{

    public function __construct(protected ApiClient $client)
    {

    }

    public function subscribe (string $email, string $list = null){

        $lsit ??= config('services.mailchimp.lists.subscribers');

        return $this->client->lists->addListMember(config('services.mailchimp.lists.subscribers'), [
            "email_address" => $email,
            "status" => 'subscribed',
        ]);
    }
}