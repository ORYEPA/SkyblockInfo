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

/* user/movieinfo.html.twig */
class __TwigTemplate_248f42125e16535dc0f68cd242555963 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("user/header.html.twig", "user/movieinfo.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."user/header.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'title' => [$this, 'block_title'],
                'header' => [$this, 'block_header'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/movieinfo.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <script src=\"https://cdn.tailwindcss.com\"></script>
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
    </head>
    <body>
        ";
        // line 35
        $this->displayBlock('header', $context, $blocks);
        // line 38
        echo "
        <div class=\"w-full h-full flex align-center bg-black text-white\">
            <div class=\"w-12/12 md:w-4/12\">
                <div class=\"w-full md:w-5/6 p-4 rounded\">
                    <img id=\"cardPoster\" src=\"\" alt=\"\" class=\"w-full h-full rounded\">
                </div>
            </div>
            <div class=\"w-12/12 md:w-8/12 flex\" style=\"flex-direction: column;\">
                <h2 id=\"cardTitle\" class=\"font-bold\"
                    style=\"font-size: 53px; margin: 0 0 30px 0;\"></h2>
                <p id=\"cardReview\" class=\"text-xl mb-4\"></p>
                <div class=\"w-full mb-4\">
                    <span id=\"cardGenres\" class=\"text-lg text-gray-400\"></span>
                </div>
            </div>

        </div>
        <div class=\"flex  justify-center min-h-screen bg-gray-900\">
                <div class=\"col-span-12\">
                    <div class=\"overflow-auto lg:overflow-visible \">

                        <h1 class=\"my-4 text-3xl md:text-5xl text-white opacity-75 font-bold
                            leading-tight text-center md:text-center\">
                            Comments:</h1>
                        <div class=\" grid grid-cols-2 gap-4\">
                            <textarea id=\"freeform\" name=\"freeform\" rows=\"4\" cols=\"50\">
                            Enter text here...
                            </textarea>
                            <ul id=\"commentList\">
                            <!-- ... -->
                            </ul>
                        </div>


                        <h1 class=\"my-4 text-3xl md:text-5xl text-white opacity-75 font-bold leading-tight text-center md:text-center\">
                            Recommendations</h1>
                        <div class=\"recquery grid grid-cols-7 gap-4\">


                        </div>
                    </div>
                </div>
            </div>

        <script src=\"https://code.jquery.com/jquery-3.7.0.js\" integrity=\"sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=\" crossorigin=\"anonymous\"></script>
        <script>
            let movies=[];

            function getdata(){
                const settings = {
                    async: true,
                    crossDomain: true,
                    url: 'https://api.themoviedb.org/3/movie/";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["movieId"]) || array_key_exists("movieId", $context) ? $context["movieId"] : (function () { throw new RuntimeError('Variable "movieId" does not exist.', 90, $this->source); })()), "html", null, true);
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
                let gen=movies.genres
                let generesXPelicula = [];

                gen.map(function (idmov){
                    generesXPelicula.push(idmov.name);
                });

                console.log({movies});
                \$(\"#cardPoster\").attr(\"src\", `https://image.tmdb.org/t/p/w500\${movies.poster_path}`);
                \$(\"#cardTitle\").text(movies.original_title)
                \$(\"#cardReview\").text(movies.overview)
                \$(\"#cardGenres\").text(generesXPelicula.join(\" | \"))


            }

            function getRecom(){
                const settings = {
                    async: true,
                    crossDomain: true,
                    url: 'https://api.themoviedb.org/3/movie/";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["movieId"]) || array_key_exists("movieId", $context) ? $context["movieId"] : (function () { throw new RuntimeError('Variable "movieId" does not exist.', 126, $this->source); })()), "html", null, true);
        echo "/recommendations?language=en-US&page=1',
                    method: 'GET',
                    headers: {
                        accept: 'application/json',
                        Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkMTlmN2Q3MmYzOGQ2ZjIzNDEzZTVjODRjZmNmYTMwNSIsInN1YiI6IjY0ZGJhZGM5Yjc3ZDRiMTE0MjVkZmEwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.OE2bMBkUtaosNS2qL0Sik6tci6W5dGw3AtQFcpH-Elg'
                    }
                };

                \$.ajax(settings).done(function (response) {
                    let recmovies = response.results;
                    console.log({recmovies});
                    renderrec(recmovies)
                });
            }

            function renderrec(recmovies){
                var movieInf= []
                var i;
                var k=recmovies;
                let element;

                for (i = 0; i < recmovies.length; ++i) {
                    element = `
                        <div class=\"\">
                            <a href=\"/movie/\${k[i].id}\">
\t\t\t\t\t\t\t\t<img class=\"\" src=\"https://image.tmdb.org/t/p/w500\${k[i].poster_path}\" >
                                <h1 class=\"p-3 text-white opacity-75 font-bold leading-tight
                                    text-center md:text-center\" >
                                    \${k[i].original_title}
                                </h1>
                            </a>
                        </div>`
                    movieInf.push(element);
                }
                \$('.recquery').empty().append(movieInf.join(''));
            }

            \$( document ).ready(function() {
                getdata();
                getRecom();
            });
        </script>
    </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Movie";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 35
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 36
        echo "            ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/movieinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 36,  252 => 35,  239 => 7,  187 => 126,  148 => 90,  94 => 38,  92 => 35,  61 => 7,  54 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%use \"user/header.html.twig\" %}

<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Movie{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <script src=\"https://cdn.tailwindcss.com\"></script>
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
    </head>
    <body>
        {% block header %}
            {{ parent() }}
        {% endblock %}

        <div class=\"w-full h-full flex align-center bg-black text-white\">
            <div class=\"w-12/12 md:w-4/12\">
                <div class=\"w-full md:w-5/6 p-4 rounded\">
                    <img id=\"cardPoster\" src=\"\" alt=\"\" class=\"w-full h-full rounded\">
                </div>
            </div>
            <div class=\"w-12/12 md:w-8/12 flex\" style=\"flex-direction: column;\">
                <h2 id=\"cardTitle\" class=\"font-bold\"
                    style=\"font-size: 53px; margin: 0 0 30px 0;\"></h2>
                <p id=\"cardReview\" class=\"text-xl mb-4\"></p>
                <div class=\"w-full mb-4\">
                    <span id=\"cardGenres\" class=\"text-lg text-gray-400\"></span>
                </div>
            </div>

        </div>
        <div class=\"flex  justify-center min-h-screen bg-gray-900\">
                <div class=\"col-span-12\">
                    <div class=\"overflow-auto lg:overflow-visible \">

                        <h1 class=\"my-4 text-3xl md:text-5xl text-white opacity-75 font-bold
                            leading-tight text-center md:text-center\">
                            Comments:</h1>
                        <div class=\" grid grid-cols-2 gap-4\">
                            <textarea id=\"freeform\" name=\"freeform\" rows=\"4\" cols=\"50\">
                            Enter text here...
                            </textarea>
                            <ul id=\"commentList\">
                            <!-- ... -->
                            </ul>
                        </div>


                        <h1 class=\"my-4 text-3xl md:text-5xl text-white opacity-75 font-bold leading-tight text-center md:text-center\">
                            Recommendations</h1>
                        <div class=\"recquery grid grid-cols-7 gap-4\">


                        </div>
                    </div>
                </div>
            </div>

        <script src=\"https://code.jquery.com/jquery-3.7.0.js\" integrity=\"sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=\" crossorigin=\"anonymous\"></script>
        <script>
            let movies=[];

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
                let gen=movies.genres
                let generesXPelicula = [];

                gen.map(function (idmov){
                    generesXPelicula.push(idmov.name);
                });

                console.log({movies});
                \$(\"#cardPoster\").attr(\"src\", `https://image.tmdb.org/t/p/w500\${movies.poster_path}`);
                \$(\"#cardTitle\").text(movies.original_title)
                \$(\"#cardReview\").text(movies.overview)
                \$(\"#cardGenres\").text(generesXPelicula.join(\" | \"))


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
                    let recmovies = response.results;
                    console.log({recmovies});
                    renderrec(recmovies)
                });
            }

            function renderrec(recmovies){
                var movieInf= []
                var i;
                var k=recmovies;
                let element;

                for (i = 0; i < recmovies.length; ++i) {
                    element = `
                        <div class=\"\">
                            <a href=\"/movie/\${k[i].id}\">
\t\t\t\t\t\t\t\t<img class=\"\" src=\"https://image.tmdb.org/t/p/w500\${k[i].poster_path}\" >
                                <h1 class=\"p-3 text-white opacity-75 font-bold leading-tight
                                    text-center md:text-center\" >
                                    \${k[i].original_title}
                                </h1>
                            </a>
                        </div>`
                    movieInf.push(element);
                }
                \$('.recquery').empty().append(movieInf.join(''));
            }

            \$( document ).ready(function() {
                getdata();
                getRecom();
            });
        </script>
    </body>
</html>
", "user/movieinfo.html.twig", "/home/peyro/practicaSym/movieApp/templates/user/movieinfo.html.twig");
    }
}
