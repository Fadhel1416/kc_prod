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

/* @Gincident/admin/afficher_fr.html.twig */
class __TwigTemplate_1cc9a797a2b4f13d82bd4ccaad21ea8b17d42bd7cd5103f906d53ea1005fd7ff extends \Twig\Template
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
        $this->parent = $this->loadTemplate("GincidentBundle::layout.html.twig", "@Gincident/admin/afficher_fr.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "               <title>informations Fournisseur</title>
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "         <meta charset=\"utf-8\" />
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
          <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dist/sweetalert2.min.css"), "html", null, true);
        echo "\">
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
    }

    // line 138
    public function block_megamenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 139
        echo "              ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 140
            echo "                <div class=\"hor-menu   hidden-sm hidden-xs\">
                        <ul class=\"nav navbar-nav\">                 
                            <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"";
            // line 143
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_daschboard");
            echo "\"> Menu Administrateur
                                    <span class=\"selected\"> </span>
                                </a>
                            </li>
                            <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"";
            // line 148
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_userliste");
            echo "\"> Utilisateur
                                    <span class=\"selected\"> </span>
                                </a>
                            </li>
                        
                       
                                
                             <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"";
            // line 156
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
            // line 173
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
        // line 189
        echo "          ";
    }

    // line 190
    public function block_daschboard($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 191
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
    }

    // line 220
    public function block_Client($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 231
    public function block_produit($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 243
    public function block_fournisseur($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 244
        echo "                   <li class=\"nav-item \">
                            <a href=\"";
        // line 245
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_fournisseur_affiche");
        echo "\" class=\"nav-link\">
                                    <i class=\"icon-briefcase\"></i>
                                    <span class=\"title\">Gestion des fournisseurs</span>
                                    <span class=\"selected\"></span>
                                    <span class=\"arrow\"></span>
                                </a>
                              
               </li>
          ";
    }

    // line 255
    public function block_famille($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 256
        echo "                   <li class=\"nav-item \">
                                <a href=\"";
        // line 257
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_incident");
        echo "\" class=\"nav-link\">
                                    <i class=\"icon-briefcase\"></i>
                                    <span class=\"title\"> Gestion des famille</span>
                                    <span class=\"selected\"></span>
                                    <span class=\"arrow\"></span>
                                </a>
                              
               </li>
          ";
    }

    // line 267
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  
<div class=\"page-bar\">
     
        <div class=\"page-toolbar\">
            <div class=\"btn-group \">

                <span class=\"  pf \"><h1><center><marquee behavior=\"alternate\" scrollamount=\"10\" >Information Fournisseur</marquee>   </center>  </h1></span>
           
       
            </div>
        </div>
    </div>
               
     <div class=\"well\">

                                                                <div class=\"portlet-body\">
                                                                    <div class=\"row static-info\">
                                                                        
                                                                        <div class=\"col-md-2 name\"> <b>Nom:</b></div>
                                                                        <div class=\"col-md-3 value\">";
        // line 286
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "name", [], "any", false, false, false, 286), "html", null, true);
        echo " </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 name\"> <b>Reference:</b> </div>
                                                                        <div class=\"col-md-3 value\"> ";
        // line 288
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "reference", [], "any", false, false, false, 288), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t <br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row static-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 name\"> <b>Code Tva:</b> </div>
                                                                        <div class=\"col-md-3 value\"> ";
        // line 294
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "codetva", [], "any", false, false, false, 294), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 name\"> <b>Date du creation:</b> </div>
                                                                        <div class=\"col-md-4 value\"> ";
        // line 296
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "created_at", [], "any", false, false, false, 296), "m/d/Y-H:i:s"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"row static-info\">
                                                                    <div class=\"col-md-6 name\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2><b>Directeur commercial</b></h2> </div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row static-info\">
                                                                        <div class=\"col-md-3 name\"> <b>Adresse Electronique 1</b></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 value\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 307
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "dircom_adr1", [], "any", false, false, false, 307), "html", null, true);
        echo "</div>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 name\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Adresse Electronique 2</b> </div>
                                                                        <div class=\"col-md-3 value\"> ";
        // line 312
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "dircom_adr2", [], "any", false, false, false, 312), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row static-info\">
                                                                        <div class=\"col-md-3 name\"> <b>Télephone Fixe</b></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 value\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 319
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "dircom_telfixe", [], "any", false, false, false, 319), "html", null, true);
        echo "</div>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 name\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Télephone Portable</b> </div>
                                                                        <div class=\"col-md-3 value\"> ";
        // line 324
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "dircom_telmobile", [], "any", false, false, false, 324), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row static-info\">
                                                                        <div class=\"col-md-3 name\"> <b>Nom du Rue</b></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 value\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 331
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "dircom_nomrue", [], "any", false, false, false, 331), "html", null, true);
        echo "</div>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 name\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Numero du  Rue</b> </div>
                                                                        <div class=\"col-md-3 value\"> ";
        // line 336
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "dircom_numrue", [], "any", false, false, false, 336), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"row static-info\">
                                                                    <div class=\"col-md-6 name\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2><b>Directeur de zone</b></h2> </div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row static-info\">
                                                                        <div class=\"col-md-3 name\"> <b>Adresse Electronique 1</b></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 value\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 346
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "dirzone_adr1", [], "any", false, false, false, 346), "html", null, true);
        echo "</div>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 name\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Adresse Electronique 2</b> </div>
                                                                        <div class=\"col-md-3 value\"> ";
        // line 351
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "dirzone_adr2", [], "any", false, false, false, 351), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row static-info\">
                                                                        <div class=\"col-md-3 name\"> <b>Télephone Fixe</b></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 value\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 358
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "dirzone_telfixe", [], "any", false, false, false, 358), "html", null, true);
        echo "</div>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 name\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Télephone Portable</b> </div>
                                                                        <div class=\"col-md-3 value\"> ";
        // line 363
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "dirzone_telmobile", [], "any", false, false, false, 363), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row static-info\">
                                                                        <div class=\"col-md-3 name\"> <b>Nom du Rue</b></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 value\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 370
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "dirzone_nomrue", [], "any", false, false, false, 370), "html", null, true);
        echo "</div>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 name\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Numero du  Rue</b> </div>
                                                                        <div class=\"col-md-3 value\"> ";
        // line 375
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "dirzone_numrue", [], "any", false, false, false, 375), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"row static-info\">
                                                                    <div class=\"col-md-6 name\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2><b>Agent commercial 1</b></h2> </div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row static-info\">
                                                                        <div class=\"col-md-3 name\"> <b>Adresse Electronique 1</b></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 value\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 385
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "agentcom1_adr1", [], "any", false, false, false, 385), "html", null, true);
        echo "</div>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 name\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Adresse Electronique 2</b> </div>
                                                                        <div class=\"col-md-3 value\"> ";
        // line 390
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "agentcom1_adr2", [], "any", false, false, false, 390), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row static-info\">
                                                                        <div class=\"col-md-3 name\"> <b>Télephone Fixe</b></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 value\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 397
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "agentcom1_telfixe", [], "any", false, false, false, 397), "html", null, true);
        echo "</div>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 name\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Télephone Portable</b> </div>
                                                                        <div class=\"col-md-3 value\"> ";
        // line 402
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "agentcom1_telmobile", [], "any", false, false, false, 402), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row static-info\">
                                                                        <div class=\"col-md-3 name\"> <b>Nom du Rue</b></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 value\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 409
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "agentcom1_nomrue", [], "any", false, false, false, 409), "html", null, true);
        echo "</div>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 name\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Numero du  Rue</b> </div>
                                                                        <div class=\"col-md-3 value\"> ";
        // line 414
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "agentcom1_numrue", [], "any", false, false, false, 414), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"row static-info\">
                                                                    <div class=\"col-md-6 name\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2><b>Agent commercial 2</b></h2> </div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row static-info\">
                                                                        <div class=\"col-md-3 name\"> <b>Adresse Electronique 1</b></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 value\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 424
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "agentcom2_adr1", [], "any", false, false, false, 424), "html", null, true);
        echo "</div>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 name\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Adresse Electronique 2</b> </div>
                                                                        <div class=\"col-md-3 value\"> ";
        // line 429
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "agentcom2_adr2", [], "any", false, false, false, 429), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row static-info\">
                                                                        <div class=\"col-md-3 name\"> <b>Télephone Fixe</b></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 value\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 436
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "agentcom2_telfixe", [], "any", false, false, false, 436), "html", null, true);
        echo "</div>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 name\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Télephone Portable</b> </div>
                                                                        <div class=\"col-md-3 value\"> ";
        // line 441
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "agentcom2_telmobile", [], "any", false, false, false, 441), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row static-info\">
                                                                        <div class=\"col-md-3 name\"> <b>Nom du Rue</b></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 value\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 448
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "agentcom2_nomrue", [], "any", false, false, false, 448), "html", null, true);
        echo "</div>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 name\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Numero du  Rue</b> </div>
                                                                        <div class=\"col-md-3 value\"> ";
        // line 453
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "agentcom2_numrue", [], "any", false, false, false, 453), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"row static-info\">
                                                                    <div class=\"col-md-6 name\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2><b>Agent commercial 3</b></h2> </div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row static-info\">
                                                                        <div class=\"col-md-3 name\"> <b>Adresse Electronique 1</b></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 value\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 463
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "agentcom3_adr1", [], "any", false, false, false, 463), "html", null, true);
        echo "</div>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 name\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Adresse Electronique 2</b> </div>
                                                                        <div class=\"col-md-3 value\"> ";
        // line 468
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "agentcom3_adr2", [], "any", false, false, false, 468), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row static-info\">
                                                                        <div class=\"col-md-3 name\"> <b>Télephone Fixe</b></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 value\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 475
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "agentcom3_telfixe", [], "any", false, false, false, 475), "html", null, true);
        echo "</div>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 name\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Télephone Portable</b> </div>
                                                                        <div class=\"col-md-3 value\"> ";
        // line 480
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "agentcom3_telmobile", [], "any", false, false, false, 480), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row static-info\">
                                                                        <div class=\"col-md-3 name\"> <b>Nom du Rue</b></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 value\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 487
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "agentcom3_nomrue", [], "any", false, false, false, 487), "html", null, true);
        echo "</div>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 name\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Numero du  Rue</b> </div>
                                                                        <div class=\"col-md-3 value\"> ";
        // line 492
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frs"] ?? null), "agentcom3_numrue", [], "any", false, false, false, 492), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

                          
                                                                                         <div class=\"row static-info\">

                                                                                <span class=\"col-sm-2\"><a class=\"btn buttic btn-lg\" href=\"";
        // line 499
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_fournisseur_affiche");
        echo "\" >Retour</a></span>

                                                                                                                            </div>
                                                                </div>

                                                            </div>
                                                        
                     
    ";
    }

    // line 509
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 510
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dist/sweetalert2.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 512
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 513
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 514
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 515
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 516
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"";
        // line 520
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 521
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 523
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"";
        // line 526
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/scripts/table-datatables-buttons.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=\"";
        // line 532
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/scripts/demo.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 534
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 535
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
    }

    public function getTemplateName()
    {
        return "@Gincident/admin/afficher_fr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  862 => 535,  858 => 534,  854 => 533,  850 => 532,  844 => 529,  838 => 526,  832 => 523,  828 => 522,  824 => 521,  820 => 520,  814 => 517,  810 => 516,  806 => 515,  802 => 514,  798 => 513,  794 => 512,  788 => 510,  784 => 509,  771 => 499,  761 => 492,  753 => 487,  743 => 480,  735 => 475,  725 => 468,  717 => 463,  704 => 453,  696 => 448,  686 => 441,  678 => 436,  668 => 429,  660 => 424,  647 => 414,  639 => 409,  629 => 402,  621 => 397,  611 => 390,  603 => 385,  590 => 375,  582 => 370,  572 => 363,  564 => 358,  554 => 351,  546 => 346,  533 => 336,  525 => 331,  515 => 324,  507 => 319,  497 => 312,  489 => 307,  475 => 296,  470 => 294,  461 => 288,  456 => 286,  432 => 267,  419 => 257,  416 => 256,  412 => 255,  399 => 245,  396 => 244,  392 => 243,  379 => 233,  376 => 232,  372 => 231,  359 => 222,  356 => 221,  352 => 220,  328 => 200,  317 => 191,  313 => 190,  309 => 189,  291 => 173,  271 => 156,  260 => 148,  252 => 143,  247 => 140,  244 => 139,  240 => 138,  132 => 33,  128 => 32,  124 => 31,  120 => 30,  114 => 27,  110 => 26,  104 => 23,  100 => 22,  96 => 21,  90 => 18,  86 => 17,  82 => 16,  78 => 15,  68 => 7,  64 => 6,  59 => 4,  55 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Gincident/admin/afficher_fr.html.twig", "C:\\wamp64\\www\\kc_prod\\src\\GincidentBundle\\Resources\\views\\admin\\afficher_fr.html.twig");
    }
}
