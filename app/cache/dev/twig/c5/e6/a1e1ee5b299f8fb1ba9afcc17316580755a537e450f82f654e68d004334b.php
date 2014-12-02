<?php

/* InstaAppBundle:Default:index.html.twig */
class __TwigTemplate_c5e6a1e1ee5b299f8fb1ba9afcc17316580755a537e450f82f654e68d004334b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "! Comment va tu ?
";
    }

    public function getTemplateName()
    {
        return "InstaAppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
