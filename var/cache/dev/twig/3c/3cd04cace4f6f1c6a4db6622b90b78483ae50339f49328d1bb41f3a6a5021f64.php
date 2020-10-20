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

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_b6189d44c2c1ffed450bd93eb4a64ca2e054713037d9bf9f6ff89f00e487a1f7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 1
        echo "<html>

               <title>Create Account</title>
    <head>


        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"Preview page of Metronic Admin Theme #1 for buttons extension demos\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
          
\t\t
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
       <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/css/components-md.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/css/plugins-md.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/css/layout.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/css/themes/darkblue.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
           <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/css/components-rounded.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/css/layout.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/css/themes/darkblue.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
        <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\" />          
        <!-- END THEME LAYOUT STYLES -->
    </head>
  

                     
          
          
    <body>
             
             
             
             
             
             
             
                     <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"portlet light bordered\">
                                    <div class=\"portlet-title\">
                                        <div class=\"caption\">
                                            <i class=\"icon-speech font-green\"></i>
                                            <span class=\"caption-subject bold font-green uppercase\">Create Account</span>
                                        </div>
                                        
                                    </div>
                                    <div class=\"portlet-body\" style=\"height:800px\">
                                        <div id=\"form1\"  runat=\"server\">
                                              ";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_start', ["method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register"), "attr" => ["class" => "fos_user_registration_register"]]);
        echo "
                                              
                                              <div class=\"col-xs-8\"> 
                                                  
                                               <div class=\"col-md-12\"> 
                                            <div class=\"form-group has-success\">
                                                <label class=\"control-label has-success\">";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "username", [], "any", false, false, false, 79), 'label');
        echo "</label>
                                                <div class=\"input-group input-icon\">
                                                        <span class=\"input-group-addon\">
                                                            <i class=\"fa fa-user font-green\"></i>
                                                        </span>
                                                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "username", [], "any", false, false, false, 84), 'errors');
        echo "
                                                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "username", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control form-group has-success"]]);
        echo " </div></div></div>
                                               <div class=\"col-md-12\"> 
                                            <div class=\"form-group has-success\">
                                              </div></div>
                                        
                                    
                                              
                                                <div class=\"col-md-12\"> 
                                            <div class=\"form-group has-success\">
                                                <label class=\"control-label has-success\">";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "email", [], "any", false, false, false, 94), 'label');
        echo "</label>
                                                <div class=\"input-group input-icon\">
                                                        <span class=\"input-group-addon\">
                                                            <i class=\"fa fa-envelope font-green\"></i>
                                                        </span>
                                                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "email", [], "any", false, false, false, 99), 'errors');
        echo "
                                                ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "email", [], "any", false, false, false, 100), 'widget', ["attr" => ["class" => "form-control form-group has-success"]]);
        echo " </div></div></div>
                                            
  <div class=\"col-md-12\"> 
                                            <div class=\"form-group has-success\">
                                              </div></div>                                                 <div class=\"col-md-12\"> 
                                            <div class=\"form-group has-warning\">
                                                <label class=\"control-label has-success\">";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "plainPassword", [], "any", false, false, false, 106), "first", [], "any", false, false, false, 106), 'label');
        echo "</label>
                                                <div class=\"input-group input-icon\">
                                                        <span class=\"input-group-addon\">
                                                            <i class=\"fa fa-key font-yellow\"></i>
                                                        </span>
                                                ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "plainPassword", [], "any", false, false, false, 111), "first", [], "any", false, false, false, 111), 'errors');
        echo "
                                                ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "plainPassword", [], "any", false, false, false, 112), "first", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control form-group has-success"]]);
        echo " </div></div></div>
                                                     <div class=\"col-md-12\"> 
                                            <div class=\"form-group has-warning\">
\t\t\t\t\t\t\t\t\t\t\t </div> 
                                              
                                              
                                              </div> 
