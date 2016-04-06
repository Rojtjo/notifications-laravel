<?php

namespace Rojtjo\Notifier\Laravel;

use Illuminate\Support\ServiceProvider;
use Rojtjo\Notifier\SessionStore as NotifierSessionStore;
use Rojtjo\Notifier\Transport;
use Rojtjo\Notifier\Transports\SessionTransport;

class NotifierServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Transport::class, SessionTransport::class);
        $this->app->singleton(NotifierSessionStore::class, SessionStore::class);
    }
}
