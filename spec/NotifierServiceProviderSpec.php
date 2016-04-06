<?php

namespace spec\Rojtjo\Notifier\Laravel;

use Illuminate\Contracts\Foundation\Application;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Rojtjo\Notifier\SessionStore as NotifierSessionStore;
use Rojtjo\Notifier\Laravel\SessionStore;
use Rojtjo\Notifier\Transport;
use Rojtjo\Notifier\Transports\SessionTransport;

class NotifierServiceProviderSpec extends ObjectBehavior
{
    function let(Application $app)
    {
        $this->beConstructedWith($app);
    }

    function it_is_a_service_provider()
    {
        $this->shouldHaveType('Rojtjo\Notifier\Laravel\NotifierServiceProvider');
        $this->shouldHaveType('Illuminate\Support\ServiceProvider');
    }

    function it_registers_the_services(Application $app)
    {
        $app->singleton(Transport::class, SessionTransport::class)->shouldBeCalled();
        $app->singleton(NotifierSessionStore::class, SessionStore::class)->shouldBeCalled();
        $this->register();
    }
}
