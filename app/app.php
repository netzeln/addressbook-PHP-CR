<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";

    session_start();
    if(empty($_SESSION['list_of_contacts'])){
        $_SESSION['list_of_contacts'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__."/../views"
    ));

    $app->get("/", function() use ($app){

        return $app['twig']->render('index.html.twig');

    });

    $app->post("/create_contact", function() use ($app){
        $newContact = new Contact ($_POST['first-name'], $_POST['last-name'], $_POST['phone'], $_POST['street'], $_POST['city'], $_POST['state'], $_POST['email']);
        $newContact->saveContact();

        return $app['twig']->render('create_contact.html.twig', array("newContact"=>$newContact));
    });

    return $app;
 ?>
