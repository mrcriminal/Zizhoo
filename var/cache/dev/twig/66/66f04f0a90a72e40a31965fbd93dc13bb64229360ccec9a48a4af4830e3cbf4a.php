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

/* parts/headingPart.html.twig */
class __TwigTemplate_1906bbe00f6cf1a50d25aa36a808968ed2d447475c7e5ed5ee9598d472a62d7e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parts/headingPart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parts/headingPart.html.twig"));

        // line 1
        echo "<header>

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Karantina:wght@700&display=swap\" rel=\"stylesheet\">

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Anton&display=swap\" rel=\"stylesheet\">


    <style>



        .navbar-toggle .icon-bar {
            background-color: #fff;
        }

        .navbar-brand {
            color: #FFFFFF;
            font-weight: bold;
            font-size: 2vw;
            font-family: 'Anton', sans-serif;
        }

        .nav-link:hover{
            color: #FFFFFF;

        }
        .nav-link{
            color: #FFFFFF;
            margin-left: 100px;
            font-weight: bold;
            font-family: 'Karantina', cursive;
            font-size: 2vw;
        }




        @media (min-width: 300px) and (max-width: 1199.98px) {
            .nav-link {
                font-size: 3vw;
                /*margin: 0px;*/
                paddin: 0px;
                margin-left: 100px;

            }
            a {
                /*font-size: 3vw;*/
            }
        }

    </style>


    <nav class=\"navbar navbar-expand-lg\" style=\"background-color: #49abd5;\">

        <!--  Show this only on mobile to medium screens  -->
        <a class=\"navbar-brand d-none d-lg-block navbar-nav\" href=\"#\" style=\"margin-left: 3vw; color: #FFF;\">
            <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" width=\"35%\">
        </a>

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggle\" aria-controls=\"navbarToggle\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\" style=\"color: #FFFFFF\"> <i> Clickable </i></span>
        </button>

        <!--  Use flexbox utility classes to change how the child elements are justified  -->
        <div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarToggle\">

            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"#\">Home <span class=\"sr-only\"></span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Actie</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Prijzen</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Tell a friend</a>
                </li>
            </ul>
        </div>
    </nav>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "parts/headingPart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 62,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Karantina:wght@700&display=swap\" rel=\"stylesheet\">

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Anton&display=swap\" rel=\"stylesheet\">


    <style>



        .navbar-toggle .icon-bar {
            background-color: #fff;
        }

        .navbar-brand {
            color: #FFFFFF;
            font-weight: bold;
            font-size: 2vw;
            font-family: 'Anton', sans-serif;
        }

        .nav-link:hover{
            color: #FFFFFF;

        }
        .nav-link{
            color: #FFFFFF;
            margin-left: 100px;
            font-weight: bold;
            font-family: 'Karantina', cursive;
            font-size: 2vw;
        }




        @media (min-width: 300px) and (max-width: 1199.98px) {
            .nav-link {
                font-size: 3vw;
                /*margin: 0px;*/
                paddin: 0px;
                margin-left: 100px;

            }
            a {
                /*font-size: 3vw;*/
            }
        }

    </style>


    <nav class=\"navbar navbar-expand-lg\" style=\"background-color: #49abd5;\">

        <!--  Show this only on mobile to medium screens  -->
        <a class=\"navbar-brand d-none d-lg-block navbar-nav\" href=\"#\" style=\"margin-left: 3vw; color: #FFF;\">
            <img src=\"{{ asset('img/logo.png') }}\" width=\"35%\">
        </a>

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggle\" aria-controls=\"navbarToggle\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\" style=\"color: #FFFFFF\"> <i> Clickable </i></span>
        </button>

        <!--  Use flexbox utility classes to change how the child elements are justified  -->
        <div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarToggle\">

            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"#\">Home <span class=\"sr-only\"></span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Actie</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Prijzen</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Tell a friend</a>
                </li>
            </ul>
        </div>
    </nav>
</header>", "parts/headingPart.html.twig", "/home/ethug/Desktop/zizho/templates/parts/headingPart.html.twig");
    }
}
