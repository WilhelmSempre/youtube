# YOUTUBE

Little library to get movie information from youtube link. Thanks to this library
you can get video parameters to display given url in video tag or to get information for display on the page.
All without youtube authentication!

###Instalation

``composer require wilhelmsempre/youtube``

Enjoy!

### Example

```php
    use WilhelmSempre\Youtube\YouTube;

    $youtube = new YouTube();
    $information = $youtube->processVideo('https://www.youtube.com/watch?v=xeyUAVRZoVk');
    var_dump($information);
```

### Result

```
array(1) {
  ["videos"]=>
  array(3) {
    ["info"]=>
    array(13) {
      ["title"]=>
      string(35) "Cechy mężczyzny wysokiej jakości"
      ["author_name"]=>
      string(26) "Nie wiem, ale się dowiem!"
      ["author_url"]=>
      string(46) "https://www.youtube.com/c/Niewiemalesiędowiem"
      ["type"]=>
      string(5) "video"
      ["height"]=>
      int(113)
      ["width"]=>
      int(200)
      ["version"]=>
      string(3) "1.0"
      ["provider_name"]=>
      string(7) "YouTube"
      ["provider_url"]=>
      string(24) "https://www.youtube.com/"
      ["thumbnail_height"]=>
      int(360)
      ["thumbnail_width"]=>
      int(480)
      ["thumbnail_url"]=>
      string(48) "https://i.ytimg.com/vi/xeyUAVRZoVk/hqdefault.jpg"
      ["html"]=>
      string(234) "<iframe width="200" height="113" src="https://www.youtube.com/embed/xeyUAVRZoVk?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>"
    }
    ["code"]=>
    string(11) "xeyUAVRZoVk"
    ["embed"]=>
    string(64) "https://www.youtube.com/embed/xeyUAVRZoVk?modestbranding=1&rel=0"
  }
}
```