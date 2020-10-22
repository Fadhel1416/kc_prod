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

/* @FOSUser/Resetting/reset_content.html.twig */
class __TwigTemplate_9f029100cc7190a0a615a8ed4c67e810daf8ac824ee184a5655b9705c00f75ca extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'nom' => [$this, 'block_nom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $this->displayBlock('nom', $context, $blocks);
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_reset", ["token" => ($context["token"] ?? null)]), "attr" => ["class" => "fos_user_resetting_reset"]]);
        echo "

<div class=\"login-form\">
    
  <div class=\"row\">
      <div class=\"col-xs-6\">
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 11), "first", [], "any", false, false, false, 11), 'label');
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 12), "first", [], "any", false, false, false, 12), 'errors');
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 13), "first", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control form-control-solid placeholder-no-fix form-group"]]);
        echo "
  </div></div>

    
   
  <div class=\"row\"> 
      <div class=\"col-xs-6\">
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 20), "second", [], "any", false, false, false, 20), 'label');
        echo "
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 21), "second", [], "any", false, false, false, 21), 'errors');
        echo "
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 22), "second", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control form-control-solid placeholder-no-fix form-group"]]);
        echo "
  </div></div>

    
    
    
    
    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
    
    </div>
    
    <div>
        <input class=\"btn blue\" type=\"submit\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.reset.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    // line 2
    public function block_nom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "     <h2>Nouveau mot de passe</h2>
";
    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 3,  104 => 2,  98 => 36,  93 => 34,  85 => 29,  75 => 22,  71 => 21,  67 => 20,  57 => 13,  53 => 12,  49 => 11,  40 => 5,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@FOSUser/Resetting/reset_content.html.twig", "C:\\wamp64\\www\\kc_prod\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset_content.html.twig");
    }
}
