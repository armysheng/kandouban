<?php
require_once("defines.php");
require_once("vendor/autoload.php");

class Global_Var_Twig_Extension extends Twig_Extension{
    public function getGlobals(){
        return array(
            "SITENAME" => SITENAME,
            "SUBNAME" => SUBNAME,
            "TITLE" => TITLE,
            "STATIC_URL_PATH" => STATIC_URL_PATH,
        );
    }

    public function getName() {
        return "global var";
    }
}

function init() {
    date_default_timezone_set("Asia/Shanghai");

    $loader = new Twig_Loader_Filesystem("templates");
    $twigConfig = array(
        "debug" => DEBUG,
        "cache" => "compilation",
    );
    Flight::register("view", "Twig_Environment",
        array($loader, $twigConfig), function($twig) {
            $twig->addExtension(new Global_Var_Twig_Extension());
        });
}

init();

Flight::route("/", function() {
    Flight::redirect("/movie");
    Flight::view()->display("index.html");
});

Flight::route("/doc", function() {
    Flight::view()->display("doc.html");
});

Flight::route("/movie", function() {
    $movie = new Service\Movie();
    $movie->store();
});

Flight::start();