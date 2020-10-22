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

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_577b70ea5e0527f19fbabef2f9b5adc4fcbd65a4caee14c51e2f50b1ffbed7f8 extends \Twig\Template
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
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "FOSUserBundle:Resetting:request_content.html.twig", "C:\\wamp64\\www\\kc_prod\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
