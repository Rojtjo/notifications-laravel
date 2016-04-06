<?php

namespace Rojtjo\Notifier\Laravel;

use Closure;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Rojtjo\Notifier\Notifier;

class ShareNotificationsWithView
{
    /**
     * @var Notifier
     */
    private $notifier;

    /**
     * @var Factory
     */
    private $viewFactory;

    /**
     * @param Notifier $notifier
     * @param Factory $viewFactory
     */
    public function __construct(Notifier $notifier, Factory $viewFactory)
    {
        $this->notifier = $notifier;
        $this->viewFactory = $viewFactory;
    }

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $notifications = $this->notifier->getCurrentNotifications();
        $this->viewFactory->share('notifications', $notifications);

        return $next($request);
    }
}