\t\t\t\t\t\t\t\t\t\t\t     <div class=\"col-md-12\"> 
                                            <div class=\"form-group has-success\">
                                              </div></div>
                                                 <div class=\"col-md-12\"> 
                                            <div class=\"form-group has-warning\">
                                                <label class=\"control-label has-success\">";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "plainPassword", [], "any", false, false, false, 124), "second", [], "any", false, false, false, 124), 'label');
        echo "</label>
                                                <div class=\"input-group input-icon\">
                                                        <span class=\"input-group-addon\">
                                                            <i class=\"fa fa-key font-yellow\"></i>
                                                        </span>
                                                ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "plainPassword", [], "any", false, false, false, 129), "second", [], "any", false, false, false, 129), 'errors');
        echo "
                                                ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "plainPassword", [], "any", false, false, false, 130), "second", [], "any", false, false, false, 130), 'widget', ["attr" => ["class" => "form-control form-group has-success"]]);
        echo " </div></div></div>
                                           
                                            <div class=\"col-md-12\"> 
                                            <div class=\"form-group has-success\">
                                              </div></div>
                                                   <div class=\"col-md-12\"> 
                                            <div class=\"form-group has-success\">
                                              </div></div>
                                              </div>  
                                              
                                              
                                              </div> 
                                              
                                              
                                              
                                             
                                               <div class=\"col-xs-4\"> 
                                              
                                               <div class=\"col-md-12\"> 
                                                   
                                                
                                                <label class=\"control-label\"></label>
                                         
                                                <img id=\"blah\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/img/icone_compte.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"img-responsive pic-bordered \" style=\" border-radius: 8px;\" width=\"400px\" height=\"400px\"/> 
                                                <br>
                                                 
                                               ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "photo", [], "any", false, false, false, 156), 'errors');
        echo "                                              
                                               ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "photo", [], "any", false, false, false, 157), 'widget');
        echo "
   
                                               </div>

                                               </div>
                                              
                                               <br>                                
                                          
                                           <div class=\"col-xs-10\"> 
                                          
                                             <div class=\"form-group\">
                                                
                                           ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), 'rest');
        echo "
                                               
                                           <center>
                                               <input  id=\"consubmit\"  class=\"btn green\" type=\"submit\" name=\"consubmit\" value=\"Valider\"/>
                                              
                                          <input  id=\"consubmi\"  class=\"btn red\" type=\"reset\" name=\"consubmi\" value=\"Annuler\"/>
                                           </center> 
                                           ";
        // line 176
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), 'form_end');
        echo "
                                             </div></div>
                                             
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>   
                      

                        
                    </div> 
                
               </body>
                                                
<script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
                                                
      <script type='text/javascript'>//<![CDATA[
\$(window).load(function(){
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
             
            reader.onload = function (e) {
                \$('#blah').attr('src', e.target.result);
            }
             
            reader.readAsDataURL(input.files[0]);
        }
    }
     
    \$('#fos_user_registration_form_photo').change(function(){
        readURL(this);
    });
});//]]> 
 
</script>                                          
<script type=\"text/javascript\">
\t\t

\t\$(document).ready(function () {
    \$(\":input\").filestyle({
        classButton: \"btn btn-warning\"
    });

});
</script>

   
    
   <!-- BEGIN CORE PLUGINS -->        
        <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        
        
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
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
        <script type=\"text/javascript\" src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/upload/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/upload/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t
