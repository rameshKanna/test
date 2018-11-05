<?php 
echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    
    @foreach($posts as $post)
        <url>
            <loc>https://laraget.com/{{ $post->district }}/{{ $post->sub_district }}/{{ $post->vtc }}</loc>
        </url>
    @endforeach
</urlset>