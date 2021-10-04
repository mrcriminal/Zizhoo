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

/* parts/headingParts.html.twig */
class __TwigTemplate_ffcf6a6f42f0c4764de76c759b8ef618eaeae62e75718c5d6f8810dc6f6a9a62 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parts/headingParts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parts/headingParts.html.twig"));

        // line 1
        echo "<header>
<div id=\"header\">
    <div class=\"languages\">
        <ul>
            <li><a href=\"#\">NL▾</a>
            </li>
        </ul>
    </div>
    <div id=\"menucontainer\">
        <div id=\"nav\">
            <center><a href=\"/indexNederland.php/home\"><span id=\"navbutton\">HOME</span></a>
                <a href=\"/contact\"><span id=\"navbuttoncontact\">CONTACT</span></a>
            </center>
        </div>
    </div>
    <nav id=\"menu\">
        <input type=\"checkbox\" id=\"tm\">
        <ul class=\"main-menu clearfix\">
            <!-- home info -->
            <li class=\"kopje\"><a href=\"/indexNederland.php\"><strong>HOME</strong></a></li>
            <li class=\"sub\"><a href=\"/reserve\"></a></li>
            <li class=\"sub\"><a href=\"/contact\">CONTACT</a></li>
            <!-- home info end  -->
            <li class=\"kopje\"><a><strong>HELP DE HELDEN!</strong></a></li><li class=\"sub\"><a href=\"/enext/9/Help de Helden!\">GEZONDHEIDSZORG <label title=\"Toggle Drop-down\" class=\"drop-icon\" for=\"sm1\">▼</label></a><input type=\"checkbox\" id=\"sm1\"><ul class=\"sub-menu\"><li class=\"contentToggleSub\"><a href=\"/enextsubpage/9/8\">FLYER OPGESTELD DOOR</a></li></ul></li><li class=\"sub\"><a href=\"/enext/16/Help de Helden!\">ONDERNEMERS<label title=\"Toggle Drop-down\" class=\"drop-icon\" for=\"sm2\">▼</label></a><input type=\"checkbox\" id=\"sm2\"><ul class=\"sub-menu\"><li class=\"contentToggleSub\"><a href=\"/enextsubpage/16/16\">FLYER ONTWIKKELD DOOR:</a></li></ul></li><li class=\"sub\"><a href=\"/enext/18/Help de Helden!\">ONDERWIJS</a><input type=\"checkbox\" id=\"sm3\"></li><li class=\"sub\"><a href=\"/enext/12/Help de Helden!\"></a><input type=\"checkbox\" id=\"sm4\"></li><li class=\"sub\"><a href=\"/enext/21/Help de Helden!\">PRIVE &amp; GEZIN</a><input type=\"checkbox\" id=\"sm5\"></li><li class=\"sub\"><a href=\"/enext/15/Help de Helden!\">ROUW &amp; VERLIES<label title=\"Toggle Drop-down\" class=\"drop-icon\" for=\"sm6\">▼</label></a><input type=\"checkbox\" id=\"sm6\"><ul class=\"sub-menu\"><li class=\"contentToggleSub\"><a href=\"/enextsubpage/15/15\">FLYER OPGESTELD DOOR</a></li></ul></li><li class=\"sub\"><a href=\"/enext/4/Help de Helden!\"></a><input type=\"checkbox\" id=\"sm7\"></li><li class=\"sub\"><a href=\"/enext/25/Help de Helden!\">DIVERSE THEMAS</a><input type=\"checkbox\" id=\"sm8\"></li><li class=\"sub\"><a href=\"/enext/17/Help de Helden!\"></a><input type=\"checkbox\" id=\"sm9\"></li><li class=\"sub\"><a href=\"/enext/6/Help de Helden!\">ONLINE COMMUNITIES</a><input type=\"checkbox\" id=\"sm10\"></li><li class=\"sub\"><a href=\"/enext/22/Help de Helden!\">LINKS &amp; TIPS</a><input type=\"checkbox\" id=\"sm11\"></li><li class=\"kopje\"><a><strong>OVER</strong></a></li><li class=\"sub\"><a href=\"/wsnext/1/Over\">HELP DE HELDEN!</a><input type=\"checkbox\" id=\"sm12\"></li><li class=\"sub\"><a href=\"/wsnext/2/Over\">PARTNERS<label title=\"Toggle Drop-down\" class=\"drop-icon\" for=\"sm13\">▼</label></a><input type=\"checkbox\" id=\"sm13\"><ul class=\"sub-menu\"><li class=\"contentToggleSub\"><a href=\"/wnextsubpage/2/25\">SAMEN-KRACHTIG</a></li><li class=\"contentToggleSub\"><a href=\"/wnextsubpage/2/18\">RABOBANK REGIO EINDHOVEN</a></li><li class=\"contentToggleSub\"><a href=\"/wnextsubpage/2/21\"></a></li><li class=\"contentToggleSub\"><a href=\"/wnextsubpage/2/12\">4PEOPLE COMMUNICATIONS</a></li><li class=\"contentToggleSub\"><a href=\"/wnextsubpage/2/23\">BRON VAN BETEKENIS</a></li><li class=\"contentToggleSub\"><a href=\"/wnextsubpage/2/19\">VEERKRACHTGROEP</a></li><li class=\"contentToggleSub\"><a href=\"/wnextsubpage/2/20\">HELEEN VERHOEVEN ONTWERPT</a></li><li class=\"contentToggleSub\"><a href=\"/wnextsubpage/2/1\">ZUIVER-C</a></li></ul>                    </li><li class=\"kopje\"><a href=\"/fotoalbum\">PICTURES</a></li>
        </ul>

        <label for=\"tm\"><span class=\"hamburger\"></span></label>
        <center><label class=\"word-wrap\" for=\"tm\"><b style=\"line-height: 40px; color: #FFFFFF;\">HELP DE HELDEN!</b></label>
        </center>
        <label class=\"languagesm\" id=\"languesesw\" style=\"visibility:hidden;\">NL ▼</label>
    </nav>

    <nav id=\"lang\">
        <input type=\"checkbox\" id=\"tml\">
        <ul class=\"main-menu_lang clearfix\">
        </ul>
    </nav>
    <div id=\"socialmedia\">
        <ul class=\"list\">
            <a href=\"/pages/share.php\" data-fancybox-type=\"iframe\" class=\"fancybox\">
                <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/sharethis.png"), "html", null, true);
        echo "\" alt=\"sharing button\"></a>
                <a href=\"https://www.facebook.com/helpdehelden\" target=\"_blank\">
                    <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/facebook.png"), "html", null, true);
        echo "\" alt=\"facebook button\">
                </a><a href=\"https://twitter.com/HeldenHelp\" target=\"_blank\">
            <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/twitter.png"), "html", null, true);
        echo "\" alt=\"twitter button\">
            </a><a href=\"https://www.linkedin.com/groups/13845394/\" target=\"_blank\">
            <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/linkedin.png"), "html", null, true);
        echo "\" alt=\"linkedin button\"></a>
        </ul>
    </div>