<script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/scripts/demo.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/global/scripts/quick-nav.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/upload/bootstrap-filestyle.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/upload/bootstrap-filestyle.min.js"), "html", null, true);
        echo "\"></script>
                    
                    
               </html>
 
 
 ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  497 => 270,  493 => 269,  489 => 268,  485 => 267,  481 => 266,  477 => 265,  471 => 262,  465 => 259,  461 => 258,  457 => 257,  453 => 256,  449 => 255,  445 => 254,  440 => 252,  436 => 251,  430 => 248,  426 => 247,  422 => 246,  418 => 245,  408 => 238,  400 => 233,  396 => 232,  392 => 231,  388 => 230,  384 => 229,  380 => 228,  325 => 176,  315 => 169,  300 => 157,  296 => 156,  290 => 153,  264 => 130,  260 => 129,  252 => 124,  237 => 112,  233 => 111,  225 => 106,  216 => 100,  212 => 99,  204 => 94,  192 => 85,  188 => 84,  180 => 79,  171 => 73,  138 => 43,  134 => 42,  130 => 41,  124 => 38,  120 => 37,  114 => 34,  110 => 33,  106 => 32,  102 => 31,  97 => 29,  93 => 28,  89 => 27,  83 => 24,  79 => 23,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>

               <title>Create Account</title>
    <head>


        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"Preview page of Metronic Admin Theme #1 for buttons extension demos\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
          
