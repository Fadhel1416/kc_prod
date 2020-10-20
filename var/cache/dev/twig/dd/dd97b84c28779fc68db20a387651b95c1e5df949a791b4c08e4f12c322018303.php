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

/* @Gincident/admin/ListFamille.html.twig */
class __TwigTemplate_690cace3fdbf8082891a4ecd2db7f8d88aa543d51fcf89798d03b7423dfb209c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'megamenu' => [$this, 'block_megamenu'],
            'daschboard' => [$this, 'block_daschboard'],
            'Client' => [$this, 'block_Client'],
            'produit' => [$this, 'block_produit'],
            'fournisseur' => [$this, 'block_fournisseur'],
            'famille' => [$this, 'block_famille'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "GincidentBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gincident/admin/ListFamille.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gincident/admin/ListFamille.html.twig"));

        $this->parent = $this->loadTemplate("GincidentBundle::layout.html.twig", "@Gincident/admin/ListFamille.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "               <title>List Famille</title>
     ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"Preview page of Metronic Admin Theme #1 for buttons extension demos\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
         <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/sweetalert2/6.1.0/sweetalert2.min.css\" />
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/datatables/datatables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/css/components-rounded.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/css/layout.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/css/themes/darkblue.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\" />
         <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dist/sweetalert2.min.css"), "html", null, true);
        echo "\">
<style type=\"text/css\">
.a-star-4 {
    background-position: -21px -368px;
}
.a-icon-star {
    width: 80px;
    height: 18px;
}
.a-icon {
    display: inline-block;
    vertical-align: top;
}
.a-icon-star, .a-icon-star-medium, .a-icon-star-mini, .a-icon-star-small {
    position: relative;
    vertical-align: text-top;
}
.a-icon, .a-link-emphasis:after {
    background-image: url(https://m.media-amazon.com/images/G/01/AUIClients/AmazonUIIcon-sprite_1x-e943461…._V2_.png);
    -webkit-background-size: 400px 900px;
    background-size: 400px 900px;
    background-repeat: no-repeat;
}
</style>
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_megamenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "megamenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "megamenu"));

        // line 61
        echo "              ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 62
            echo "                <div class=\"hor-menu   hidden-sm hidden-xs\">
                        <ul class=\"nav navbar-nav\">                 
                            <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_daschboard");
            echo "\"> Menu Administrateur
                                    <span class=\"selected\"> </span>
                                </a>
                            </li>
                            <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_userliste");
            echo "\"> Utilisateur
                                    <span class=\"selected\"> </span>
                                </a>
                            </li>
                        
                       
                                
                             <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_statistique");
            echo "\"> statistique
                                    <span class=\"selected\"> </span>
                                </a>
                            </li>
           
                            <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">

                             <form class=\"navbar-form navbar-right inline-form\" action=\"https://www.bing.com/search?scope=web\" method=\"get\" target=\"_self\" data-bing-action-uri=\"https://www.bing.com/search?scope=web\" data-form-code=\"EDGSPH\">
      <div class=\"form-group\">
        <input type=\"search\" name=\"q\"  class=\"input-sm form-control\"  size=50 placeholder=\"Recherche\" data-m='{\"i\":3,\"p\":2,\"n\":\"searchinput\",\"y\":9,\"o\":1}' data-id=\"3\" autocomplete=\"off\">
        <button type=\"submit\" data-m='{\"i\":4,\"p\":2,\"n\":\"search_websearch\",\"y\":9,\"o\":2}' data-id=\"4\"  id=\"sb_form_go\" class=\"btn btn-primary btn-sm\"><span class=\"glyphicon glyphicon-eye-open\"></span> Chercher</button>
      </div>
    </form>
                          </li>            
                        </ul>
                    </div> 
                                    ";
        } else {
            // line 95
            echo "                 <div class=\"hor-menu   hidden-sm hidden-xs\">
                 <ul class=\"nav navbar-nav\">                 
                                 
                                     <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">

                             <form class=\"navbar-form navbar-right inline-form\" action=\"https://www.bing.com/search?scope=web\" method=\"get\" target=\"_self\" data-bing-action-uri=\"https://www.bing.com/search?scope=web\" data-form-code=\"EDGSPH\">
      <div class=\"form-group\">
        <input type=\"search\" name=\"q\"  class=\"input-sm form-control\"  size=50 placeholder=\"Recherche\" data-m='{\"i\":3,\"p\":2,\"n\":\"searchinput\",\"y\":9,\"o\":1}' data-id=\"3\" autocomplete=\"off\">
        <button type=\"submit\" data-m='{\"i\":4,\"p\":2,\"n\":\"search_websearch\",\"y\":9,\"o\":2}' data-id=\"4\"  id=\"sb_form_go\" class=\"btn btn-primary btn-sm\"><span class=\"glyphicon glyphicon-eye-open\"></span> Chercher</button>
      </div>
    </form>
                          </li>                                  
                                                   
                 </ul>                                  
                 </div>         
                  ";
        }
        // line 111
        echo "          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 113
    public function block_daschboard($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "daschboard"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "daschboard"));

        // line 114
        echo "           <li class=\"nav-item\">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-home\"></i>
                                    <span class=\"title\">Acceuil</span>
                                    <span class=\"selected\"></span>
                                    <span class=\"arrow open\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item start open\">
                                        <a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_homepage");
        echo "\" class=\"nav-link \">
                                            <i class=\"icon-bar-chart\"></i>
                                            <span class=\"title\">Dashboard</span>
                                            <span class=\"selected\"></span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item start \">
                                        <a href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notificationbyuser", ["identifier" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "user", [], "any", false, false, false, 130), "id", [], "any", false, false, false, 130)]), "html", null, true);
        echo "\" class=\"nav-link \">
                                            <i class=\"icon-bulb\"></i>
                                            <span class=\"title\">Notification</span>
                                            <span class=\"badge badge-success\">22</span>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li> 
            
            
            
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 143
    public function block_Client($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Client"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Client"));

        // line 144
        echo "              <li class=\"nav-item\">
                                <a href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_client");
        echo "\" class=\"nav-link\">
                                    <i class=\"icon-briefcase\"></i>
                                    <span class=\"title\">Gestion des Client</span>
                                    <span class=\"selected\"></span>
                                    <span class=\"arrow\"></span>
                                </a>
                              
               </li>
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 154
    public function block_produit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produit"));

        // line 155
        echo "              <li class=\"nav-item\">
                                <a href=\"";
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_ticket");
        echo "\" class=\"nav-link\">
                                    <i class=\"icon-briefcase\"></i>
                                    <span class=\"title\">Gestion des produit</span>
                                    <span class=\"selected\"></span>
                                    <span class=\"arrow\"></span>
                                </a>
                              
               </li>
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 165
    public function block_fournisseur($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fournisseur"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fournisseur"));

        // line 166
        echo "                   <li class=\"nav-item \">
                            <a href=\"";
        // line 167
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_fournisseur_affiche");
        echo "\" class=\"nav-link\">
                                    <i class=\"icon-briefcase\"></i>
                                    <span class=\"title\">Gestion des fournisseurs</span>
                                    <span class=\"selected\"></span>
                                    <span class=\"arrow\"></span>
                                </a>
                              
               </li>
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 177
    public function block_famille($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "famille"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "famille"));

        // line 178
        echo "                   <li class=\"nav-item \">
                                <a href=\"";
        // line 179
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_incident");
        echo "\" class=\"nav-link\">
                                    <i class=\"icon-briefcase\"></i>
                                    <span class=\"title\"> Gestion des famille</span>
                                    <span class=\"selected\"></span>
                                    <span class=\"arrow\"></span>
                                </a>
                              
               </li>
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 189
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo " 
\t\t  <div class=\"row\">
\t\t   
\t\t   <div class=\"col-lg-12\">
\t\t   <div class=\"row\">
\t\t ";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ListFamille"]) || array_key_exists("ListFamille", $context) ? $context["ListFamille"] : (function () { throw new RuntimeError('Variable "ListFamille" does not exist.', 194, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["famille"]) {
            // line 195
            echo "<div class=\"col-lg-4 col-md-5 mb-4\">
 
            <div class=\"card h-100\">
<a href=\"#\"><img class=\"card-img-top\" width=\"50%\" height=\"30%\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ7CRHJpjGx9gXaaTIJ4uZg3fYL7yYC_zYPTw&usqp=CAU\" alt=\"\"></a>
              <div class=\"card-body\">
                <h4 class=\"card-title\">
                  <a href=\"#\">";
            // line 201
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["famille"], "name", [], "any", false, false, false, 201), "html", null, true);
            echo "</a>
                </h4>
                <h5>";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["famille"], "nomfrs", [], "any", false, false, false, 203), "html", null, true);
            echo "</h5>
                <p class=\"card-text\">details</p>
              </div>
              <div class=\"card-footer\">
              <a  class=\"btn btn-danger\" href=\"";
            // line 207
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_ListProductFamille", ["id" => twig_get_attribute($this->env, $this->source, $context["famille"], "id", [], "any", false, false, false, 207), "idfact" => (isset($context["idfacture"]) || array_key_exists("idfacture", $context) ? $context["idfacture"] : (function () { throw new RuntimeError('Variable "idfacture" does not exist.', 207, $this->source); })())]), "html", null, true);
            echo "\"\">Voir Liste Produit  </a>
\t\t\t           
\t\t\t  </div>
\t\t\t 
            </div>
          </div>
\t\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['famille'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "          </div>
\t   </div> </br> </div>
\t   <br>
\t   <div class=\"text-center\">";
        // line 217
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["ListFamille"]) || array_key_exists("ListFamille", $context) ? $context["ListFamille"] : (function () { throw new RuntimeError('Variable "ListFamille" does not exist.', 217, $this->source); })()));
        echo "</div>
