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

/* @Gincident/admin/Liste_Facture_Client.html.twig */
class __TwigTemplate_515886dc1977534d7704058e18cac58209e7c499fe09d2c3b5e486eeacb5ea2a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gincident/admin/Liste_Facture_Client.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gincident/admin/Liste_Facture_Client.html.twig"));

        $this->parent = $this->loadTemplate("GincidentBundle::layout.html.twig", "@Gincident/admin/Liste_Facture_Client.html.twig", 1);
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
        echo "               <title>Liste Facture Client</title>
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

          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_megamenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "megamenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "megamenu"));

        // line 39
        echo "              ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 40
            echo "                <div class=\"hor-menu   hidden-sm hidden-xs\">
                        <ul class=\"nav navbar-nav\">                 
                            <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_daschboard");
            echo "\"> Menu Administrateur
                                    <span class=\"selected\"> </span>
                                </a>
                            </li>
                            <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_userliste");
            echo "\"> Utilisateur
                                    <span class=\"selected\"> </span>
                                </a>
                            </li>
                        
                       
                                
                             <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"";
            // line 56
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
            // line 73
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
        // line 89
        echo "          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_daschboard($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "daschboard"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "daschboard"));

        // line 92
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
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_homepage");
        echo "\" class=\"nav-link \">
                                            <i class=\"icon-bar-chart\"></i>
                                            <span class=\"title\">Dashboard</span>
                                            <span class=\"selected\"></span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item start \">
                                        <a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notificationbyuser", ["identifier" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "id", [], "any", false, false, false, 108)]), "html", null, true);
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

    // line 121
    public function block_Client($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Client"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Client"));

        // line 122
        echo "              <li class=\"nav-item\">
                                <a href=\"";
        // line 123
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

    // line 132
    public function block_produit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produit"));

        // line 133
        echo "              <li class=\"nav-item\">
                                <a href=\"";
        // line 134
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

    // line 143
    public function block_fournisseur($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fournisseur"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fournisseur"));

        // line 144
        echo "                   <li class=\"nav-item \">
                            <a href=\"";
        // line 145
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

    // line 155
    public function block_famille($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "famille"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "famille"));

        // line 156
        echo "                   <li class=\"nav-item \">
                                <a href=\"";
        // line 157
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

    // line 167
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo " 
             
             
             
             <div class=\"page-bar\">
                            <ul class=\"page-breadcrumb\">
                                <li>
                                    <a href=\"";
        // line 174
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_homepage");
        echo "\">Accueil</a>
                                    <i class=\"fa fa-circle\"></i>
                                </li>
                              
                               
                            </ul>
                            <div class=\"page-toolbar\">
                                <div class=\"btn-group pull-right\">
                                    <a href=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_facture_ajouter", ["id" => (isset($context["codeclient"]) || array_key_exists("codeclient", $context) ? $context["codeclient"] : (function () { throw new RuntimeError('Variable "codeclient" does not exist.', 182, $this->source); })())]), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-primary\">Ajouter</a>
                                  
                                </div>
                            </div>
                        </div>
