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

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_8f1197d54b498d66eb78a9acd87c4c953a2897a6ce56af261447fc049732dda7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 2
        echo "

<form action=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"form-login\">
   
    
            <div class=\"login-wrap\">

    
        <label for=\"username\">Username or Email</label>
        <input class=\"form-control form-control-solid placeholder-no-fix form-group\"  type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    
        
     
    
        </div>
        <!-- Modal -->
    
        <!-- modal -->   
        
        
        
        <center>
        <input class=\"btn btn-success\" type=\"submit\" value=\"Reset password\"  />
        </center>
    
    
    
    
</form>
                 
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}


<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"form-login\">
   
    
            <div class=\"login-wrap\">

    
        <label for=\"username\">Username or Email</label>
        <input class=\"form-control form-control-solid placeholder-no-fix form-group\"  type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    
        
     
    
        </div>
        <!-- Modal -->
    
        <!-- modal -->   
        
        
        
        <center>
        <input class=\"btn btn-success\" type=\"submit\" value=\"Reset password\"  />
        </center>
    
    
    
    
</form>
                 
", "@FOSUser/Resetting/request_content.html.twig", "C:\\wamp64\\www\\kc_prod\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request_content.html.twig");
    }
}
