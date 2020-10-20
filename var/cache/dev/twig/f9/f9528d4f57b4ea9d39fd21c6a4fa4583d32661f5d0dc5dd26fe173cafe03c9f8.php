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

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_65e02a7fedfd54f4d3d1d2ddf16bde9b8f537e733cb1230ce4836cf099a93b00 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })()), "messageKey", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })()), "messageData", [], "any", false, false, false, 4), "security"), "html", null, true);
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
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 20, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 24, $this->source); })()), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 51,  120 => 45,  113 => 41,  101 => 32,  92 => 26,  87 => 24,  83 => 23,  80 => 22,  74 => 20,  72 => 19,  60 => 10,  54 => 6,  48 => 4,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
 
               
               

<form  class=\"login-form\"  action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
     <div class=\"form-title\">
                    <span class=\"form-title\">Bienvenue.</span>
                
                </div>
                <div class=\"alert alert-danger display-hide\">
                    <button class=\"close\" data-close=\"alert\"></button>
                    <span> Enter any username and password. </span>
                </div>
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}
 <div class=\"form-group\">
    <label  class=\"control-label visible-ie8 visible-ie9\" for=\"username\">{{ 'security.login.username'|trans }}</label>
    <input  class=\"form-control form-control-solid placeholder-no-fix\" type=\"text\" id=\"username\" autocomplete=\"off\" placeholder=\"Nom de l'utilisateur\" name=\"_username\"  value=\"{{ last_username }}\" required=\"required\"  />
    <br>
    <label class=\"control-label visible-ie8 visible-ie9\"  for=\"password\">{{ 'security.login.password'|trans }}</label>
    <input class=\"form-control form-control-solid placeholder-no-fix\"  id=\"password\" name=\"_password\" type=\"password\" autocomplete=\"off\" placeholder=\"mot de passe\" required=\"required\"  />
 <div class=\"form-actions\">
                    <div class=\"pull-left\">
                      
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label    class=\"rememberme mt-checkbox mt-checkbox-outline\" for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
    <span>
        
    </span>
                    </div>
    
    
    <div class=\"form-actions\">
  
    <input  class=\"btn-success btn-lg btn-block uppercase\"  type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
    </div>
    
 <div class=\"pull-right forget-password-block\">
                        <a href=\"{{ path('fos_user_resetting_request') }}\" id=\"forget-password\" class=\"forget-password\">Mot de passe oublié ?</a>
                    </div>
                </div>
                
    <div class=\"create-account\">
                    <p>
                        <a href=\"{{ path('fos_user_registration_register') }}\" class=\"btn btn-danger\" id=\"register-btn\" >Créer un compte</a>
                    </p>
                </div>
                    
                    
 </div>
</form>", "@FOSUser/Security/login_content.html.twig", "C:\\wamp64\\www\\kc_prod\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login_content.html.twig");
    }
}
