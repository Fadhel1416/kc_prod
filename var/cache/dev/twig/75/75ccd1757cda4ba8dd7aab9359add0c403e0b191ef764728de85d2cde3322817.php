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

/* @Gincident/admin/statistique.html.twig */
class __TwigTemplate_5fd1c78a1bb27d0b87e6824e190f49e4cfa25909da6920de4e5d493c016edf90 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gincident/admin/statistique.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gincident/admin/statistique.html.twig"));

        $this->parent = $this->loadTemplate("GincidentBundle::layout.html.twig", "@Gincident/admin/statistique.html.twig", 1);
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
        echo "               <title>bienvenue</title>
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
        <meta content=\"Preview page of Metronic Admin Theme #1 for statistics, charts, recent events and reports\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/jqvmap.css"), "html", null, true);
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
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_megamenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "megamenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "megamenu"));

        // line 38
        echo "              ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 39
            echo "                <div class=\"hor-menu   hidden-sm hidden-xs\">
                        <ul class=\"nav navbar-nav\">                 
                            <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_daschboard");
            echo "\"> Menu Administrateur
                                    <span class=\"selected\"> </span>
                                </a>
                            </li>
                            <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_userliste");
            echo "\"> Utilisateur
                                    <span class=\"selected\"> </span>
                                </a>
                            </li>
                        
                       
                                
                             <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"";
            // line 55
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
            // line 72
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
        // line 88
        echo "          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_daschboard($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "daschboard"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "daschboard"));

        // line 91
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
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_homepage");
        echo "\" class=\"nav-link \">
                                            <i class=\"icon-bar-chart\"></i>
                                            <span class=\"title\">Dashboard</span>
                                            <span class=\"selected\"></span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item start \">
                                        <a href=\"#\" class=\"nav-link \">
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

    // line 120
    public function block_Client($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Client"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Client"));

        // line 121
        echo "              <li class=\"nav-item\">
                                <a href=\"";
        // line 122
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

    // line 131
    public function block_produit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produit"));

        // line 132
        echo "              <li class=\"nav-item\">
                                <a href=\"";
        // line 133
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

    // line 142
    public function block_fournisseur($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fournisseur"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fournisseur"));

        // line 143
        echo "                   <li class=\"nav-item \">
                            <a href=\"";
        // line 144
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

    // line 154
    public function block_famille($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "famille"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "famille"));

        // line 155
        echo "                   <li class=\"nav-item \">
                                <a href=\"";
        // line 156
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

    // line 166
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo " 
          
          
              
                        
                        
                    
                        <!-- END THEME PANEL -->
                        <!-- BEGIN PAGE BAR -->
                        <div class=\"page-bar\">
                            <ul class=\"page-breadcrumb\">
                                <li>
                                    <a href=\"index.html\">Home</a>
                                    <i class=\"fa fa-circle\"></i>
                                </li>
                                <li>
                                    <span>Dashboard</span>
                                </li>
                            </ul>
                            <div class=\"page-toolbar\">
                                <div id=\"dashboard-report-range\" class=\"pull-right tooltips btn btn-sm\" data-container=\"body\" data-placement=\"bottom\" data-original-title=\"Change dashboard date range\">
                                    <i class=\"icon-calendar\"></i>&nbsp;
                                    <span class=\"thin uppercase hidden-xs\"></span>&nbsp;
                                    <i class=\"fa fa-angle-down\"></i>
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class=\"page-title\"> Admin Dashboard 
                            <small>statistics, charts, recent events and reports</small>
                        </h1>
                       
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN DASHBOARD STATS 1-->
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                                <a class=\"dashboard-stat dashboard-stat-v2 blue\" href=\"#\">
                                    <div class=\"visual\">
                                        <i class=\"fa fa-comments\"></i>
                                    </div>
                                    <div class=\"details\">
                                        <div class=\"number\">
                                            <span data-counter=\"counterup\" data-value=\"1349\">0</span>
                                        </div>
                                        <div class=\"desc\"> New Feedbacks </div>
                                    </div>
                                </a>
                            </div>
                            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                                <a class=\"dashboard-stat dashboard-stat-v2 red\" href=\"#\">
                                    <div class=\"visual\">
                                        <i class=\"fa fa-bar-chart-o\"></i>
                                    </div>
                                    <div class=\"details\">
                                        <div class=\"number\">
                                            <span data-counter=\"counterup\" data-value=\"12,5\">0</span>M\$ </div>
                                        <div class=\"desc\"> Total Profit </div>
                                    </div>
                                </a>
                            </div>
                            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                                <a class=\"dashboard-stat dashboard-stat-v2 green\" href=\"#\">
                                    <div class=\"visual\">
                                        <i class=\"fa fa-shopping-cart\"></i>
                                    </div>
                                    <div class=\"details\">
                                        <div class=\"number\">
                                            <span data-counter=\"counterup\" data-value=\"549\">0</span>
                                        </div>
                                        <div class=\"desc\"> New Orders </div>
                                    </div>
                                </a>
                            </div>
                            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                                <a class=\"dashboard-stat dashboard-stat-v2 purple\" href=\"#\">
                                    <div class=\"visual\">
                                        <i class=\"fa fa-globe\"></i>
                                    </div>
                                    <div class=\"details\">
                                        <div class=\"number\"> +
                                            <span data-counter=\"counterup\" data-value=\"89\"></span>% </div>
                                        <div class=\"desc\"> Brand Popularity </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                        <!-- END DASHBOARD STATS 1-->
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                                <!-- BEGIN PORTLET-->
                                <div class=\"portlet light bordered\">
                                    <div class=\"portlet-title\">
                                        <div class=\"caption\">
                                            <i class=\"icon-bar-chart font-dark hide\"></i>
                                            <span class=\"caption-subject font-dark bold uppercase\">Site Visits</span>
                                            <span class=\"caption-helper\">weekly stats...</span>
                                        </div>
                                        <div class=\"actions\">
                                            <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                                                <label class=\"btn red btn-outline btn-circle btn-sm active\">
                                                    <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option1\">New</label>
                                                <label class=\"btn red btn-outline btn-circle btn-sm\">
                                                    <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option2\">Returning</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"portlet-body\">
                                        <div id=\"site_statistics_loading\">
                                            <img src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/img/loading.gif"), "html", null, true);
        echo "\" alt=\"loading\" /> </div>
                                        <div id=\"site_statistics_content\" class=\"display-none\">
                                            <div id=\"site_statistics\" class=\"chart\"> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PORTLET-->
                            </div>
                            <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                                <!-- BEGIN PORTLET-->
                                <div class=\"portlet light bordered\">
                                    <div class=\"portlet-title\">
                                        <div class=\"caption\">
                                            <i class=\"icon-share font-red-sunglo hide\"></i>
                                            <span class=\"caption-subject font-dark bold uppercase\">Revenue</span>
                                            <span class=\"caption-helper\">monthly stats...</span>
                                        </div>
                                        <div class=\"actions\">
                                            <div class=\"btn-group\">
                                                <a href=\"\" class=\"btn dark btn-outline btn-circle btn-sm dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\"> Filter Range
                                                    <span class=\"fa fa-angle-down\"> </span>
                                                </a>
                                                <ul class=\"dropdown-menu pull-right\">
                                                    <li>
                                                        <a href=\"javascript:;\"> Q1 2014
                                                            <span class=\"label label-sm label-default\"> past </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:;\"> Q2 2014
                                                            <span class=\"label label-sm label-default\"> past </span>
                                                        </a>
                                                    </li>
                                                    <li class=\"active\">
                                                        <a href=\"javascript:;\"> Q3 2014
                                                            <span class=\"label label-sm label-success\"> current </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:;\"> Q4 2014
                                                            <span class=\"label label-sm label-warning\"> upcoming </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"portlet-body\">
                                        <div id=\"site_activities_loading\">
                                            <img src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/img/loading.gif"), "html", null, true);
        echo "\" alt=\"loading\" /> </div>
                                        <div id=\"site_activities_content\" class=\"display-none\">
                                            <div id=\"site_activities\" style=\"height: 228px;\"> </div>
                                        </div>
                                        <div style=\"margin: 20px 0 10px 30px\">
                                            <div class=\"row\">
                                                <div class=\"col-md-3 col-sm-3 col-xs-6 text-stat\">
                                                    <span class=\"label label-sm label-success\"> Revenue: </span>
                                                    <h3>\$13,234</h3>
                                                </div>
                                                <div class=\"col-md-3 col-sm-3 col-xs-6 text-stat\">
                                                    <span class=\"label label-sm label-info\"> Tax: </span>
                                                    <h3>\$134,900</h3>
                                                </div>
                                                <div class=\"col-md-3 col-sm-3 col-xs-6 text-stat\">
                                                    <span class=\"label label-sm label-danger\"> Shipment: </span>
                                                    <h3>\$1,134</h3>
                                                </div>
                                                <div class=\"col-md-3 col-sm-3 col-xs-6 text-stat\">
                                                    <span class=\"label label-sm label-warning\"> Orders: </span>
                                                    <h3>235090</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PORTLET-->
                            </div>
                        </div>
                      
                   
                     
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                                <div class=\"portlet light bordered\">
                                    <div class=\"portlet-title\">
                                        <div class=\"caption\">
                                            <i class=\"icon-cursor font-dark hide\"></i>
                                            <span class=\"caption-subject font-dark bold uppercase\">General Stats</span>
                                        </div>
                                        <div class=\"actions\">
                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-circle red easy-pie-chart-reload\">
                                                <i class=\"fa fa-repeat\"></i> Reload </a>
                                        </div>
                                    </div>
                                    <div class=\"portlet-body\">
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"easy-pie-chart\">
                                                    <div class=\"number transactions\" data-percent=\"55\">
                                                        <span>+55</span>% </div>
                                                    <a class=\"title\" href=\"javascript:;\"> Transactions
                                                        <i class=\"icon-arrow-right\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"margin-bottom-10 visible-sm\"> </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"easy-pie-chart\">
                                                    <div class=\"number visits\" data-percent=\"85\">
                                                        <span>+85</span>% </div>
                                                    <a class=\"title\" href=\"javascript:;\"> New Visits
                                                        <i class=\"icon-arrow-right\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"margin-bottom-10 visible-sm\"> </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"easy-pie-chart\">
                                                    <div class=\"number bounce\" data-percent=\"46\">
                                                        <span>-46</span>% </div>
                                                    <a class=\"title\" href=\"javascript:;\"> Bounce
                                                        <i class=\"icon-arrow-right\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                                <div class=\"portlet light bordered\">
                                    <div class=\"portlet-title\">
                                        <div class=\"caption\">
                                            <i class=\"icon-equalizer font-dark hide\"></i>
                                            <span class=\"caption-subject font-dark bold uppercase\">Server Stats</span>
                                            <span class=\"caption-helper\">monthly stats...</span>
                                        </div>
                                        <div class=\"tools\">
                                            <a href=\"\" class=\"collapse\"> </a>
                                            <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                            <a href=\"\" class=\"reload\"> </a>
                                            <a href=\"\" class=\"remove\"> </a>
                                        </div>
                                    </div>
                                    <div class=\"portlet-body\">
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"sparkline-chart\">
                                                    <div class=\"number\" id=\"sparkline_bar5\"></div>
                                                    <a class=\"title\" href=\"javascript:;\"> Network
                                                        <i class=\"icon-arrow-right\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"margin-bottom-10 visible-sm\"> </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"sparkline-chart\">
                                                    <div class=\"number\" id=\"sparkline_bar6\"></div>
                                                    <a class=\"title\" href=\"javascript:;\"> CPU Load
                                                        <i class=\"icon-arrow-right\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"margin-bottom-10 visible-sm\"> </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"sparkline-chart\">
                                                    <div class=\"number\" id=\"sparkline_line\"></div>
                                                    <a class=\"title\" href=\"javascript:;\"> Load Rate
                                                        <i class=\"icon-arrow-right\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                                <!-- BEGIN REGIONAL STATS PORTLET-->
                                <div class=\"portlet light bordered\">
                                    <div class=\"portlet-title\">
                                        <div class=\"caption\">
                                            <i class=\"icon-share font-dark hide\"></i>
                                            <span class=\"caption-subject font-dark bold uppercase\">Regional Stats</span>
                                        </div>
                                        <div class=\"actions\">
                                            <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                <i class=\"icon-cloud-upload\"></i>
                                            </a>
                                            <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                <i class=\"icon-wrench\"></i>
                                            </a>
                                            <a class=\"btn btn-circle btn-icon-only btn-default fullscreen\" data-container=\"false\" data-placement=\"bottom\" href=\"javascript:;\"> </a>
                                            <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                <i class=\"icon-trash\"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"portlet-body\">
                                        <div id=\"region_statistics_loading\">
                                            <img src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/img/loading.gif"), "html", null, true);
        echo "\" alt=\"loading\" /> </div>
                                        <div id=\"region_statistics_content\" class=\"display-none\">
                                            <div class=\"btn-toolbar margin-bottom-10\">
                                                <div class=\"btn-group btn-group-circle\" data-toggle=\"buttons\">
                                                    <a href=\"\" class=\"btn grey-salsa btn-sm active\"> Users </a>
                                                    <a href=\"\" class=\"btn grey-salsa btn-sm\"> Orders </a>
                                                </div>
                                                <div class=\"btn-group pull-right\">
                                                    <a href=\"\" class=\"btn btn-circle grey-salsa btn-sm dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\"> Select Region
                                                        <span class=\"fa fa-angle-down\"> </span>
                                                    </a>
                                                    <ul class=\"dropdown-menu pull-right\">
                                                        <li>
                                                            <a href=\"javascript:;\" id=\"regional_stat_world\"> World </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\" id=\"regional_stat_usa\"> USA </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\" id=\"regional_stat_europe\"> Europe </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\" id=\"regional_stat_russia\"> Russia </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\" id=\"regional_stat_germany\"> Germany </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div id=\"vmap_world\" class=\"vmaps display-none\"> </div>
                                            <div id=\"vmap_usa\" class=\"vmaps display-none\"> </div>
                                            <div id=\"vmap_europe\" class=\"vmaps display-none\"> </div>
                                            <div id=\"vmap_russia\" class=\"vmaps display-none\"> </div>
                                            <div id=\"vmap_germany\" class=\"vmaps display-none\"> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END REGIONAL STATS PORTLET-->
                            </div>
                            <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                                <!-- BEGIN PORTLET-->
                                <div class=\"portlet light bordered\">
                                    <div class=\"portlet-title tabbable-line\">
                                        <div class=\"caption\">
                                            <i class=\"icon-globe font-dark hide\"></i>
                                            <span class=\"caption-subject font-dark bold uppercase\">Feeds</span>
                                        </div>
                                        <ul class=\"nav nav-tabs\">
                                            <li class=\"active\">
                                                <a href=\"#tab_1_1\" class=\"active\" data-toggle=\"tab\"> System </a>
                                            </li>
                                            <li>
                                                <a href=\"#tab_1_2\" data-toggle=\"tab\"> Activities </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"portlet-body\">
                                        <!--BEGIN TABS-->
                                        <div class=\"tab-content\">
                                            <div class=\"tab-pane active\" id=\"tab_1_1\">
                                                <div class=\"scroller\" style=\"height: 339px;\" data-always-visible=\"1\" data-rail-visible=\"0\">
                                                    <ul class=\"feeds\">
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-success\">
                                                                            <i class=\"fa fa-bell-o\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> You have 4 pending tasks.
                                                                            <span class=\"label label-sm label-info\"> Take action
                                                                                <i class=\"fa fa-share\"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> Just now </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">
                                                                <div class=\"col1\">
                                                                    <div class=\"cont\">
                                                                        <div class=\"cont-col1\">
                                                                            <div class=\"label label-sm label-success\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"cont-col2\">
                                                                            <div class=\"desc\"> New version v1.4 just lunched! </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col2\">
                                                                    <div class=\"date\"> 20 mins </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                   
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\">  ";
        // line 586
        echo $this->extensions['Mgilet\NotificationBundle\Twig\NotificationExtension']->countNotifications(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 586, $this->source); })()), "user", [], "any", false, false, false, 586));
        echo " </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 24 mins </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-info\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 30 mins </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-success\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 40 mins </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-warning\">
                                                                            <i class=\"fa fa-plus\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> ";
        // line 637
        echo $this->extensions['Mgilet\NotificationBundle\Twig\NotificationExtension']->render(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 637, $this->source); })()), "user", [], "any", false, false, false, 637), ["seen" => true]);
        echo " </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 1.5 hours </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-success\">
                                                                            <i class=\"fa fa-bell-o\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> Web server hardware needs to be upgraded.
                                                                            <span class=\"label label-sm label-default \"> Overdue </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 2 hours </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-default\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 3 hours </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-warning\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 5 hours </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-info\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 18 hours </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-default\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 21 hours </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-info\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 22 hours </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-default\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 21 hours </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-info\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 22 hours </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-default\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 21 hours </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-info\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 22 hours </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-default\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 21 hours </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-info\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 22 hours </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"tab-pane\" id=\"tab_1_2\">
                                                <div class=\"scroller\" style=\"height: 290px;\" data-always-visible=\"1\" data-rail-visible1=\"1\">
                                                    <ul class=\"feeds\">
                                                        <li>
                                                            <a href=\"javascript:;\">
                                                                <div class=\"col1\">
                                                                    <div class=\"cont\">
                                                                        <div class=\"cont-col1\">
                                                                            <div class=\"label label-sm label-success\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"cont-col2\">
                                                                            <div class=\"desc\">  </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col2\">
                                                                    <div class=\"date\"> Just now </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">
                                                                <div class=\"col1\">
                                                                    <div class=\"cont\">
                                                                        <div class=\"cont-col1\">
                                                                            <div class=\"label label-sm label-success\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"cont-col2\">
                                                                            <div class=\"desc\"> New order received </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col2\">
                                                                    <div class=\"date\"> 10 mins </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-danger\">
                                                                            <i class=\"fa fa-bolt\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> Order #24DOP4 has been rejected.
                                                                            <span class=\"label label-sm label-danger \"> Take action
                                                                                <i class=\"fa fa-share\"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 24 mins </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">
                                                                <div class=\"col1\">
                                                                    <div class=\"cont\">
                                                                        <div class=\"cont-col1\">
                                                                            <div class=\"label label-sm label-success\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"cont-col2\">
                                                                            <div class=\"desc\">  ";
        // line 926
        echo $this->extensions['Mgilet\NotificationBundle\Twig\NotificationExtension']->countNotifications(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 926, $this->source); })()), "user", [], "any", false, false, false, 926));
        echo "</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col2\">
                                                                    <div class=\"date\"> Just now </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">
                                                                <div class=\"col1\">
                                                                    <div class=\"cont\">
                                                                        <div class=\"cont-col1\">
                                                                            <div class=\"label label-sm label-success\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"cont-col2\">
                                                                            <div class=\"desc\"> ";
        // line 945
        echo $this->extensions['Mgilet\NotificationBundle\Twig\NotificationExtension']->countNotifications(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 945, $this->source); })()), "user", [], "any", false, false, false, 945));
        echo "</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col2\">
                                                                    <div class=\"date\"> Just now </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">
                                                                <div class=\"col1\">
                                                                    <div class=\"cont\">
                                                                        <div class=\"cont-col1\">
                                                                            <div class=\"label label-sm label-success\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"cont-col2\">
                                                                            <div class=\"desc\"> ";
        // line 964
        echo $this->extensions['Mgilet\NotificationBundle\Twig\NotificationExtension']->countNotifications(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 964, $this->source); })()), "user", [], "any", false, false, false, 964));
        echo " </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col2\">
                                                                    <div class=\"date\"> Just now </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">
                                                                <div class=\"col1\">
                                                                    <div class=\"cont\">
                                                                        <div class=\"cont-col1\">
                                                                            <div class=\"label label-sm label-success\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"cont-col2\">
                                                                            <div class=\"desc\">  ";
        // line 983
        echo $this->extensions['Mgilet\NotificationBundle\Twig\NotificationExtension']->countNotifications(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 983, $this->source); })()), "user", [], "any", false, false, false, 983));
        echo " </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col2\">
                                                                    <div class=\"date\"> Just now </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">
                                                                <div class=\"col1\">
                                                                    <div class=\"cont\">
                                                                        <div class=\"cont-col1\">
                                                                            <div class=\"label label-sm label-success\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"cont-col2\">
                                                                            <div class=\"desc\">  ";
        // line 1002
        echo $this->extensions['Mgilet\NotificationBundle\Twig\NotificationExtension']->countNotifications(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1002, $this->source); })()), "user", [], "any", false, false, false, 1002));
        echo " </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col2\">
                                                                    <div class=\"date\"> Just now </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">
                                                                <div class=\"col1\">
                                                                    <div class=\"cont\">
                                                                        <div class=\"cont-col1\">
                                                                            <div class=\"label label-sm label-success\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"cont-col2\">
                                                                            <div class=\"desc\">  ";
        // line 1021
        echo $this->extensions['Mgilet\NotificationBundle\Twig\NotificationExtension']->countNotifications(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1021, $this->source); })()), "user", [], "any", false, false, false, 1021));
        echo "</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col2\">
                                                                    <div class=\"date\"> Just now </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                           
                                                <!--end: widget 1-3 -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"portlet light portlet-fit bordered\">
                                    <div class=\"portlet-title\">
                                        <div class=\"caption\">
                                            <i class=\"icon-microphone font-dark hide\"></i>
                                            <span class=\"caption-subject bold font-dark uppercase\"> Recent Works</span>
                                            <span class=\"caption-helper\">default option...</span>
                                        </div>
                                        
                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>          
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                
         ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1086
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1087
        echo "        
                <script src=\"";
        // line 1088
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1089
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1090
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1091
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1092
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1093
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"";
        // line 1096
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/moment.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1097
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1098
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/morris/morris.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1099
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/morris/raphael-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/counterup/jquery.waypoints.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/amcharts/amcharts/amcharts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/amcharts/amcharts/serial.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/amcharts/amcharts/pie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/amcharts/amcharts/radar.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/amcharts/amcharts/themes/light.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/amcharts/amcharts/themes/patterns.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/amcharts/amcharts/themes/chalk.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/amcharts/ammap/ammap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/amcharts/ammap/maps/js/worldLow.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/amcharts/amstockcharts/amstock.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/horizontal-timeline/horizontal-timeline.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/flot/jquery.flot.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/flot/jquery.flot.resize.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/flot/jquery.flot.categories.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"";
        // line 1128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"";
        // line 1131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/scripts/dashboard.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=\"";
        // line 1134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/scripts/demo.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/global/scripts/quick-nav.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
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
        return "@Gincident/admin/statistique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1577 => 1137,  1573 => 1136,  1569 => 1135,  1565 => 1134,  1559 => 1131,  1553 => 1128,  1547 => 1125,  1543 => 1124,  1539 => 1123,  1535 => 1122,  1531 => 1121,  1527 => 1120,  1523 => 1119,  1519 => 1118,  1515 => 1117,  1511 => 1116,  1507 => 1115,  1503 => 1114,  1499 => 1113,  1495 => 1112,  1491 => 1111,  1487 => 1110,  1483 => 1109,  1479 => 1108,  1475 => 1107,  1471 => 1106,  1467 => 1105,  1463 => 1104,  1459 => 1103,  1455 => 1102,  1451 => 1101,  1447 => 1100,  1443 => 1099,  1439 => 1098,  1435 => 1097,  1431 => 1096,  1425 => 1093,  1421 => 1092,  1417 => 1091,  1413 => 1090,  1409 => 1089,  1405 => 1088,  1402 => 1087,  1392 => 1086,  1335 => 1021,  1313 => 1002,  1291 => 983,  1269 => 964,  1247 => 945,  1225 => 926,  933 => 637,  879 => 586,  768 => 478,  613 => 326,  561 => 277,  439 => 166,  420 => 156,  417 => 155,  407 => 154,  388 => 144,  385 => 143,  375 => 142,  356 => 133,  353 => 132,  343 => 131,  324 => 122,  321 => 121,  311 => 120,  281 => 100,  270 => 91,  260 => 90,  250 => 88,  232 => 72,  212 => 55,  201 => 47,  193 => 42,  188 => 39,  185 => 38,  175 => 37,  161 => 32,  157 => 31,  153 => 30,  147 => 27,  143 => 26,  137 => 23,  133 => 22,  129 => 21,  125 => 20,  119 => 17,  115 => 16,  111 => 15,  107 => 14,  98 => 7,  88 => 6,  77 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends \"GincidentBundle::layout.html.twig\"%}

           {% block title %}
               <title>bienvenue</title>
     {% endblock %} 
      {% block stylesheets  %}
        <meta charset=\"utf-8\" />       
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"Preview page of Metronic Admin Theme #1 for statistics, charts, recent events and reports\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/morris/morris.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/fullcalendar/fullcalendar.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
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
                                        <a href=\"#\" class=\"nav-link \">
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
          
          
              
                        
                        
                    
                        <!-- END THEME PANEL -->
                        <!-- BEGIN PAGE BAR -->
                        <div class=\"page-bar\">
                            <ul class=\"page-breadcrumb\">
                                <li>
                                    <a href=\"index.html\">Home</a>
                                    <i class=\"fa fa-circle\"></i>
                                </li>
                                <li>
                                    <span>Dashboard</span>
                                </li>
                            </ul>
                            <div class=\"page-toolbar\">
                                <div id=\"dashboard-report-range\" class=\"pull-right tooltips btn btn-sm\" data-container=\"body\" data-placement=\"bottom\" data-original-title=\"Change dashboard date range\">
                                    <i class=\"icon-calendar\"></i>&nbsp;
                                    <span class=\"thin uppercase hidden-xs\"></span>&nbsp;
                                    <i class=\"fa fa-angle-down\"></i>
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class=\"page-title\"> Admin Dashboard 
                            <small>statistics, charts, recent events and reports</small>
                        </h1>
                       
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN DASHBOARD STATS 1-->
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                                <a class=\"dashboard-stat dashboard-stat-v2 blue\" href=\"#\">
                                    <div class=\"visual\">
                                        <i class=\"fa fa-comments\"></i>
                                    </div>
                                    <div class=\"details\">
                                        <div class=\"number\">
                                            <span data-counter=\"counterup\" data-value=\"1349\">0</span>
                                        </div>
                                        <div class=\"desc\"> New Feedbacks </div>
                                    </div>
                                </a>
                            </div>
                            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                                <a class=\"dashboard-stat dashboard-stat-v2 red\" href=\"#\">
                                    <div class=\"visual\">
                                        <i class=\"fa fa-bar-chart-o\"></i>
                                    </div>
                                    <div class=\"details\">
                                        <div class=\"number\">
                                            <span data-counter=\"counterup\" data-value=\"12,5\">0</span>M\$ </div>
                                        <div class=\"desc\"> Total Profit </div>
                                    </div>
                                </a>
                            </div>
                            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                                <a class=\"dashboard-stat dashboard-stat-v2 green\" href=\"#\">
                                    <div class=\"visual\">
                                        <i class=\"fa fa-shopping-cart\"></i>
                                    </div>
                                    <div class=\"details\">
                                        <div class=\"number\">
                                            <span data-counter=\"counterup\" data-value=\"549\">0</span>
                                        </div>
                                        <div class=\"desc\"> New Orders </div>
                                    </div>
                                </a>
                            </div>
                            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                                <a class=\"dashboard-stat dashboard-stat-v2 purple\" href=\"#\">
                                    <div class=\"visual\">
                                        <i class=\"fa fa-globe\"></i>
                                    </div>
                                    <div class=\"details\">
                                        <div class=\"number\"> +
                                            <span data-counter=\"counterup\" data-value=\"89\"></span>% </div>
                                        <div class=\"desc\"> Brand Popularity </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                        <!-- END DASHBOARD STATS 1-->
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                                <!-- BEGIN PORTLET-->
                                <div class=\"portlet light bordered\">
                                    <div class=\"portlet-title\">
                                        <div class=\"caption\">
                                            <i class=\"icon-bar-chart font-dark hide\"></i>
                                            <span class=\"caption-subject font-dark bold uppercase\">Site Visits</span>
                                            <span class=\"caption-helper\">weekly stats...</span>
                                        </div>
                                        <div class=\"actions\">
                                            <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                                                <label class=\"btn red btn-outline btn-circle btn-sm active\">
                                                    <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option1\">New</label>
                                                <label class=\"btn red btn-outline btn-circle btn-sm\">
                                                    <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option2\">Returning</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"portlet-body\">
                                        <div id=\"site_statistics_loading\">
                                            <img src=\"{{ asset('assets/global/img/loading.gif')}}\" alt=\"loading\" /> </div>
                                        <div id=\"site_statistics_content\" class=\"display-none\">
                                            <div id=\"site_statistics\" class=\"chart\"> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PORTLET-->
                            </div>
                            <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                                <!-- BEGIN PORTLET-->
                                <div class=\"portlet light bordered\">
                                    <div class=\"portlet-title\">
                                        <div class=\"caption\">
                                            <i class=\"icon-share font-red-sunglo hide\"></i>
                                            <span class=\"caption-subject font-dark bold uppercase\">Revenue</span>
                                            <span class=\"caption-helper\">monthly stats...</span>
                                        </div>
                                        <div class=\"actions\">
                                            <div class=\"btn-group\">
                                                <a href=\"\" class=\"btn dark btn-outline btn-circle btn-sm dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\"> Filter Range
                                                    <span class=\"fa fa-angle-down\"> </span>
                                                </a>
                                                <ul class=\"dropdown-menu pull-right\">
                                                    <li>
                                                        <a href=\"javascript:;\"> Q1 2014
                                                            <span class=\"label label-sm label-default\"> past </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:;\"> Q2 2014
                                                            <span class=\"label label-sm label-default\"> past </span>
                                                        </a>
                                                    </li>
                                                    <li class=\"active\">
                                                        <a href=\"javascript:;\"> Q3 2014
                                                            <span class=\"label label-sm label-success\"> current </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:;\"> Q4 2014
                                                            <span class=\"label label-sm label-warning\"> upcoming </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"portlet-body\">
                                        <div id=\"site_activities_loading\">
                                            <img src=\"{{ asset('assets/global/img/loading.gif')}}\" alt=\"loading\" /> </div>
                                        <div id=\"site_activities_content\" class=\"display-none\">
                                            <div id=\"site_activities\" style=\"height: 228px;\"> </div>
                                        </div>
                                        <div style=\"margin: 20px 0 10px 30px\">
                                            <div class=\"row\">
                                                <div class=\"col-md-3 col-sm-3 col-xs-6 text-stat\">
                                                    <span class=\"label label-sm label-success\"> Revenue: </span>
                                                    <h3>\$13,234</h3>
                                                </div>
                                                <div class=\"col-md-3 col-sm-3 col-xs-6 text-stat\">
                                                    <span class=\"label label-sm label-info\"> Tax: </span>
                                                    <h3>\$134,900</h3>
                                                </div>
                                                <div class=\"col-md-3 col-sm-3 col-xs-6 text-stat\">
                                                    <span class=\"label label-sm label-danger\"> Shipment: </span>
                                                    <h3>\$1,134</h3>
                                                </div>
                                                <div class=\"col-md-3 col-sm-3 col-xs-6 text-stat\">
                                                    <span class=\"label label-sm label-warning\"> Orders: </span>
                                                    <h3>235090</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PORTLET-->
                            </div>
                        </div>
                      
                   
                     
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                                <div class=\"portlet light bordered\">
                                    <div class=\"portlet-title\">
                                        <div class=\"caption\">
                                            <i class=\"icon-cursor font-dark hide\"></i>
                                            <span class=\"caption-subject font-dark bold uppercase\">General Stats</span>
                                        </div>
                                        <div class=\"actions\">
                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-circle red easy-pie-chart-reload\">
                                                <i class=\"fa fa-repeat\"></i> Reload </a>
                                        </div>
                                    </div>
                                    <div class=\"portlet-body\">
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"easy-pie-chart\">
                                                    <div class=\"number transactions\" data-percent=\"55\">
                                                        <span>+55</span>% </div>
                                                    <a class=\"title\" href=\"javascript:;\"> Transactions
                                                        <i class=\"icon-arrow-right\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"margin-bottom-10 visible-sm\"> </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"easy-pie-chart\">
                                                    <div class=\"number visits\" data-percent=\"85\">
                                                        <span>+85</span>% </div>
                                                    <a class=\"title\" href=\"javascript:;\"> New Visits
                                                        <i class=\"icon-arrow-right\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"margin-bottom-10 visible-sm\"> </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"easy-pie-chart\">
                                                    <div class=\"number bounce\" data-percent=\"46\">
                                                        <span>-46</span>% </div>
                                                    <a class=\"title\" href=\"javascript:;\"> Bounce
                                                        <i class=\"icon-arrow-right\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                                <div class=\"portlet light bordered\">
                                    <div class=\"portlet-title\">
                                        <div class=\"caption\">
                                            <i class=\"icon-equalizer font-dark hide\"></i>
                                            <span class=\"caption-subject font-dark bold uppercase\">Server Stats</span>
                                            <span class=\"caption-helper\">monthly stats...</span>
                                        </div>
                                        <div class=\"tools\">
                                            <a href=\"\" class=\"collapse\"> </a>
                                            <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                            <a href=\"\" class=\"reload\"> </a>
                                            <a href=\"\" class=\"remove\"> </a>
                                        </div>
                                    </div>
                                    <div class=\"portlet-body\">
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"sparkline-chart\">
                                                    <div class=\"number\" id=\"sparkline_bar5\"></div>
                                                    <a class=\"title\" href=\"javascript:;\"> Network
                                                        <i class=\"icon-arrow-right\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"margin-bottom-10 visible-sm\"> </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"sparkline-chart\">
                                                    <div class=\"number\" id=\"sparkline_bar6\"></div>
                                                    <a class=\"title\" href=\"javascript:;\"> CPU Load
                                                        <i class=\"icon-arrow-right\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"margin-bottom-10 visible-sm\"> </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"sparkline-chart\">
                                                    <div class=\"number\" id=\"sparkline_line\"></div>
                                                    <a class=\"title\" href=\"javascript:;\"> Load Rate
                                                        <i class=\"icon-arrow-right\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                                <!-- BEGIN REGIONAL STATS PORTLET-->
                                <div class=\"portlet light bordered\">
                                    <div class=\"portlet-title\">
                                        <div class=\"caption\">
                                            <i class=\"icon-share font-dark hide\"></i>
                                            <span class=\"caption-subject font-dark bold uppercase\">Regional Stats</span>
                                        </div>
                                        <div class=\"actions\">
                                            <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                <i class=\"icon-cloud-upload\"></i>
                                            </a>
                                            <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                <i class=\"icon-wrench\"></i>
                                            </a>
                                            <a class=\"btn btn-circle btn-icon-only btn-default fullscreen\" data-container=\"false\" data-placement=\"bottom\" href=\"javascript:;\"> </a>
                                            <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                <i class=\"icon-trash\"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"portlet-body\">
                                        <div id=\"region_statistics_loading\">
                                            <img src=\"{{ asset('assets/global/img/loading.gif')}}\" alt=\"loading\" /> </div>
                                        <div id=\"region_statistics_content\" class=\"display-none\">
                                            <div class=\"btn-toolbar margin-bottom-10\">
                                                <div class=\"btn-group btn-group-circle\" data-toggle=\"buttons\">
                                                    <a href=\"\" class=\"btn grey-salsa btn-sm active\"> Users </a>
                                                    <a href=\"\" class=\"btn grey-salsa btn-sm\"> Orders </a>
                                                </div>
                                                <div class=\"btn-group pull-right\">
                                                    <a href=\"\" class=\"btn btn-circle grey-salsa btn-sm dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\"> Select Region
                                                        <span class=\"fa fa-angle-down\"> </span>
                                                    </a>
                                                    <ul class=\"dropdown-menu pull-right\">
                                                        <li>
                                                            <a href=\"javascript:;\" id=\"regional_stat_world\"> World </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\" id=\"regional_stat_usa\"> USA </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\" id=\"regional_stat_europe\"> Europe </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\" id=\"regional_stat_russia\"> Russia </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\" id=\"regional_stat_germany\"> Germany </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div id=\"vmap_world\" class=\"vmaps display-none\"> </div>
                                            <div id=\"vmap_usa\" class=\"vmaps display-none\"> </div>
                                            <div id=\"vmap_europe\" class=\"vmaps display-none\"> </div>
                                            <div id=\"vmap_russia\" class=\"vmaps display-none\"> </div>
                                            <div id=\"vmap_germany\" class=\"vmaps display-none\"> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END REGIONAL STATS PORTLET-->
                            </div>
                            <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                                <!-- BEGIN PORTLET-->
                                <div class=\"portlet light bordered\">
                                    <div class=\"portlet-title tabbable-line\">
                                        <div class=\"caption\">
                                            <i class=\"icon-globe font-dark hide\"></i>
                                            <span class=\"caption-subject font-dark bold uppercase\">Feeds</span>
                                        </div>
                                        <ul class=\"nav nav-tabs\">
                                            <li class=\"active\">
                                                <a href=\"#tab_1_1\" class=\"active\" data-toggle=\"tab\"> System </a>
                                            </li>
                                            <li>
                                                <a href=\"#tab_1_2\" data-toggle=\"tab\"> Activities </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"portlet-body\">
                                        <!--BEGIN TABS-->
                                        <div class=\"tab-content\">
                                            <div class=\"tab-pane active\" id=\"tab_1_1\">
                                                <div class=\"scroller\" style=\"height: 339px;\" data-always-visible=\"1\" data-rail-visible=\"0\">
                                                    <ul class=\"feeds\">
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-success\">
                                                                            <i class=\"fa fa-bell-o\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> You have 4 pending tasks.
                                                                            <span class=\"label label-sm label-info\"> Take action
                                                                                <i class=\"fa fa-share\"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> Just now </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">
                                                                <div class=\"col1\">
                                                                    <div class=\"cont\">
                                                                        <div class=\"cont-col1\">
                                                                            <div class=\"label label-sm label-success\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"cont-col2\">
                                                                            <div class=\"desc\"> New version v1.4 just lunched! </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col2\">
                                                                    <div class=\"date\"> 20 mins </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                   
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\">  {{ mgilet_notification_count(app.user) }} </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 24 mins </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-info\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 30 mins </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-success\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 40 mins </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-warning\">
                                                                            <i class=\"fa fa-plus\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> {{ mgilet_notification_render(app.user ,{'seen': true }) }} </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 1.5 hours </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-success\">
                                                                            <i class=\"fa fa-bell-o\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> Web server hardware needs to be upgraded.
                                                                            <span class=\"label label-sm label-default \"> Overdue </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 2 hours </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-default\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 3 hours </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-warning\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 5 hours </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-info\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 18 hours </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-default\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 21 hours </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-info\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 22 hours </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-default\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 21 hours </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-info\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 22 hours </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-default\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 21 hours </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-info\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 22 hours </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-default\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 21 hours </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-info\">
                                                                            <i class=\"fa fa-bullhorn\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> New order received. Please take care of it. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 22 hours </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"tab-pane\" id=\"tab_1_2\">
                                                <div class=\"scroller\" style=\"height: 290px;\" data-always-visible=\"1\" data-rail-visible1=\"1\">
                                                    <ul class=\"feeds\">
                                                        <li>
                                                            <a href=\"javascript:;\">
                                                                <div class=\"col1\">
                                                                    <div class=\"cont\">
                                                                        <div class=\"cont-col1\">
                                                                            <div class=\"label label-sm label-success\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"cont-col2\">
                                                                            <div class=\"desc\">  </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col2\">
                                                                    <div class=\"date\"> Just now </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">
                                                                <div class=\"col1\">
                                                                    <div class=\"cont\">
                                                                        <div class=\"cont-col1\">
                                                                            <div class=\"label label-sm label-success\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"cont-col2\">
                                                                            <div class=\"desc\"> New order received </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col2\">
                                                                    <div class=\"date\"> 10 mins </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class=\"col1\">
                                                                <div class=\"cont\">
                                                                    <div class=\"cont-col1\">
                                                                        <div class=\"label label-sm label-danger\">
                                                                            <i class=\"fa fa-bolt\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cont-col2\">
                                                                        <div class=\"desc\"> Order #24DOP4 has been rejected.
                                                                            <span class=\"label label-sm label-danger \"> Take action
                                                                                <i class=\"fa fa-share\"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col2\">
                                                                <div class=\"date\"> 24 mins </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">
                                                                <div class=\"col1\">
                                                                    <div class=\"cont\">
                                                                        <div class=\"cont-col1\">
                                                                            <div class=\"label label-sm label-success\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"cont-col2\">
                                                                            <div class=\"desc\">  {{ mgilet_notification_count(app.user) }}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col2\">
                                                                    <div class=\"date\"> Just now </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">
                                                                <div class=\"col1\">
                                                                    <div class=\"cont\">
                                                                        <div class=\"cont-col1\">
                                                                            <div class=\"label label-sm label-success\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"cont-col2\">
                                                                            <div class=\"desc\"> {{ mgilet_notification_count(app.user) }}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col2\">
                                                                    <div class=\"date\"> Just now </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">
                                                                <div class=\"col1\">
                                                                    <div class=\"cont\">
                                                                        <div class=\"cont-col1\">
                                                                            <div class=\"label label-sm label-success\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"cont-col2\">
                                                                            <div class=\"desc\"> {{ mgilet_notification_count(app.user) }} </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col2\">
                                                                    <div class=\"date\"> Just now </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">
                                                                <div class=\"col1\">
                                                                    <div class=\"cont\">
                                                                        <div class=\"cont-col1\">
                                                                            <div class=\"label label-sm label-success\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"cont-col2\">
                                                                            <div class=\"desc\">  {{ mgilet_notification_count(app.user) }} </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col2\">
                                                                    <div class=\"date\"> Just now </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">
                                                                <div class=\"col1\">
                                                                    <div class=\"cont\">
                                                                        <div class=\"cont-col1\">
                                                                            <div class=\"label label-sm label-success\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"cont-col2\">
                                                                            <div class=\"desc\">  {{ mgilet_notification_count(app.user) }} </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col2\">
                                                                    <div class=\"date\"> Just now </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">
                                                                <div class=\"col1\">
                                                                    <div class=\"cont\">
                                                                        <div class=\"cont-col1\">
                                                                            <div class=\"label label-sm label-success\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"cont-col2\">
                                                                            <div class=\"desc\">  {{ mgilet_notification_count(app.user) }}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col2\">
                                                                    <div class=\"date\"> Just now </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                           
                                                <!--end: widget 1-3 -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"portlet light portlet-fit bordered\">
                                    <div class=\"portlet-title\">
                                        <div class=\"caption\">
                                            <i class=\"icon-microphone font-dark hide\"></i>
                                            <span class=\"caption-subject bold font-dark uppercase\"> Recent Works</span>
                                            <span class=\"caption-helper\">default option...</span>
                                        </div>
                                        
                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>          
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                
         {% endblock %} 
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
                   {% block javascripts %}
        
                <script src=\"{{ asset('assets/global/plugins/jquery.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/js.cookie.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/jquery.blockui.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"{{ asset('assets/global/plugins/moment.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/morris/morris.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/morris/raphael-min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/counterup/jquery.waypoints.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/counterup/jquery.counterup.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/amcharts/amcharts/amcharts.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/amcharts/amcharts/serial.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/amcharts/amcharts/pie.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/amcharts/amcharts/radar.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/amcharts/amcharts/themes/light.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/amcharts/amcharts/themes/patterns.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/amcharts/amcharts/themes/chalk.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/amcharts/ammap/ammap.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/amcharts/ammap/maps/js/worldLow.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/amcharts/amstockcharts/amstock.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/fullcalendar/fullcalendar.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/horizontal-timeline/horizontal-timeline.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/flot/jquery.flot.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/flot/jquery.flot.resize.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/flot/jquery.flot.categories.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/jquery.sparkline.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')}}\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"{{ asset('assets/global/scripts/app.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"{{ asset('assets/pages/scripts/dashboard.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=\"{{ asset('assets/layouts/layout/scripts/layout.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/layouts/layout/scripts/demo.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/layouts/global/scripts/quick-sidebar.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/layouts/global/scripts/quick-nav.min.js')}}\" type=\"text/javascript\"></script>
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
        
          {% endblock %} ", "@Gincident/admin/statistique.html.twig", "C:\\wamp64\\www\\kc_prod\\src\\GincidentBundle\\Resources\\views\\admin\\statistique.html.twig");
    }
}
