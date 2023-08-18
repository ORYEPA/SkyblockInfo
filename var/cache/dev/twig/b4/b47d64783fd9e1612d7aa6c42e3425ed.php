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

/* user/login.html.twig */
class __TwigTemplate_3c3f24990c44a6ffc3084e538f108f04 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">

        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <script src=\"https://cdn.tailwindcss.com\"></script>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </head>
    <body>
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "    </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "            <script src=\"https://code.jquery.com/jquery-3.7.0.js\" integrity=\"sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=\" crossorigin=\"anonymous\"></script>
            <script>
            </script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "            <section class=\"bg-gray-900\">
                <div class=\"flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0\">
                    <h1 class=\"my-4 text-3xl md:text-5xl text-white opacity-75 font-bold
                    leading-tight text-center md:text-left\">
                        The movieApp</h1>

                    <div class=\"w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0
                    dark:bg-gray-800 dark:border-gray-700\">
                        <div class=\"p-6 space-y-4 md:space-y-6 sm:p-8\">
                            <h1 class=\"text-xl font-bold leading-tight tracking-tight text-gray-900
                            md:text-2xl dark:text-white\">
                                Sign in to your account
                            </h1>

                            <form class=\"space-y-4 md:space-y-6\" action=\"/checkLogin\" method=\"post\">
                                <div>
                                    <label for=\"\" class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">
                                        Your email
                                    </label>
                                    <input type=\"email\"
                                           name=\"email\"
                                           id=\"email\"
                                           class=\"bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg
                                           focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5
                                           dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                           dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\"
                                           placeholder=\"username123\" required=\"\">
                                </div>
                                <div>
                                    <label for=\"\" class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">
                                        Password
                                    </label>
                                    <input type=\"password\" name=\"password\"
                                           id=\"password\"
                                           placeholder=\"••••••••\"
                                           class=\"bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg
                                           focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700
                                           dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                                           dark:focus:ring-blue-500 dark:focus:border-blue-500\" required=\"\">
                                </div>
                                <button
                                        type=\"submit\"
                                        class=\"w-full text-blue bg-primary-600 hover:bg-primary-700 focus:ring-4
                                        focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800\">
                                    Sign in</button>

                                <p class=\"text-sm font-light text-gray-500 dark:text-gray-400\">
                                    Don’t have an account yet? <a href=\"/register\" class=\"font-medium text-primary-600 hover:underline dark:text-primary-500\">Sign up</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 20,  106 => 19,  96 => 13,  89 => 12,  81 => 9,  74 => 8,  65 => 75,  63 => 19,  59 => 17,  57 => 12,  54 => 11,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">

        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <script src=\"https://cdn.tailwindcss.com\"></script>
        {% block stylesheets %}

        {% endblock %}

        {% block javascripts %}
            <script src=\"https://code.jquery.com/jquery-3.7.0.js\" integrity=\"sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=\" crossorigin=\"anonymous\"></script>
            <script>
            </script>
        {% endblock %}
    </head>
    <body>
        {% block body %}
            <section class=\"bg-gray-900\">
                <div class=\"flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0\">
                    <h1 class=\"my-4 text-3xl md:text-5xl text-white opacity-75 font-bold
                    leading-tight text-center md:text-left\">
                        The movieApp</h1>

                    <div class=\"w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0
                    dark:bg-gray-800 dark:border-gray-700\">
                        <div class=\"p-6 space-y-4 md:space-y-6 sm:p-8\">
                            <h1 class=\"text-xl font-bold leading-tight tracking-tight text-gray-900
                            md:text-2xl dark:text-white\">
                                Sign in to your account
                            </h1>

                            <form class=\"space-y-4 md:space-y-6\" action=\"/checkLogin\" method=\"post\">
                                <div>
                                    <label for=\"\" class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">
                                        Your email
                                    </label>
                                    <input type=\"email\"
                                           name=\"email\"
                                           id=\"email\"
                                           class=\"bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg
                                           focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5
                                           dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                           dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\"
                                           placeholder=\"username123\" required=\"\">
                                </div>
                                <div>
                                    <label for=\"\" class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">
                                        Password
                                    </label>
                                    <input type=\"password\" name=\"password\"
                                           id=\"password\"
                                           placeholder=\"••••••••\"
                                           class=\"bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg
                                           focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700
                                           dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                                           dark:focus:ring-blue-500 dark:focus:border-blue-500\" required=\"\">
                                </div>
                                <button
                                        type=\"submit\"
                                        class=\"w-full text-blue bg-primary-600 hover:bg-primary-700 focus:ring-4
                                        focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800\">
                                    Sign in</button>

                                <p class=\"text-sm font-light text-gray-500 dark:text-gray-400\">
                                    Don’t have an account yet? <a href=\"/register\" class=\"font-medium text-primary-600 hover:underline dark:text-primary-500\">Sign up</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        {% endblock %}
    </body>
</html>
", "user/login.html.twig", "/home/oryep/movieApp/templates/user/login.html.twig");
    }
}
