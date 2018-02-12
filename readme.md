## Simple Gag Server

- Just a very simple server providing some dummy posts
- Sample API format
- Pagination `/{page_num}`
- Will randomly produce 404 error

## Setup
1. Clone this repository
2. Execute `php composer.phar install`
3. You may be asked to setup mcrypt on the machine, follow these steps:

   i. `brew install mcrypt`

   ii. `brew install homebrew/php/php56-mcrypt` (The number depends on the PHP version that the machine is running, try running php -v to get the version)

4. Execute `./start.sh` to run 
5. Go to http://localhost:8000/ and you should see the result


## Sample API format

```
{
    "meta": {
        "code": 200
    },
    "data": {
        "gags": [
            {
                "_id": "11",
                "height": 1024,
                "width": 683,
                "nsfw": "0",
                "title": "250 pounds of silly putty",
                "type": "Photo",
                "url": "http://stg-img-9gag-fun.9cache.com/photo/azbgoQb_700b.jpg"
            },
            {
                "_id": "12",
                "height": 450,
                "width": 600,
                "nsfw": "0",
                "title": "Pretty awesome cloud formation at Mt. Breckenridge, Colorado",
                "type": "Photo",
                "url": "http://stg-img-9gag-fun.9cache.com/photo/a2Nz9Kd_700b.jpg"
            },
            {
                "_id": "13",
                "height": 845,
                "width": 634,
                "nsfw": "0",
                "title": "Guy at coffee shop came in, drank a coffee, drew this and left",
                "type": "Photo",
                "url": "http://stg-img-9gag-fun.9cache.com/photo/amXNO66_700b.jpg"
            },
            {
                "_id": "14",
                "height": 429,
                "width": 700,
                "nsfw": "0",
                "title": "The Bison committee would like to have a word with you...",
                "type": "Photo",
                "url": "http://stg-img-9gag-fun.9cache.com/photo/a9db456_700b.jpg"
                
            },
            {
                "_id": "15",
                "height": 464,
                "width": 700,
                "nsfw": "0",
                "title": "Modern Hotel in Singapore",
                "type": "Photo",
                "url": "http://stg-img-9gag-fun.9cache.com/photo/azbgvKx_700b.jpg"
            },
            {
                "_id": "16",
                "height": 933,
                "width": 700,
                "nsfw": "0",
                "title": "My Mom saved the vest I wore on my 1st Birthday 41 years ago... My Son turned 1 on Friday!",
                "type": "Photo",
                "url": "http://stg-img-9gag-fun.9cache.com/photo/a8WLv01_700b.jpg"
            },
            {
                "_id": "17",
                "height": 480,
                "width": 640,
                "nsfw": "0",
                "title": "This landslide on a Washington State highway will likely take weeks to clear.",
                "type": "Photo",
                "url": "http://stg-img-9gag-fun.9cache.com/photo/aVOz9Kw_700b.jpg"
            },
            {
                "_id": "18",
                "height": 800,
                "width": 600,
                "nsfw": "0",
                "title": "This Hotels Pet Policy",
                "type": "Photo",
                "url": "http://stg-img-9gag-fun.9cache.com/photo/adN0WQ9_700b.jpg"
            },
            {
                "_id": "19",
                "height": 447,
                "width": 700,
                "nsfw": "0",
                "title": "A young Jane Goodall",
                "type": "Photo",
                "url": "http://stg-img-9gag-fun.9cache.com/photo/a1Av80b_700b.jpg"
            },
            {
                "_id": "20",
                "height": 393,
                "width": 700,
                "nsfw": "0",
                "title": "Trout jumped and froze to wall in -22 degrees in decorah, IA 2014.",
                "type": "Photo",
                "url": "http://stg-img-9gag-fun.9cache.com/photo/awr091x_700b.jpg"
            }
        ],
        "has_next": true,
        "next_page": "2"
    }
}
```

## Error format
```
{
    "meta" : {
        "code": 404
    }
}
```
