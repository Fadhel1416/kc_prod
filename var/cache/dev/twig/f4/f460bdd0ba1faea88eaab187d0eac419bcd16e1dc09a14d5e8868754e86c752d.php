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

/* @Gincident/admin/solutions.html.twig */
class __TwigTemplate_db19ebb26630e6dac2a421aea48c1128a7b297a3c52beeccd92c5b12ef32aecd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gincident/admin/solutions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gincident/admin/solutions.html.twig"));

        $this->parent = $this->loadTemplate("GincidentBundle::layout.html.twig", "@Gincident/admin/solutions.html.twig", 1);
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
        echo "               <title>affichage solutions</title>
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
.buttic{
    background-color: #778899;
    width:120;
    color:white;
    margin-top: 20px;
}
.buttic1{
    background-color: #00CED1;
    width:150;
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
.pft{
    background-color: #2F4F4F;
    width:170;
    color:white;
    height: 50px;

    margin-top: 20px;
    margin-left: 5px;

    height:100;
    text-align: center;
    padding-top: 10px;

}
.ptt{
  
    height:100;
    padding-top: 10px;

}
            
            
            </style>
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 137
    public function block_megamenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "megamenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "megamenu"));

        // line 138
        echo "              ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 139
            echo "                <div class=\"hor-menu   hidden-sm hidden-xs\">
                        <ul class=\"nav navbar-nav\">                 
                            <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"";
            // line 142
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_daschboard");
            echo "\"> Menu Administrateur
                                    <span class=\"selected\"> </span>
                                </a>
                            </li>
                            <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"";
            // line 147
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_userliste");
            echo "\"> Utilisateur
                                    <span class=\"selected\"> </span>
                                </a>
                            </li>
                        
                       
                                
                             <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"";
            // line 155
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
            // line 172
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
        // line 188
        echo "          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 190
    public function block_daschboard($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "daschboard"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "daschboard"));

        // line 191
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
        // line 200
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

    // line 220
    public function block_Client($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Client"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Client"));

        // line 221
        echo "              <li class=\"nav-item\">
                                <a href=\"";
        // line 222
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

    // line 231
    public function block_produit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produit"));

        // line 232
        echo "              <li class=\"nav-item\">
                                <a href=\"";
        // line 233
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

    // line 242
    public function block_fournisseur($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fournisseur"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fournisseur"));

        // line 243
        echo "                   <li class=\"nav-item \">
                            <a href=\"";
        // line 244
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

    // line 254
    public function block_famille($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "famille"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "famille"));

        // line 255
        echo "                   <li class=\"nav-item \">
                                <a href=\"";
        // line 256
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

    // line 267
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
\t   <div class=\"btn-group pull-left\">
\t   <br>
\t   <div class=\"row\">
\t   <div class=\"col-md-6\">
                                  
                                </div>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
                                  <a href=\"#\" target =\"_blank\"class=\"dt-button buttons-print btn dark btn-outline\"  onclick=\"imprime_bloc('fff');\">imprimer</a>
                  
                                </div>
\t   <div class=\"col-md-2\">
\t\t\t\t\t\t\t\t
                                  
                                </div>
                                <div class=\"col-md-2\">
                                    <a href=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_article_ajouter", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 288, $this->source); })()), "id", [], "any", false, false, false, 288)]), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-primary\">Ajouter Devise</a>
                                  
                                </div>
                            </div>
\t\t\t\t\t\t\t\t<div id=\"fff\">\t
        <div class=\"page-toolbar\">
            <div class=\"btn-group \">

                <span class=\"  pf \"><img src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/img/kc_prod.jpg"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo-default\"  width=\"170\" height=\"70\"></span>
           
       
            </div>
        </div>
      <br>
    
               
     <div class=\"well\" id=\"imp\">
