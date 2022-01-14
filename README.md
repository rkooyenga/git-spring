# git-spring

A simple utility to handle GitHub raw URLs. In the spirit of rawgit or statspring.

Use is straightforward:

 ``https://gitspring.herokuapp.com/?type=js&link=[link to raw javascript url on github]`` 

You can leave off the *type* argument if you wish and the service will determine the filetype by the file's name. Or you can use it force a mix and match such as read a js file as html or an html file as css. Why? Idk. Just because. 

 ``https://gitspring.herokuapp.com/?link=[link to raw javascript url]``

Common use case is as above, to link to a javascript or css file here to use inside your page. However another useful thing it does is serve html. Meaning you can append the:

 ``https://gitspring.herokuapp.com`` 

with the link to say an html file in a Gist, and it will serve the Gist like it was being hosted on a domain. Pretty useful.

Valid file types handled are:
- javascript
- css
- rss
- xml
- json
- html

Written in PHP.

Made by [Ray kooyenga](https://rkooyenga.github.io) in 2015

Served by Heroku and [raykooyenga.com](https://raykooyenga.com)
