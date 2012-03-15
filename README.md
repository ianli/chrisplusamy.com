Chris and Amy's Wedding Site
============================

This is the web design for Chris and Amy's Wedding Site.

Editing the Site
----------------

The relevant files and folders for editing the site are:

```
_layouts/
  default.php       # The main layout template
  
_pages/             # Contains the pages of the site
  index.html        # Home page
  venue.html        # Venue page
  schedule.html     # Schedule page
  ...
  
css/                # Stylesheets folder
  default.css       # Site stylesheet

img/                # Images folder

js/                 # Javascripts folder
  default.js        # Site Javascript file
```


Publishing the Site
-------------------

1. Download the code.
2. Put the code in a web-visible directory.
3. Make sure that `_site` is globally-writeable:

    ```
    chmod 2777 _site
    ```
4. The web site will only be updated if one of the files in `_pages` is newer than the `_site` folder. To do this, quickly:

    ```
    touch _pages/index.html
    ```

Framework
---------

This web site uses the [YAWL PHP Library](http://github.com/ianli/yawl/) to generate the pages.