</div>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "parts/headingParts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 47,  95 => 45,  90 => 43,  85 => 41,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
<div id=\"header\">
    <div class=\"languages\">
        <ul>
            <li><a href=\"#\">NL▾</a>
            </li>
        </ul>
    </div>
    <div id=\"menucontainer\">
        <div id=\"nav\">
            <center><a href=\"/indexNederland.php/home\"><span id=\"navbutton\">HOME</span></a>
                <a href=\"/contact\"><span id=\"navbuttoncontact\">CONTACT</span></a>
            </center>
        </div>
    </div>
    <nav id=\"menu\">
        <input type=\"checkbox\" id=\"tm\">
        <ul class=\"main-menu clearfix\">
            <!-- home info -->
            <li class=\"kopje\"><a href=\"/indexNederland.php\"><strong>HOME</strong></a></li>
            <li class=\"sub\"><a href=\"/reserve\"></a></li>
            <li class=\"sub\"><a href=\"/contact\">CONTACT</a></li>
            <!-- home info end  -->
            <li class=\"kopje\"><a><strong>HELP DE HELDEN!</strong></a></li><li class=\"sub\"><a href=\"/enext/9/Help de Helden!\">GEZONDHEIDSZORG <label title=\"Toggle Drop-down\" class=\"drop-icon\" for=\"sm1\">▼</label></a><input type=\"checkbox\" id=\"sm1\"><ul class=\"sub-menu\"><li class=\"contentToggleSub\"><a href=\"/enextsubpage/9/8\">FLYER OPGESTELD DOOR</a></li></ul></li><li class=\"sub\"><a href=\"/enext/16/Help de Helden!\">ONDERNEMERS<label title=\"Toggle Drop-down\" class=\"drop-icon\" for=\"sm2\">▼</label></a><input type=\"checkbox\" id=\"sm2\"><ul class=\"sub-menu\"><li class=\"contentToggleSub\"><a href=\"/enextsubpage/16/16\">FLYER ONTWIKKELD DOOR:</a></li></ul></li><li class=\"sub\"><a href=\"/enext/18/Help de Helden!\">ONDERWIJS</a><input type=\"checkbox\" id=\"sm3\"></li><li class=\"sub\"><a href=\"/enext/12/Help de Helden!\"></a><input type=\"checkbox\" id=\"sm4\"></li><li class=\"sub\"><a href=\"/enext/21/Help de Helden!\">PRIVE &amp; GEZIN</a><input type=\"checkbox\" id=\"sm5\"></li><li class=\"sub\"><a href=\"/enext/15/Help de Helden!\">ROUW &amp; VERLIES<label title=\"Toggle Drop-down\" class=\"drop-icon\" for=\"sm6\">▼</label></a><input type=\"checkbox\" id=\"sm6\"><ul class=\"sub-menu\"><li class=\"contentToggleSub\"><a href=\"/enextsubpage/15/15\">FLYER OPGESTELD DOOR</a></li></ul></li><li class=\"sub\"><a href=\"/enext/4/Help de Helden!\"></a><input type=\"checkbox\" id=\"sm7\"></li><li class=\"sub\"><a href=\"/enext/25/Help de Helden!\">DIVERSE THEMAS</a><input type=\"checkbox\" id=\"sm8\"></li><li class=\"sub\"><a href=\"/enext/17/Help de Helden!\"></a><input type=\"checkbox\" id=\"sm9\"></li><li class=\"sub\"><a href=\"/enext/6/Help de Helden!\">ONLINE COMMUNITIES</a><input type=\"checkbox\" id=\"sm10\"></li><li class=\"sub\"><a href=\"/enext/22/Help de Helden!\">LINKS &amp; TIPS</a><input type=\"checkbox\" id=\"sm11\"></li><li class=\"kopje\"><a><strong>OVER</strong></a></li><li class=\"sub\"><a href=\"/wsnext/1/Over\">HELP DE HELDEN!</a><input type=\"checkbox\" id=\"sm12\"></li><li class=\"sub\"><a href=\"/wsnext/2/Over\">PARTNERS<label title=\"Toggle Drop-down\" class=\"drop-icon\" for=\"sm13\">▼</label></a><input type=\"checkbox\" id=\"sm13\"><ul class=\"sub-menu\"><li class=\"contentToggleSub\"><a href=\"/wnextsubpage/2/25\">SAMEN-KRACHTIG</a></li><li class=\"contentToggleSub\"><a href=\"/wnextsubpage/2/18\">RABOBANK REGIO EINDHOVEN</a></li><li class=\"contentToggleSub\"><a href=\"/wnextsubpage/2/21\"></a></li><li class=\"contentToggleSub\"><a href=\"/wnextsubpage/2/12\">4PEOPLE COMMUNICATIONS</a></li><li class=\"contentToggleSub\"><a href=\"/wnextsubpage/2/23\">BRON VAN BETEKENIS</a></li><li class=\"contentToggleSub\"><a href=\"/wnextsubpage/2/19\">VEERKRACHTGROEP</a></li><li class=\"contentToggleSub\"><a href=\"/wnextsubpage/2/20\">HELEEN VERHOEVEN ONTWERPT</a></li><li class=\"contentToggleSub\"><a href=\"/wnextsubpage/2/1\">ZUIVER-C</a></li></ul>                    </li><li class=\"kopje\"><a href=\"/fotoalbum\">PICTURES</a></li>
        </ul>

        <label for=\"tm\"><span class=\"hamburger\"></span></label>
        <center><label class=\"word-wrap\" for=\"tm\"><b style=\"line-height: 40px; color: #FFFFFF;\">HELP DE HELDEN!</b></label>
        </center>
        <label class=\"languagesm\" id=\"languesesw\" style=\"visibility:hidden;\">NL ▼</label>
    </nav>

    <nav id=\"lang\">
        <input type=\"checkbox\" id=\"tml\">
        <ul class=\"main-menu_lang clearfix\">
        </ul>
    </nav>
    <div id=\"socialmedia\">
        <ul class=\"list\">
            <a href=\"/pages/share.php\" data-fancybox-type=\"iframe\" class=\"fancybox\">
                <img src=\"{{ asset('img/sharethis.png') }}\" alt=\"sharing button\"></a>
                <a href=\"https://www.facebook.com/helpdehelden\" target=\"_blank\">
                    <img src=\"{{ asset('img/facebook.png') }}\" alt=\"facebook button\">
                </a><a href=\"https://twitter.com/HeldenHelp\" target=\"_blank\">
            <img src=\"{{ asset('img/twitter.png') }}\" alt=\"twitter button\">
            </a><a href=\"https://www.linkedin.com/groups/13845394/\" target=\"_blank\">
            <img src=\"{{ asset('img/linkedin.png') }}\" alt=\"linkedin button\"></a>
        </ul>
    </div>
</div>
</header>", "parts/headingParts.html.twig", "/home/ethug/Desktop/zizho/templates/parts/headingParts.html.twig");
    }
}
