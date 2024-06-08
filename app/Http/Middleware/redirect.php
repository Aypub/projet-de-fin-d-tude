namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class redirect
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (! $request->user() || ! $request->user()->hasRole($role)) {
            // Optionally, you can redirect to a forbidden page or return a 403 response
            abort(403, 'Unauthorized.');
        }

        return $next($request);
    }
}
