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

/* @Gincident/layout.html.twig */
class __TwigTemplate_9f0c1b5ad04c890cea5dd17e9cef3b10dab7dda76bfa48a9606bc31144eb88bc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gincident/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gincident/layout.html.twig"));

        // line 1
        echo "<html lang=\"en\">
    <head>
      ";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo " ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "   
    </head>
    <!-- END HEAD -->

    <body class=\"page-header-fixed page-sidebar-closed-hide-logo page-content-white\">
        <div class=\"page-wrapper\">
            <!-- BEGIN HEADER -->
            <div class=\"page-header navbar navbar-fixed-top\">
                <!-- BEGIN HEADER INNER -->
                <div class=\"page-header-inner \">
                    <!-- BEGIN LOGO -->
                    <div class=\"page-logo\">
                        <a href=\"\">
                            <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/img/kc_prod.jpg"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo-default\"  width=\"170\" height=\"70\"> </a>
                        <div class=\"menu-toggler sidebar-toggler\">
                            <span style=\"top: 10px;    border-top: 10px;\"> </span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                   
                    ";
        // line 26
        $this->displayBlock('megamenu', $context, $blocks);
        // line 28
        echo "    
                    
                    
                    
                    
                    
                    
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class=\"top-menu\" id=\"mazou\">
                        <ul class=\"nav navbar-nav pull-right\">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after \"dropdown-extended\" to change the dropdown styte -->
                            <!-- DOC: Apply \"dropdown-hoverable\" class after below \"dropdown\" and remove data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" attributes to enable hover dropdown mode -->
                            <!-- DOC: Remove \"dropdown-hoverable\" and add data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" attributes to the below A element with dropdown-toggle class -->
                             
                            <li class=\"dropdown dropdown-extended dropdown-notification\" id=\"header_notification_bar\">
                                
                               <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                  <i class=\"icon-bell\"></i>
                                    <span class=\"badge badge-danger\">";
        // line 52
        echo $this->extensions['Mgilet\NotificationBundle\Twig\NotificationExtension']->countUnseenNotifications(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52));
        echo "
 </span>
                                </a>
                                
                                <ul class=\"dropdown-menu\">
                                    <li class=\"external\">
                                        <h3>
                                            <span class=\"bold\"> vous avez   ";
        // line 59
        echo $this->extensions['Mgilet\NotificationBundle\Twig\NotificationExtension']->countUnseenNotifications(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59));
        echo " notifications</span> 
                                            <br> <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notificationbyuser", ["identifier" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60)]), "html", null, true);
        echo "\"> voir tous les  notifications </a>
                                        
                                        
                                        
                                    </li>
                                    <li>
                                        ";
        // line 66
        echo $this->extensions['Mgilet\NotificationBundle\Twig\NotificationExtension']->render(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66));
        echo "  
                                       
                                    </li>
                                </ul>
                            </li>
                            <!-- END NOTIFICATION DROPDOWN -->
                            <!-- BEGIN INBOX DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-extended dropdown-inbox\" id=\"header_inbox_bar\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                    <i class=\"icon-envelope-open\"></i>
                                    <span class=\"badge badge-danger\">";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['FOS\MessageBundle\Twig\Extension\MessageExtension']->getNbUnread(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77)), "html", null, true);
        echo "</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"external\">
                                       <span class=\"bold\"> vous avez  ";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['FOS\MessageBundle\Twig\Extension\MessageExtension']->getNbUnread(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81), "id", [], "any", false, false, false, 81)), "html", null, true);
        echo " messages</span> 
                                       <br>   <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_message_binbox");
        echo "\"> voir tous les message </a>
                                      
                                    </li>
                                    
                                    <li>
                                      
                                    </li>
                                </ul>
                            </li>
                            <!-- END INBOX DROPDOWN -->
                            <!-- BEGIN TODO DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                          
                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-user\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                    <img alt=\"\" class=\"img-circle\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/img/experts/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "user", [], "any", false, false, false, 100), "photoname", [], "any", false, false, false, 100), "html", null, true);
        echo "\"/>
                                    <span class=\"username username-hide-on-mobile\">";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101), "username", [], "any", false, false, false, 101), "html", null, true);
        echo " </span>
                                    <i class=\"fa fa-angle-down\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-default\">
                                    <li>
                                        <a href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_profil");
        echo "\">
                                            <i class=\"icon-user\"></i>voir Profile </a>
                                    </li>


                                    <li class=\"divider\"> </li>
                                  
                                    <li>
                                        <a href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\">
                                            <i class=\"icon-key\"></i> Deconnexion </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                          
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class=\"clearfix\"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class=\"page-container\">
                <!-- BEGIN SIDEBAR -->
                <div class=\"page-sidebar-wrapper\">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
                    <div class=\"page-sidebar navbar-collapse collapse\">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply \"page-sidebar-menu-light\" class right after \"page-sidebar-menu\" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply \"page-sidebar-menu-hover-submenu\" class right after \"page-sidebar-menu\" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply \"page-sidebar-menu-closed\" class right after \"page-sidebar-menu\" to collapse(\"page-sidebar-closed\" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand=\"true\" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
                        <ul class=\"page-sidebar-menu  page-header-fixed \" data-keep-expanded=\"false\" data-auto-scroll=\"true\" data-slide-speed=\"200\" style=\"padding-top: 20px\">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below \"sidebar-toggler-wrapper\" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class=\"sidebar-toggler-wrapper hide\">
                                <div class=\"sidebar-toggler\">
                                    <span></span>
                                </div>
                            </li>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below \"sidebar-search-wrapper\" LI element -->
                            <li class=\"sidebar-search-wrapper\">
                                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                                <!-- DOC: Apply \"sidebar-search-bordered\" class the below search form to have bordered search box -->
                                <!-- DOC: Apply \"sidebar-search-bordered sidebar-search-solid\" class the below search form to have bordered & solid search box -->
                                <form class=\"sidebar-search  \" action=\"page_general_search_3.html\" method=\"POST\">
                                    <a href=\"javascript:;\" class=\"remove\">
                                        <i class=\"icon-close\"></i>
                                    </a>
                                    <div class=\"input-group\">
                                        <span class=\"input-group-btn\">
                                           
                                        </span>
                                    </div>
                                </form>
                                <!-- END RESPONSIVE QUICK SEARCH FORM -->
                            </li>
                            ";
        // line 175
        $this->displayBlock('daschboard', $context, $blocks);
        // line 177
        echo "                            ";
        $this->displayBlock('Client', $context, $blocks);
        // line 180
        echo "                            ";
        $this->displayBlock('produit', $context, $blocks);
        // line 183
        echo "                            
                           
                               ";
        // line 185
        $this->displayBlock('fournisseur', $context, $blocks);
        // line 188
        echo "                            
                             ";
        // line 189
        $this->displayBlock('famille', $context, $blocks);
        // line 192
        echo "                             
                           
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class=\"page-content-wrapper\">
                    <!-- BEGIN CONTENT BODY -->
                    <div class=\"page-content\" id=\"div-id-name\">
                ";
        // line 233
        $this->displayBlock('content', $context, $blocks);
        // line 237
        echo " 
                    </div>
                
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
                <!-- END CONTENT -->
                <!-- BEGIN QUICK SIDEBAR -->
                
                <!-- END QUICK SIDEBAR -->
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <div class=\"page-footer\">
                <div class=\"page-footer-inner\"> ";
        // line 261
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " &copy; KcProd
                    <a target=\"_blank\" href=\"#\">La Technologie aux meilleur prix</a> &nbsp;|&nbsp;
               
                </div>
                <div class=\"scroll-to-top\">
                    <i class=\"icon-arrow-up\"></i>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>
        <!-- BEGIN QUICK NAV -->
        
        <div class=\"quick-nav-overlay\"></div>
        <!-- END QUICK NAV -->

        <!-- BEGIN CORE PLUGINS -->
 ";
        // line 277
        $this->displayBlock('javascripts', $context, $blocks);
        // line 278
        echo " 
    </body>

