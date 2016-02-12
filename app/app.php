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
        $contactList = $_SESSION['list_of_contacts'];

        return $app['twig']->render('index.html.twig', array('contacts'=>$contactList));

    });

    $app->post("/create_contact", function() use ($app){
        $newContact = new Contact ($_POST['first-name'], $_POST['last-name'], $_POST['phone'], $_POST['street'], $_POST['city'], $_POST['state'], $_POST['zip'], $_POST['email']);
        $newContact->saveContact();

        return $app['twig']->render('create_contact.html.twig', array("newContact"=>$newContact));
    });

    $app->post("/search", function() use ($app){
        $contacts = $_SESSION['list_of_contacts'];
        $search_term = $_POST['search'];
        $search_results = Contact::searchName($contacts, $search_term);

        return $app['twig']->render('search_results.html.twig', array('results'=>$search_results));
    });

    $app->get("/delete", function() use ($app){
        Contact::deleteAll();
        return $app['twig']->render('index.html.twig');

    });

    return $app;
 ?>
