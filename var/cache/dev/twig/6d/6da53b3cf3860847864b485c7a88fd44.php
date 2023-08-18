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

/* user/base.html.twig */
class __TwigTemplate_5d3d57bbd7de5e24ea84817640408491 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <script src=\"https://cdn.tailwindcss.com\"></script>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 189
        echo "    </head>
    <body>
        ";
        // line 191
        $this->displayBlock('body', $context, $blocks);
        // line 238
        echo "    </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
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

    // line 46
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "            <script src=\"https://code.jquery.com/jquery-3.7.0.js\" integrity=\"sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=\" crossorigin=\"anonymous\"></script>
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


                        //console.log(movies)


                    });
                }
                \$('#searchbar').on(\"keyup\",function() {
                    search();

                });
                function render(movies){
                    var movieInf= []
                    var i;

                    var elements= [];
                    getgenres(movies, function(generes) {
                        //console.log(generes)

                        movies.map(function(movie) {
                            console.log({movie});
                            let generesXPelicula = [];
                            generes.map(function(genere) {
                               movie.genre_ids.map(function(gn) {
                                   if(gn === genere.id) {
                                       console.log({gn});
                                       generesXPelicula.push(genere.name);
                                   }
                               });
                            });

                            var element = `
                                    <tr class=\"bg-gray-800\">
                                         <td class=\"p-3\">
                                            <img class=\"rounded-full h-12 w-12 object-cover\"
                                                src=\"https://image.tmdb.org/t/p/w500\${movie.poster_path}\"
                                                alt=\"unsplash image\">
                                        </td>
                                        <td class=\"p-3\" ><a href=\"/movie/\${movie.id}\">
                                            \${movie.original_title}</a></td>
                                        <td class=\"p-3\">\${generesXPelicula.join(', ')}</td>
                                        <td class=\"p-3\">\${movie.release_date}</td>
                                    </tr>`
                            movieInf.push(element);
                        });

                        \$('.query').empty().append(movieInf.join(''));
                    });
                }

                function search(){
                    var moviesearch=[];





                    var input;
                    input = \$(\"#searchbar\").val();
                    if (input.length==0){
                        render(movies)
                    }
                    else{
                        movies.map(function (movie){
                            if (movie.original_title==input){
                                moviesearch.push(movie);

                            }


                        })
                        render(moviesearch)

                    }


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









                \$( document ).ready(function() {
                    getdata()




                });



            </script>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 191
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 192
        echo "            <nav class=\"w-full py-4 bg-blue-800 shadow \" >



                    <ul class=\"flex items-center justify-between font-bold text-sm text-white uppercase no-underline\">
                        <li><a class=\"hover:text-gray-200 hover:underline px-4\" href=\"/homepage\">Homepage</a></li>
                        <li> <form class=\" flex  justify-center bg-gray-900\">
                                <label for=\"default-search\" class=\"mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white\">Search</label>
                                <div class=\"relative\">
                                    <div class=\"absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none\">
                                        <svg class=\"w-4 h-4 text-gray-500 dark:text-gray-400\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 20 20\">
                                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z\"/>
                                        </svg>
                                    </div>
                                    <input type=\"search\" id=\"searchbar\" class=\"block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\" placeholder=\"...\" required>
                                </div>
                            </form>
                        </li>
                        <li><a class=\"hover:text-gray-200 hover:underline px-4\" href=\"/login\">Sign out</a></li>


                    </ul>

            </nav>

            <div class=\"flex  justify-center min-h-screen bg-gray-900\">
                <div class=\"col-span-12\">
                    <div class=\"overflow-auto lg:overflow-visible \">
                        <table class=\"table text-gray-400 border-separate space-y-6 text-sm\">
                            <thead class=\"bg-gray-800 text-gray-500\">
                            <tr>
                                <th class=\"p-3 text-left\">Poster</th>
                                <th class=\"p-3 text-left\">Title</th>
                                <th class=\"p-3 text-left\">Genres</th>
                                <th class=\"p-3 text-left\">Year</th>
                            </tr>
                            </thead>
                            <tbody class=\"query\" id=\"myUL\">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  302 => 192,  295 => 191,  147 => 47,  140 => 46,  98 => 9,  91 => 8,  78 => 5,  69 => 238,  67 => 191,  63 => 189,  61 => 46,  58 => 45,  56 => 8,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
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

        {% block javascripts %}
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


                        //console.log(movies)


                    });
                }
                \$('#searchbar').on(\"keyup\",function() {
                    search();

                });
                function render(movies){
                    var movieInf= []
                    var i;

                    var elements= [];
                    getgenres(movies, function(generes) {
                        //console.log(generes)

                        movies.map(function(movie) {
                            console.log({movie});
                            let generesXPelicula = [];
                            generes.map(function(genere) {
                               movie.genre_ids.map(function(gn) {
                                   if(gn === genere.id) {
                                       console.log({gn});
                                       generesXPelicula.push(genere.name);
                                   }
                               });
                            });

                            var element = `
                                    <tr class=\"bg-gray-800\">
                                         <td class=\"p-3\">
                                            <img class=\"rounded-full h-12 w-12 object-cover\"
                                                src=\"https://image.tmdb.org/t/p/w500\${movie.poster_path}\"
                                                alt=\"unsplash image\">
                                        </td>
                                        <td class=\"p-3\" ><a href=\"/movie/\${movie.id}\">
                                            \${movie.original_title}</a></td>
                                        <td class=\"p-3\">\${generesXPelicula.join(', ')}</td>
                                        <td class=\"p-3\">\${movie.release_date}</td>
                                    </tr>`
                            movieInf.push(element);
                        });

                        \$('.query').empty().append(movieInf.join(''));
                    });
                }

                function search(){
                    var moviesearch=[];





                    var input;
                    input = \$(\"#searchbar\").val();
                    if (input.length==0){
                        render(movies)
                    }
                    else{
                        movies.map(function (movie){
                            if (movie.original_title==input){
                                moviesearch.push(movie);

                            }


                        })
                        render(moviesearch)

                    }


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









                \$( document ).ready(function() {
                    getdata()




                });



            </script>

        {% endblock %}
    </head>
    <body>
        {% block body %}
            <nav class=\"w-full py-4 bg-blue-800 shadow \" >



                    <ul class=\"flex items-center justify-between font-bold text-sm text-white uppercase no-underline\">
                        <li><a class=\"hover:text-gray-200 hover:underline px-4\" href=\"/homepage\">Homepage</a></li>
                        <li> <form class=\" flex  justify-center bg-gray-900\">
                                <label for=\"default-search\" class=\"mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white\">Search</label>
                                <div class=\"relative\">
                                    <div class=\"absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none\">
                                        <svg class=\"w-4 h-4 text-gray-500 dark:text-gray-400\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 20 20\">
                                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z\"/>
                                        </svg>
                                    </div>
                                    <input type=\"search\" id=\"searchbar\" class=\"block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\" placeholder=\"...\" required>
                                </div>
                            </form>
                        </li>
                        <li><a class=\"hover:text-gray-200 hover:underline px-4\" href=\"/login\">Sign out</a></li>


                    </ul>

            </nav>

            <div class=\"flex  justify-center min-h-screen bg-gray-900\">
                <div class=\"col-span-12\">
                    <div class=\"overflow-auto lg:overflow-visible \">
                        <table class=\"table text-gray-400 border-separate space-y-6 text-sm\">
                            <thead class=\"bg-gray-800 text-gray-500\">
                            <tr>
                                <th class=\"p-3 text-left\">Poster</th>
                                <th class=\"p-3 text-left\">Title</th>
                                <th class=\"p-3 text-left\">Genres</th>
                                <th class=\"p-3 text-left\">Year</th>
                            </tr>
                            </thead>
                            <tbody class=\"query\" id=\"myUL\">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        {% endblock %}
    </body>
</html>
", "user/base.html.twig", "/home/peyro/practicaSym/movieApp/templates/user/base.html.twig");
    }
}