</html>
";
        
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
        echo "     ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_megamenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "megamenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "megamenu"));

        // line 27
        echo "                        
                   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 175
    public function block_daschboard($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "daschboard"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "daschboard"));

        // line 176
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 177
    public function block_Client($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Client"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Client"));

        // line 178
        echo "                                
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 180
    public function block_produit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "produit"));

        // line 181
        echo "                                
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 185
    public function block_fournisseur($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fournisseur"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fournisseur"));

        // line 186
        echo "                                
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 189
    public function block_famille($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "famille"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "famille"));

        // line 190
        echo "                                
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 233
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo " 
                    
              
                   
                 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 277
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 278
        echo "      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Gincident/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  595 => 278,  585 => 277,  562 => 233,  551 => 190,  541 => 189,  530 => 186,  520 => 185,  509 => 181,  499 => 180,  488 => 178,  478 => 177,  468 => 176,  458 => 175,  447 => 27,  437 => 26,  427 => 6,  417 => 5,  407 => 4,  397 => 3,  383 => 278,  381 => 277,  362 => 261,  336 => 237,  334 => 233,  291 => 192,  289 => 189,  286 => 188,  284 => 185,  280 => 183,  277 => 180,  274 => 177,  272 => 175,  208 => 114,  197 => 106,  189 => 101,  184 => 100,  163 => 82,  159 => 81,  152 => 77,  138 => 66,  129 => 60,  125 => 59,  115 => 52,  89 => 28,  87 => 26,  77 => 19,  62 => 6,  59 => 5,  57 => 3,  53 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\">
    <head>
      {% block title %}
     {% endblock %}
 {% block stylesheets  %}
      {% endblock %}   
    </head>
    <!-- END HEAD -->

    <body class=\"page-header-fixed page-sidebar-closed-hide-logo page-content-white\">
        <div class=\"page-wrapper\">
            <!-- BEGIN HEADER -->
            <div class=\"page-header navbar navbar-fixed-top\">
                <!-- BEGIN HEADER INNER -->
                <div class=\"page-header-inner \">
                    <!-- BEGIN LOGO -->
                    <div class=\"page-logo\">
                        <a href=\"\">
                            <img src=\"{{ asset('assets/layouts/layout/img/kc_prod.jpg')}}\" alt=\"logo\" class=\"logo-default\"  width=\"170\" height=\"70\"> </a>
                        <div class=\"menu-toggler sidebar-toggler\">
                            <span style=\"top: 10px;    border-top: 10px;\"> </span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                   
                    {% block megamenu %}
                        
                   {% endblock %}    
                    
                    
                    
                    
                    
                    
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class=\"top-menu\" id=\"mazou\">
                        <ul class=\"nav navbar-nav pull-right\">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after \"dropdown-extended\" to change the dropdown styte -->
                            <!-- DOC: Apply \"dropdown-hoverable\" class after below \"dropdown\" and remove data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" attributes to enable hover dropdown mode -->
                            <!-- DOC: Remove \"dropdown-hoverable\" and add data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" attributes to the below A element with dropdown-toggle class -->
                             
                            <li class=\"dropdown dropdown-extended dropdown-notification\" id=\"header_notification_bar\">
                                
                               <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                  <i class=\"icon-bell\"></i>
                                    <span class=\"badge badge-danger\">{{ mgilet_notification_unseen_count(app.user) }}
 </span>
                                </a>
                                
                                <ul class=\"dropdown-menu\">
                                    <li class=\"external\">
                                        <h3>
                                            <span class=\"bold\"> vous avez   {{ mgilet_notification_unseen_count(app.user) }} notifications</span> 
                                            <br> <a href=\"{{path('notificationbyuser', {'identifier':app.user.id})}}\"> voir tous les  notifications </a>
                                        
                                        
                                        
                                    </li>
                                    <li>
                                        {{ mgilet_notification_render(app.user) }}  
                                       
                                    </li>
                                </ul>
                            </li>
                            <!-- END NOTIFICATION DROPDOWN -->
                            <!-- BEGIN INBOX DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-extended dropdown-inbox\" id=\"header_inbox_bar\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                    <i class=\"icon-envelope-open\"></i>
                                    <span class=\"badge badge-danger\">{{fos_message_nb_unread(app.user.id)}}</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"external\">
                                       <span class=\"bold\"> vous avez  {{fos_message_nb_unread(app.user.id)}} messages</span> 
                                       <br>   <a href=\"{{ url('fos_message_binbox')}}\"> voir tous les message </a>
                                      
                                    </li>
                                    
                                    <li>
                                      
                                    </li>
                                </ul>
                            </li>
                            <!-- END INBOX DROPDOWN -->
                            <!-- BEGIN TODO DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                          
                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-user\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                    <img alt=\"\" class=\"img-circle\" src=\"{{asset('uploads/img/experts/')}}{{app.user.photoname}}\"/>
                                    <span class=\"username username-hide-on-mobile\">{{app.user.username}} </span>
                                    <i class=\"fa fa-angle-down\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-default\">
                                    <li>
                                        <a href=\"{{path('gincident_admin_profil')}}\">
                                            <i class=\"icon-user\"></i>voir Profile </a>
                                    </li>


                                    <li class=\"divider\"> </li>
                                  
                                    <li>
                                        <a href=\"{{path('fos_user_security_logout')}}\">
                                            <i class=\"icon-key\"></i> Deconnexion </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                          
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class=\"clearfix\"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class=\"page-container\">
                <!-- BEGIN SIDEBAR -->
                <div class=\"page-sidebar-wrapper\">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
                    <div class=\"page-sidebar navbar-collapse collapse\">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply \"page-sidebar-menu-light\" class right after \"page-sidebar-menu\" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply \"page-sidebar-menu-hover-submenu\" class right after \"page-sidebar-menu\" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply \"page-sidebar-menu-closed\" class right after \"page-sidebar-menu\" to collapse(\"page-sidebar-closed\" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand=\"true\" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
                        <ul class=\"page-sidebar-menu  page-header-fixed \" data-keep-expanded=\"false\" data-auto-scroll=\"true\" data-slide-speed=\"200\" style=\"padding-top: 20px\">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below \"sidebar-toggler-wrapper\" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class=\"sidebar-toggler-wrapper hide\">
                                <div class=\"sidebar-toggler\">
                                    <span></span>
                                </div>
                            </li>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below \"sidebar-search-wrapper\" LI element -->
                            <li class=\"sidebar-search-wrapper\">
                                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                                <!-- DOC: Apply \"sidebar-search-bordered\" class the below search form to have bordered search box -->
                                <!-- DOC: Apply \"sidebar-search-bordered sidebar-search-solid\" class the below search form to have bordered & solid search box -->
                                <form class=\"sidebar-search  \" action=\"page_general_search_3.html\" method=\"POST\">
                                    <a href=\"javascript:;\" class=\"remove\">
                                        <i class=\"icon-close\"></i>
                                    </a>
                                    <div class=\"input-group\">
                                        <span class=\"input-group-btn\">
                                           
                                        </span>
                                    </div>
                                </form>
                                <!-- END RESPONSIVE QUICK SEARCH FORM -->
                            </li>
                            {%block daschboard %}
                            {% endblock %}
                            {%block Client %}
                                
                            {% endblock %}
                            {%block produit %}
                                
                            {% endblock %}
                            
                           
                               {%block fournisseur %}
                                
                            {% endblock %}
                            
                             {%block famille %}
                                
                            {% endblock %}
                             
                           
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class=\"page-content-wrapper\">
                    <!-- BEGIN CONTENT BODY -->
                    <div class=\"page-content\" id=\"div-id-name\">
                {% block content  %} 
                    
              
                   
                 {% endblock %} 
                    </div>
                
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
                <!-- END CONTENT -->
                <!-- BEGIN QUICK SIDEBAR -->
                
                <!-- END QUICK SIDEBAR -->
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <div class=\"page-footer\">
                <div class=\"page-footer-inner\"> {{\"now\"|date(\"Y\")}} &copy; KcProd
                    <a target=\"_blank\" href=\"#\">La Technologie aux meilleur prix</a> &nbsp;|&nbsp;
               
                </div>
                <div class=\"scroll-to-top\">
                    <i class=\"icon-arrow-up\"></i>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>
        <!-- BEGIN QUICK NAV -->
        
        <div class=\"quick-nav-overlay\"></div>
        <!-- END QUICK NAV -->

        <!-- BEGIN CORE PLUGINS -->
 {% block javascripts %}
      {% endblock %} 
    </body>

</html>
", "@Gincident/layout.html.twig", "C:\\wamp64\\www\\kc_prod\\src\\GincidentBundle\\Resources\\views\\layout.html.twig");
    }
}
