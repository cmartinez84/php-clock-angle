
<?php
 require_once __DIR__."/../vendor/autoload.php";
 require_once __DIR__."/../src/Clock.php";

 date_default_timezone_set('America/Los_Angeles');

 $app = new Silex\Application();

 $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
  ));

 $app->get("/", function() use ($app){
   return $app['twig']->render('home.html.twig');
 });

 $app->post("/results", function() use ($app){
   $newClock = new Clock;
   $result = $newClock->getDegrees($_POST['hour'], $_POST['minute']);
   $newClock->getDisplayDegrees($_POST['hour'], $_POST['minute']);
   return $app['twig']->render('results.html.twig', array('result'=>$result, 'newClock' => $newClock));
 });

 return $app;
 ?>
