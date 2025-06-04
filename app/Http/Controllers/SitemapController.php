<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use App\Models\Blog;
use App\Models\Job;
use App\Models\CaseStudy;
use App\Models\Product;

class SitemapController extends Controller
{
    public function generate()
    {
        ob_clean(); // Clear any whitespace

        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" ';
        $sitemap .= 'xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">' . PHP_EOL;

        // Static URLs
        $staticUrls = [
            '/',
            '/about-us',
            '/enterprise-solutions',
            '/fintech-solutions',
            '/mobile-app-solutions',
            '/ai-solutions',
            '/system-solutions',
            '/cyber-security-solutions',
            '/services',
            '/clients',
            '/case-study',
            '/blogs',
            '/jobs',
            '/contact-us',
        ];

        foreach ($staticUrls as $path) {
            $sitemap .= $this->generateUrlBlock(URL::to($path));
        }

        // Products
        $products = Product::select('link', 'updated_at', 'logo', 'title')->get();
        foreach ($products as $product) {
            $url = URL::to('/products/' . $product->link);
            $image = $product->logo ? asset('uploads/first_section/' . $product->logo) : null;
            $sitemap .= $this->generateUrlBlock($url, $product->updated_at, $image, $product->title);
        }

        // Blogs (only published)
        $blogs = Blog::where('is_published', 1)
            ->whereNotNull('published_at')
            ->select('slug', 'updated_at', 'image', 'title')
            ->get();

        foreach ($blogs as $blog) {
            $url = URL::to('/blogs/' . $blog->slug);
            $image = $blog->image ? asset('uploads/blogs/' . $blog->image) : null;
            $sitemap .= $this->generateUrlBlock($url, $blog->updated_at, $image, $blog->title);
        }

        // Case Studies
        $caseStudies = CaseStudy::select('slug', 'updated_at')->get();
        foreach ($caseStudies as $caseStudy) {
            $url = URL::to('/case-study/' . $caseStudy->slug);
            $sitemap .= $this->generateUrlBlock($url, $caseStudy->updated_at);
        }

        $sitemap .= '</urlset>';

        return response($sitemap, 200)->header('Content-Type', 'application/xml');
    }

    private function generateUrlBlock($loc, $lastmod = null, $imageUrl = null, $imageTitle = null)
    {
        $block = '    <url>' . PHP_EOL;
        $block .= '        <loc>' . htmlspecialchars($loc, ENT_XML1, 'UTF-8') . '</loc>' . PHP_EOL;
        $block .= '        <lastmod>' . ($lastmod ? $lastmod->toAtomString() : now()->toAtomString()) . '</lastmod>' . PHP_EOL;
        $block .= '        <changefreq>daily</changefreq>' . PHP_EOL;
        $block .= '        <priority>0.7</priority>' . PHP_EOL;

        if ($imageUrl && $imageTitle) {
            $block .= '        <image:image>' . PHP_EOL;
            $block .= '            <image:loc>' . htmlspecialchars($imageUrl, ENT_XML1, 'UTF-8') . '</image:loc>' . PHP_EOL;
            $block .= '            <image:title>' . htmlspecialchars($imageTitle, ENT_XML1, 'UTF-8') . '</image:title>' . PHP_EOL;
            $block .= '        </image:image>' . PHP_EOL;
        }

        $block .= '    </url>' . PHP_EOL;

        return $block;
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
