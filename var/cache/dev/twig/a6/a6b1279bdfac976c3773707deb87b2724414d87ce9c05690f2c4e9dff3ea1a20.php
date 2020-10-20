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

/* GincidentBundle:admin:afficher_cl.html.twig */
class __TwigTemplate_230d982adc79b92548ab5ee193c7944cf52cb158b102722dea734c9f9cfa250a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GincidentBundle:admin:afficher_cl.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GincidentBundle:admin:afficher_cl.html.twig"));

        $this->parent = $this->loadTemplate("GincidentBundle::layout.html.twig", "GincidentBundle:admin:afficher_cl.html.twig", 1);
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
        echo "               <title>informations  client</title>
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
  margin-left: 100 px;

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
    background-color: #0000FF;
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
    width:1070;
    color:#2F4F4F;
    
\tmargin-left:  px;
    display:block;
    height:100;
    text-align: left;
    padding-top: 10px;

    
}
.pff1{
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
#div-id-name{
    
}
            
 header { 
-webkit-print-color-adjust: exact; 
 print-color-adjust: exact;} 
 #invoice{
    padding: 30px;
}

.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
   
    -webkit-print-color-adjust: exact; 
 print-color-adjust: exact;
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6;
   
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}


.invoice .invoice-to .to {
    margin-top: 20;
  
     margin-left: 20
}
.invoice .invoice-to .too {
    margin-top: -60;
 
     margin-left: 400
}

.invoice .invoice-details {
  margin-top: 3;
     margin-left: 800;
}
.invoice .invoice-detailss {
  margin-top: 3;
     margin-left: 1200;
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #3989c6
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 90%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px;
     
}

.invoice table td,.invoice table th {
    padding: 10px;
\t
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 500;
    font-size: 14px;
\tmargin-left: 15px;
\tpadding-left: 65px;
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #3989c6;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #3989c6
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #3989c6;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
\tpadding-right: -50 px;
\t
    border-top: 1px solid #aaa
}

.invoice table tfoot tr {
    border-top: none;
      color: #3989c6;
    font-size: 0.9em;
\t
}

.invoice table tfoot tr:last-child td {
    color: #3989c6;
    font-size: 1.4em;
    border-top: 1px solid #3989c6
\t
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 40px!important;
         font-weight: 100px!important;
        overflow: hidden!important;
        background-color: blue;
        -webkit-print-color-adjust: exact; 

    }

