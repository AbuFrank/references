## Change urls in database from old to new
### Common errors: 

  1. wp_options/wp_posts/etc doesn't exist --> Make sure the prefixes match (wp_...)

```sql
UPDATE wp_options SET option_value = replace(option_value, 'http://olddomain.com', 'http://newdomain.com') WHERE option_name = 'home' OR option_name = 'siteurl';

UPDATE wp_posts SET guid = replace(guid, 'http://olddomain.com','http://newdomain.com');

UPDATE wp_posts SET post_content = replace(post_content, 'http://olddomain.com', 'http://newdomain.com');

UPDATE wp_postmeta SET meta_value = replace(meta_value, 'http://olddomain.com', 'http://newdomain.com');
```
