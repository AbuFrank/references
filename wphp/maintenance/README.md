## How to quickly set up a maintenance page

First, create the html landing page:

```html
<!doctype html>
<title>Site Maintenance</title>
<style>
  body { text-align: center; padding: 150px; }
  h1 { font-size: 50px; }
  body { font: 20px Helvetica, sans-serif; color: #333; }
  article { display: block; text-align: left; width: 650px; margin: 0 auto; }
  a { color: #dc8100; text-decoration: none; }
  a:hover { color: #333; text-decoration: none; }
</style>

<article>
    <h1>We&rsquo;ll be back soon!</h1>
    <div>
        <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. We&rsquo;ll be back online shortly!</p>
        <p>&mdash; The Team</p>
    </div>
</article>
```

Then redirect all traffic except for your IP.  
Replace 123.123.123.123 with your own public facing IP  
Replace example.com with the url pointing to the directory root


```
<IfModule mod_rewrite.c> 
RewriteEngine On
RewriteCond %{REMOTE_ADDR} !^123.123.123.123
RewriteCond %{REQUEST_URI} !^/maintenance.html$
RewriteRule ^(.*)$ http://example.com/maintenance.html [L]
</IfModule>
```