#aa{
        display:none;
    }
  #hh{
        display:none;
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }

}  
    .invoice-too {
    text-align: right;
    margin-top: 0 ;
    padding-top: 0
}        
            </style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 368
    public function block_megamenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "megamenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "megamenu"));

        // line 369
        echo "              ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 370
            echo "                <div class=\"hor-menu   hidden-sm hidden-xs\">
                        <ul class=\"nav navbar-nav\">                 
                            <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"";
            // line 373
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_daschboard");
            echo "\"> Menu Administrateur
                                    <span class=\"selected\"> </span>
                                </a>
                            </li>
                            <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"";
            // line 378
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_userliste");
            echo "\"> Utilisateur
                                    <span class=\"selected\"> </span>
                                </a>
                            </li>
                        
                       
                                
                             <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"";
            // line 386
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
            // line 403
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
        // line 419
        echo "          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 420
    public function block_daschboard($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "daschboard"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "daschboard"));

        // line 421
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
        // line 430
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

    // line 450
    public function block_Client($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Client"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Client"));

        // line 451
        echo "              <li class=\"nav-item\">
                                <a href=\"";
        // line 452
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

    // line 461
    public function block_produit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produit"));

        // line 462
        echo "              <li class=\"nav-item\">
                                <a href=\"";
        // line 463
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

    // line 473
    public function block_fournisseur($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fournisseur"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fournisseur"));

        // line 474
        echo "                   <li class=\"nav-item \">
                            <a href=\"";
        // line 475
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

    // line 485
    public function block_famille($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "famille"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "famille"));

        // line 486
        echo "                   <li class=\"nav-item \">
                                <a href=\"";
        // line 487
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

    // line 497
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo "  
 <div id=\"invoice\">

    <div class=\"toolbar hidden-print\">
        <div class=\"text-right\">
            <button id=\"printInvoice\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i> Imprimer</button>
              <a href=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_article_ajouter", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 503, $this->source); })()), "id", [], "any", false, false, false, 503), "idfact" => (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 503, $this->source); })())]), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-success\">Ajouter Devise</a>
        </div>
        <hr>
    </div>
    <div class=\"invoice overflow-auto\">
        <div style=\"min-width: 600px\">
            <header>
                <div class=\"row\">
                    <div class=\"col\">
                        
                     <span class=\"  pf \"><img src=\"";
        // line 513
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/img/kc_prod.jpg"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo-default\"  width=\"170\" height=\"70\"></span>
                          
                    </div>
                    <div class=\"col company-details\">
                        <h2 class=\"name\">
                           
                        </h2>
                        <div><b>KC prod</b></div>
                        <div></div>
                        <div><b></b></div>
                    </div>
                </div>
            </header>
            <main>
                <div class=\" row\">
                    <div class=\" col invoice-to\">
                    
                        <h4 class=\"to\"><b>Nom : ";
        // line 530
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 530, $this->source); })()), "name", [], "any", false, false, false, 530), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 530, $this->source); })()), "prenom", [], "any", false, false, false, 530), "html", null, true);
        echo "</b></h4 >
                        
                        <h4 class=\" to\"><b>Adresse : ";
        // line 532
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 532, $this->source); })()), "adresse", [], "any", false, false, false, 532), "html", null, true);
        echo "</b></h4>
               
                        
                     
                        <h4 class=\"email to\"><b>Email : ";
        // line 536
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 536, $this->source); })()), "email", [], "any", false, false, false, 536), "html", null, true);
        echo "</b></h4>
                     
                        <h4 class=\"email to\"><b>code : ";
        // line 538
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 538, $this->source); })()), "id", [], "any", false, false, false, 538), "html", null, true);
        echo "</b></h4>
                        
                     </div>
                     <div class=\" col invoice-to\">
                        <h4 class=\"too\"><b>Tel mobile :";
        // line 542
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 542, $this->source); })()), "tel_mobile", [], "any", false, false, false, 542), "html", null, true);
        echo "</b></h4>
                      
                        <h4 class=\"too\"><b>Nom Rue : ";
        // line 544
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 544, $this->source); })()), "Nom_rue", [], "any", false, false, false, 544), "html", null, true);
        echo "</b></h4>
                     
                        <h4 class=\"too\"><b>Num Rue : ";
        // line 546
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 546, $this->source); })()), "num_rue", [], "any", false, false, false, 546), "html", null, true);
        echo "</b></h4>
                       
                        <h4 class=\"too\"><b>TEl : ";
        // line 548
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 548, $this->source); })()), "tel_fixe", [], "any", false, false, false, 548), "html", null, true);
        echo "</b></h4>
                      </div>
                       
                    <div class=\"col invoice-details\" id=\"hh\">
                        <h1 class=\"invoice-id\">Facture Client</h1>
                        <h4 class=\"invoice-id\">Date of facture: ";
        // line 553
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</h4>
                     
                    </div>
                   
                </div>