\t\t\t\t\t\t ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 187, $this->source); })()), "flashes", [0 => "fact", 1 => []], "method", false, false, false, 187));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 188
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 189
                echo "        <div class=\"alert alert-info flash-notice \">
            ";
                // line 190
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "  
                            <div class=\"col-md-12\">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class=\"portlet light bordered\">
                                    <div class=\"portlet-title\">
                                       <h2><b>Listes devises client</b></h2>
                                        <div class=\"tools\"> </div>
                                    </div>
                                    <div class=\"portlet-body\">
                                      
                                        <table class=\"table table-striped table-bordered table-hover\" id=\"sample_1\">
                                            
                                            <thead>
                                                



                                                
                                                
                                                 <tr>
                                               
                                                      
                                                    <th>Numero devise</th>
                                                    <th>Date de creation</th>
                                                    
                                                   <th>code client</th>
                                                     
                                                         
                                                      <th>Supprimer</th>
                                                        <th>Modifier</th>
                                                       
                                                        
                                                              
                                                       <th>Afficher</th>
                                                    
                                                       
                                                  <th>cammander produit</th>
                                                </tr>
                                            </thead>
                                          
                                            <tbody>
                                                
                                            ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 236, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fact"]) {
            // line 237
            echo "                                                <tr>
                                                    
                                                    <td>";
            // line 239
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fact"], "Num_Facture", [], "any", false, false, false, 239), "html", null, true);
            echo "</td>
                                                     <td>";
            // line 240
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fact"], "date_creation", [], "any", false, false, false, 240), "m/d/Y-H:i:s"), "html", null, true);
            echo "</td>
                                                    
                                                     <td>";
            // line 242
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fact"], "codeclient", [], "any", false, false, false, 242), "html", null, true);
            echo "</td>
                                                   
                                                  
                                                    
                                      ";
            // line 246
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 247
                echo "                                                  
                                                     <td>    <a class=\"btn btn-icon-only red\" id=\"";
                // line 248
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fact"], "id", [], "any", false, false, false, 248), "html", null, true);
                echo "\" onClick=\" swal({
  title: '',
  text: 'Voulez vous vraiment supprimer cette facture !',
  type:'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Oui je confirme',
  cancelButtonText: 'Non',
  confirmButtonClass: 'btn-success',
  cancelButtonClass: 'btn-danger',
  buttonsStyling: true
}).then(function () {
  swal(
    'Supprimé!',
    '";
                // line 263
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fact"], "Num_Facture", [], "any", false, false, false, 263), "html", null, true);
                echo "',
    'success'
  ).then(function (){window.location.replace('";
                // line 265
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_facture_supprimer", ["id" => twig_get_attribute($this->env, $this->source, $context["fact"], "id", [], "any", false, false, false, 265)]), "html", null, true);
                echo "')})
}, function (dismiss) {
  // dismiss can be 'cancel', 'overlay',
  // 'close', and 'timer'
  if (dismiss === 'cancel') {
    swal(
      'Annulée',
      'la suppression a été annulée :)',
      'error'
    )
  }
})\"> <i class=\"fa fa-trash\"></i></a> </td>
                                                         
                                                                          
   
                                                     
           
                                                    
  <td><a class=\"btn btn-icon-only yellow\" href=\"";
                // line 283
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_facture_modifier", ["id" => twig_get_attribute($this->env, $this->source, $context["fact"], "id", [], "any", false, false, false, 283)]), "html", null, true);
                echo "\"> <i class=\"fa fa-edit\"></i></a> </td>
      ";
            } else {
                // line 285
                echo "  <td></td>
  <td></td>
  ";
            }
            // line 288
            echo "                                                    
<td><a class=\"btn btn-icon-only green\" href=\"";
            // line 289
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_facture_afficher", ["id" => twig_get_attribute($this->env, $this->source, $context["fact"], "id", [], "any", false, false, false, 289)]), "html", null, true);
            echo "\"> <i class=\"fa fa-eye\"></i></a> </td>

  <td><a class=\"btn btn-icon-only green\" href=\"";
            // line 291
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_List_Famille", ["id" => twig_get_attribute($this->env, $this->source, $context["fact"], "id", [], "any", false, false, false, 291)]), "html", null, true);
            echo "\"> <i class=\"fa fa-eye\"></i></a></td> 
                            
                            
                            
                                                
                                                </tr>
                                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 298
        echo "                                            </tbody>
                                        </table>
                                             
                                    </div>
                                </div>
                               
                            </div>
                        </div>
       
                   
             
             
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 312
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 313
        echo "                                         <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dist/sweetalert2.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/scripts/table-datatables-buttons.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/scripts/demo.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 338
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
        return "@Gincident/admin/Liste_Facture_Client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  760 => 338,  756 => 337,  752 => 336,  748 => 335,  742 => 332,  736 => 329,  730 => 326,  726 => 325,  722 => 324,  718 => 323,  712 => 320,  708 => 319,  704 => 318,  700 => 317,  696 => 316,  692 => 315,  686 => 313,  676 => 312,  654 => 298,  641 => 291,  636 => 289,  633 => 288,  628 => 285,  623 => 283,  602 => 265,  597 => 263,  579 => 248,  576 => 247,  574 => 246,  567 => 242,  562 => 240,  558 => 239,  554 => 237,  550 => 236,  506 => 194,  493 => 190,  490 => 189,  485 => 188,  481 => 187,  473 => 182,  462 => 174,  444 => 167,  425 => 157,  422 => 156,  412 => 155,  393 => 145,  390 => 144,  380 => 143,  361 => 134,  358 => 133,  348 => 132,  329 => 123,  326 => 122,  316 => 121,  293 => 108,  283 => 101,  272 => 92,  262 => 91,  252 => 89,  234 => 73,  214 => 56,  203 => 48,  195 => 43,  190 => 40,  187 => 39,  177 => 38,  164 => 35,  158 => 32,  154 => 31,  150 => 30,  144 => 27,  140 => 26,  134 => 23,  130 => 22,  126 => 21,  120 => 18,  116 => 17,  112 => 16,  108 => 15,  98 => 7,  88 => 6,  77 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends \"GincidentBundle::layout.html.twig\"%}

           {% block title %}
               <title>Liste Facture Client</title>
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
             
             
             
             <div class=\"page-bar\">
                            <ul class=\"page-breadcrumb\">
                                <li>
                                    <a href=\"{{path('gincident_homepage')}}\">Accueil</a>
                                    <i class=\"fa fa-circle\"></i>
                                </li>
                              
                               
                            </ul>
                            <div class=\"page-toolbar\">
                                <div class=\"btn-group pull-right\">
                                    <a href=\"{{ path('gincident_admin_facture_ajouter',{'id':codeclient}) }}\" type=\"button\" class=\"btn btn-primary\">Ajouter</a>
                                  
                                </div>
                            </div>
                        </div>
\t\t\t\t\t\t {% for label, messages in app.flashes('fact',[]) %}
    {% for message in messages %}
        <div class=\"alert alert-info flash-notice \">
            {{ message }}
        </div>
    {% endfor %}
{% endfor %}
  
                            <div class=\"col-md-12\">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class=\"portlet light bordered\">
                                    <div class=\"portlet-title\">
                                       <h2><b>Listes devises client</b></h2>
                                        <div class=\"tools\"> </div>
                                    </div>
                                    <div class=\"portlet-body\">
                                      
                                        <table class=\"table table-striped table-bordered table-hover\" id=\"sample_1\">
                                            
                                            <thead>
                                                



                                                
                                                
                                                 <tr>
                                               
                                                      
                                                    <th>Numero devise</th>
                                                    <th>Date de creation</th>
                                                    
                                                   <th>code client</th>
                                                     
                                                         
                                                      <th>Supprimer</th>
                                                        <th>Modifier</th>
                                                       
                                                        
                                                              
                                                       <th>Afficher</th>
                                                    
                                                       
                                                  <th>cammander produit</th>
                                                </tr>
                                            </thead>
                                          
                                            <tbody>
                                                
                                            {% for fact in facture %}
                                                <tr>
                                                    
                                                    <td>{{fact.Num_Facture}}</td>
                                                     <td>{{fact.date_creation|date(\"m/d/Y-H:i:s\")}}</td>
                                                    
                                                     <td>{{fact.codeclient}}</td>
                                                   
                                                  
                                                    
                                      {%if is_granted('ROLE_ADMIN') %}
                                                  
                                                     <td>    <a class=\"btn btn-icon-only red\" id=\"{{fact.id}}\" onClick=\" swal({
  title: '',
  text: 'Voulez vous vraiment supprimer cette facture !',
  type:'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Oui je confirme',
  cancelButtonText: 'Non',
  confirmButtonClass: 'btn-success',
  cancelButtonClass: 'btn-danger',
  buttonsStyling: true
}).then(function () {
  swal(
    'Supprimé!',
    '{{ fact.Num_Facture}}',
    'success'
  ).then(function (){window.location.replace('{{ path('gincident_admin_facture_supprimer',{'id':fact.id})}}')})
}, function (dismiss) {
  // dismiss can be 'cancel', 'overlay',
  // 'close', and 'timer'
  if (dismiss === 'cancel') {
    swal(
      'Annulée',
      'la suppression a été annulée :)',
      'error'
    )
  }
})\"> <i class=\"fa fa-trash\"></i></a> </td>
                                                         
                                                                          
   
                                                     
           
                                                    
  <td><a class=\"btn btn-icon-only yellow\" href=\"{{ path('gincident_admin_facture_modifier',{'id':fact.id})}}\"> <i class=\"fa fa-edit\"></i></a> </td>
      {%else%}
  <td></td>
  <td></td>
  {%endif%}
                                                    
<td><a class=\"btn btn-icon-only green\" href=\"{{ path('gincident_admin_facture_afficher',{'id':fact.id})}}\"> <i class=\"fa fa-eye\"></i></a> </td>

  <td><a class=\"btn btn-icon-only green\" href=\"{{ path('gincident_admin_List_Famille',{'id':fact.id})}}\"> <i class=\"fa fa-eye\"></i></a></td> 
                            
                            
                            
                                                
                                                </tr>
                                                 {% endfor %}
                                            </tbody>
                                        </table>
                                             
                                    </div>
                                </div>
                               
                            </div>
                        </div>
       
                   
             
             
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
  
                   
        
          {% endblock %} ", "@Gincident/admin/Liste_Facture_Client.html.twig", "C:\\wamp64\\www\\kc_prod\\src\\GincidentBundle\\Resources\\views\\admin\\Liste_Facture_Client.html.twig");
    }
}
