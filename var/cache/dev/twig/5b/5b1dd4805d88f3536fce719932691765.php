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

/* user/favorites.html.twig */
class __TwigTemplate_12a060835e4c4fd8ffd02f06135c06c4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("user/header.html.twig", "user/favorites.html.twig", 1);
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
                'javascripts' => [$this, 'block_javascripts'],
                'header' => [$this, 'block_header'],
                'body' => [$this, 'block_body'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/favorites.html.twig"));

        // line 2
        echo "

<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <script src=\"https://cdn.tailwindcss.com\"></script>
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
        ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 135
        echo "    </head>
    <body>
        ";
        // line 137
        $this->displayBlock('header', $context, $blocks);
        // line 140
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 183
        echo "    </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            <script src=\"https://code.jquery.com/jquery-3.7.0.js\" integrity=\"sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=\" crossorigin=\"anonymous\"></script>
            <script>
                var movies=[];

                function getdata(){
                    const settings = {
                        async: true,
                        crossDomain: true,
                        url: 'https://api.themoviedb.org/3/movie/";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["movieId"]) || array_key_exists("movieId", $context) ? $context["movieId"] : (function () { throw new RuntimeError('Variable "movieId" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "?language=en-US',
                        method: 'GET',
                        headers: {
                            accept: 'application/json',
                            Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkMTlmN2Q3MmYzOGQ2ZjIzNDEzZTVjODRjZmNmYTMwNSIsInN1YiI6IjY0ZGJhZGM5Yjc3ZDRiMTE0MjVkZmEwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.OE2bMBkUtaosNS2qL0Sik6tci6W5dGw3AtQFcpH-Elg'
                        }
                    };

                    \$.ajax(settings).done(function (response) {
                        movies=response;

                        render(movies)
                    });
                }


                function render(movies){
                    var movieInf= []
                    var impgen=[]
                    var gen=movies.genres
                    let generesXPelicula = [];
                    gen.map(function (idmov){
                        generesXPelicula.push(idmov.name);


                    })

                        var element = `<li class=\"text-white opacity-75 font-bold leading-tight text-center md:text-left\">\${generesXPelicula}</li>`

                        impgen.push(element);

                    \$('.list-disc').append(impgen.join(''));



                    var element = `<tr class=\"bg-gray-800\">
                         <td class=\"p-3\">
                            <img class=\"rounded-full h-12 w-12   object-cover\" src=\"https://image.tmdb.org/t/p/w500\${movies.poster_path}\" alt=\"unsplash image\">
                        </td>
                        <td class=\"p-3\">\${movies.original_title}</td>
                        <td class=\"p-3\">\${movies.overview}</td>
                        <td class=\"p-3\">\${movies.release_date}</td>
                    </tr>
                    `
                    movieInf.push(element);

                    \$('.query').empty().append(movieInf.join(''));
                }

                function getRecom(){
                    const settings = {
                        async: true,
                        crossDomain: true,
                        url: 'https://api.themoviedb.org/3/movie/";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["movieId"]) || array_key_exists("movieId", $context) ? $context["movieId"] : (function () { throw new RuntimeError('Variable "movieId" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "/recommendations?language=en-US&page=1',
                        method: 'GET',
                        headers: {
                            accept: 'application/json',
                            Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkMTlmN2Q3MmYzOGQ2ZjIzNDEzZTVjODRjZmNmYTMwNSIsInN1YiI6IjY0ZGJhZGM5Yjc3ZDRiMTE0MjVkZmEwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.OE2bMBkUtaosNS2qL0Sik6tci6W5dGw3AtQFcpH-Elg'
                        }
                    };

                    \$.ajax(settings).done(function (response) {
                        recmovies=response.results;
                        renderrec(recmovies)
                    });
                }
                function renderrec(recmovies){
                    var movieInf= []
                    var i;
                    var k=recmovies;
                    var elements= []


                    for (i = 0; i < recmovies.length; ++i) {
                        var element = `<div class=\"\"><a href=\"/movie/\${k[i].id}\">

\t\t\t\t\t\t\t\t<img class=\"\" src=\"https://image.tmdb.org/t/p/w500\${k[i].poster_path}\" >

                            <h1 class=\"p-3 text-white opacity-75 font-bold leading-tight text-center md:text-center\" >\${k[i].original_title}</h1>
                            </a>
                        </div>`
                        movieInf.push(element);
                    }
                    \$('.recquery').empty().append(movieInf.join(''));
                }














                \$( document ).ready(function() {
                    getdata()
                    getRecom()


                });



            </script>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 137
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 138
        echo "            ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "
            <div class=\"flex  justify-center min-h-screen bg-gray-900\">
                <div class=\"col-span-12\">
                    <div class=\"overflow-auto lg:overflow-visible \">

                        <h1 class=\"my-4 text-3xl md:text-5xl text-white opacity-75 font-bold leading-tight text-center md:text-center\">
                            Favorites</h1>
                        <div class=\"recquery grid grid-cols-7 gap-4\">


                        </div>
                    </div>
                </div>
            </div>
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




        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/favorites.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  285 => 141,  278 => 140,  268 => 138,  261 => 137,  196 => 77,  140 => 24,  130 => 16,  123 => 15,  115 => 12,  108 => 11,  96 => 8,  87 => 183,  84 => 140,  82 => 137,  78 => 135,  76 => 15,  73 => 14,  71 => 11,  65 => 8,  57 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%use \"user/header.html.twig\" %}


<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <script src=\"https://cdn.tailwindcss.com\"></script>
        {% block stylesheets %}

        {% endblock %}

        {% block javascripts %}
            <script src=\"https://code.jquery.com/jquery-3.7.0.js\" integrity=\"sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=\" crossorigin=\"anonymous\"></script>
            <script>
                var movies=[];

                function getdata(){
                    const settings = {
                        async: true,
                        crossDomain: true,
                        url: 'https://api.themoviedb.org/3/movie/{{ movieId }}?language=en-US',
                        method: 'GET',
                        headers: {
                            accept: 'application/json',
                            Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkMTlmN2Q3MmYzOGQ2ZjIzNDEzZTVjODRjZmNmYTMwNSIsInN1YiI6IjY0ZGJhZGM5Yjc3ZDRiMTE0MjVkZmEwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.OE2bMBkUtaosNS2qL0Sik6tci6W5dGw3AtQFcpH-Elg'
                        }
                    };

                    \$.ajax(settings).done(function (response) {
                        movies=response;

                        render(movies)
                    });
                }


                function render(movies){
                    var movieInf= []
                    var impgen=[]
                    var gen=movies.genres
                    let generesXPelicula = [];
                    gen.map(function (idmov){
                        generesXPelicula.push(idmov.name);


                    })

                        var element = `<li class=\"text-white opacity-75 font-bold leading-tight text-center md:text-left\">\${generesXPelicula}</li>`

                        impgen.push(element);

                    \$('.list-disc').append(impgen.join(''));



                    var element = `<tr class=\"bg-gray-800\">
                         <td class=\"p-3\">
                            <img class=\"rounded-full h-12 w-12   object-cover\" src=\"https://image.tmdb.org/t/p/w500\${movies.poster_path}\" alt=\"unsplash image\">
                        </td>
                        <td class=\"p-3\">\${movies.original_title}</td>
                        <td class=\"p-3\">\${movies.overview}</td>
                        <td class=\"p-3\">\${movies.release_date}</td>
                    </tr>
                    `
                    movieInf.push(element);

                    \$('.query').empty().append(movieInf.join(''));
                }

                function getRecom(){
                    const settings = {
                        async: true,
                        crossDomain: true,
                        url: 'https://api.themoviedb.org/3/movie/{{ movieId }}/recommendations?language=en-US&page=1',
                        method: 'GET',
                        headers: {
                            accept: 'application/json',
                            Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkMTlmN2Q3MmYzOGQ2ZjIzNDEzZTVjODRjZmNmYTMwNSIsInN1YiI6IjY0ZGJhZGM5Yjc3ZDRiMTE0MjVkZmEwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.OE2bMBkUtaosNS2qL0Sik6tci6W5dGw3AtQFcpH-Elg'
                        }
                    };

                    \$.ajax(settings).done(function (response) {
                        recmovies=response.results;
                        renderrec(recmovies)
                    });
                }
                function renderrec(recmovies){
                    var movieInf= []
                    var i;
                    var k=recmovies;
                    var elements= []


                    for (i = 0; i < recmovies.length; ++i) {
                        var element = `<div class=\"\"><a href=\"/movie/\${k[i].id}\">

\t\t\t\t\t\t\t\t<img class=\"\" src=\"https://image.tmdb.org/t/p/w500\${k[i].poster_path}\" >

                            <h1 class=\"p-3 text-white opacity-75 font-bold leading-tight text-center md:text-center\" >\${k[i].original_title}</h1>
                            </a>
                        </div>`
                        movieInf.push(element);
                    }
                    \$('.recquery').empty().append(movieInf.join(''));
                }














                \$( document ).ready(function() {
                    getdata()
                    getRecom()


                });



            </script>

        {% endblock %}
    </head>
    <body>
        {% block header %}
            {{ parent() }}
        {% endblock %}
        {% block body %}

            <div class=\"flex  justify-center min-h-screen bg-gray-900\">
                <div class=\"col-span-12\">
                    <div class=\"overflow-auto lg:overflow-visible \">

                        <h1 class=\"my-4 text-3xl md:text-5xl text-white opacity-75 font-bold leading-tight text-center md:text-center\">
                            Favorites</h1>
                        <div class=\"recquery grid grid-cols-7 gap-4\">


                        </div>
                    </div>
                </div>
            </div>
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
    </body>
</html>
", "user/favorites.html.twig", "/home/peyro/practicaSym/movieApp/templates/user/favorites.html.twig");
    }
}
