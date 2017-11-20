#### Deployment server:

Download the code to the root of your domain name, unzip the folder renamed hitokoto.

And then visit https://your domain/hitokoto/, you can see the effect.  
Example: https://example.com/hitokoto/


#### Call server:

**PHP call method:**  
Add the following code to the head of the page:
```php
<?php $hitokoto = file_get_contents('https://example.com/hitokoto/'); ?>
```

Be careful：
You need to replace the URL address in your code with your own URL.

Then insert the following code in the tag that needs to show "hitokoto":
```php
<?php echo $hitokoto; ?>
```

**JS call method:**  
Add the following code to the footer of the page:
```java
$.post("https://example.com/hitokoto/", function(hitokoto) {
    $(".content").html(hitokoto);
});
```

Change the content tag of the second line of code to your page, and you need to output the tag of "hitokoto" text.

Be careful：
You need to replace the URL address in your code with your own URL.
JS calls require jquery.min.js, with general themes, without re referencing.

For example, see demo.php.
