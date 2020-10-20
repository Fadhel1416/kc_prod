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

/* GincidentBundle:admin:modifier_fr.html.twig */
class __TwigTemplate_97860a25cc1854302ad9513c4cb02b0ae1da5b174f9a5a21e76faec8024a559b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GincidentBundle:admin:modifier_fr.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GincidentBundle:admin:modifier_fr.html.twig"));

        $this->parent = $this->loadTemplate("GincidentBundle::layout.html.twig", "GincidentBundle:admin:modifier_fr.html.twig", 1);
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
        echo "               <title>modifier fournisseur</title>
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
        echo "       
    <meta charset=\"utf-8\" />
        <title></title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"Preview page of Metronic Admin Theme #1 for bootstrap inputs, input groups, custom checkboxes and radio controls and more\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/css/components-rounded.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/css/layout.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/css/themes/darkblue.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\" />
                 <style>
 .inp {
  display: block;
  height:10%;

}
input:focus::-webkit-input-placeholder { color:transparent; }
input:focus:-moz-placeholder { color:transparent; }
input:focus::-moz-placeholder { color:transparent; }
input:focus:-ms-input-placeholder { color:transparent; }

textarea:focus::-webkit-input-placeholder { color:transparent; }
textarea:focus:-moz-placeholder { color:transparent; }
textarea:focus::-moz-placeholder { color:transparent; }
textarea:focus:-ms-input-placeholder { color:transparent; }

input::-webkit-input-placeholder { color: #adadad;}
input:-moz-placeholder { color: #adadad;}
input::-moz-placeholder { color: #adadad;}
input:-ms-input-placeholder { color: #adadad;}

textarea::-webkit-input-placeholder { color: #adadad;}
textarea:-moz-placeholder { color: #adadad;}
textarea::-moz-placeholder { color: #adadad;}
textarea:-ms-input-placeholder { color: #adadad;}
.contact100-form {
 
  flex-wrap: wrap;
  justify-content: space-between;
}

.contact100-form-title {
  display: block;
  width: 100%;
  font-family: Raleway-Black;
  font-size: 30px;
  color: #333333;
  line-height: 1.2;
  text-transform: uppercase;
  text-align: left;
}
.but{
    background-color: #00FF7F;
    width:120;
    color:white;
    margin-top: 20px;
    
}
.but2{
    background-color: #FF0000;
    width:120;
    color:white;
    margin-top: 20px;

}
.pf{
    background-color: #2F4F4F;
    width:1090;
    color:white;
    margin-top: 20px;
    display:block;
    height:100;
    text-align: center;
    padding-top: 10px;
    
}
            
            
            </style>
        
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block_megamenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "megamenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "megamenu"));

        // line 105
        echo "              ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 106
            echo "                <div class=\"hor-menu   hidden-sm hidden-xs\">
                        <ul class=\"nav navbar-nav\">                 
                            <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"";
            // line 109
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_daschboard");
            echo "\"> Menu Administrateur
                                    <span class=\"selected\"> </span>
                                </a>
                            </li>
                            <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"";
            // line 114
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_userliste");
            echo "\"> Utilisateur
                                    <span class=\"selected\"> </span>
                                </a>
                            </li>
                        
                       
                                
                             <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"";
            // line 122
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
            // line 139
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
        // line 155
        echo "          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 156
    public function block_daschboard($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "daschboard"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "daschboard"));

        // line 157
        echo "           <li class=\"nav-item start\">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-home\"></i>
                                    <span class=\"title\">Acceuil</span>
                                    <span class=\"selected\"></span>
                                    <span class=\"arrow open\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item start open\">
                                        <a href=\"";
        // line 166
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

    // line 186
    public function block_Client($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Client"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Client"));

        // line 187
        echo "              <li class=\"nav-item\">
                                <a href=\"";
        // line 188
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

    // line 197
    public function block_produit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produit"));

        // line 198
        echo "              <li class=\"nav-item\">
                                <a href=\"";
        // line 199
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

    // line 208
    public function block_fournisseur($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fournisseur"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fournisseur"));

        // line 209
        echo "                   <li class=\"nav-item \">
                            <a href=\"";
        // line 210
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

    // line 220
    public function block_famille($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "famille"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "famille"));

        // line 221
        echo "                   <li class=\"nav-item \">
                                <a href=\"";
        // line 222
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

    // line 232
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo "  

   <div class=\"page-bar\">
     
        <div class=\"page-toolbar\">
            <div class=\"btn-group \">

                <span class=\"  pf \"><h1><marquee behavior=\"alternate\" scrollamount=\"10\" >Modifier Fournisseur</marquee></h1></span>

            </div>
        </div>
    </div>
\t<div class=\"well\">
\t\t
 
    ";
        // line 247
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), 'form_start', ["attr" => ["class" => "contact100-form validate-form"]]);
        echo "
       
       <div class=\"wrap-input100 rs1-wrap-input100 validate-input\">
       <div class=\"row\">
\t    <div class=\"col-sm-5\">
        Nom du Fournisseur
        </div>
     <div class=\"col-sm-5\">
         ";
        // line 255
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 255, $this->source); })()), "name", [], "any", false, false, false, 255), 'errors');
        echo "
        ";
        // line 256
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 256, $this->source); })()), "name", [], "any", false, false, false, 256), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Nom Fournisseur"]]);
        echo "
        </div></div>
