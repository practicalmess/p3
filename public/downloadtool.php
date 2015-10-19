<?php
  	header("Content-type: text/plain");
   header("Content-Disposition: attachment; filename=users.json");
   readfile("users.json");
   ?>