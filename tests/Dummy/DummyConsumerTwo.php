<?php

declare(strict_types=1);

namespace Sts\KafkaBundle\Tests\Dummy;

use RdKafka\Message as RdKafkaMessage;
use Sts\KafkaBundle\Client\Consumer\Message;
use Sts\KafkaBundle\Client\Contract\ConsumerInterface;
use Sts\KafkaBundle\Exception\KafkaException;
use Sts\KafkaBundle\RdKafka\Context;

class DummyConsumerTwo implements ConsumerInterface
{
    public const NAME = 'dummy_consumer_two';

    public function consume(Message $message, Context $context): bool
    {
        return false;
    }

    public function getName(): string
    {
        return self::NAME;
    }

    public function handleException(KafkaException $kafkaException, RdKafkaMessage $message, Context $context): bool
    {
        return true;
    }
}