\t\t
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
       <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"{{ asset('assets/global/css/components-md.min.css')}}\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/css/plugins-md.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href=\"{{ asset('assets/layouts/layout/css/layout.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/layouts/layout/css/themes/darkblue.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
        <link href=\"{{ asset('assets/layouts/layout/css/custom.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
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
        <!-- END THEME LAYOUT STYLES -->
    </head>
  

                     
          
          
    <body>
             
             
             
             
             
             
             
                     <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"portlet light bordered\">
                                    <div class=\"portlet-title\">
                                        <div class=\"caption\">
                                            <i class=\"icon-speech font-green\"></i>
                                            <span class=\"caption-subject bold font-green uppercase\">Create Account</span>
                                        </div>
                                        
                                    </div>
                                    <div class=\"portlet-body\" style=\"height:800px\">
                                        <div id=\"form1\"  runat=\"server\">
                                              {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
                                              
                                              <div class=\"col-xs-8\"> 
                                                  
                                               <div class=\"col-md-12\"> 
                                            <div class=\"form-group has-success\">
                                                <label class=\"control-label has-success\">{{ form_label(form.username)}}</label>
                                                <div class=\"input-group input-icon\">
                                                        <span class=\"input-group-addon\">
                                                            <i class=\"fa fa-user font-green\"></i>
                                                        </span>
                                                {{ form_errors(form.username) }}
                                                {{ form_widget(form.username, { 'attr': {'class': 'form-control form-group has-success'} }) }} </div></div></div>
                                               <div class=\"col-md-12\"> 
                                            <div class=\"form-group has-success\">
                                              </div></div>
                                        
                                    
                                              
                                                <div class=\"col-md-12\"> 
                                            <div class=\"form-group has-success\">
                                                <label class=\"control-label has-success\">{{ form_label(form.email)}}</label>
                                                <div class=\"input-group input-icon\">
                                                        <span class=\"input-group-addon\">
                                                            <i class=\"fa fa-envelope font-green\"></i>
                                                        </span>
                                                {{ form_errors(form.email) }}
                                                {{ form_widget(form.email, { 'attr': {'class': 'form-control form-group has-success'} }) }} </div></div></div>
                                            
  <div class=\"col-md-12\"> 
                                            <div class=\"form-group has-success\">
                                              </div></div>                                                 <div class=\"col-md-12\"> 
                                            <div class=\"form-group has-warning\">
                                                <label class=\"control-label has-success\">{{ form_label(form.plainPassword.first)}}</label>
                                                <div class=\"input-group input-icon\">
                                                        <span class=\"input-group-addon\">
                                                            <i class=\"fa fa-key font-yellow\"></i>
                                                        </span>
                                                {{ form_errors(form.plainPassword.first) }}
                                                {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-control form-group has-success'} }) }} </div></div></div>
                                                     <div class=\"col-md-12\"> 
                                            <div class=\"form-group has-warning\">
\t\t\t\t\t\t\t\t\t\t\t </div> 
                                              
                                              
                                              </div> 
\t\t\t\t\t\t\t\t\t\t\t     <div class=\"col-md-12\"> 
                                            <div class=\"form-group has-success\">
                                              </div></div>
                                                 <div class=\"col-md-12\"> 
                                            <div class=\"form-group has-warning\">
                                                <label class=\"control-label has-success\">{{ form_label(form.plainPassword.second)}}</label>
                                                <div class=\"input-group input-icon\">
                                                        <span class=\"input-group-addon\">
                                                            <i class=\"fa fa-key font-yellow\"></i>
                                                        </span>
                                                {{ form_errors(form.plainPassword.second) }}
                                                {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-control form-group has-success'} }) }} </div></div></div>
                                           
                                            <div class=\"col-md-12\"> 
                                            <div class=\"form-group has-success\">
                                              </div></div>
                                                   <div class=\"col-md-12\"> 
                                            <div class=\"form-group has-success\">
                                              </div></div>
                                              </div>  
                                              
                                              
                                              </div> 
                                              
                                              
                                              
                                             
                                               <div class=\"col-xs-4\"> 
                                              
                                               <div class=\"col-md-12\"> 
                                                   
                                                
                                                <label class=\"control-label\"></label>
                                         
                                                <img id=\"blah\" src=\"{{ asset('assets/global/img/icone_compte.png')}}\" alt=\"logo\" class=\"img-responsive pic-bordered \" style=\" border-radius: 8px;\" width=\"400px\" height=\"400px\"/> 
                                                <br>
                                                 
                                               {{ form_errors(form.photo) }}                                              
                                               {{ form_widget(form.photo)}}
   
                                               </div>

                                               </div>
                                              
                                               <br>                                
                                          
                                           <div class=\"col-xs-10\"> 
                                          
                                             <div class=\"form-group\">
                                                
                                           {{ form_rest(form) }}
                                               
                                           <center>
                                               <input  id=\"consubmit\"  class=\"btn green\" type=\"submit\" name=\"consubmit\" value=\"Valider\"/>
                                              
                                          <input  id=\"consubmi\"  class=\"btn red\" type=\"reset\" name=\"consubmi\" value=\"Annuler\"/>
                                           </center> 
                                           {{ form_end(form) }}
                                             </div></div>
                                             
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>   
                      

                        
                    </div> 
                
               </body>
                                                
<script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
                                                
      <script type='text/javascript'>//<![CDATA[
\$(window).load(function(){
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
             
            reader.onload = function (e) {
                \$('#blah').attr('src', e.target.result);
            }
             
            reader.readAsDataURL(input.files[0]);
        }
    }
     
    \$('#fos_user_registration_form_photo').change(function(){
        readURL(this);
    });
});//]]> 
 
</script>                                          
<script type=\"text/javascript\">
\t\t

\t\$(document).ready(function () {
    \$(\":input\").filestyle({
        classButton: \"btn btn-warning\"
    });

});
</script>

   
    
   <!-- BEGIN CORE PLUGINS -->        
        <script src=\"{{ asset('assets/global/plugins/jquery.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/js.cookie.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/jquery.blockui.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"{{ asset('assets/global/scripts/app.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        
        
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=\"{{ asset('assets/layouts/layout/scripts/layout.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/layouts/layout/scripts/demo.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/layouts/global/scripts/quick-sidebar.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/layouts/global/scripts/quick-nav.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
        <script type=\"text/javascript\" src=\"{{ asset('assets/upload/jquery.min.js')}}\"></script>
\t\t<script type=\"text/javascript\" src=\"{{ asset('assets/upload/bootstrap.min.js')}}\"></script>
\t\t
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
 <script type=\"text/javascript\" src=\"{{ asset('assets/upload/bootstrap-filestyle.js')}}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('assets/upload/bootstrap-filestyle.min.js')}}\"></script>
                    
                    
               </html>
 
 
 ", "FOSUserBundle:Registration:register_content.html.twig", "C:\\wamp64\\www\\kc_prod\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register_content.html.twig");
    }
}
