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

/* @FOSMessage/Message/thread.html.twig */
class __TwigTemplate_51577bee19e4f51c6796d0736f51beaf3541b26e43b1c6907711fe01c909f4f4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'fos_content' => [$this, 'block_fos_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "FOSMessageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSMessage/Message/thread.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSMessage/Message/thread.html.twig"));

        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "@FOSMessage/Message/thread.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_fos_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_content"));

        // line 6
        echo "<br>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 7, $this->source); })()), "messages", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "username", [], "any", false, false, false, 8) == twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 8))) {
                // line 9
                echo "
<div class=\"row\">
<div class=\"col-xs-1\">
</div>
    <div class=\"col-xs-1 pull-right\">
       
        </div>
    

    <div class=\"messenger_thread_message pull-right well\">
        <div class=\"messenger_thread_message_info\">
                   <span class=\"form \">
        ";
                // line 21
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("message_info", ["%sender%" => twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 21)), "%date%" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 21))], "FOSMessageBundle");
                // line 22
                echo "                   </span>
        </div>
        <div class=\"col-xs-1\">
</div>
        <div class=\"messenger_thread_message_body pull-right\" id=\"message_";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "\">
                    <span class=\"message pull-right\">

          message : <b> ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "body", [], "any", false, false, false, 29), "html", null, true);
                echo "</b>
                    </span>
        </div>
    </div></div>
          <br>
          ";
            } else {
                // line 35
                echo "          <div class=\"row\">
<div class=\"col-xs-0.5\">
</div>
    <div class=\"col-xs-1 pull-left\">
        <span class=\"photo\">
        <img class=\"img-circle \" width=\"30\" hieght=\"30\" src=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/img/experts/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 40), "photoname", [], "any", false, false, false, 40), "html", null, true);
                echo "\">
        </span>
        </div>
    

    <div class=\"messenger_thread_message pull-left well\">
        <div class=\"messenger_thread_message_info\">
                   <span class=\"form \">
        ";
                // line 48
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("message_info", ["%sender%" => twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 48)), "%date%" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 48))], "FOSMessageBundle");
                // line 49
                echo "                   </span>
        </div>
        <div class=\"col-xs-1\">
</div>
        <div class=\"messenger_thread_message_body pull-left\" id=\"message_";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 53), "html", null, true);
                echo "\">
                    <span class=\"message pull-left \">

          message : <b> ";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "body", [], "any", false, false, false, 56), "html", null, true);
                echo "</b>
                    </span>
        </div>
    </div></div>
          <br>

";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "

<div class=\"row\">

<div class=\"col-xs-1\">
</div>

";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form_start', ["method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_message_thread_view", ["threadId" => twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71)])]);
        echo "
         <div class=\"row\">
    <div class=\"col-md-5\"> 
  <div class=\"form-group has-success\">
    <div class=\"input-group input-icon\">
     <span class=\"input-group-addon\">
     <i class=\"fa fa-user font-green\"></i>
       </span>
    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "body", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control placeholder-no-fix", "placeholder" => "message "]]);
        echo "
    </div>   </div>   </div>   </div>
    <div class=\"row\">
    <div class=\"col-xs-1\">
</div>
         <div class=\"col-xs-3\">
         <input type=\"submit\"  class=\"btn btn-primary\" value=\"envoyer\"></div>
           <div class=\"col-xs-3\">
         <input type=\"reset\"  class=\"btn btn-danger\" value=\"cancel\"/></div>

</div>
";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "       
        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/scripts/table-datatables-buttons.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/scripts/demo.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 117
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
        return "@FOSMessage/Message/thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 117,  282 => 116,  278 => 115,  274 => 114,  268 => 111,  262 => 108,  256 => 105,  252 => 104,  248 => 103,  244 => 102,  238 => 99,  234 => 98,  230 => 97,  226 => 96,  222 => 95,  219 => 94,  209 => 93,  196 => 90,  182 => 79,  171 => 71,  162 => 64,  148 => 56,  142 => 53,  136 => 49,  134 => 48,  122 => 40,  115 => 35,  106 => 29,  100 => 26,  94 => 22,  92 => 21,  78 => 9,  76 => 8,  72 => 7,  69 => 6,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'FOSMessageBundle::layout.html.twig' %}

       

{% block fos_content %}
<br>
    {% for message in thread.messages %}
{%if app.user.username==message.sender%}

<div class=\"row\">
<div class=\"col-xs-1\">
</div>
    <div class=\"col-xs-1 pull-right\">
       
        </div>
    

    <div class=\"messenger_thread_message pull-right well\">
        <div class=\"messenger_thread_message_info\">
                   <span class=\"form \">
        {% trans with {'%sender%': message.sender|e, '%date%': message.createdAt|date} from 'FOSMessageBundle' %}message_info{% endtrans %}
                   </span>
        </div>
        <div class=\"col-xs-1\">
</div>
        <div class=\"messenger_thread_message_body pull-right\" id=\"message_{{ message.id }}\">
                    <span class=\"message pull-right\">

          message : <b> {{ message.body }}</b>
                    </span>
        </div>
    </div></div>
          <br>
          {% else %}
          <div class=\"row\">
<div class=\"col-xs-0.5\">
</div>
    <div class=\"col-xs-1 pull-left\">
        <span class=\"photo\">
        <img class=\"img-circle \" width=\"30\" hieght=\"30\" src=\"{{asset('uploads/img/experts/')}}{{message.sender.photoname}}\">
        </span>
        </div>
    

    <div class=\"messenger_thread_message pull-left well\">
        <div class=\"messenger_thread_message_info\">
                   <span class=\"form \">
        {% trans with {'%sender%': message.sender|e, '%date%': message.createdAt|date} from 'FOSMessageBundle' %}message_info{% endtrans %}
                   </span>
        </div>
        <div class=\"col-xs-1\">
</div>
        <div class=\"messenger_thread_message_body pull-left\" id=\"message_{{ message.id }}\">
                    <span class=\"message pull-left \">

          message : <b> {{ message.body }}</b>
                    </span>
        </div>
    </div></div>
          <br>

{% endif %}
{% endfor %}


<div class=\"row\">

<div class=\"col-xs-1\">
</div>

{{form_start(form, {'method': 'post','action':url('fos_message_thread_view', {'threadId': thread.id})})}}
         <div class=\"row\">
    <div class=\"col-md-5\"> 
  <div class=\"form-group has-success\">
    <div class=\"input-group input-icon\">
     <span class=\"input-group-addon\">
     <i class=\"fa fa-user font-green\"></i>
       </span>
    {{ form_widget(form.body,{'attr':{'class':'form-control placeholder-no-fix','placeholder': \"message \"}}) }}
    </div>   </div>   </div>   </div>
    <div class=\"row\">
    <div class=\"col-xs-1\">
</div>
         <div class=\"col-xs-3\">
         <input type=\"submit\"  class=\"btn btn-primary\" value=\"envoyer\"></div>
           <div class=\"col-xs-3\">
         <input type=\"reset\"  class=\"btn btn-danger\" value=\"cancel\"/></div>

</div>
{{form_end(form)}}
</div>
{% endblock %}
     {% block javascripts %}
       
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

            
              
", "@FOSMessage/Message/thread.html.twig", "C:\\wamp64\\www\\kc_prod\\vendor\\friendsofsymfony\\message-bundle\\Resources\\views\\Message\\thread.html.twig");
    }
}
