<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* user/homepage.html.twig */
class __TwigTemplate_d1a7271f46b9306fe430467fab2c32fa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("user/header.html.twig", "user/homepage.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."user/header.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'title' => [$this, 'block_title'],
                'stylesheets' => [$this, 'block_stylesheets'],
                'header' => [$this, 'block_header'],
                'javascripts' => [$this, 'block_javascripts'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/homepage.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <script src=\"https://cdn.tailwindcss.com\"></script>

        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "
    </head>
    <body>
    ";
        // line 39
        $this->displayBlock('header', $context, $blocks);
        // line 42
        echo "        <div class=\"query grid grid-cols-5 gap-4 bg-gray-900\">
            <!-- Renderiza peliculas -->
        </div>

        <script src=\"https://code.jquery.com/jquery-3.7.0.js\" integrity=\"sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=\" crossorigin=\"anonymous\"></script>
        <script>
            var movies=[];

            function getdata(){
                const settings = {
                    async: true,
                    crossDomain: true,
                    url: 'https://api.themoviedb.org/3/movie/now_playing?language=en-US&page=1',
                    method: 'GET',
                    headers: {
                        accept: 'application/json',
                        Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkMTlmN2Q3MmYzOGQ2ZjIzNDEzZTVjODRjZmNmYTMwNSIsInN1YiI6IjY0ZGJhZGM5Yjc3ZDRiMTE0MjVkZmEwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.OE2bMBkUtaosNS2qL0Sik6tci6W5dGw3AtQFcpH-Elg'
                    }
                };

                \$.ajax(settings).done(function (response) {

                    movies=response.results;
                    render(movies)



                });
            }

            function render(movies){
                var movieInf= []
                var i;

                var elements= [];
                getgenres(movies, function(generes) {
                    //console.log(generes)

                    movies.map(function(movie) {
                        let generesXPelicula = [];
                        generes.map(function(genere) {

                            movie.genre_ids.map(function(gn) {

                                if(gn === genere.id) {

                                    var element = `
                                     <span class=\"genmovie\" data-value=\"\${genere.id}\">\${genere.name}</span>`
                                    generesXPelicula.push(element);


                                }
                            });
                        });

                        var element = `<div class=\"\">
                            <a href=\"/movie/\${movie.id}\">
\t\t\t\t\t\t\t\t<img class=\"\" src=\"https://image.tmdb.org/t/p/w500\${movie.poster_path}\" >
                                <h1 class=\"mb-2 mt-0 text-xl font-medium leading-tight text-primary text-white \" >\${movie.original_title}
                                </h1>
                            </a>
                            <svg data-movieid=\"\${movie.id} \" class=\"favSelect cursor-pointer fill-grey-500  w-6 h-6\"
                                xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                              <path  stroke-linecap=\"round\" stroke-linejoin=\"round\"
                                d=\"M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z\" />
                            </svg>

                                <p class=\"text-lg cursor-pointer font-normal text-gray-500 lg:text-xl dark:text-gray-400\" >\${generesXPelicula.join(', ')}</p>

                        </div>`
                        movieInf.push(element);
                    });

                    \$('.query').empty().append(movieInf.join(''));
                });
            }

            function getgenres(genres, cb){
                const settings = {
                    async: true,
                    crossDomain: true,
                    url: 'https://api.themoviedb.org/3/genre/movie/list?language=en',
                    method: 'GET',
                    headers: {
                        accept: 'application/json',
                        Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkMTlmN2Q3MmYzOGQ2ZjIzNDEzZTVjODRjZmNmYTMwNSIsInN1YiI6IjY0ZGJhZGM5Yjc3ZDRiMTE0MjVkZmEwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.OE2bMBkUtaosNS2qL0Sik6tci6W5dGw3AtQFcpH-Elg'
                    }

                };

                \$.ajax(settings).done(function (response) {

                    var genred=response.genres;

                    cb(genred)



                });
            }
            function checkFavorites(movieid,action){
                const settings = {

                    url: '/checkfavorite',
                    data:{movieid:movieid,
                        action:action}

                };

                \$.ajax(settings).done(function (response) {

                    console.log(response)



                });
            }
            function hypixelapi(){
                const settings = {

                    url: 'https://api.hypixel.net/player?key=fc145558-2062-48ea-bb6b-22c7e96ae66f&name=ORYEP'
                    
                        

                };

                \$.ajax(settings).done(function (response) {

                    console.log(response)



                });
            }

            \$( document ).ready(function() {
                getdata();
                hypixelapi();


                \$('.query').on(\"click\", \".favSelect\", function() {
                    //\$(this).toggleClass( \"fill-amber-500\" );
                    let movieid=\$(this).attr(\"data-movieid\");
                    // si this tiene la clase fill, quitarsela
                    if (\$(this).hasClass(\"fill-grey-500\")){
                        \$(this).removeClass( \"fill-grey-500\" ).addClass( \"fill-amber-500\");

                        checkFavorites(movieid,\"add\")
                    }
                    else{
                        \$(this).removeClass( \"fill-amber-500\").addClass(  \"fill-grey-500\");
                        checkFavorites(movieid,\"remove\")

                    }



                });

                \$('.query').on(\"click\",\".genmovie\",function(){
                    let event=\$(this).attr(\"data-value\");
                    filtergen(event);




                });


            });
        </script>
        ";
        // line 213
        $this->displayBlock('javascripts', $context, $blocks);
        // line 215
        echo "    </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <style>
                .table {
                    border-spacing: 0 15px;
                }

                i {
                    font-size: 1rem !important;
                }

                .table tr {
                    border-radius: 20px;
                }

                tr td:nth-child(n+5),
                tr th:nth-child(n+5) {
                    border-radius: 0 .625rem .625rem 0;
                }

                tr td:nth-child(1),
                tr th:nth-child(1) {
                    border-radius: .625rem 0 0 .625rem;
                }
            </style>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 39
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 40
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 213
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 214
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/homepage.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  337 => 214,  330 => 213,  320 => 40,  313 => 39,  282 => 11,  275 => 10,  262 => 6,  253 => 215,  251 => 213,  78 => 42,  76 => 39,  71 => 36,  69 => 10,  62 => 6,  56 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%use \"user/header.html.twig\" %}
<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <script src=\"https://cdn.tailwindcss.com\"></script>

        {% block stylesheets %}
            <style>
                .table {
                    border-spacing: 0 15px;
                }

                i {
                    font-size: 1rem !important;
                }

                .table tr {
                    border-radius: 20px;
                }

                tr td:nth-child(n+5),
                tr th:nth-child(n+5) {
                    border-radius: 0 .625rem .625rem 0;
                }

                tr td:nth-child(1),
                tr th:nth-child(1) {
                    border-radius: .625rem 0 0 .625rem;
                }
            </style>

        {% endblock %}

    </head>
    <body>
    {% block header %}
        {{ parent() }}
    {% endblock %}
        <div class=\"query grid grid-cols-5 gap-4 bg-gray-900\">
            <!-- Renderiza peliculas -->
        </div>

        <script src=\"https://code.jquery.com/jquery-3.7.0.js\" integrity=\"sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=\" crossorigin=\"anonymous\"></script>
        <script>
            var movies=[];

            function getdata(){
                const settings = {
                    async: true,
                    crossDomain: true,
                    url: 'https://api.themoviedb.org/3/movie/now_playing?language=en-US&page=1',
                    method: 'GET',
                    headers: {
                        accept: 'application/json',
                        Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkMTlmN2Q3MmYzOGQ2ZjIzNDEzZTVjODRjZmNmYTMwNSIsInN1YiI6IjY0ZGJhZGM5Yjc3ZDRiMTE0MjVkZmEwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.OE2bMBkUtaosNS2qL0Sik6tci6W5dGw3AtQFcpH-Elg'
                    }
                };

                \$.ajax(settings).done(function (response) {

                    movies=response.results;
                    render(movies)



                });
            }

            function render(movies){
                var movieInf= []
                var i;

                var elements= [];
                getgenres(movies, function(generes) {
                    //console.log(generes)

                    movies.map(function(movie) {
                        let generesXPelicula = [];
                        generes.map(function(genere) {

                            movie.genre_ids.map(function(gn) {

                                if(gn === genere.id) {

                                    var element = `
                                     <span class=\"genmovie\" data-value=\"\${genere.id}\">\${genere.name}</span>`
                                    generesXPelicula.push(element);


                                }
                            });
                        });

                        var element = `<div class=\"\">
                            <a href=\"/movie/\${movie.id}\">
\t\t\t\t\t\t\t\t<img class=\"\" src=\"https://image.tmdb.org/t/p/w500\${movie.poster_path}\" >
                                <h1 class=\"mb-2 mt-0 text-xl font-medium leading-tight text-primary text-white \" >\${movie.original_title}
                                </h1>
                            </a>
                            <svg data-movieid=\"\${movie.id} \" class=\"favSelect cursor-pointer fill-grey-500  w-6 h-6\"
                                xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                              <path  stroke-linecap=\"round\" stroke-linejoin=\"round\"
                                d=\"M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z\" />
                            </svg>

                                <p class=\"text-lg cursor-pointer font-normal text-gray-500 lg:text-xl dark:text-gray-400\" >\${generesXPelicula.join(', ')}</p>

                        </div>`
                        movieInf.push(element);
                    });

                    \$('.query').empty().append(movieInf.join(''));
                });
            }

            function getgenres(genres, cb){
                const settings = {
                    async: true,
                    crossDomain: true,
                    url: 'https://api.themoviedb.org/3/genre/movie/list?language=en',
                    method: 'GET',
                    headers: {
                        accept: 'application/json',
                        Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkMTlmN2Q3MmYzOGQ2ZjIzNDEzZTVjODRjZmNmYTMwNSIsInN1YiI6IjY0ZGJhZGM5Yjc3ZDRiMTE0MjVkZmEwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.OE2bMBkUtaosNS2qL0Sik6tci6W5dGw3AtQFcpH-Elg'
                    }

                };

                \$.ajax(settings).done(function (response) {

                    var genred=response.genres;

                    cb(genred)



                });
            }
            function checkFavorites(movieid,action){
                const settings = {

                    url: '/checkfavorite',
                    data:{movieid:movieid,
                        action:action}

                };

                \$.ajax(settings).done(function (response) {

                    console.log(response)



                });
            }
            function hypixelapi(){
                const settings = {

                    url: 'https://api.hypixel.net/player?key=fc145558-2062-48ea-bb6b-22c7e96ae66f&name=ORYEP'
                    
                        

                };

                \$.ajax(settings).done(function (response) {

                    console.log(response)



                });
            }

            \$( document ).ready(function() {
                getdata();
                hypixelapi();


                \$('.query').on(\"click\", \".favSelect\", function() {
                    //\$(this).toggleClass( \"fill-amber-500\" );
                    let movieid=\$(this).attr(\"data-movieid\");
                    // si this tiene la clase fill, quitarsela
                    if (\$(this).hasClass(\"fill-grey-500\")){
                        \$(this).removeClass( \"fill-grey-500\" ).addClass( \"fill-amber-500\");

                        checkFavorites(movieid,\"add\")
                    }
                    else{
                        \$(this).removeClass( \"fill-amber-500\").addClass(  \"fill-grey-500\");
                        checkFavorites(movieid,\"remove\")

                    }



                });

                \$('.query').on(\"click\",\".genmovie\",function(){
                    let event=\$(this).attr(\"data-value\");
                    filtergen(event);




                });


            });
        </script>
        {% block javascripts %}
        {% endblock %}
    </body>
</html>
", "user/homepage.html.twig", "/home/oryep/HSWI/templates/user/homepage.html.twig");
    }
}
