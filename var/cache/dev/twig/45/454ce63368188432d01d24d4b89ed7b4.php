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

/* user/header.html.twig */
class __TwigTemplate_e1c372473e2e47631866403ed02d1db3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/header.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        // line 142
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "    <nav class=\"bg-gray-100 border-gray-200 dark:bg-gray-900\">
        <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
            <a href=\"/homepage\" class=\"flex items-center\">
                <span class=\"self-center text-2xl font-semibold whitespace-nowrap dark:text-white\">MovieApp</span>
            </a>
            <div class=\"flex md:order-2\">
                <select   class=\"filtrgens bg-gray-300\">
                    <option selected>Choose a genere</option>

                </select>


                <div class=\"relative hidden md:block\">

                    <div class=\"absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none\">
                        <svg class=\"w-4 h-4 text-gray-500 dark:text-gray-400\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 20 20\">
                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z\"/>
                        </svg>
                        <span class=\"sr-only\">Search icon</span>
                    </div>
                    <input type=\"search\" id=\"searchbar\" class=\"block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\" placeholder=\"Search...\">
                </div>

            </div>
            <div class=\"items-center justify-between hidden w-full md:flex md:w-auto md:order-1\" id=\"navbar-search\">

                <ul class=\"flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700\">
                    <li>
                        <a href=\"/homepage\" class=\"block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500\" aria-current=\"page\">Home</a>
                    </li>
                    <li>
                        <a href=\"/favorites/\${movie.id}\" class=\"block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700\">Favorites</a>
                    </li>
                    <li>
                        <a href=\"/userSettings\" class=\"block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700\">User</a>
                    </li>
                    <li>
                        <a href=\"/login\" class=\"block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700\">Sign out</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

    <script src=\"https://code.jquery.com/jquery-3.7.0.js\" integrity=\"sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=\" crossorigin=\"anonymous\"></script>
    <script>

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
        function filtergen(gid){
            const settings = {
                async: true,
                crossDomain: true,
                url: 'https://api.themoviedb.org/3/discover/movie?' +
                    'include_adult=false&include_video=false&language=en-US&' +
                    'page=1&sort_by=popularity.desc&with_genres='+gid,
                method: 'GET',
                headers: {
                    accept: 'application/json',
                    Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkMTlmN2Q3MmYzOGQ2ZjIzNDEzZTVjODRjZmNmYTMwNSIsInN1YiI6IjY0ZGJhZGM5Yjc3ZDRiMTE0MjVkZmEwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.OE2bMBkUtaosNS2qL0Sik6tci6W5dGw3AtQFcpH-Elg'
                }
            };

            \$.ajax(settings).done(function (response) {
                var gensearch=response.results;
                render(gensearch)

            });

        }

        function getgenresHeader() {
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
                let generesXPelicula = [];
                var genred = response.genres;

                genred.map(function (genere) {


                    var element = `
                        <option value=\"\${genere.id}\">\${genere.name}</option>`
                    generesXPelicula.push(element);
                });

                \$('.filtrgens').append(generesXPelicula.join(''))


            })
        };


        \$(document).ready(function() {
            getgenresHeader()

            \$('#searchbar').on(\"keyup\",function() {
                search();

            });
            \$('.filtrgens').change(function (event){
                let gId = event.target.value;
                console.log({gId})

                filtergen(gId);
            })
        });


    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 2,  52 => 1,  43 => 142,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header %}
    <nav class=\"bg-gray-100 border-gray-200 dark:bg-gray-900\">
        <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
            <a href=\"/homepage\" class=\"flex items-center\">
                <span class=\"self-center text-2xl font-semibold whitespace-nowrap dark:text-white\">MovieApp</span>
            </a>
            <div class=\"flex md:order-2\">
                <select   class=\"filtrgens bg-gray-300\">
                    <option selected>Choose a genere</option>

                </select>


                <div class=\"relative hidden md:block\">

                    <div class=\"absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none\">
                        <svg class=\"w-4 h-4 text-gray-500 dark:text-gray-400\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 20 20\">
                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z\"/>
                        </svg>
                        <span class=\"sr-only\">Search icon</span>
                    </div>
                    <input type=\"search\" id=\"searchbar\" class=\"block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\" placeholder=\"Search...\">
                </div>

            </div>
            <div class=\"items-center justify-between hidden w-full md:flex md:w-auto md:order-1\" id=\"navbar-search\">

                <ul class=\"flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700\">
                    <li>
                        <a href=\"/homepage\" class=\"block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500\" aria-current=\"page\">Home</a>
                    </li>
                    <li>
                        <a href=\"/favorites/\${movie.id}\" class=\"block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700\">Favorites</a>
                    </li>
                    <li>
                        <a href=\"/userSettings\" class=\"block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700\">User</a>
                    </li>
                    <li>
                        <a href=\"/login\" class=\"block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700\">Sign out</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

    <script src=\"https://code.jquery.com/jquery-3.7.0.js\" integrity=\"sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=\" crossorigin=\"anonymous\"></script>
    <script>

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
        function filtergen(gid){
            const settings = {
                async: true,
                crossDomain: true,
                url: 'https://api.themoviedb.org/3/discover/movie?' +
                    'include_adult=false&include_video=false&language=en-US&' +
                    'page=1&sort_by=popularity.desc&with_genres='+gid,
                method: 'GET',
                headers: {
                    accept: 'application/json',
                    Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkMTlmN2Q3MmYzOGQ2ZjIzNDEzZTVjODRjZmNmYTMwNSIsInN1YiI6IjY0ZGJhZGM5Yjc3ZDRiMTE0MjVkZmEwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.OE2bMBkUtaosNS2qL0Sik6tci6W5dGw3AtQFcpH-Elg'
                }
            };

            \$.ajax(settings).done(function (response) {
                var gensearch=response.results;
                render(gensearch)

            });

        }

        function getgenresHeader() {
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
                let generesXPelicula = [];
                var genred = response.genres;

                genred.map(function (genere) {


                    var element = `
                        <option value=\"\${genere.id}\">\${genere.name}</option>`
                    generesXPelicula.push(element);
                });

                \$('.filtrgens').append(generesXPelicula.join(''))


            })
        };


        \$(document).ready(function() {
            getgenresHeader()

            \$('#searchbar').on(\"keyup\",function() {
                search();

            });
            \$('.filtrgens').change(function (event){
                let gId = event.target.value;
                console.log({gId})

                filtergen(gId);
            })
        });


    </script>
{% endblock %}


", "user/header.html.twig", "/home/oryep/movieApp/templates/user/header.html.twig");
    }
}
