<?php

namespace Modules\Appointment\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        \Menu::make('admin_sidebar', function ($menu) {

            // Tags
            $menu->add('<i class="nav-icon fas fa-tags"></i> '.__('Register User'), [
                'route' => 'backend.appointment.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 85,
                'activematches' => ['admin/appointment*'],
                'permission'    => ['view_appointments'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
        
    }
}
