Provides basic WebP support detection based on browser headers

By default, the extension is applied to SiteTree, meaning that any page class which extends this should be able to use detection in a template:

```
<img alt="Someimage" src="
 <% if $WebPSupport %>
   $MyImage.ScaleWidth(250).Format('webp').Link 
 <% else %>
   $MyImage.ScaleWidth(250).Link
 <% end_if %>
 ">
```

(Example shows the generation of a WebP image using the Image formatter module here: https://github.com/tractorcow/silverstripe-image-formatter)