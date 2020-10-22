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

/* @FOSMessage/Message/binbox.html.twig */
class __TwigTemplate_940a4a70e568ba435286abffb4584c852e55722f5e95c04b5dbdae82a724f4cd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'fos_content' => [$this, 'block_fos_content'],
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
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "@FOSMessage/Message/binbox.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_fos_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "


";
    }

    public function getTemplateName()
    {
        return "@FOSMessage/Message/binbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  46 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@FOSMessage/Message/binbox.html.twig", "C:\\wamp64\\www\\kc_prod\\vendor\\friendsofsymfony\\message-bundle\\Resources\\views\\Message\\binbox.html.twig");
    }
}
