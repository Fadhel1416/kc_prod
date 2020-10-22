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

/* GincidentBundle:admin:solutions.html.twig */
class __TwigTemplate_68b069b9b8e3318cbb14acfd5864c4f5303fa4187d2e4e335f3ab6f47ccbcc16 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("GincidentBundle::layout.html.twig", "GincidentBundle:admin:solutions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "               <title>affichage solutions</title>
     ";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 137
    public function block_megamenu($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 190
    public function block_daschboard($context, array $blocks = [])
    {
        $macros = $this->macros;
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

    // line 242
    public function block_fournisseur($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 254
    public function block_famille($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 267
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_article_ajouter", ["id" => twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 288)]), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 311), "html", null, true);
        echo "</div>
                                                                        <div class=\"col-md-2 name\"> <b>Nom:</b></div>
                                                                        <div class=\"col-md-2 value\">";
        // line 313
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "name", [], "any", false, false, false, 313), "html", null, true);
        echo " </div>
                                                                    </div>
                                                                    
                                                                    <div class=\"row static-info\">
                                                                        <div class=\"col-md-2 name\"> <b>Prenom:</b> </div>
                                                                        <div class=\"col-md-2 value\"> ";
        // line 318
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "prenom", [], "any", false, false, false, 318), "html", null, true);
        echo " </div>
                                                                        <div class=\"col-md-2 name\"> <b>Email:</b></div>
                                                                        <div class=\"col-md-2 value\"> ";
        // line 320
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email", [], "any", false, false, false, 320), "html", null, true);
        echo " </div>
                                                                    </div>
                                                                   
                                          
                                                                     <div class=\"row static-info\">
                                                                        <div class=\"col-md-2 name\"> <b> Adresse:</b></div>
                                                                        <div class=\"col-md-2 value\"> ";
        // line 326
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "adresse", [], "any", false, false, false, 326), "html", null, true);
        echo " </div>
                                                                        <div class=\"col-md-2 name\"> <b> Code Postal:</b></div>
                                                                        <div class=\"col-md-2 value\"> ";
        // line 328
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "code_postal", [], "any", false, false, false, 328), "html", null, true);
        echo " </div>
                                                                    </div>
                                                                    
                                                                    <div class=\"row static-info\">
                                                                        <div class=\"col-md-2 name\"> <b>Numero Rue:</b></div>
                                                                        <div class=\"col-md-2 value\"> ";
        // line 333
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "num_rue", [], "any", false, false, false, 333), "html", null, true);
        echo " </div>
                                                                        <div class=\"col-md-2 name\"> <b>Nom Rue:</b></div>
                                                                        <div class=\"col-md-2 value\"> ";
        // line 335
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "nom_rue", [], "any", false, false, false, 335), "html", null, true);
        echo " </div>
                                                                    </div>
                                                     
                                                                    <div class=\"row static-info\">
                                                                        <div class=\"col-md-2 name\"> <b>Tel fixe:</b></div>
                                                                        <div class=\"col-md-2 value\"> ";
        // line 340
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "tel_fixe", [], "any", false, false, false, 340), "html", null, true);
        echo " </div>
                                                                        <div class=\"col-md-2 name\"> <b>Tel Mobile:</b></div>
                                                                        <div class=\"col-md-2 value\"> ";
        // line 342
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "tel_mobile", [], "any", false, false, false, 342), "html", null, true);
        echo " </div>
                                                                    </div>

                                                                    <div class=\"row static-info\">
                                                                        <div class=\"col-md-2 name\"> <b> Date Livraison:</b></div>
                                                                        <div class=\"col-md-2 value\"> ";
        // line 347
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "date_liv", [], "any", false, false, false, 347), "html", null, true);
        echo " </div>
                                                                    </div>
                                           
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t            <br>
                                                            ";
        // line 352
        if ((($context["device"] ?? null) != null)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["device"] ?? null));
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_device_supprimer", ["id" => twig_get_attribute($this->env, $this->source, $context["devi"], "id", [], "any", false, false, false, 404), "idc" => twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 404)]), "html", null, true);
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
            echo twig_escape_filter($this->env, ($context["soustotal"] ?? null), "html", null, true);
            echo " €</th></tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <tr><th colspan =2>Frais de port  € HT  </th><th>";
            // line 423
            echo twig_escape_filter($this->env, ($context["fraisport"] ?? null), "html", null, true);
            echo " €</th></tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <tr><th colspan =2>Total  € HT </th>   <th>  ";
            // line 425
            echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
            echo " €</th></tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <tr><th colspan =2>TVA   20%</th><th>   ";
            // line 426
            echo twig_escape_filter($this->env, ($context["tva"] ?? null), "html", null, true);
            echo " €</th></tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <tr><th colspan =2>Total  € TTC</th><th> ";
            // line 427
            echo twig_escape_filter($this->env, ($context["ttc"] ?? null), "html", null, true);
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
    }

    // line 441
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    public function getTemplateName()
    {
        return "GincidentBundle:admin:solutions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  904 => 492,  900 => 491,  896 => 490,  892 => 489,  886 => 486,  880 => 483,  874 => 480,  870 => 479,  866 => 478,  862 => 477,  858 => 476,  854 => 475,  850 => 474,  846 => 473,  842 => 472,  838 => 471,  834 => 470,  830 => 469,  826 => 468,  822 => 467,  818 => 466,  814 => 465,  810 => 464,  806 => 463,  802 => 462,  798 => 461,  794 => 460,  790 => 459,  786 => 458,  782 => 457,  778 => 456,  774 => 455,  770 => 454,  766 => 453,  762 => 452,  758 => 451,  752 => 448,  748 => 447,  744 => 446,  740 => 445,  736 => 444,  732 => 443,  729 => 442,  725 => 441,  713 => 431,  705 => 427,  701 => 426,  697 => 425,  692 => 423,  688 => 422,  683 => 419,  673 => 415,  659 => 404,  654 => 402,  636 => 387,  632 => 386,  626 => 383,  622 => 382,  618 => 381,  614 => 380,  609 => 378,  605 => 377,  601 => 376,  597 => 375,  592 => 373,  588 => 372,  585 => 371,  581 => 370,  560 => 352,  552 => 347,  544 => 342,  539 => 340,  531 => 335,  526 => 333,  518 => 328,  513 => 326,  504 => 320,  499 => 318,  491 => 313,  486 => 311,  468 => 296,  457 => 288,  431 => 267,  418 => 256,  415 => 255,  411 => 254,  398 => 244,  395 => 243,  391 => 242,  378 => 233,  375 => 232,  371 => 231,  358 => 222,  355 => 221,  351 => 220,  327 => 200,  316 => 191,  312 => 190,  308 => 188,  290 => 172,  270 => 155,  259 => 147,  251 => 142,  246 => 139,  243 => 138,  239 => 137,  131 => 32,  127 => 31,  123 => 30,  117 => 27,  113 => 26,  107 => 23,  103 => 22,  99 => 21,  95 => 20,  89 => 17,  85 => 16,  81 => 15,  77 => 14,  68 => 7,  64 => 6,  59 => 4,  55 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "GincidentBundle:admin:solutions.html.twig", "C:\\wamp64\\www\\kc_prod\\src\\GincidentBundle/Resources/views/admin/solutions.html.twig");
    }
}
