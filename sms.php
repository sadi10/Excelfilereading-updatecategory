<?php

// composer require messente/messente-api-php

require_once __DIR__.'/vendor/autoload.php';

use Messente\Api\Api\OmnimessageApi;
use Messente\Api\Model\Omnimessage;
use Messente\Api\Configuration;
use Messente\Api\Model\SMS;

$config = Configuration::getDefaultConfiguration()
    ->setUsername('YOUR_MESSENTE_API_USERNAME')
    ->setPassword('YOUR_MESSENTE_API_PASSWORD');

$apiInstance = new OmnimessageApi(
    new GuzzleHttp\Client(),
    $config
);

$omnimessage = new Omnimessage([
    'to' => '<01627632232>',
]);

$sms = new SMS(
    [
        'text' => 'hello sms',
        'sender' => '<sender name (optional)>',
    ]
);

$omnimessage->setMessages([$sms]);

try {
    $result = $apiInstance->sendOmnimessage($omnimessage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling sendOmnimessage: ', $e->getMessage(), PHP_EOL;
}