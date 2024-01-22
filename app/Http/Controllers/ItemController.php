<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ItemController extends Controller
{
    public const int CACHING_TIME = 5;

    public function index(Request $request)
    {
        $page    = $request->get('page', 1);
        $perPage = 3;

        $key = "items_page_{$page}";

        $items = Cache::remember($key, now()->addMinutes(self::CACHING_TIME), static function () use ($page, $perPage) {
            return Item::query()->paginate($perPage, ['*'], 'page', $page);
        });

        return view('items.index', ['items' => $items]);
    }
}