\t\t\t\t <br>
                  ";
        // line 559
        if (((isset($context["device"]) || array_key_exists("device", $context) ? $context["device"] : (function () { throw new RuntimeError('Variable "device" does not exist.', 559, $this->source); })()) != null)) {
            echo "  
                <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                    <thead>
                        <tr>
                            <th>Famille</th>
                            <th class=\"text-left\">Sous-Famille</th>
                            <th class=\"text-left\">Reference</th>
                            <th class=\"text-right\">Dimension</th>
                            <th class=\"text-right\">Quantite</th>
                            <th class=\"text-right\">P.U € HT </th>
                             <th class=\"text-right\">P.Total€ HT  </th>
                            <th class=\"text-right\"></th>
\t\t\t\t\t\t\t<th id=\"aa\" class=\"text-right\">Modifier Produit</th>
\t\t\t\t\t\t\t
                        </tr>
                    </thead>
                    <tbody>
                    \t";
            // line 576
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["device"]) || array_key_exists("device", $context) ? $context["device"] : (function () { throw new RuntimeError('Variable "device" does not exist.', 576, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["devi"]) {
                // line 577
                echo "                        <tr>
                            <td class=\"no\">";
                // line 578
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devi"], "famille", [], "any", false, false, false, 578), "html", null, true);
                echo "</td>
                            <td class=\"text-left\">
                             ";
                // line 580
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devi"], "sousfamille", [], "any", false, false, false, 580), "html", null, true);
                echo "  
                                
                            </td>
                           
                            <td  class=\"unit\">";
                // line 584
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devi"], "ref", [], "any", false, false, false, 584), "html", null, true);
                echo "</td>
                            <td class=\"unit\">";
                // line 585
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devi"], "dim", [], "any", false, false, false, 585), "html", null, true);
                echo "</td>
                            <td class=\"unit\">";
                // line 586
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devi"], "qte", [], "any", false, false, false, 586), "html", null, true);
                echo "</td>
                            <td  class=\"unit\">";
                // line 587
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devi"], "prxuni", [], "any", false, false, false, 587), "html", null, true);
                echo "    €</td>
                            <td class=\"unit\">";
                // line 588
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devi"], "totalprix", [], "any", false, false, false, 588), "html", null, true);
                echo "    €</td>
                            \t<td id=\"aa\" class=\"unit\"><a class=\"btn btn-icon-only red\" id=\"";
                // line 589
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devi"], "id", [], "any", false, false, false, 589), "html", null, true);
                echo "\" onClick=\" swal({
  title: '',
  text: 'Voulez vous vraiment supprimer ce produit pour cette devise!',
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
                // line 604
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["devi"], "famille", [], "any", false, false, false, 604), "html", null, true);
                echo "',
    'success'
  ).then(function (){window.location.replace('";
                // line 606
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_device_supprimer", ["id" => twig_get_attribute($this->env, $this->source, $context["devi"], "id", [], "any", false, false, false, 606), "idc" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 606, $this->source); })()), "id", [], "any", false, false, false, 606), "idfact" => (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 606, $this->source); })())]), "html", null, true);
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
                // line 617
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_device_modifier", ["id" => twig_get_attribute($this->env, $this->source, $context["devi"], "id", [], "any", false, false, false, 617), "idfact" => (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 617, $this->source); })())]), "html", null, true);
                echo "\"> <i class=\"fa fa-edit\"></i></a> </td>
                 <td> <a id=\"aa\" class=\"btn btn-success\" href=\"";
                // line 618
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_prod_modifier", ["id" => twig_get_attribute($this->env, $this->source, $context["devi"], "id", [], "any", false, false, false, 618), "idfact" => (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 618, $this->source); })())]), "html", null, true);
                echo "\">Modifier Produit</a>  <a id=\"aa\"  class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["devi"], "Fich_Tic", [], "any", false, false, false, 618))), "html", null, true);
                echo "\" target=\"_blank\">Voir Fiche technique</a>   <a id=\"aa\"  class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["devi"], "BrochureFile", [], "any", false, false, false, 618))), "html", null, true);
                echo "\" target=\"_blank\">Voir image produit</a>   </td>   
\t\t\t\t\t\t</tr>
                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['devi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 621
            echo "                      
                       
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan=\"4\"></td>
                            <td colspan=\"2\">Sous-total  € HT</td>
                            <td>";
            // line 628
            echo twig_escape_filter($this->env, (isset($context["soustotal"]) || array_key_exists("soustotal", $context) ? $context["soustotal"] : (function () { throw new RuntimeError('Variable "soustotal" does not exist.', 628, $this->source); })()), "html", null, true);
            echo " €</td>
                        </tr>
                        <tr>
                            <td colspan=\"4\"></td>
                            <td colspan=\"2\">Frais de port  € HT  </td>
                            <td>";
            // line 633
            echo twig_escape_filter($this->env, (isset($context["fraisport"]) || array_key_exists("fraisport", $context) ? $context["fraisport"] : (function () { throw new RuntimeError('Variable "fraisport" does not exist.', 633, $this->source); })()), "html", null, true);
            echo " €</td>
                        </tr>
                         <tr>
                            <td colspan=\"4\"></td>
                            <td colspan=\"2\">Total  € HT </td>
                            <td> ";
            // line 638
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 638, $this->source); })()), "html", null, true);
            echo " €</td>
                        </tr>
                          <tr>
                            <td colspan=\"4\"></td>
                            <td colspan=\"2\">TVA   20% </td>
                            <td>";
            // line 643
            echo twig_escape_filter($this->env, (isset($context["tva"]) || array_key_exists("tva", $context) ? $context["tva"] : (function () { throw new RuntimeError('Variable "tva" does not exist.', 643, $this->source); })()), "html", null, true);
            echo " €</td>
                        </tr>
                         
                        
                        <tr>
                            <td colspan=\"4\"></td>
                            <td colspan=\"2\">TOTAL TTC</td>
                            <td>";
            // line 650
            echo twig_escape_filter($this->env, (isset($context["ttc"]) || array_key_exists("ttc", $context) ? $context["ttc"] : (function () { throw new RuntimeError('Variable "ttc" does not exist.', 650, $this->source); })()), "html", null, true);
            echo " €</td>
                        </tr>
                    </tfoot>
                </table>
                  ";
        }
        // line 654
        echo "  
             
                <div class=\"notices\">
                    <div>signature:</div>
                    <div class=\"notice\"></div>
                </div>
            </main>
            <footer>
               
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 672
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 673
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dist/sweetalert2.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 675
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 676
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 677
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 678
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 679
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 680
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"";
        // line 683
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 684
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 685
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 686
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"";
        // line 689
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"";
        // line 692
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/scripts/table-datatables-buttons.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=\"";
        // line 695
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 696
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/scripts/demo.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 697
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 698
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/global/scripts/quick-nav.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t <script src=\"";
        // line 699
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/jquery/printThis.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
         <script src=\"https://cdn.jsdelivr.net/sweetalert2/6.1.0/sweetalert2.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 701
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.printElement.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- END THEME LAYOUT SCRIPTS -->
        <script>
            \$(document).ready(function()
            {
                \$('#clickmewow').click(function()
                {
                    \$('#radio1003').attr('checked', 'checked');
                });
            })
        

        </script>  
