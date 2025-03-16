<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;

class SitemapController extends Controller
{
    public function generate()
    {
        $urls = [
            URL::to('/'),
            URL::to('/about-us'),
            URL::to('/enterprise-solutions'),
            URL::to('/fintech-solutions'),
            URL::to('/mobile-app-solutions'),
            URL::to('/ai-solutions'),
            URL::to('/system-solutions'),
            URL::to('/cyber-security-solutions'),
            URL::to('/services'),
            URL::to('/clients'),
            URL::to('/case-study'),
            URL::to('/blogs'),
            URL::to('/jobs'),
            URL::to('/contact-us'),
        ];

        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($urls as $url) {
            $sitemap .= '<url>';
            $sitemap .= '<loc>' . $url . '</loc>';
            $sitemap .= '<lastmod>' . now()->toAtomString() . '</lastmod>';
            $sitemap .= '<changefreq>weekly</changefreq>';
            $sitemap .= '<priority>0.8</priority>';
            $sitemap .= '</url>';
        }

        $sitemap .= '</urlset>';

        return Response::make($sitemap, 200, ['Content-Type' => 'application/xml']);
    }


    // robots.txt


    public function robots()
    {
        $content = "User-agent: *\n";
        $content .= "Disallow: /admin/\n";
        $content .= "Disallow: /login/\n";
        $content .= "Disallow: /register/\n";
        $content .= "Allow: /\n";
        $content .= "Sitemap: " . url('/sitemap.xml') . "\n";

        return response($content, 200)
            ->header('Content-Type', 'text/plain');
    }
}
