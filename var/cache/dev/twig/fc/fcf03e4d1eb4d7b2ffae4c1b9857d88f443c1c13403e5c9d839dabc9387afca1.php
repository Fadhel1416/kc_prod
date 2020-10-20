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

/* @MgiletNotification/notification_list.html.twig */
class __TwigTemplate_2f5d8926ebf4479366f5237599530afe34dd69682969ba837081c4eb1042d07e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MgiletNotification/notification_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MgiletNotification/notification_list.html.twig"));

        // line 1
        echo "


 <ul class=\"dropdown-menu-list scroller\" style=\"height: 250px;\" data-handle-color=\"#637283\">
     ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_reverse_filter($this->env, (isset($context["notificationList"]) || array_key_exists("notificationList", $context) ? $context["notificationList"] : (function () { throw new RuntimeError('Variable "notificationList" does not exist.', 5, $this->source); })())), 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["notificationItem"]) {
            // line 6
            echo "  
         
 <li>
                                                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["notificationItem"], 0, [], "array", false, false, false, 9), "link", [], "any", false, false, false, 9), "html", null, true);
            echo "\">
                                                    <div class=\"time\" style=\"padding-left: 2px; padding-right: 2px;\">
                                                     <button id=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["notificationItem"], 0, [], "array", false, false, false, 11), "id", [], "any", false, false, false, 11), "html", null, true);
            echo "\" class=\"btn-sm btn-danger\" style=\"padding-bottom: 1px; padding-top: 1px; padding-right: 5px;  padding-left: 5px; border-top-width: 1px;border-bottom-width: 1px;\">x</button>          
                                                    </div>
                                                    <span class=\"details\">
                                                                                        
                                                        <span class=\"label label-sm label-icon label-success\">
                                                            <i class=\"fa fa-bolt\"></i>
                                                        </span>  ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["notificationItem"], 0, [], "array", false, false, false, 17), "subject", [], "any", false, false, false, 17), "html", null, true);
            echo " </span><br>
                                                            <span> ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["notificationItem"], 0, [], "array", false, false, false, 18), "message", [], "any", false, false, false, 18), "html", null, true);
            echo "</span><br>
                                                         <span>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["notificationItem"], 0, [], "array", false, false, false, 19), "date", [], "any", false, false, false, 19), "d/m/Y H:i:s"), "html", null, true);
            echo " </span>
                                                </a>
                                            </li>
                                                                                          
     
    <script src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    <script>
        \$(\"#";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["notificationItem"], 0, [], "array", false, false, false, 26), "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\").on('click', function(){
           
            \$.ajax({
                url:'";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seen_list", ["lu" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["notificationItem"], 0, [], "array", false, false, false, 29), "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "',
                type: \"GET\",
                dataType: \"json\",

 
                data: {
                },
                async: true,
                success:function(){
        \$('";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["notificationItem"], 0, [], "array", false, false, false, 38), "id", [], "any", false, false, false, 38), "html", null, true);
            echo "').html(); // rafraichi toute ta DIV \"bien sur il lui faut un id \"
    }
            });
           \$(\"#mazou\").load(location.href+\" #mazou>*\",\"\");
         return false;
            

}); 


    </script>                                        
                                     
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notificationItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "  </ul>


               
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@MgiletNotification/notification_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 51,  111 => 38,  99 => 29,  93 => 26,  88 => 24,  80 => 19,  76 => 18,  72 => 17,  63 => 11,  58 => 9,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


 <ul class=\"dropdown-menu-list scroller\" style=\"height: 250px;\" data-handle-color=\"#637283\">
     {% for notificationItem in notificationList|reverse[:10] %}
  
         
 <li>
                                                <a href=\"{{ notificationItem[0].link }}\">
                                                    <div class=\"time\" style=\"padding-left: 2px; padding-right: 2px;\">
                                                     <button id=\"{{notificationItem[0].id}}\" class=\"btn-sm btn-danger\" style=\"padding-bottom: 1px; padding-top: 1px; padding-right: 5px;  padding-left: 5px; border-top-width: 1px;border-bottom-width: 1px;\">x</button>          
                                                    </div>
                                                    <span class=\"details\">
                                                                                        
                                                        <span class=\"label label-sm label-icon label-success\">
                                                            <i class=\"fa fa-bolt\"></i>
                                                        </span>  {{ notificationItem[0].subject }} </span><br>
                                                            <span> {{ notificationItem[0].message }}</span><br>
                                                         <span>{{ notificationItem[0].date|date(\"d/m/Y H:i:s\" )  }} </span>
                                                </a>
                                            </li>
                                                                                          
     
    <script src=\"{{ asset('assets/global/plugins/jquery.min.js')}}\" type=\"text/javascript\"></script>
    <script>
        \$(\"#{{notificationItem[0].id}}\").on('click', function(){
           
            \$.ajax({
                url:'{{path('seen_list',{'lu':notificationItem[0].id})}}',
                type: \"GET\",
                dataType: \"json\",

 
                data: {
                },
                async: true,
                success:function(){
        \$('{{notificationItem[0].id}}').html(); // rafraichi toute ta DIV \"bien sur il lui faut un id \"
    }
            });
           \$(\"#mazou\").load(location.href+\" #mazou>*\",\"\");
         return false;
            

}); 


    </script>                                        
                                     
{% endfor %}
  </ul>


               
", "@MgiletNotification/notification_list.html.twig", "C:\\wamp64\\www\\kc_prod\\src\\Mgilet\\NotificationBundle\\Resources\\views\\notification_list.html.twig");
    }
}
