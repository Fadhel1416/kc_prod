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

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_42c98855939e9674be9841fb533131c1fbd6272e8b9e6af3d50f3b8deb59c493 extends \Twig\Template
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
";
        // line 3
        if (($context["error"] ?? null)) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 4), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo " 
               
               

<form  class=\"login-form\"  action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
     <div class=\"form-title\">
                    <span class=\"form-title\">Bienvenue.</span>
                
                </div>
                <div class=\"alert alert-danger display-hide\">
                    <button class=\"close\" data-close=\"alert\"></button>
                    <span> Enter any username and password. </span>
                </div>
    ";
        // line 19
        if (($context["csrf_token"] ?? null)) {
            // line 20
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
            echo "\" />
    ";
        }
        // line 22
        echo " <div class=\"form-group\">
    <label  class=\"control-label visible-ie8 visible-ie9\" for=\"username\">";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input  class=\"form-control form-control-solid placeholder-no-fix\" type=\"text\" id=\"username\" autocomplete=\"off\" placeholder=\"Nom de l'utilisateur\" name=\"_username\"  value=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" required=\"required\"  />
    <br>
    <label class=\"control-label visible-ie8 visible-ie9\"  for=\"password\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input class=\"form-control form-control-solid placeholder-no-fix\"  id=\"password\" name=\"_password\" type=\"password\" autocomplete=\"off\" placeholder=\"mot de passe\" required=\"required\"  />
 <div class=\"form-actions\">
                    <div class=\"pull-left\">
                      
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label    class=\"rememberme mt-checkbox mt-checkbox-outline\" for=\"remember_me\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
    <span>
        
    </span>
                    </div>
    
    
    <div class=\"form-actions\">
  
    <input  class=\"btn-success btn-lg btn-block uppercase\"  type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
    
 <div class=\"pull-right forget-password-block\">
                        <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_request");
        echo "\" id=\"forget-password\" class=\"forget-password\">Mot de passe oublié ?</a>
                    </div>
                </div>
                
    <div class=\"create-account\">
                    <p>
                        <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-danger\" id=\"register-btn\" >Créer un compte</a>
                    </p>
                </div>
                    
                    
 </div>
</form>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 51,  114 => 45,  107 => 41,  95 => 32,  86 => 26,  81 => 24,  77 => 23,  74 => 22,  68 => 20,  66 => 19,  54 => 10,  48 => 6,  42 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "FOSUserBundle:Security:login_content.html.twig", "C:\\wamp64\\www\\kc_prod\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
