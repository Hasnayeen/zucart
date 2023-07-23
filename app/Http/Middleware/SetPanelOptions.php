<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetPanelOptions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->setting->top_navigation) {
            filament()
                ->getCurrentPanel()
                ->viteTheme('resources/css/filament/top.css')
                ->topNavigation()
                ->renderHook('content.start', fn () => view('tenant-menu'));

            return $next($request);
        }

        filament()
            ->getCurrentPanel()
            ->sidebarFullyCollapsibleOnDesktop()
            ->sidebarCollapsibleOnDesktop()
            ->viteTheme('resources/css/filament/side.css')
            ->renderHook('sidebar.footer', fn () => view('user-menu'));

        return $next($request);
    }
}
