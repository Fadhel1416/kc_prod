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
class __TwigTemplate_696cb6f1cd9633ed0b1ae30fa07bec1e54dc0e42b3085155e77ad44981930025 extends \Twig\Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_edit"), "attr" => ["class" => "fos_user_profile_edit"]]);
        echo "
    <div class=\"login-form\">
  <div class=\"row\">
      <div class=\"col-xs-6\">
   ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 7), 'label');
        echo "    
   ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 8), 'errors', ["attr" => ["class" => "alert-danger"]]);
        echo "
   ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control form-control-solid placeholder-no-fix form-group"]]);
        echo "
   
      </div>
  </div>
   <br>
   <div class=\"row\">
      <div class=\"col-xs-6\">
   ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 16), 'label');
        echo "   
   ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 17), 'errors', ["attr" => ["style" => "color:#d81717;"]]);
        echo "
   ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control form-control-solid placeholder-no-fix form-group"]]);
        echo "
   
      </div>
   </div>
   <br>
  <div class=\"row\">
      <div class=\"col-xs-6\">
   ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 25), "first", [], "any", false, false, false, 25), 'label');
        echo "    
   ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 26), "first", [], "any", false, false, false, 26), 'errors', ["attr" => ["class" => "alert-danger"]]);
        echo "
   ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 27), "first", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control form-control-solid placeholder-no-fix form-group"]]);
        echo "
   
      </div>
  </div><br>
   
   <div class=\"row\">
      <div class=\"col-xs-6\">
   ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 34), "second", [], "any", false, false, false, 34), 'label');
        echo "   
   ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 35), "second", [], "any", false, false, false, 35), 'errors', ["attr" => ["class" => "alert-danger"]]);
        echo "
   ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 36), "second", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control form-control-solid placeholder-no-fix form-group"]]);
        echo "
   
      </div>
   </div><br>
    <div class=\"row\">
      <div class=\"col-xs-6\">
   ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "role", [], "any", false, false, false, 42), 'label');
        echo "   
   ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "role", [], "any", false, false, false, 43), 'errors', ["attr" => ["class" => "alert-danger"]]);
        echo "
   ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "role", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control form-control-solid placeholder-no-fix form-group"]]);
        echo "
   
      </div>
   </div>
   <br>
   <div class=\"row\">
      <div class=\"col-xs-6\">
   ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "photo", [], "any", false, false, false, 51), 'label');
        echo "   
   ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "photo", [], "any", false, false, false, 52), 'errors', ["attr" => ["class" => "alert-danger"]]);
        echo "
   ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "photo", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control form-control-solid placeholder-no-fix form-group"]]);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
   

";
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
        return array (  161 => 64,  155 => 61,  144 => 53,  140 => 52,  136 => 51,  126 => 44,  122 => 43,  118 => 42,  109 => 36,  105 => 35,  101 => 34,  91 => 27,  87 => 26,  83 => 25,  73 => 18,  69 => 17,  65 => 16,  55 => 9,  51 => 8,  47 => 7,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "FOSUserBundle:Profile:edit_content.html.twig", "C:\\wamp64\\www\\kc_prod\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit_content.html.twig");
    }
}