<script language=\"javascript\">
 \$('#printInvoice').click(function(){
            Popup(\$('.invoice')[0].outerHTML);
            function Popup(data) 
            {
                window.print();
                return true;
            }
        });
function imprime_bloc(objet) {
// Définition de la zone à imprimer
var zone = document.getElementById(objet).innerHTML;
 
// Ouverture du popup
var fen = window.open(\"\", \"\", \"height=900, width=800,toolbar=0, menubar=0, scrollbars=1, resizable=1,status=0, location=0, left=10, top=10\");
 
// style du popup

fen.document.body.style.backgroundColor = 'ffffff';
fen.document.body.style.padding = \"20px\";
 
// Ajout des données a imprimer

window.document.body.innerHTML +=  zone ;
 
// Impression du popup
window.print();
 
//Fermeture du popup
//fen.window.close();
return true;
}
</script> 
\t\t
  
                   
                   
                   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GincidentBundle:admin:afficher_cl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1161 => 701,  1156 => 699,  1152 => 698,  1148 => 697,  1144 => 696,  1140 => 695,  1134 => 692,  1128 => 689,  1122 => 686,  1118 => 685,  1114 => 684,  1110 => 683,  1104 => 680,  1100 => 679,  1096 => 678,  1092 => 677,  1088 => 676,  1084 => 675,  1078 => 673,  1068 => 672,  1042 => 654,  1034 => 650,  1024 => 643,  1016 => 638,  1008 => 633,  1000 => 628,  991 => 621,  978 => 618,  974 => 617,  960 => 606,  955 => 604,  937 => 589,  933 => 588,  929 => 587,  925 => 586,  921 => 585,  917 => 584,  910 => 580,  905 => 578,  902 => 577,  898 => 576,  878 => 559,  869 => 553,  861 => 548,  856 => 546,  851 => 544,  846 => 542,  839 => 538,  834 => 536,  827 => 532,  820 => 530,  800 => 513,  787 => 503,  770 => 497,  751 => 487,  748 => 486,  738 => 485,  719 => 475,  716 => 474,  706 => 473,  687 => 463,  684 => 462,  674 => 461,  655 => 452,  652 => 451,  642 => 450,  612 => 430,  601 => 421,  591 => 420,  581 => 419,  563 => 403,  543 => 386,  532 => 378,  524 => 373,  519 => 370,  516 => 369,  506 => 368,  162 => 33,  158 => 32,  154 => 31,  150 => 30,  144 => 27,  140 => 26,  134 => 23,  130 => 22,  126 => 21,  120 => 18,  116 => 17,  112 => 16,  108 => 15,  98 => 7,  88 => 6,  77 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends \"GincidentBundle::layout.html.twig\"%}

{% block title %}
               <title>informations  client</title>
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
          <link rel=\"stylesheet\" href=\"{{ asset('assets/dist/sweetalert2.min.css')}}\">
        
         
       
        <!-- END THEME LAYOUT STYLES -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\" />
        
                          <style>
 .inp {
  display: block;
  height:10%;
  margin-left: 100 px;

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
    background-color: #0000FF;
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
    width:1070;
    color:#2F4F4F;
    
\tmargin-left:  px;
    display:block;
    height:100;
    text-align: left;
    padding-top: 10px;

    
}
.pff1{
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
#div-id-name{
    
}
            
 header { 
-webkit-print-color-adjust: exact; 
 print-color-adjust: exact;} 
 #invoice{
    padding: 30px;
}

