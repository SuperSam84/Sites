<?php

/* themes/bootstrap/templates/block/block--page-title-block.html.twig */
class __TwigTemplate_758b92f4739358983504ee3e8eca33de46a1c65a57ef65434497b3671f68c03c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/bootstrap/templates/block/block--page-title-block.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "block--bare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4a968742dd6923556710f71b20319a0e055e4b4c77b6be44973d2b51acf9850 = $this->env->getExtension("native_profiler");
        $__internal_c4a968742dd6923556710f71b20319a0e055e4b4c77b6be44973d2b51acf9850->enter($__internal_c4a968742dd6923556710f71b20319a0e055e4b4c77b6be44973d2b51acf9850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/block/block--page-title-block.html.twig"));

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
        
        $__internal_c4a968742dd6923556710f71b20319a0e055e4b4c77b6be44973d2b51acf9850->leave($__internal_c4a968742dd6923556710f71b20319a0e055e4b4c77b6be44973d2b51acf9850_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/block/block--page-title-block.html.twig";
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
