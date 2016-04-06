<?php

namespace spec\Rojtjo\Notifier\Laravel;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Rojtjo\Notifier\Notifications;
use Rojtjo\Notifier\Notifier;

class ShareNotificationsWithViewSpec extends ObjectBehavior
{
    function let(Notifier $notifier, Factory $viewFactory)
    {
        $this->beConstructedWith($notifier, $viewFactory);
    }

    function it_shares_the_notifications_from_the_session(Notifier $notifier, Factory $viewFactory,
                                                          Request $request)
    {
        $notifications = Notifications::mapFromArray([]);
        $notifier->getCurrentNotifications()->willReturn($notifications);
        $viewFactory->share('notifications', $notifications)->shouldBeCalled();

        $next = function($req) use($request) {
            return $req === $request->getWrappedObject();
        };

        $this->handle($request, $next)->shouldBe(true);
    }
}