.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
   
    -webkit-print-color-adjust: exact; 
 print-color-adjust: exact;
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6;
   
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}


.invoice .invoice-to .to {
    margin-top: 20;
  
     margin-left: 20
}
.invoice .invoice-to .too {
    margin-top: -60;
 
     margin-left: 400
}

.invoice .invoice-details {
  margin-top: 3;
     margin-left: 800;
}
.invoice .invoice-detailss {
  margin-top: 3;
     margin-left: 1200;
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #3989c6
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 90%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px;
     
}

.invoice table td,.invoice table th {
    padding: 10px;
\t
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 500;
    font-size: 14px;
\tmargin-left: 15px;
\tpadding-left: 65px;
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #3989c6;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #3989c6
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #3989c6;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
\tpadding-right: -50 px;
\t
    border-top: 1px solid #aaa
}

.invoice table tfoot tr {
    border-top: none;
      color: #3989c6;
    font-size: 0.9em;
\t
}

.invoice table tfoot tr:last-child td {
    color: #3989c6;
    font-size: 1.4em;
    border-top: 1px solid #3989c6
\t
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 40px!important;
         font-weight: 100px!important;
        overflow: hidden!important;
        background-color: blue;
        -webkit-print-color-adjust: exact; 

    }

#aa{
        display:none;
    }
  #hh{
        display:none;
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }

}  
    .invoice-too {
    text-align: right;
    margin-top: 0 ;
    padding-top: 0
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
 <div id=\"invoice\">

    <div class=\"toolbar hidden-print\">
        <div class=\"text-right\">
            <button id=\"printInvoice\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i> Imprimer</button>
              <a href=\"{{path('gincident_admin_article_ajouter',{'id':client.id,'idfact':facture})}}\" type=\"button\" class=\"btn btn-success\">Ajouter Devise</a>
        </div>
        <hr>
    </div>
    <div class=\"invoice overflow-auto\">
        <div style=\"min-width: 600px\">
            <header>
                <div class=\"row\">
                    <div class=\"col\">
                        
                     <span class=\"  pf \"><img src=\"{{ asset('assets/layouts/layout/img/kc_prod.jpg')}}\" alt=\"logo\" class=\"logo-default\"  width=\"170\" height=\"70\"></span>
                          
                    </div>
                    <div class=\"col company-details\">
                        <h2 class=\"name\">
                           
                        </h2>
                        <div><b>KC prod</b></div>
                        <div></div>
                        <div><b></b></div>
                    </div>
                </div>
            </header>
            <main>
                <div class=\" row\">
                    <div class=\" col invoice-to\">
                    
                        <h4 class=\"to\"><b>Nom : {{client.name}} {{client.prenom}}</b></h4 >
                        
                        <h4 class=\" to\"><b>Adresse : {{client.adresse}}</b></h4>
               
                        
                     
                        <h4 class=\"email to\"><b>Email : {{client.email}}</b></h4>
                     
                        <h4 class=\"email to\"><b>code : {{client.id}}</b></h4>
                        
                     </div>
                     <div class=\" col invoice-to\">
                        <h4 class=\"too\"><b>Tel mobile :{{client.tel_mobile}}</b></h4>
                      
                        <h4 class=\"too\"><b>Nom Rue : {{client.Nom_rue}}</b></h4>
                     
                        <h4 class=\"too\"><b>Num Rue : {{client.num_rue}}</b></h4>
                       
                        <h4 class=\"too\"><b>TEl : {{client.tel_fixe}}</b></h4>
                      </div>
                       
                    <div class=\"col invoice-details\" id=\"hh\">
                        <h1 class=\"invoice-id\">Facture Client</h1>
                        <h4 class=\"invoice-id\">Date of facture: {{\"now\"|date(\"d/m/Y\")}}</h4>
                     
                    </div>
                   
                </div>
\t\t\t\t <br>
                  {% if device!= null %}  
                <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                    <thead>
                        <tr>
                            <th>Famille</th>
                            <th class=\"text-left\">Sous-Famille</th>
                            <th class=\"text-left\">Reference</th>
                            <th class=\"text-right\">Dimension</th>
                            <th class=\"text-right\">Quantite</th>
                            <th class=\"text-right\">P.U € HT </th>
                             <th class=\"text-right\">P.Total€ HT  </th>
                            <th class=\"text-right\"></th>
\t\t\t\t\t\t\t<th id=\"aa\" class=\"text-right\">Modifier Produit</th>
\t\t\t\t\t\t\t
                        </tr>
                    </thead>
                    <tbody>
                    \t{% for devi in device %}
                        <tr>
                            <td class=\"no\">{{devi.famille}}</td>
                            <td class=\"text-left\">
                             {{devi.sousfamille}}  
                                
                            </td>
                           
                            <td  class=\"unit\">{{devi.ref}}</td>
                            <td class=\"unit\">{{devi.dim}}</td>
                            <td class=\"unit\">{{devi.qte}}</td>
                            <td  class=\"unit\">{{devi.prxuni}}    €</td>
                            <td class=\"unit\">{{devi.totalprix}}    €</td>
                            \t<td id=\"aa\" class=\"unit\"><a class=\"btn btn-icon-only red\" id=\"{{devi.id}}\" onClick=\" swal({
  title: '',
  text: 'Voulez vous vraiment supprimer ce produit pour cette devise!',
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
  ).then(function (){window.location.replace('{{ path('gincident_admin_device_supprimer',{'id':devi.id,'idc':client.id,'idfact':facture})}}')})
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
})\"> <i class=\"fa fa-trash\"></i></a><a class=\"btn btn-icon-only yellow\" href=\"{{ path('gincident_admin_device_modifier',{'id':devi.id,'idfact':facture})}}\"> <i class=\"fa fa-edit\"></i></a> </td>
                 <td> <a id=\"aa\" class=\"btn btn-success\" href=\"{{ path('gincident_admin_prod_modifier',{'id':devi.id,'idfact':facture})}}\">Modifier Produit</a>  <a id=\"aa\"  class=\"btn btn-success\" href=\"{{ asset('uploads/brochures/' ~ devi.Fich_Tic) }}\" target=\"_blank\">Voir Fiche technique</a>   <a id=\"aa\"  class=\"btn btn-success\" href=\"{{ asset('uploads/brochures/' ~ devi.BrochureFile) }}\" target=\"_blank\">Voir image produit</a>   </td>   
