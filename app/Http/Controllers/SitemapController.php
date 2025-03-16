<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;

class SitemapController extends Controller
{
    public function generate()
    {
        // Clear any accidental whitespace before output
        ob_clean();

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

        // Start XML document
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

        foreach ($urls as $url) {
            $sitemap .= '    <url>' . PHP_EOL;
            $sitemap .= '        <loc>' . htmlspecialchars($url, ENT_XML1, 'UTF-8') . '</loc>' . PHP_EOL;
            $sitemap .= '        <lastmod>' . now()->toAtomString() . '</lastmod>' . PHP_EOL;
            $sitemap .= '        <changefreq>weekly</changefreq>' . PHP_EOL;
            $sitemap .= '        <priority>0.8</priority>' . PHP_EOL;
            $sitemap .= '    </url>' . PHP_EOL;
        }

        $sitemap .= '</urlset>';

        return response($sitemap, 200)->header('Content-Type', 'application/xml');
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
