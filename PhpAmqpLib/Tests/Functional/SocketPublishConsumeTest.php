<?php

namespace iviu96afa\amqp\PhpAmqpLib\Tests\Functional;

use iviu96afa\amqp\PhpAmqpLib\Connection\AMQPSocketConnection;

class SocketPublishConsumeTest extends AbstractPublishConsumeTest
{
    protected function createConnection()
    {
        return new AMQPSocketConnection(HOST, PORT, USER, PASS, VHOST);
    }
}
