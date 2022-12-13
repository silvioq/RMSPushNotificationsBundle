<?php

namespace RMS\PushNotificationsBundle\Service\OS;

use Psr\Log\LoggerInterface;
use RMS\PushNotificationsBundle\Exception\InvalidMessageTypeException,
    RMS\PushNotificationsBundle\Message\BlackberryMessage,
    RMS\PushNotificationsBundle\Message\MessageInterface;
use Buzz\Browser,
    Buzz\Listener\BasicAuthListener,
    Buzz\Client\Curl;

class BlackberryNotification implements OSNotificationServiceInterface
{
    /**
     * Evaluation mode or not
     *
     * @var string
     */
    protected $evaluation;

    /**
     * App ID
     *
     * @var string
     */
    protected $appID;

    /**
     * Password for auth
     *
     * @var string
     */
    protected $password;

    /**
     * Timeout in seconds for the connecting client
     *
     * @var int
     */
    protected $timeout;

    /**
     * Monolog logger
     *
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * Constructor
     *
     * @param $evaluation
     * @param $appID
     * @param $password
     * @param $timeout
     * @param $logger
     */
    public function __construct($evaluation, $appID, $password, $timeout, $logger)
    {
        $this->evaluation = $evaluation;
        $this->appID = $appID;
        $this->password = $password;
        $this->timeout = $timeout;
        $this->logger = $logger;
    }

    /**
     * Sends a Blackberry Push message
     *
     * @param  \RMS\PushNotificationsBundle\Message\MessageInterface              $message
     * @throws \RMS\PushNotificationsBundle\Exception\InvalidMessageTypeException
     * @return bool
     */
    public function send(MessageInterface $message)
    {
        if (!$message instanceof BlackberryMessage) {
            throw new InvalidMessageTypeException(sprintf("Message type '%s' not supported by Blackberry", get_class($message)));
        }

	throw new \RuntimeException("BlackberryMessage is deprecated.");
    }

}
