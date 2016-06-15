=======================================
GroupTracking Drupal WebApp PHP Modules
=======================================
.. image:: https://github.com/biagiobotticelli/Drupal_Php_Modules/blob/master/images/logo.jpg :align: center
Track your friends everywhere!

GroupTracking is an Android application that wants to allow to create group of friends obtained by Facebook
and tracking their position outside building but also INSIDE! By using Beacons!

.. image:: https://github.com/biagiobotticelli/Drupal_Php_Modules/blob/master/images/beacons.png
   :align: center

With GroupTracking you can create a group of friends, define a range in which your friends will be tracked and 
get their position directly on a map. Friends that are out of the range will NOT be tracked!

.. image:: https://github.com/biagiobotticelli/Drupal_Php_Modules/blob/master/images/map.png
   :align: center

How does GroupTracking make tracking?
-------------------------------------
To tracking people, the GroupTracking Android app uses GPS and bluetooth of the smartphone.
An Android Service searches for beacons through the bluetooth:
- **NO** beacon is found: the app uses the last GPS coordinates to get the position;
- A beacon is found: the app uses the coordinates of the nearest beacon to get the postion;

.. image:: https://github.com/FabFari/recipex/blob/master/app/screenshot/arch.png
   :align: center

Why do we insert a Drupal WebApp in the system?
-----------------------------------------------
The Android application gets the data that it needs (such us beacons, latitude and longitude, range, etc.)
by REST calls made to an existent webserver.
In order to communicate with the webserver, we develop the Drupal webapp with the following functions:

- **Get a list of Beacons**
- **Add a Beacon**
- **Delete an existent Beacon**

getBeacons.php
--------------
The first function is to get a list of the beacons that are available in the system.
The php module create an empty page:

.. image:: https://github.com/FabFari/recipex/blob/master/app/screenshot/getBeacon1.png
   :align: center
   
when the button "Get Beacons" is clicked: 

.. image:: https://github.com/FabFari/recipex/blob/master/app/screenshot/getBeacon2.png
   :align: center
   
the module makes a GET request to the REST webserver to obtain the list of the available beacons of the system.

.. image:: https://github.com/FabFari/recipex/blob/master/app/screenshot/getBeacon3.png
   :align: center


   
Additional Informations
---------------------------------
The links to other GitHub sections of the GroupTracking project are:

Webserver: https://github.com/StefanoConoci/SmartTeamTrackingServer

Android Application: https://github.com/draugvar/SmartTeamTracking

You can find personal information about us at:

Biagio Botticelli: https://it.linkedin.com/in/biagio-botticelli-444b87105/en

Stefano Conoci: https://it.linkedin.com/in/stefano-conoci-06501844

Davide Meacci: https://it.linkedin.com/in/davide-meacci-ab065bb7/en

Salvatore Rivieccio: https://it.linkedin.com/in/salvatore-rivieccio-653644b7/en

The project was developed for the course of "Pervasive Systems 2016": http://ichatz.me/index.php/Site/PervasiveSystems2016

held by Prof. Ioannis Chatzigiannakis: http://ichatz.me/index.php

within the Master of Science in Computer Science of University if Rome "La Sapienza". 

Additional informations about the project can be found in the presentation of the project on SlideShare: 

http://www.slideshare.net/BiagioBotticelli/smart-team-tracking-project-group-tracking