\t    
\t   
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 222
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 223
        echo "                                         <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dist/sweetalert2.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/scripts/table-datatables-buttons.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/scripts/demo.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/global/scripts/quick-nav.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
         <script src=\"https://cdn.jsdelivr.net/sweetalert2/6.1.0/sweetalert2.min.js\"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            \$(document).ready(function()
            {
                \$('#clickmewow').click(function()
                {
                    \$('#radio1003').attr('checked', 'checked');
                });
            })
        

        </script>       
  
                   
        
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Gincident/admin/ListFamille.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  622 => 248,  618 => 247,  614 => 246,  610 => 245,  604 => 242,  598 => 239,  592 => 236,  588 => 235,  584 => 234,  580 => 233,  574 => 230,  570 => 229,  566 => 228,  562 => 227,  558 => 226,  554 => 225,  548 => 223,  538 => 222,  524 => 217,  519 => 214,  506 => 207,  499 => 203,  494 => 201,  486 => 195,  482 => 194,  466 => 189,  447 => 179,  444 => 178,  434 => 177,  415 => 167,  412 => 166,  402 => 165,  383 => 156,  380 => 155,  370 => 154,  351 => 145,  348 => 144,  338 => 143,  315 => 130,  305 => 123,  294 => 114,  284 => 113,  274 => 111,  256 => 95,  236 => 78,  225 => 70,  217 => 65,  212 => 62,  209 => 61,  199 => 60,  164 => 35,  158 => 32,  154 => 31,  150 => 30,  144 => 27,  140 => 26,  134 => 23,  130 => 22,  126 => 21,  120 => 18,  116 => 17,  112 => 16,  108 => 15,  98 => 7,  88 => 6,  77 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends \"GincidentBundle::layout.html.twig\"%}

           {% block title %}
               <title>List Famille</title>
     {% endblock %} 
      {% block stylesheets  %}
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"Preview page of Metronic Admin Theme #1 for buttons extension demos\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
         <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/sweetalert2/6.1.0/sweetalert2.min.css\" />
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"{{ asset('assets/global/plugins/datatables/datatables.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"{{ asset('assets/global/css/components-rounded.min.css')}}\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/css/plugins.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href=\"{{ asset('assets/layouts/layout/css/layout.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/layouts/layout/css/themes/darkblue.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
        <link href=\"{{ asset('assets/layouts/layout/css/custom.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\" />
         <link rel=\"stylesheet\" href=\"{{ asset('assets/dist/sweetalert2.min.css')}}\">
