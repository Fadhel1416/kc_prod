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

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_1ccccf6a639084b6d21762c95ddfb3f5d33286ad5a223faf01fed555e7e0fbe9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_edit"), "attr" => ["class" => "fos_user_profile_edit"]]);
        echo "
    <div class=\"login-form\">
  <div class=\"row\">
      <div class=\"col-xs-6\">
   ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "email", [], "any", false, false, false, 7), 'label');
        echo "    
   ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "email", [], "any", false, false, false, 8), 'errors', ["attr" => ["class" => "alert-danger"]]);
        echo "
   ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "email", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control form-control-solid placeholder-no-fix form-group"]]);
        echo "
   
      </div>
  </div>
   <br>
   <div class=\"row\">
      <div class=\"col-xs-6\">
   ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "username", [], "any", false, false, false, 16), 'label');
        echo "   
   ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "username", [], "any", false, false, false, 17), 'errors', ["attr" => ["style" => "color:#d81717;"]]);
        echo "
   ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "username", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control form-control-solid placeholder-no-fix form-group"]]);
        echo "
   
      </div>
   </div>
   <br>
  <div class=\"row\">
      <div class=\"col-xs-6\">
   ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "plainPassword", [], "any", false, false, false, 25), "first", [], "any", false, false, false, 25), 'label');
        echo "    
   ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "plainPassword", [], "any", false, false, false, 26), "first", [], "any", false, false, false, 26), 'errors', ["attr" => ["class" => "alert-danger"]]);
        echo "
   ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "plainPassword", [], "any", false, false, false, 27), "first", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control form-control-solid placeholder-no-fix form-group"]]);
        echo "
   
      </div>
  </div><br>
   
   <div class=\"row\">
      <div class=\"col-xs-6\">
   ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "plainPassword", [], "any", false, false, false, 34), "second", [], "any", false, false, false, 34), 'label');
        echo "   
   ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "plainPassword", [], "any", false, false, false, 35), "second", [], "any", false, false, false, 35), 'errors', ["attr" => ["class" => "alert-danger"]]);
        echo "
   ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "plainPassword", [], "any", false, false, false, 36), "second", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control form-control-solid placeholder-no-fix form-group"]]);
        echo "
   
      </div>
   </div><br>
    <div class=\"row\">
      <div class=\"col-xs-6\">
   ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "role", [], "any", false, false, false, 42), 'label');
        echo "   
   ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "role", [], "any", false, false, false, 43), 'errors', ["attr" => ["class" => "alert-danger"]]);
        echo "
   ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "role", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control form-control-solid placeholder-no-fix form-group"]]);
        echo "
   
      </div>
   </div>
   <br>
   <div class=\"row\">
      <div class=\"col-xs-6\">
   ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "photo", [], "any", false, false, false, 51), 'label');
        echo "   
   ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "photo", [], "any", false, false, false, 52), 'errors', ["attr" => ["class" => "alert-danger"]]);
        echo "
   ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "photo", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control form-control-solid placeholder-no-fix form-group"]]);
        echo "
   
      </div>
   </div>
   <br>
   
 
    <div>
        <input type=\"submit\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.edit.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
    </div><br>
";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form_end');
        echo "
   

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 64,  161 => 61,  150 => 53,  146 => 52,  142 => 51,  132 => 44,  128 => 43,  124 => 42,  115 => 36,  111 => 35,  107 => 34,  97 => 27,  93 => 26,  89 => 25,  79 => 18,  75 => 17,  71 => 16,  61 => 9,  57 => 8,  53 => 7,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    <div class=\"login-form\">
  <div class=\"row\">
      <div class=\"col-xs-6\">
   {{ form_label(form.email)}}    
   {{ form_errors(form.email, { 'attr': {'class': 'alert-danger'} }) }}
   {{ form_widget(form.email, { 'attr': {'class': 'form-control form-control-solid placeholder-no-fix form-group'} }) }}
   
      </div>
  </div>
   <br>
   <div class=\"row\">
      <div class=\"col-xs-6\">
   {{ form_label(form.username)}}   
   {{ form_errors(form.username, { 'attr': {'style': 'color:#d81717;'} }) }}
   {{ form_widget(form.username, { 'attr': {'class': 'form-control form-control-solid placeholder-no-fix form-group'} }) }}
   
      </div>
   </div>
   <br>
  <div class=\"row\">
      <div class=\"col-xs-6\">
   {{ form_label(form.plainPassword.first)}}    
   {{ form_errors(form.plainPassword.first, { 'attr': {'class': 'alert-danger'} }) }}
   {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-control form-control-solid placeholder-no-fix form-group'} }) }}
   
      </div>
  </div><br>
   
   <div class=\"row\">
      <div class=\"col-xs-6\">
   {{ form_label(form.plainPassword.second)}}   
   {{ form_errors(form.plainPassword.second, { 'attr': {'class': 'alert-danger'} }) }}
   {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-control form-control-solid placeholder-no-fix form-group'} }) }}
   
      </div>
   </div><br>
    <div class=\"row\">
      <div class=\"col-xs-6\">
   {{ form_label(form.role)}}   
   {{ form_errors(form.role, { 'attr': {'class': 'alert-danger'} }) }}
   {{ form_widget(form.role, { 'attr': {'class': 'form-control form-control-solid placeholder-no-fix form-group'} }) }}
   
      </div>
   </div>
   <br>
   <div class=\"row\">
      <div class=\"col-xs-6\">
   {{ form_label(form.photo)}}   
   {{ form_errors(form.photo, { 'attr': {'class': 'alert-danger'} }) }}
   {{ form_widget(form.photo, { 'attr': {'class': 'form-control form-control-solid placeholder-no-fix form-group'} }) }}
   
      </div>
   </div>
   <br>
   
 
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
    </div><br>
{{ form_end(form) }}
   

", "FOSUserBundle:Profile:edit_content.html.twig", "C:\\wamp64\\www\\kc_prod\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit_content.html.twig");
    }
}
