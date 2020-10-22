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

/* FOSMessageBundle:Message:thread.html.twig */
class __TwigTemplate_6fc74ee7274a6f738feda428acfd22c04fee67a534c73e61725be2e230e31f52 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:thread.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<br>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["thread"] ?? null), "messages", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 8), "username", [], "any", false, false, false, 8) == twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 8))) {
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_message_thread_view", ["threadId" => twig_get_attribute($this->env, $this->source, ($context["thread"] ?? null), "id", [], "any", false, false, false, 71)])]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "body", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control placeholder-no-fix", "placeholder" => "message "]]);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>
";
    }

    // line 93
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 117,  252 => 116,  248 => 115,  244 => 114,  238 => 111,  232 => 108,  226 => 105,  222 => 104,  218 => 103,  214 => 102,  208 => 99,  204 => 98,  200 => 97,  196 => 96,  192 => 95,  189 => 94,  185 => 93,  178 => 90,  164 => 79,  153 => 71,  144 => 64,  130 => 56,  124 => 53,  118 => 49,  116 => 48,  104 => 40,  97 => 35,  88 => 29,  82 => 26,  76 => 22,  74 => 21,  60 => 9,  58 => 8,  54 => 7,  51 => 6,  47 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "FOSMessageBundle:Message:thread.html.twig", "C:\\wamp64\\www\\kc_prod\\vendor\\friendsofsymfony\\message-bundle/Resources/views/Message/thread.html.twig");
    }
}