\t\t<br>
\t\t <div class=\"row\">
\t\t <div class=\"col-sm-5\">
\t\t Reference du Fournisseur
        </div>
\t\t<div class=\"col-sm-5\">
         ";
        // line 264
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 264, $this->source); })()), "reference", [], "any", false, false, false, 264), 'errors');
        echo "
        ";
        // line 265
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 265, $this->source); })()), "reference", [], "any", false, false, false, 265), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Reference Fournisseur"]]);
        echo "
        </div>
       </div>
\t   <br>
\t   <div class=\"row\">
\t\t <div class=\"col-sm-5\">
\t\t Code Tva du Fournisseur
        </div>
\t\t<div class=\"col-sm-5\">
         ";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 274, $this->source); })()), "codetva", [], "any", false, false, false, 274), 'errors');
        echo "
        ";
        // line 275
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 275, $this->source); })()), "codetva", [], "any", false, false, false, 275), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "code tva Fournisseur"]]);
        echo "
        </div>
       </div>
\t   <br>
\t  <div class=\"row\">
     <div class=\"col-sm-5\">
        Directeur commercial
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 285
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 285, $this->source); })()), "dircom_adr1", [], "any", false, false, false, 285), 'errors');
        echo "
        ";
        // line 286
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 286, $this->source); })()), "dircom_adr1", [], "any", false, false, false, 286), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Adresse Electronique 1"]]);
        echo "
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 290, $this->source); })()), "dircom_adr2", [], "any", false, false, false, 290), 'errors');
        echo "
        ";
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 291, $this->source); })()), "dircom_adr2", [], "any", false, false, false, 291), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Adresse Electronique 2"]]);
        echo "
        </div>
       </div>
\t   <br>
       <div class=\"row\">
     <div class=\"col-sm-5\">
        
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 301
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 301, $this->source); })()), "dircom_telfixe", [], "any", false, false, false, 301), 'errors');
        echo "
        ";
        // line 302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 302, $this->source); })()), "dircom_telfixe", [], "any", false, false, false, 302), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Téléphone Fixe"]]);
        echo "
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 306
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 306, $this->source); })()), "dircom_telmobile", [], "any", false, false, false, 306), 'errors');
        echo "
        ";
        // line 307
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 307, $this->source); })()), "dircom_telmobile", [], "any", false, false, false, 307), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Téléphone Portable"]]);
        echo "
        </div>
       </div>