\t\t\t\t\t\t</tr>
                       {% endfor %}
                      
                       
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan=\"4\"></td>
                            <td colspan=\"2\">Sous-total  € HT</td>
                            <td>{{soustotal}} €</td>
                        </tr>
                        <tr>
                            <td colspan=\"4\"></td>
                            <td colspan=\"2\">Frais de port  € HT  </td>
                            <td>{{fraisport}} €</td>
                        </tr>
                         <tr>
                            <td colspan=\"4\"></td>
                            <td colspan=\"2\">Total  € HT </td>
                            <td> {{total}} €</td>
                        </tr>
                          <tr>
                            <td colspan=\"4\"></td>
                            <td colspan=\"2\">TVA   20% </td>
                            <td>{{tva}} €</td>
                        </tr>
                         
                        
                        <tr>
                            <td colspan=\"4\"></td>
                            <td colspan=\"2\">TOTAL TTC</td>
                            <td>{{ttc}} €</td>
                        </tr>
                    </tfoot>
                </table>
                  {% endif %}  
             
                <div class=\"notices\">
                    <div>signature:</div>
                    <div class=\"notice\"></div>
                </div>
            </main>
            <footer>
               
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
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
\t\t <script src=\"{{ asset('lib/jquery/printThis.js')}}\" type=\"text/javascript\"></script>
         <script src=\"https://cdn.jsdelivr.net/sweetalert2/6.1.0/sweetalert2.min.js\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/jquery.printElement.js')}}\"></script>
