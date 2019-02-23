<?php

declare(strict_types = 1);

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\UrlRequest;
use App\Models\Link;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

/**
 * Class LinkController.
 * Main application's controller.
 *
 * @package App\Http\Controllers\Web
 */
class LinkController extends Controller
{
    /**
     * Main page.
     *
     * @return View
     */
    public function index(): View
    {
        return view('links.index');
    }

    /**
     * Create short link for url.
     *
     * @param UrlRequest $request
     *
     * @return RedirectResponse
     */
    public function store(UrlRequest $request): RedirectResponse
    {
        $url = $request->get('url');
        $link = Link::where('url', $url)->first();

        if (null === $link) {
            $link = $this->createLink($url);
        }

        return back()->with(['code' => $link->getAttribute('code')]);
    }

    /**
     * Redirect users for original url.
     *
     * @param Link $link
     *
     * @return RedirectResponse
     */
    public function redirect(Link $link): RedirectResponse
    {
        $url = $link->getAttribute('url');

        return redirect()->away($url, 301);
    }

    /**
     * Create short link.
     *
     * @param string $url
     *
     * @return Link
     */
    private function createLink(string $url): Link
    {
        /** @var string $code */
        $code = \ShortLinkGenerator::generate();

        return Link::create([
            'url'  => $url,
            'code' => $code,
        ]);
    }
}
