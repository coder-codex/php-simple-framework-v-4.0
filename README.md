PHP `simple` framework V 4.0

developer : Flavius Pogacian

facebook : https://www.facebook.com/flavius.pogacian

date : 2 Dec 2018

code developed for the `Coder Codex` Project

email : office@codercodex.ro

This repo contains the source code needed to develop the `simple` framework.

This is the 4.0 version of the `simple` framework.

Updates from  V 3.0 to V 4.0 :

Templating is now available.

Data can now be transferred from the `action` to the `view`, and further more, from the `view` to the `layout`.

The information gets transferred from the `view` to the `layout` thru the `render` method.

Inspect the `DefaultController` within the `backend` alias.

Also, inspect the `render` method.

The source code for the `render` method can be found by accessing `vendor/framework/controllers/Controller.php`.

In order to test the enhancements, make sure that your URL looks like:

`http://localhost/php-simple-framework-v-4.0/backend/web/`

The above url calls the `index` action within the `DefaultController`.

The `DefaultController` uses the `main` layout.

The `main` layout also uses some `css` properties.

In order to enhance the app and to change the layout, take a look at the `custom` action within the `DefaultController`.
 
The layout has been changed to `default_controller_action_custom`.

Clone the repo, study the source code, investigate the flow, learn the logic behind the code.

Enjoy :)