\t     <br>
       <div class=\"row\">
     <div class=\"col-sm-5\">
        
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 317
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 317, $this->source); })()), "dircom_nomrue", [], "any", false, false, false, 317), 'errors');
        echo "
        ";
        // line 318
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 318, $this->source); })()), "dircom_nomrue", [], "any", false, false, false, 318), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Nom du Rue"]]);
        echo "
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 322
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 322, $this->source); })()), "dircom_numrue", [], "any", false, false, false, 322), 'errors');
        echo "
        ";
        // line 323
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 323, $this->source); })()), "dircom_numrue", [], "any", false, false, false, 323), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Numero du Rue"]]);
        echo "
        </div>
       </div>
         <br>
\t\t  <div class=\"row\">
     <div class=\"col-sm-5\">
        Directeur de Zone
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 333
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 333, $this->source); })()), "dirzone_adr1", [], "any", false, false, false, 333), 'errors');
        echo "
        ";
        // line 334
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), "dirzone_adr1", [], "any", false, false, false, 334), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Adresse Electronique 1"]]);
        echo "
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 338
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 338, $this->source); })()), "dirzone_adr2", [], "any", false, false, false, 338), 'errors');
        echo "
        ";
        // line 339
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 339, $this->source); })()), "dirzone_adr2", [], "any", false, false, false, 339), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Adresse Electronique 2"]]);
        echo "
        </div>
       </div>
\t   <br>
       <div class=\"row\">
     <div class=\"col-sm-5\">
        
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 349
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 349, $this->source); })()), "dirzone_telfixe", [], "any", false, false, false, 349), 'errors');
        echo "
        ";
        // line 350
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 350, $this->source); })()), "dirzone_telfixe", [], "any", false, false, false, 350), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Téléphone Fixe"]]);
        echo "
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 354
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 354, $this->source); })()), "dirzone_telmobile", [], "any", false, false, false, 354), 'errors');
        echo "
        ";
        // line 355
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 355, $this->source); })()), "dirzone_telmobile", [], "any", false, false, false, 355), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Téléphone Portable"]]);
        echo "
        </div>
       </div>
\t     <br>
       <div class=\"row\">
     <div class=\"col-sm-5\">
        
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 365
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 365, $this->source); })()), "dirzone_nomrue", [], "any", false, false, false, 365), 'errors');
        echo "
        ";
        // line 366
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 366, $this->source); })()), "dirzone_nomrue", [], "any", false, false, false, 366), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Nom du Rue"]]);
        echo "
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 370
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 370, $this->source); })()), "dirzone_numrue", [], "any", false, false, false, 370), 'errors');
        echo "
        ";
        // line 371
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 371, $this->source); })()), "dirzone_numrue", [], "any", false, false, false, 371), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Numero du Rue"]]);
        echo "
        </div>
       </div>
         <br>
\t\t \t  <div class=\"row\">
     <div class=\"col-sm-5\">
        Agent Commercial 1
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 381
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 381, $this->source); })()), "agentcom1_adr1", [], "any", false, false, false, 381), 'errors');
        echo "
        ";
        // line 382
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 382, $this->source); })()), "agentcom1_adr1", [], "any", false, false, false, 382), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Adresse Electronique 1"]]);
        echo "
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 386
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 386, $this->source); })()), "agentcom1_adr2", [], "any", false, false, false, 386), 'errors');
        echo "
        ";
        // line 387
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 387, $this->source); })()), "agentcom1_adr2", [], "any", false, false, false, 387), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Adresse Electronique 2"]]);
        echo "
        </div>
       </div>
