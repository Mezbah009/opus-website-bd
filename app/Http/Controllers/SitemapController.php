<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Blog;
use App\Models\Job;
use App\Models\CaseStudy;
use App\Models\Product;

class SitemapController extends Controller
{
    public function generate()
    {
        ob_clean(); // Clear whitespace

        $baseUrl = 'https://opus-bd.com'; // Canonical domain

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
            '/contact-us'
        ];

        // Start XML
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" ';
        $sitemap .= 'xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">' . PHP_EOL;

        // Static URLs
        foreach ($staticUrls as $path) {
            $sitemap .= '    <url>' . PHP_EOL;
            $sitemap .= '        <loc>' . htmlspecialchars($baseUrl . $path, ENT_XML1, 'UTF-8') . '</loc>' . PHP_EOL;
            $sitemap .= '        <lastmod>' . now()->toAtomString() . '</lastmod>' . PHP_EOL;
            $sitemap .= '        <changefreq>daily</changefreq>' . PHP_EOL;
            $sitemap .= '        <priority>0.8</priority>' . PHP_EOL;
            $sitemap .= '    </url>' . PHP_EOL;
        }

        // Products
        $products = Product::select('link', 'updated_at', 'logo', 'title')->get();
        foreach ($products as $product) {
            $url = $baseUrl . '/products/' . $product->link;
            $image = $baseUrl . '/uploads/first_section/' . $product->logo;

            $sitemap .= '    <url>' . PHP_EOL;
            $sitemap .= '        <loc>' . htmlspecialchars($url, ENT_XML1, 'UTF-8') . '</loc>' . PHP_EOL;
            $sitemap .= '        <lastmod>' . $product->updated_at->toAtomString() . '</lastmod>' . PHP_EOL;
            $sitemap .= '        <changefreq>daily</changefreq>' . PHP_EOL;
            $sitemap .= '        <priority>0.7</priority>' . PHP_EOL;
            if (!empty($product->logo)) {
                $sitemap .= '        <image:image>' . PHP_EOL;
                $sitemap .= '            <image:loc>' . htmlspecialchars($image, ENT_XML1, 'UTF-8') . '</image:loc>' . PHP_EOL;
                $sitemap .= '            <image:title>' . htmlspecialchars($product->title, ENT_XML1, 'UTF-8') . '</image:title>' . PHP_EOL;
                $sitemap .= '        </image:image>' . PHP_EOL;
            }
            $sitemap .= '    </url>' . PHP_EOL;
        }

        // Blogs
        $blogs = Blog::select('slug', 'updated_at', 'feature_image', 'title')->get();
        foreach ($blogs as $blog) {
            $url = $baseUrl . '/blogs/' . $blog->slug;
            $image = $baseUrl . '/uploads/blogs/' . $blog->feature_image;

            $sitemap .= '    <url>' . PHP_EOL;
            $sitemap .= '        <loc>' . htmlspecialchars($url, ENT_XML1, 'UTF-8') . '</loc>' . PHP_EOL;
            $sitemap .= '        <lastmod>' . $blog->updated_at->toAtomString() . '</lastmod>' . PHP_EOL;
            $sitemap .= '        <changefreq>daily</changefreq>' . PHP_EOL;
            $sitemap .= '        <priority>0.7</priority>' . PHP_EOL;
            if (!empty($blog->feature_image)) {
                $sitemap .= '        <image:image>' . PHP_EOL;
                $sitemap .= '            <image:loc>' . htmlspecialchars($image, ENT_XML1, 'UTF-8') . '</image:loc>' . PHP_EOL;
                $sitemap .= '            <image:title>' . htmlspecialchars($blog->title, ENT_XML1, 'UTF-8') . '</image:title>' . PHP_EOL;
                $sitemap .= '        </image:image>' . PHP_EOL;
            }
            $sitemap .= '    </url>' . PHP_EOL;
        }

        // Case Studies
        $caseStudies = CaseStudy::select('slug', 'updated_at')->get();
        foreach ($caseStudies as $case) {
            $url = $baseUrl . '/case-study/' . $case->slug;
            $sitemap .= '    <url>' . PHP_EOL;
            $sitemap .= '        <loc>' . htmlspecialchars($url, ENT_XML1, 'UTF-8') . '</loc>' . PHP_EOL;
            $sitemap .= '        <lastmod>' . $case->updated_at->toAtomString() . '</lastmod>' . PHP_EOL;
            $sitemap .= '        <changefreq>daily</changefreq>' . PHP_EOL;
            $sitemap .= '        <priority>0.7</priority>' . PHP_EOL;
            $sitemap .= '    </url>' . PHP_EOL;
        }

        // Jobs
        $jobs = Job::select('slug', 'updated_at')->get();
        foreach ($jobs as $job) {
            $url = $baseUrl . '/jobs/' . $job->slug;
            $sitemap .= '    <url>' . PHP_EOL;
            $sitemap .= '        <loc>' . htmlspecialchars($url, ENT_XML1, 'UTF-8') . '</loc>' . PHP_EOL;
            $sitemap .= '        <lastmod>' . $job->updated_at->toAtomString() . '</lastmod>' . PHP_EOL;
            $sitemap .= '        <changefreq>daily</changefreq>' . PHP_EOL;
            $sitemap .= '        <priority>0.7</priority>' . PHP_EOL;
            $sitemap .= '    </url>' . PHP_EOL;
        }

        $sitemap .= '</urlset>';

        return response($sitemap, 200)->header('Content-Type', 'application/xml');
    }

    public function robots()
    {
        $content = <<<EOT
                User-agent: *
                Disallow: /admin
                Disallow: /login
                Disallow: /register
                Allow: /
                Sitemap: https://opus-bd.com/sitemap.xml
                EOT;

        return response($content, 200)->header('Content-Type', 'text/plain');
    }
}