\t\t<!-- END THEME LAYOUT SCRIPTS -->
        <script>
            \$(document).ready(function()
            {
                \$('#clickmewow').click(function()
                {
                    \$('#radio1003').attr('checked', 'checked');
                });
            })
        

        </script>  
<script language=\"javascript\">
 \$('#printInvoice').click(function(){
            Popup(\$('.invoice')[0].outerHTML);
            function Popup(data) 
            {
                window.print();
                return true;
            }
        });
function imprime_bloc(objet) {
// Définition de la zone à imprimer
var zone = document.getElementById(objet).innerHTML;
 
// Ouverture du popup
var fen = window.open(\"\", \"\", \"height=900, width=800,toolbar=0, menubar=0, scrollbars=1, resizable=1,status=0, location=0, left=10, top=10\");
 
// style du popup

fen.document.body.style.backgroundColor = 'ffffff';
fen.document.body.style.padding = \"20px\";
 
// Ajout des données a imprimer

window.document.body.innerHTML +=  zone ;
 
// Impression du popup
window.print();
 
//Fermeture du popup
//fen.window.close();
return true;
}
</script> 
\t\t
  
                   
                   
                   {% endblock %} 


", "GincidentBundle:admin:afficher_cl.html.twig", "C:\\wamp64\\www\\kc_prod\\src\\GincidentBundle/Resources/views/admin/afficher_cl.html.twig");
    }
}