\t   <br>
       <div class=\"row\">
     <div class=\"col-sm-5\">
        
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 397
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 397, $this->source); })()), "agentcom1_telfixe", [], "any", false, false, false, 397), 'errors');
        echo "
        ";
        // line 398
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 398, $this->source); })()), "agentcom1_telfixe", [], "any", false, false, false, 398), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Téléphone Fixe"]]);
        echo "
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 402
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 402, $this->source); })()), "agentcom1_telmobile", [], "any", false, false, false, 402), 'errors');
        echo "
        ";
        // line 403
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 403, $this->source); })()), "agentcom1_telmobile", [], "any", false, false, false, 403), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Téléphone Portable"]]);
        echo "
        </div>
       </div>
\t     <br>
       <div class=\"row\">
     <div class=\"col-sm-5\">
        
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 413
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 413, $this->source); })()), "agentcom1_nomrue", [], "any", false, false, false, 413), 'errors');
        echo "
        ";
        // line 414
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 414, $this->source); })()), "agentcom1_nomrue", [], "any", false, false, false, 414), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Nom du Rue"]]);
        echo "
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 418
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 418, $this->source); })()), "agentcom1_numrue", [], "any", false, false, false, 418), 'errors');
        echo "
        ";
        // line 419
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 419, $this->source); })()), "agentcom1_numrue", [], "any", false, false, false, 419), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Numero du Rue"]]);
        echo "
        </div>
       </div>
         <br>
\t\t \t \t  <div class=\"row\">
     <div class=\"col-sm-5\">
        Agent Commercial 2
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 429
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 429, $this->source); })()), "agentcom2_adr1", [], "any", false, false, false, 429), 'errors');
        echo "
        ";
        // line 430
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 430, $this->source); })()), "agentcom2_adr1", [], "any", false, false, false, 430), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Adresse Electronique 1"]]);
        echo "
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 434
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 434, $this->source); })()), "agentcom2_adr2", [], "any", false, false, false, 434), 'errors');
        echo "
        ";
        // line 435
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 435, $this->source); })()), "agentcom2_adr2", [], "any", false, false, false, 435), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Adresse Electronique 2"]]);
        echo "
        </div>
       </div>
\t   <br>
       <div class=\"row\">
     <div class=\"col-sm-5\">
        
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 445
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 445, $this->source); })()), "agentcom2_telfixe", [], "any", false, false, false, 445), 'errors');
        echo "
        ";
        // line 446
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 446, $this->source); })()), "agentcom2_telfixe", [], "any", false, false, false, 446), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Téléphone Fixe"]]);
        echo "
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 450
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 450, $this->source); })()), "agentcom2_telmobile", [], "any", false, false, false, 450), 'errors');
        echo "
        ";
        // line 451
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 451, $this->source); })()), "agentcom2_telmobile", [], "any", false, false, false, 451), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Téléphone Portable"]]);
        echo "
        </div>
       </div>
\t     <br>
       <div class=\"row\">
     <div class=\"col-sm-5\">
        
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 461
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 461, $this->source); })()), "agentcom2_nomrue", [], "any", false, false, false, 461), 'errors');
        echo "
        ";
        // line 462
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 462, $this->source); })()), "agentcom2_nomrue", [], "any", false, false, false, 462), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Nom du Rue"]]);
        echo "
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 466
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 466, $this->source); })()), "agentcom2_numrue", [], "any", false, false, false, 466), 'errors');
        echo "
        ";
        // line 467
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 467, $this->source); })()), "agentcom2_numrue", [], "any", false, false, false, 467), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Numero du Rue"]]);
        echo "
        </div>
       </div>
         <br>
\t\t \t\t \t \t  <div class=\"row\">
     <div class=\"col-sm-5\">
        Agent Commercial 3
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 477
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 477, $this->source); })()), "agentcom3_adr1", [], "any", false, false, false, 477), 'errors');
        echo "
        ";
        // line 478
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 478, $this->source); })()), "agentcom3_adr1", [], "any", false, false, false, 478), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Adresse Electronique 1"]]);
        echo "
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 482
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 482, $this->source); })()), "agentcom3_adr2", [], "any", false, false, false, 482), 'errors');
        echo "
        ";
        // line 483
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 483, $this->source); })()), "agentcom3_adr2", [], "any", false, false, false, 483), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Adresse Electronique 2"]]);
        echo "
        </div>
       </div>
