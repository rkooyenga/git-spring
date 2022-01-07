# git-spring

A simple utility to handle GitHub raw URLs. In the spirit of rawgit or statspring.

Use is straightforward:

``http://gitspring.app.raykooyenga.com/?type=js&link=[link to raw javascript url on github]`` 

You can leave off the *type* argument if you wish and the service will determine the filetype by the file's name. Or you can use it force a mix and match such as read a js file as html or an html file as css. Why? Idk. Just because. 

``http://gitspring.app.raykooyenga.com/?link=[link to raw javascript url]``

Common use case is as above, to link to a javascript or css file here to use inside your page. However another useful thing it does is serve html. Meaning you can append the ``gitspring.app.raykooyenga.com`` with the link to say an html file in a Gist, and it will serve the Gist like it was being hosted on a domain. Pretty useful.

Valid file types handled are:
- javascript
- css
- rss
- xml
- json
- html

Alternate url: ``gitspring.herokuapp.com``

Written in PHP.

Made by [Ray kooyenga](http://rkooyenga.github.io) in 2015

Served by Heroku and [raykooyenga.com](raykooyenga.com)