<style type=\"text/css\">
.a-star-4 {
    background-position: -21px -368px;
}
.a-icon-star {
    width: 80px;
    height: 18px;
}
.a-icon {
    display: inline-block;
    vertical-align: top;
}
.a-icon-star, .a-icon-star-medium, .a-icon-star-mini, .a-icon-star-small {
    position: relative;
    vertical-align: text-top;
}
.a-icon, .a-link-emphasis:after {
    background-image: url(https://m.media-amazon.com/images/G/01/AUIClients/AmazonUIIcon-sprite_1x-e943461…._V2_.png);
    -webkit-background-size: 400px 900px;
    background-size: 400px 900px;
    background-repeat: no-repeat;
}
</style>
          {% endblock %} 
                 {% block megamenu %}
              {% if is_granted('ROLE_ADMIN') %}
                <div class=\"hor-menu   hidden-sm hidden-xs\">
                        <ul class=\"nav navbar-nav\">                 
                            <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"{{ path('gincident_admin_daschboard')}}\"> Menu Administrateur
                                    <span class=\"selected\"> </span>
                                </a>
                            </li>
                            <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"{{ path('gincident_admin_userliste')}}\"> Utilisateur
                                    <span class=\"selected\"> </span>
                                </a>
                            </li>
                        
                       
                                
                             <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"{{path('gincident_admin_statistique')}}\"> statistique
                                    <span class=\"selected\"> </span>
                                </a>
                            </li>
           
                            <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">

                             <form class=\"navbar-form navbar-right inline-form\" action=\"https://www.bing.com/search?scope=web\" method=\"get\" target=\"_self\" data-bing-action-uri=\"https://www.bing.com/search?scope=web\" data-form-code=\"EDGSPH\">
      <div class=\"form-group\">
        <input type=\"search\" name=\"q\"  class=\"input-sm form-control\"  size=50 placeholder=\"Recherche\" data-m='{\"i\":3,\"p\":2,\"n\":\"searchinput\",\"y\":9,\"o\":1}' data-id=\"3\" autocomplete=\"off\">
        <button type=\"submit\" data-m='{\"i\":4,\"p\":2,\"n\":\"search_websearch\",\"y\":9,\"o\":2}' data-id=\"4\"  id=\"sb_form_go\" class=\"btn btn-primary btn-sm\"><span class=\"glyphicon glyphicon-eye-open\"></span> Chercher</button>
      </div>
    </form>
                          </li>            
                        </ul>
                    </div> 
                                    {% else %}
                 <div class=\"hor-menu   hidden-sm hidden-xs\">
                 <ul class=\"nav navbar-nav\">                 
                                 
                                     <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">

                             <form class=\"navbar-form navbar-right inline-form\" action=\"https://www.bing.com/search?scope=web\" method=\"get\" target=\"_self\" data-bing-action-uri=\"https://www.bing.com/search?scope=web\" data-form-code=\"EDGSPH\">
      <div class=\"form-group\">
        <input type=\"search\" name=\"q\"  class=\"input-sm form-control\"  size=50 placeholder=\"Recherche\" data-m='{\"i\":3,\"p\":2,\"n\":\"searchinput\",\"y\":9,\"o\":1}' data-id=\"3\" autocomplete=\"off\">
        <button type=\"submit\" data-m='{\"i\":4,\"p\":2,\"n\":\"search_websearch\",\"y\":9,\"o\":2}' data-id=\"4\"  id=\"sb_form_go\" class=\"btn btn-primary btn-sm\"><span class=\"glyphicon glyphicon-eye-open\"></span> Chercher</button>
      </div>
    </form>
                          </li>                                  
                                                   
                 </ul>                                  
                 </div>         
                  {% endif %}
          {% endblock %}
        
        {%block daschboard %}
           <li class=\"nav-item\">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-home\"></i>
                                    <span class=\"title\">Acceuil</span>
                                    <span class=\"selected\"></span>
                                    <span class=\"arrow open\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item start open\">
                                        <a href=\"{{path('gincident_homepage')}}\" class=\"nav-link \">
                                            <i class=\"icon-bar-chart\"></i>
                                            <span class=\"title\">Dashboard</span>
                                            <span class=\"selected\"></span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item start \">
                                        <a href=\"{{path('notificationbyuser', {'identifier':app.user.id})}}\" class=\"nav-link \">
                                            <i class=\"icon-bulb\"></i>
                                            <span class=\"title\">Notification</span>
                                            <span class=\"badge badge-success\">22</span>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li> 
            
            
            
        {% endblock %}
             {%block Client %}
              <li class=\"nav-item\">
                                <a href=\"{{path('gincident_admin_client')}}\" class=\"nav-link\">
                                    <i class=\"icon-briefcase\"></i>
                                    <span class=\"title\">Gestion des Client</span>
                                    <span class=\"selected\"></span>
                                    <span class=\"arrow\"></span>
                                </a>
                              
               </li>
          {% endblock %}                 
               {%block produit %}
              <li class=\"nav-item\">
                                <a href=\"{{path('gincident_admin_ticket')}}\" class=\"nav-link\">
                                    <i class=\"icon-briefcase\"></i>
                                    <span class=\"title\">Gestion des produit</span>
                                    <span class=\"selected\"></span>
                                    <span class=\"arrow\"></span>
                                </a>
                              
               </li>
          {% endblock %}                  
       {%block fournisseur %}
                   <li class=\"nav-item \">
                            <a href=\"{{path('gincident_admin_fournisseur_affiche')}}\" class=\"nav-link\">
                                    <i class=\"icon-briefcase\"></i>
                                    <span class=\"title\">Gestion des fournisseurs</span>
                                    <span class=\"selected\"></span>
                                    <span class=\"arrow\"></span>
                                </a>
                              
               </li>
          {% endblock %}
          
          {%block famille %}
                   <li class=\"nav-item \">
                                <a href=\"{{path('gincident_admin_incident')}}\" class=\"nav-link\">
                                    <i class=\"icon-briefcase\"></i>
                                    <span class=\"title\"> Gestion des famille</span>
                                    <span class=\"selected\"></span>
                                    <span class=\"arrow\"></span>
                                </a>
                              
               </li>
          {% endblock %}
          
         {% block content  %} 
\t\t  <div class=\"row\">
\t\t   
\t\t   <div class=\"col-lg-12\">
\t\t   <div class=\"row\">
\t\t {% for famille in ListFamille %}
<div class=\"col-lg-4 col-md-5 mb-4\">
 
            <div class=\"card h-100\">
<a href=\"#\"><img class=\"card-img-top\" width=\"50%\" height=\"30%\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ7CRHJpjGx9gXaaTIJ4uZg3fYL7yYC_zYPTw&usqp=CAU\" alt=\"\"></a>
              <div class=\"card-body\">
                <h4 class=\"card-title\">
                  <a href=\"#\">{{famille.name}}</a>
                </h4>
                <h5>{{famille.nomfrs}}</h5>
                <p class=\"card-text\">details</p>
              </div>
              <div class=\"card-footer\">
              <a  class=\"btn btn-danger\" href=\"{{path('gincident_admin_ListProductFamille',{'id':famille.id,'idfact':idfacture})}}\"\">Voir Liste Produit  </a>
\t\t\t           
\t\t\t  </div>
\t\t\t 
            </div>
          </div>
\t\t   {%endfor%}
          </div>
\t   </div> </br> </div>
\t   <br>
\t   <div class=\"text-center\">{{ knp_pagination_render(ListFamille) }}</div>
\t    
\t   
      {% endblock %}
       
                     {% block javascripts %}
                                         <script src=\"{{ asset('assets/dist/sweetalert2.js')}}\"></script>

        <script src=\"{{ asset('assets/global/plugins/jquery.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/js.cookie.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/jquery.blockui.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"{{ asset('assets/global/scripts/datatable.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/datatables/datatables.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"{{ asset('assets/global/scripts/app.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"{{ asset('assets/pages/scripts/table-datatables-buttons.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=\"{{ asset('assets/layouts/layout/scripts/layout.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/layouts/layout/scripts/demo.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/layouts/global/scripts/quick-sidebar.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/layouts/global/scripts/quick-nav.min.js')}}\" type=\"text/javascript\"></script>
         <script src=\"https://cdn.jsdelivr.net/sweetalert2/6.1.0/sweetalert2.min.js\"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            \$(document).ready(function()
            {
                \$('#clickmewow').click(function()
                {
                    \$('#radio1003').attr('checked', 'checked');
                });
            })
        

        </script>       
  
                   
        
          {% endblock %} ", "@Gincident/admin/ListFamille.html.twig", "C:\\wamp64\\www\\kc_prod\\src\\GincidentBundle\\Resources\\views\\admin\\ListFamille.html.twig");
    }
}