\t   <br>
       <div class=\"row\">
     <div class=\"col-sm-5\">
        
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 493
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 493, $this->source); })()), "agentcom3_telfixe", [], "any", false, false, false, 493), 'errors');
        echo "
        ";
        // line 494
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 494, $this->source); })()), "agentcom3_telfixe", [], "any", false, false, false, 494), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Téléphone Fixe"]]);
        echo "
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 498
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 498, $this->source); })()), "agentcom3_telmobile", [], "any", false, false, false, 498), 'errors');
        echo "
        ";
        // line 499
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 499, $this->source); })()), "agentcom3_telmobile", [], "any", false, false, false, 499), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Téléphone Portable"]]);
        echo "
        </div>
       </div>
\t     <br>
       <div class=\"row\">
     <div class=\"col-sm-5\">
        
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 509
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 509, $this->source); })()), "agentcom3_nomrue", [], "any", false, false, false, 509), 'errors');
        echo "
        ";
        // line 510
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 510, $this->source); })()), "agentcom3_nomrue", [], "any", false, false, false, 510), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Nom du Rue"]]);
        echo "
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         ";
        // line 514
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 514, $this->source); })()), "agentcom3_numrue", [], "any", false, false, false, 514), 'errors');
        echo "
        ";
        // line 515
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 515, $this->source); })()), "agentcom3_numrue", [], "any", false, false, false, 515), 'widget', ["attr" => ["class" => "form-control inp  placeholder-no-fix", "placeholder" => "Numero du Rue"]]);
        echo "
        </div>
       </div>
         <br>
     
                 <br>

         
          
       <div class=\"row\">
       <div class=\"col-sm-1\">
       </div>
        <div class=\"col-sm-2\">
<div class=\"form-group\">
    <input type=\"submit\" value=\"Modifier\" class=\"btn but  btn-bg btn-lg\"> </div> </div>
     <div class=\"col-sm-4\">
 <div class=\"form-group\">
 <input type=\"reset\" value=\"Annuler\"  class=\"btn but2 btn-bg btn-lg\" />
    </div>
\t  </div></div>
         </div>
         
         
         
         
         
       
        
        
        
        
        
        
        
        
    ";
        // line 550
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 550, $this->source); })()), 'form_end');
        echo "
  

                </div>
       



  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 562
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 563
        echo "         
    <script src=\"";
        // line 564
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 565
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 566
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 567
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 568
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 569
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"";
        // line 572
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=\"";
        // line 575
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 576
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/scripts/demo.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 577
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 578
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
        return "GincidentBundle:admin:modifier_fr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1100 => 578,  1096 => 577,  1092 => 576,  1088 => 575,  1082 => 572,  1076 => 569,  1072 => 568,  1068 => 567,  1064 => 566,  1060 => 565,  1056 => 564,  1053 => 563,  1043 => 562,  1023 => 550,  985 => 515,  981 => 514,  974 => 510,  970 => 509,  957 => 499,  953 => 498,  946 => 494,  942 => 493,  929 => 483,  925 => 482,  918 => 478,  914 => 477,  901 => 467,  897 => 466,  890 => 462,  886 => 461,  873 => 451,  869 => 450,  862 => 446,  858 => 445,  845 => 435,  841 => 434,  834 => 430,  830 => 429,  817 => 419,  813 => 418,  806 => 414,  802 => 413,  789 => 403,  785 => 402,  778 => 398,  774 => 397,  761 => 387,  757 => 386,  750 => 382,  746 => 381,  733 => 371,  729 => 370,  722 => 366,  718 => 365,  705 => 355,  701 => 354,  694 => 350,  690 => 349,  677 => 339,  673 => 338,  666 => 334,  662 => 333,  649 => 323,  645 => 322,  638 => 318,  634 => 317,  621 => 307,  617 => 306,  610 => 302,  606 => 301,  593 => 291,  589 => 290,  582 => 286,  578 => 285,  565 => 275,  561 => 274,  549 => 265,  545 => 264,  534 => 256,  530 => 255,  519 => 247,  493 => 232,  474 => 222,  471 => 221,  461 => 220,  442 => 210,  439 => 209,  429 => 208,  410 => 199,  407 => 198,  397 => 197,  378 => 188,  375 => 187,  365 => 186,  335 => 166,  324 => 157,  314 => 156,  304 => 155,  286 => 139,  266 => 122,  255 => 114,  247 => 109,  242 => 106,  239 => 105,  229 => 104,  145 => 28,  141 => 27,  137 => 26,  131 => 23,  127 => 22,  121 => 19,  117 => 18,  113 => 17,  109 => 16,  98 => 7,  88 => 6,  77 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends \"GincidentBundle::layout.html.twig\"%}

