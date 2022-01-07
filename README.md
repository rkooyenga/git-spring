# git-spring

A simple utility to handle GitHub raw URLs. In the spirit of rawgit or statspring.

Use is straightforward:
``http://gitspring.app.raykooyenga.com/?type=js&link=[link to raw javascript url on github]`` 
You can leave off the *type* argument if you wish and the service will determine the filetype by the file's name. Or you can use it force a mix and match such as read a js file as html or an html file as css. Why? Idk. Just because. 

Valid file types handled are:
javascript
css
rss
json
html

by [Ray kooyenga](http://rkooyenga.github.io)
Served by heroku and [raykooyenga.com](raykooyenga.com)
