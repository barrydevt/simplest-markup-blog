# Simplest Markup Blog

This package is a quick and dirty way to get some kind of structured blog up and running in no time and with minimum configuration.

It simply reads markup from static files and provides some basic filtering and organising methods. 

## Installation

```
composer require barrydevt/simplest-markup-blog
```

## Get Blogs List
```
$allBlogs = Barrydev\SimpleBlog::all();
```

## Get Blog Entry

```
$allBlogs->first()->title;
$allBlogs->first()->excerpt;
$allBlogs->first()->content;
$allBlogs->first()->raw;
$allBlogs->first()->thumbnail;
$allBlogs->first()->created_at;
```
## Blogs

Blog entries are simply flat files stored in the `resources/views/_blog` directory in the
format `timestamp_friendly_url_name.txt`

They chould be structured as follows

```
[
23/11/23 12:05
The Main Title of the Blog
The excerpt on line three or left blank if no excerpt
http://www.images.com/image.jpp[Thumnail and alt text]
]

Markup starts on line 8 and below
```