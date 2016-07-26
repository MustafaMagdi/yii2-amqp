<?php

namespace iviu96afa\amqp\PhpAmqpLib\Tests\Functional;

use iviu96afa\amqp\PhpAmqpLib\Connection\AMQPStreamConnection;

class StreamPublishConsumeTest extends AbstractPublishConsumeTest
{
    protected function createConnection()
    {
        return new AMQPStreamConnection(HOST, PORT, USER, PASS, VHOST);
    }
}
