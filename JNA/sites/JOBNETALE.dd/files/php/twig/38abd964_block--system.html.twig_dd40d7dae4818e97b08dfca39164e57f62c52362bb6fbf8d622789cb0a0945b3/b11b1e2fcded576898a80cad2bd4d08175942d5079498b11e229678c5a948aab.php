<?php

/* themes/bootstrap/templates/block/block--system.html.twig */
class __TwigTemplate_8f039d5efb175975f5f1ddf77b8cb55855dfd2c9d31701d0d971290f18c76657 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/bootstrap/templates/block/block--system.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "block--bare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58b1b50028ab5d46d9196bda4ddd63f08752fe7d0c96b8c5e04422041d0185d9 = $this->env->getExtension("native_profiler");
        $__internal_58b1b50028ab5d46d9196bda4ddd63f08752fe7d0c96b8c5e04422041d0185d9->enter($__internal_58b1b50028ab5d46d9196bda4ddd63f08752fe7d0c96b8c5e04422041d0185d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/block/block--system.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58b1b50028ab5d46d9196bda4ddd63f08752fe7d0c96b8c5e04422041d0185d9->leave($__internal_58b1b50028ab5d46d9196bda4ddd63f08752fe7d0c96b8c5e04422041d0185d9_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/block/block--system.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends "block--bare.html.twig" %}*/
/* */
