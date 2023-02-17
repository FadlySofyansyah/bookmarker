<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        //
        return view('dashboard', [
            'bookmarks' => Bookmark::query()->where('user_id', auth()->id())->get()
        ]);
    }
}
