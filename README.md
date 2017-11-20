#### 部署服务端：

下载代码上传至你的域名根目录，把解压出来的文件夹改名为 hitokoto 。

然后访问 https://你的域名/hitokoto/ 即可看见效果。  
示例：https://example.com/hitokoto/


#### 调用服务端：

**PHP调用方法：**  
添加如下代码到页面头部：
```php
<?php $hitokoto = file_get_contents('https://example.com/hitokoto/'); ?>
```

注意：  
需要把代码中的URL地址替换为你自己的URL。

然后在需要显示“一言”的标签，插入如下代码：
```php
<?php echo $hitokoto; ?>
```


**JS调用方法：**  
添加如下代码到页面底部：
```java
$.post("https://example.com/hitokoto/", function(hitokoto) {
    $(".content").html(hitokoto);
});
```

把代码第二行的 content 标签改为你页面需要输出“一言”文字的标签即可。

注意：  
需要把代码中的URL地址替换为你自己的URL。
JS 调用需要 jquery.min.js ，一般主题都有，无需再引用。

调用示例请看 demo.php 。