\t 
\t 

                                                                <div class=\"portlet-body\">
                                                                    <div class=\"row static-info\">
                                                                        <div class=\"col-md-2 name\"> <b>Code:</b> </div>
                                                                        <div class=\"col-md-2 value\"> ";
        // line 311
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 311, $this->source); })()), "id", [], "any", false, false, false, 311), "html", null, true);
        echo "</div>
                                                                        <div class=\"col-md-2 name\"> <b>Nom:</b></div>
                                                                        <div class=\"col-md-2 value\">";
        // line 313
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 313, $this->source); })()), "name", [], "any", false, false, false, 313), "html", null, true);
        echo " </div>
                                                                    </div>
                                                                    
                                                                    <div class=\"row static-info\">
                                                                        <div class=\"col-md-2 name\"> <b>Prenom:</b> </div>
                                                                        <div class=\"col-md-2 value\"> ";
        // line 318
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 318, $this->source); })()), "prenom", [], "any", false, false, false, 318), "html", null, true);
        echo " </div>
                                                                        <div class=\"col-md-2 name\"> <b>Email:</b></div>
                                                                        <div class=\"col-md-2 value\"> ";
        // line 320
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 320, $this->source); })()), "email", [], "any", false, false, false, 320), "html", null, true);
        echo " </div>
                                                                    </div>
                                                                   
                                          
                                                                     <div class=\"row static-info\">
                                                                        <div class=\"col-md-2 name\"> <b> Adresse:</b></div>
                                                                        <div class=\"col-md-2 value\"> ";
        // line 326
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 326, $this->source); })()), "adresse", [], "any", false, false, false, 326), "html", null, true);
        echo " </div>
                                                                        <div class=\"col-md-2 name\"> <b> Code Postal:</b></div>
                                                                        <div class=\"col-md-2 value\"> ";
        // line 328
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 328, $this->source); })()), "code_postal", [], "any", false, false, false, 328), "html", null, true);
        echo " </div>
                                                                    </div>
                                                                    
                                                                    <div class=\"row static-info\">
                                                                        <div class=\"col-md-2 name\"> <b>Numero Rue:</b></div>
                                                                        <div class=\"col-md-2 value\"> ";
        // line 333
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 333, $this->source); })()), "num_rue", [], "any", false, false, false, 333), "html", null, true);
        echo " </div>
                                                                        <div class=\"col-md-2 name\"> <b>Nom Rue:</b></div>
                                                                        <div class=\"col-md-2 value\"> ";
        // line 335
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 335, $this->source); })()), "nom_rue", [], "any", false, false, false, 335), "html", null, true);
        echo " </div>
                                                                    </div>
                                                     
                                                                    <div class=\"row static-info\">
                                                                        <div class=\"col-md-2 name\"> <b>Tel fixe:</b></div>
                                                                        <div class=\"col-md-2 value\"> ";
        // line 340
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 340, $this->source); })()), "tel_fixe", [], "any", false, false, false, 340), "html", null, true);
        echo " </div>
                                                                        <div class=\"col-md-2 name\"> <b>Tel Mobile:</b></div>
                                                                        <div class=\"col-md-2 value\"> ";
        // line 342
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 342, $this->source); })()), "tel_mobile", [], "any", false, false, false, 342), "html", null, true);
        echo " </div>
                                                                    </div>

                                                                    <div class=\"row static-info\">
                                                                        <div class=\"col-md-2 name\"> <b> Date Livraison:</b></div>
                                                                        <div class=\"col-md-2 value\"> ";
        // line 347
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 347, $this->source); })()), "date_liv", [], "any", false, false, false, 347), "html", null, true);
        echo " </div>
                                                                    </div>
                                           
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t            <br>
                                                            ";
        // line 352
        if (((isset($context["device"]) || array_key_exists("device", $context) ? $context["device"] : (function () { throw new RuntimeError('Variable "device" does not exist.', 352, $this->source); })()) != null)) {
            echo "                                              
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table border=1  class=\"table table-striped table-bordered well\" id=\"sss\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Famille</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Sous Famille</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Niveau</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Decor</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>plaque</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Reference</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Dimension en mm</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Quantite</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>P.U € HT   </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>P.Total€ HT  </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>PDF Image</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 370
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["device"]) || array_key_exists("device", $context) ? $context["device"] : (function () { throw new RuntimeError('Variable "device" does not exist.', 370, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["devi"]) {
                // line 371
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 372
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devi"], "famille", [], "any", false, false, false, 372), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td >";
                // line 373
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devi"], "sousfamille", [], "any", false, false, false, 373), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 375
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devi"], "niveau", [], "any", false, false, false, 375), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 376
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devi"], "decor", [], "any", false, false, false, 376), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 377
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devi"], "plaque", [], "any", false, false, false, 377), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 378
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devi"], "ref", [], "any", false, false, false, 378), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 380
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devi"], "dim", [], "any", false, false, false, 380), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 381
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devi"], "qte", [], "any", false, false, false, 381), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 382
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devi"], "prxuni", [], "any", false, false, false, 382), "html", null, true);
                echo "       €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 383
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devi"], "totalprix", [], "any", false, false, false, 383), "html", null, true);
                echo "    €</td>
                                                                
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"";
                // line 386
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["devi"], "brochureFilename", [], "any", false, false, false, 386))), "html", null, true);
                echo "\" target=\"_blank\">Voir image (PDF)</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><a class=\"btn btn-icon-only red\" id=\"";
                // line 387
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devi"], "id", [], "any", false, false, false, 387), "html", null, true);
                echo "\" onClick=\" swal({
  title: '',
  text: 'Voulez vous vraiment supprimer cette devise pour ce client !',
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
                // line 402
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devi"], "famille", [], "any", false, false, false, 402), "html", null, true);
                echo "',
    'success'
  ).then(function (){window.location.replace('";
                // line 404
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_device_supprimer", ["id" => twig_get_attribute($this->env, $this->source, $context["devi"], "id", [], "any", false, false, false, 404), "idc" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 404, $this->source); })()), "id", [], "any", false, false, false, 404)]), "html", null, true);
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
})\"> <i class=\"fa fa-trash\"></i></a><a class=\"btn btn-icon-only yellow\" href=\"";
                // line 415
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_device_modifier", ["id" => twig_get_attribute($this->env, $this->source, $context["devi"], "id", [], "any", false, false, false, 415)]), "html", null, true);
                echo "\"> <i class=\"fa fa-edit\"></i></a>  </td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
                                                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['devi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 419
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <td rowspan=5 colspan=7></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <td rowspan=5 colspan=4> <table border=1  class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <tr><th colspan =2>Sous-total  € HT</th><th> ";
            // line 422
            echo twig_escape_filter($this->env, (isset($context["soustotal"]) || array_key_exists("soustotal", $context) ? $context["soustotal"] : (function () { throw new RuntimeError('Variable "soustotal" does not exist.', 422, $this->source); })()), "html", null, true);
            echo " €</th></tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <tr><th colspan =2>Frais de port  € HT  </th><th>";
            // line 423
            echo twig_escape_filter($this->env, (isset($context["fraisport"]) || array_key_exists("fraisport", $context) ? $context["fraisport"] : (function () { throw new RuntimeError('Variable "fraisport" does not exist.', 423, $this->source); })()), "html", null, true);
            echo " €</th></tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <tr><th colspan =2>Total  € HT </th>   <th>  ";
            // line 425
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 425, $this->source); })()), "html", null, true);
            echo " €</th></tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <tr><th colspan =2>TVA   20%</th><th>   ";
            // line 426
            echo twig_escape_filter($this->env, (isset($context["tva"]) || array_key_exists("tva", $context) ? $context["tva"] : (function () { throw new RuntimeError('Variable "tva" does not exist.', 426, $this->source); })()), "html", null, true);
            echo " €</th></tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <tr><th colspan =2>Total  € TTC</th><th> ";
            // line 427
            echo twig_escape_filter($this->env, (isset($context["ttc"]) || array_key_exists("ttc", $context) ? $context["ttc"] : (function () { throw new RuntimeError('Variable "ttc" does not exist.', 427, $this->source); })()), "html", null, true);
            echo " €</th></tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  </table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  </td></tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  </table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
        }
        // line 431
        echo "  
                                                            </div>
                                                         </div></div></div>
                     
  
  
  
  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 441
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 442
        echo "        
                <script src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/moment.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/morris/morris.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/morris/raphael-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/counterup/jquery.waypoints.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/amcharts/amcharts/amcharts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/amcharts/amcharts/serial.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/amcharts/amcharts/pie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/amcharts/amcharts/radar.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/amcharts/amcharts/themes/light.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/amcharts/amcharts/themes/patterns.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/amcharts/amcharts/themes/chalk.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/amcharts/ammap/ammap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/amcharts/ammap/maps/js/worldLow.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/amcharts/amstockcharts/amstock.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/horizontal-timeline/horizontal-timeline.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/flot/jquery.flot.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/flot/jquery.flot.resize.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/flot/jquery.flot.categories.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/scripts/dashboard.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/scripts/demo.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 492
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
        return "@Gincident/admin/solutions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1030 => 492,  1026 => 491,  1022 => 490,  1018 => 489,  1012 => 486,  1006 => 483,  1000 => 480,  996 => 479,  992 => 478,  988 => 477,  984 => 476,  980 => 475,  976 => 474,  972 => 473,  968 => 472,  964 => 471,  960 => 470,  956 => 469,  952 => 468,  948 => 467,  944 => 466,  940 => 465,  936 => 464,  932 => 463,  928 => 462,  924 => 461,  920 => 460,  916 => 459,  912 => 458,  908 => 457,  904 => 456,  900 => 455,  896 => 454,  892 => 453,  888 => 452,  884 => 451,  878 => 448,  874 => 447,  870 => 446,  866 => 445,  862 => 444,  858 => 443,  855 => 442,  845 => 441,  827 => 431,  819 => 427,  815 => 426,  811 => 425,  806 => 423,  802 => 422,  797 => 419,  787 => 415,  773 => 404,  768 => 402,  750 => 387,  746 => 386,  740 => 383,  736 => 382,  732 => 381,  728 => 380,  723 => 378,  719 => 377,  715 => 376,  711 => 375,  706 => 373,  702 => 372,  699 => 371,  695 => 370,  674 => 352,  666 => 347,  658 => 342,  653 => 340,  645 => 335,  640 => 333,  632 => 328,  627 => 326,  618 => 320,  613 => 318,  605 => 313,  600 => 311,  582 => 296,  571 => 288,  539 => 267,  520 => 256,  517 => 255,  507 => 254,  488 => 244,  485 => 243,  475 => 242,  456 => 233,  453 => 232,  443 => 231,  424 => 222,  421 => 221,  411 => 220,  381 => 200,  370 => 191,  360 => 190,  350 => 188,  332 => 172,  312 => 155,  301 => 147,  293 => 142,  288 => 139,  285 => 138,  275 => 137,  161 => 32,  157 => 31,  153 => 30,  147 => 27,  143 => 26,  137 => 23,  133 => 22,  129 => 21,  125 => 20,  119 => 17,  115 => 16,  111 => 15,  107 => 14,  98 => 7,  88 => 6,  77 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends \"GincidentBundle::layout.html.twig\"%}

           {% block title %}
               <title>affichage solutions</title>
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
.buttic{
    background-color: #778899;
    width:120;
    color:white;
    margin-top: 20px;
}
.buttic1{
    background-color: #00CED1;
    width:150;
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
.pft{
    background-color: #2F4F4F;
    width:170;
    color:white;
    height: 50px;

    margin-top: 20px;
    margin-left: 5px;

    height:100;
    text-align: center;
    padding-top: 10px;

}
.ptt{
  
    height:100;
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
          
                
                           
<div class=\"page-bar\">
      <div class=\"page-toolbar\">
\t   <div class=\"btn-group pull-left\">
\t   <br>
\t   <div class=\"row\">
\t   <div class=\"col-md-6\">
                                  
                                </div>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
                                  <a href=\"#\" target =\"_blank\"class=\"dt-button buttons-print btn dark btn-outline\"  onclick=\"imprime_bloc('fff');\">imprimer</a>
                  
                                </div>
\t   <div class=\"col-md-2\">
\t\t\t\t\t\t\t\t
                                  
                                </div>
                                <div class=\"col-md-2\">
                                    <a href=\"{{path('gincident_admin_article_ajouter',{'id':client.id})}}\" type=\"button\" class=\"btn btn-primary\">Ajouter Devise</a>
                                  
                                </div>
                            </div>
\t\t\t\t\t\t\t\t<div id=\"fff\">\t
        <div class=\"page-toolbar\">
            <div class=\"btn-group \">

                <span class=\"  pf \"><img src=\"{{ asset('assets/layouts/layout/img/kc_prod.jpg')}}\" alt=\"logo\" class=\"logo-default\"  width=\"170\" height=\"70\"></span>
           
       
            </div>
        </div>
      <br>
    
               
     <div class=\"well\" id=\"imp\">
\t 
\t 

                                                                <div class=\"portlet-body\">
                                                                    <div class=\"row static-info\">
                                                                        <div class=\"col-md-2 name\"> <b>Code:</b> </div>
                                                                        <div class=\"col-md-2 value\"> {{client.id}}</div>
                                                                        <div class=\"col-md-2 name\"> <b>Nom:</b></div>
                                                                        <div class=\"col-md-2 value\">{{client.name}} </div>
                                                                    </div>
                                                                    
                                                                    <div class=\"row static-info\">
                                                                        <div class=\"col-md-2 name\"> <b>Prenom:</b> </div>
                                                                        <div class=\"col-md-2 value\"> {{client.prenom}} </div>
                                                                        <div class=\"col-md-2 name\"> <b>Email:</b></div>
                                                                        <div class=\"col-md-2 value\"> {{client.email}} </div>
                                                                    </div>
                                                                   
                                          
                                                                     <div class=\"row static-info\">
                                                                        <div class=\"col-md-2 name\"> <b> Adresse:</b></div>
                                                                        <div class=\"col-md-2 value\"> {{ client.adresse }} </div>
                                                                        <div class=\"col-md-2 name\"> <b> Code Postal:</b></div>
                                                                        <div class=\"col-md-2 value\"> {{ client.code_postal }} </div>
                                                                    </div>
                                                                    
                                                                    <div class=\"row static-info\">
                                                                        <div class=\"col-md-2 name\"> <b>Numero Rue:</b></div>
                                                                        <div class=\"col-md-2 value\"> {{ client.num_rue}} </div>
                                                                        <div class=\"col-md-2 name\"> <b>Nom Rue:</b></div>
                                                                        <div class=\"col-md-2 value\"> {{ client.nom_rue }} </div>
                                                                    </div>
                                                     
                                                                    <div class=\"row static-info\">
                                                                        <div class=\"col-md-2 name\"> <b>Tel fixe:</b></div>
                                                                        <div class=\"col-md-2 value\"> {{ client.tel_fixe}} </div>
                                                                        <div class=\"col-md-2 name\"> <b>Tel Mobile:</b></div>
                                                                        <div class=\"col-md-2 value\"> {{ client.tel_mobile }} </div>
                                                                    </div>

                                                                    <div class=\"row static-info\">
                                                                        <div class=\"col-md-2 name\"> <b> Date Livraison:</b></div>
                                                                        <div class=\"col-md-2 value\"> {{ client.date_liv }} </div>
                                                                    </div>
                                           
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t            <br>
                                                            {% if device!= null %}                                              
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table border=1  class=\"table table-striped table-bordered well\" id=\"sss\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Famille</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Sous Famille</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Niveau</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Decor</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>plaque</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Reference</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Dimension en mm</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Quantite</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>P.U € HT   </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>P.Total€ HT  </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>PDF Image</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for devi in device %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{devi.famille}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td >{{devi.sousfamille}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{devi.niveau}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{devi.decor}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{devi.plaque}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{devi.ref}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{devi.dim}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{devi.qte}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{devi.prxuni}}       €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{devi.totalprix}}    €</td>
                                                                
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"{{ asset('uploads/brochures/' ~ devi.brochureFilename) }}\" target=\"_blank\">Voir image (PDF)</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><a class=\"btn btn-icon-only red\" id=\"{{devi.id}}\" onClick=\" swal({
  title: '',
  text: 'Voulez vous vraiment supprimer cette devise pour ce client !',
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
    '{{ devi.famille}}',
    'success'
  ).then(function (){window.location.replace('{{ path('gincident_admin_device_supprimer',{'id':devi.id,'idc':client.id})}}')})
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
})\"> <i class=\"fa fa-trash\"></i></a><a class=\"btn btn-icon-only yellow\" href=\"{{ path('gincident_admin_device_modifier',{'id':devi.id})}}\"> <i class=\"fa fa-edit\"></i></a>  </td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
                                                              {% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <td rowspan=5 colspan=7></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <td rowspan=5 colspan=4> <table border=1  class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <tr><th colspan =2>Sous-total  € HT</th><th> {{soustotal}} €</th></tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <tr><th colspan =2>Frais de port  € HT  </th><th>{{fraisport}} €</th></tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <tr><th colspan =2>Total  € HT </th>   <th>  {{total}} €</th></tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <tr><th colspan =2>TVA   20%</th><th>   {{tva}} €</th></tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <tr><th colspan =2>Total  € TTC</th><th> {{ttc}} €</th></tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  </table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  </td></tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  </table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   {% endif %}  
                                                            </div>
                                                         </div></div></div>
                     
  
  
  
  
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
        
          {% endblock %} ", "@Gincident/admin/solutions.html.twig", "C:\\wamp64\\www\\kc_prod\\src\\GincidentBundle\\Resources\\views\\admin\\solutions.html.twig");
    }
}