{% block title %}
               <title>modifier fournisseur</title>
{% endblock %} 
      {% block stylesheets  %}
       
    <meta charset=\"utf-8\" />
        <title></title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"Preview page of Metronic Admin Theme #1 for bootstrap inputs, input groups, custom checkboxes and radio controls and more\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
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
                 <style>
 .inp {
  display: block;
  height:10%;

}
input:focus::-webkit-input-placeholder { color:transparent; }
input:focus:-moz-placeholder { color:transparent; }
input:focus::-moz-placeholder { color:transparent; }
input:focus:-ms-input-placeholder { color:transparent; }

textarea:focus::-webkit-input-placeholder { color:transparent; }
textarea:focus:-moz-placeholder { color:transparent; }
textarea:focus::-moz-placeholder { color:transparent; }
textarea:focus:-ms-input-placeholder { color:transparent; }

input::-webkit-input-placeholder { color: #adadad;}
input:-moz-placeholder { color: #adadad;}
input::-moz-placeholder { color: #adadad;}
input:-ms-input-placeholder { color: #adadad;}

textarea::-webkit-input-placeholder { color: #adadad;}
textarea:-moz-placeholder { color: #adadad;}
textarea::-moz-placeholder { color: #adadad;}
textarea:-ms-input-placeholder { color: #adadad;}
.contact100-form {
 
  flex-wrap: wrap;
  justify-content: space-between;
}

.contact100-form-title {
  display: block;
  width: 100%;
  font-family: Raleway-Black;
  font-size: 30px;
  color: #333333;
  line-height: 1.2;
  text-transform: uppercase;
  text-align: left;
}
.but{
    background-color: #00FF7F;
    width:120;
    color:white;
    margin-top: 20px;
    
}
.but2{
    background-color: #FF0000;
    width:120;
    color:white;
    margin-top: 20px;

}
.pf{
    background-color: #2F4F4F;
    width:1090;
    color:white;
    margin-top: 20px;
    display:block;
    height:100;
    text-align: center;
    padding-top: 10px;
    
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
           <li class=\"nav-item start\">
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

   <div class=\"page-bar\">
     
        <div class=\"page-toolbar\">
            <div class=\"btn-group \">

                <span class=\"  pf \"><h1><marquee behavior=\"alternate\" scrollamount=\"10\" >Modifier Fournisseur</marquee></h1></span>

            </div>
        </div>
    </div>
\t<div class=\"well\">
\t\t
 
    {{ form_start(form,{'attr': {'class': 'contact100-form validate-form'}}) }}
       
       <div class=\"wrap-input100 rs1-wrap-input100 validate-input\">
       <div class=\"row\">
\t    <div class=\"col-sm-5\">
        Nom du Fournisseur
        </div>
     <div class=\"col-sm-5\">
         {{form_errors(form.name)}}
        {{ form_widget(form.name,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Nom Fournisseur\"}}) }}
        </div></div>
\t\t<br>
\t\t <div class=\"row\">
\t\t <div class=\"col-sm-5\">
\t\t Reference du Fournisseur
        </div>
\t\t<div class=\"col-sm-5\">
         {{form_errors(form.reference)}}
        {{ form_widget(form.reference,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Reference Fournisseur\"}}) }}
        </div>
       </div>
\t   <br>
\t   <div class=\"row\">
\t\t <div class=\"col-sm-5\">
\t\t Code Tva du Fournisseur
        </div>
\t\t<div class=\"col-sm-5\">
         {{form_errors(form.codetva)}}
        {{ form_widget(form.codetva,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"code tva Fournisseur\"}}) }}
        </div>
       </div>
\t   <br>
\t  <div class=\"row\">
     <div class=\"col-sm-5\">
        Directeur commercial
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.dircom_adr1)}}
        {{ form_widget(form.dircom_adr1,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Adresse Electronique 1\"}}) }}
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.dircom_adr2)}}
        {{ form_widget(form.dircom_adr2,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Adresse Electronique 2\"}}) }}
        </div>
       </div>
\t   <br>
       <div class=\"row\">
     <div class=\"col-sm-5\">
        
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.dircom_telfixe)}}
        {{ form_widget(form.dircom_telfixe,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Téléphone Fixe\"}}) }}
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.dircom_telmobile)}}
        {{ form_widget(form.dircom_telmobile,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Téléphone Portable\"}}) }}
        </div>
       </div>
\t     <br>
       <div class=\"row\">
     <div class=\"col-sm-5\">
        
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.dircom_nomrue)}}
        {{ form_widget(form.dircom_nomrue,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Nom du Rue\"}}) }}
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.dircom_numrue)}}
        {{ form_widget(form.dircom_numrue,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Numero du Rue\"}}) }}
        </div>
       </div>
         <br>
\t\t  <div class=\"row\">
     <div class=\"col-sm-5\">
        Directeur de Zone
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.dirzone_adr1)}}
        {{ form_widget(form.dirzone_adr1,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Adresse Electronique 1\"}}) }}
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.dirzone_adr2)}}
        {{ form_widget(form.dirzone_adr2,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Adresse Electronique 2\"}}) }}
        </div>
       </div>
\t   <br>
       <div class=\"row\">
     <div class=\"col-sm-5\">
        
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.dirzone_telfixe)}}
        {{ form_widget(form.dirzone_telfixe,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Téléphone Fixe\"}}) }}
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.dirzone_telmobile)}}
        {{ form_widget(form.dirzone_telmobile,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Téléphone Portable\"}}) }}
        </div>
       </div>
\t     <br>
       <div class=\"row\">
     <div class=\"col-sm-5\">
        
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.dirzone_nomrue)}}
        {{ form_widget(form.dirzone_nomrue,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Nom du Rue\"}}) }}
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.dirzone_numrue)}}
        {{ form_widget(form.dirzone_numrue,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Numero du Rue\"}}) }}
        </div>
       </div>
         <br>
\t\t \t  <div class=\"row\">
     <div class=\"col-sm-5\">
        Agent Commercial 1
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.agentcom1_adr1)}}
        {{ form_widget(form.agentcom1_adr1,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Adresse Electronique 1\"}}) }}
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.agentcom1_adr2)}}
        {{ form_widget(form.agentcom1_adr2,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Adresse Electronique 2\"}}) }}
        </div>
       </div>
\t   <br>
       <div class=\"row\">
     <div class=\"col-sm-5\">
        
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.agentcom1_telfixe)}}
        {{ form_widget(form.agentcom1_telfixe,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Téléphone Fixe\"}}) }}
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.agentcom1_telmobile)}}
        {{ form_widget(form.agentcom1_telmobile,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Téléphone Portable\"}}) }}
        </div>
       </div>
\t     <br>
       <div class=\"row\">
     <div class=\"col-sm-5\">
        
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.agentcom1_nomrue)}}
        {{ form_widget(form.agentcom1_nomrue,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Nom du Rue\"}}) }}
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.agentcom1_numrue)}}
        {{ form_widget(form.agentcom1_numrue,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Numero du Rue\"}}) }}
        </div>
       </div>
         <br>
\t\t \t \t  <div class=\"row\">
     <div class=\"col-sm-5\">
        Agent Commercial 2
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.agentcom2_adr1)}}
        {{ form_widget(form.agentcom2_adr1,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Adresse Electronique 1\"}}) }}
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.agentcom2_adr2)}}
        {{ form_widget(form.agentcom2_adr2,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Adresse Electronique 2\"}}) }}
        </div>
       </div>
\t   <br>
       <div class=\"row\">
     <div class=\"col-sm-5\">
        
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.agentcom2_telfixe)}}
        {{ form_widget(form.agentcom2_telfixe,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Téléphone Fixe\"}}) }}
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.agentcom2_telmobile)}}
        {{ form_widget(form.agentcom2_telmobile,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Téléphone Portable\"}}) }}
        </div>
       </div>
\t     <br>
       <div class=\"row\">
     <div class=\"col-sm-5\">
        
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.agentcom2_nomrue)}}
        {{ form_widget(form.agentcom2_nomrue,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Nom du Rue\"}}) }}
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.agentcom2_numrue)}}
        {{ form_widget(form.agentcom2_numrue,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Numero du Rue\"}}) }}
        </div>
       </div>
         <br>
\t\t \t\t \t \t  <div class=\"row\">
     <div class=\"col-sm-5\">
        Agent Commercial 3
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.agentcom3_adr1)}}
        {{ form_widget(form.agentcom3_adr1,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Adresse Electronique 1\"}}) }}
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.agentcom3_adr2)}}
        {{ form_widget(form.agentcom3_adr2,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Adresse Electronique 2\"}}) }}
        </div>
       </div>
\t   <br>
       <div class=\"row\">
     <div class=\"col-sm-5\">
        
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.agentcom3_telfixe)}}
        {{ form_widget(form.agentcom3_telfixe,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Téléphone Fixe\"}}) }}
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.agentcom3_telmobile)}}
        {{ form_widget(form.agentcom3_telmobile,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Téléphone Portable\"}}) }}
        </div>
       </div>
\t     <br>
       <div class=\"row\">
     <div class=\"col-sm-5\">
        
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.agentcom3_nomrue)}}
        {{ form_widget(form.agentcom3_nomrue,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Nom du Rue\"}}) }}
        </div>
\t\t<div class=\"col-sm-3\">
\t\t
         {{form_errors(form.agentcom3_numrue)}}
        {{ form_widget(form.agentcom3_numrue,{'attr':{'class':'form-control inp  placeholder-no-fix','placeholder': \"Numero du Rue\"}}) }}
        </div>
       </div>
         <br>
     
                 <br>

         
          
       <div class=\"row\">
       <div class=\"col-sm-1\">
       </div>
        <div class=\"col-sm-2\">
<div class=\"form-group\">
    <input type=\"submit\" value=\"Modifier\" class=\"btn but  btn-bg btn-lg\"> </div> </div>
     <div class=\"col-sm-4\">
 <div class=\"form-group\">
 <input type=\"reset\" value=\"Annuler\"  class=\"btn but2 btn-bg btn-lg\" />
    </div>
\t  </div></div>
         </div>
         
         
         
         
         
       
        
        
        
        
        
        
        
        
    {{ form_end(form) }}
  

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
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"{{ asset('assets/global/scripts/app.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
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
                   
                   
                   
                   {% endblock %}   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    




















































    

", "GincidentBundle:admin:modifier_fr.html.twig", "C:\\wamp64\\www\\kc_prod\\src\\GincidentBundle/Resources/views/admin/modifier_fr.html.twig");
    }
}
