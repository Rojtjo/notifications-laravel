<?php

namespace spec\Rojtjo\Notifier\Laravel;

use Illuminate\Session\Store;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SessionStoreSpec extends ObjectBehavior
{
    function let(Store $store)
    {
        $this->beConstructedWith($store);
    }

    function it_is_a_session_store()
    {
        $this->shouldHaveType('Rojtjo\Notifier\SessionStore');
    }

    function it_sends_the_notifications_to_the_store(Store $store)
    {
        $notification = [
            'type' => 'success',
            'message' => 'It is successful',
        ];
        $store->push('my-key.new', $notification)->shouldBeCalled();

        $this->push('my-key.new', $notification);
    }

    function it_can_check_if_the_store_contains_an_item_with_the_given_key(Store $store)
    {
        $store->has('my-key.new')->shouldBeCalled();
        $this->has('my-key.new')->shouldBeBoolean();
    }

    function it_can_get_an_item_from_the_store(Store $store)
    {
        $store->get('my-key.new', [])->willReturn([]);
        $this->get('my-key.new')->shouldBeArray();
    }

    function it_can_put_items_in_the_store_on_a_specific_key(Store $store)
    {
        $notifications = [];

        $store->set('my-key.new', $notifications)->shouldBeCalled();
        $this->put('my-key.new', $notifications);
    }
}
