<?php

namespace Rojtjo\Notifier\Laravel;

use Illuminate\Session\Store;
use Rojtjo\Notifier\SessionStore as NotifierSessionStore;

class SessionStore implements NotifierSessionStore
{
    /**
     * @var Store
     */
    private $store;

    /**
     * @param Store $store
     */
    public function __construct(Store $store)
    {
        $this->store = $store;
    }

    /**
     * @param string $key
     * @param array $notification
     * @return void
     */
    public function push($key, array $notification)
    {
        $this->store->push($key, $notification);
    }

    /**
     * @param string $key
     * @return bool
     */
    public function has($key)
    {
        return (bool) $this->store->has($key);
    }

    /**
     * @param string $key
     * @return array
     */
    public function get($key)
    {
        return $this->store->get($key, []);
    }

    /**
     * @param string $key
     * @param array $notifications
     * @return void
     */
    public function put($key, array $notifications)
    {
        $this->store->set($key, $notifications);
    }
}
