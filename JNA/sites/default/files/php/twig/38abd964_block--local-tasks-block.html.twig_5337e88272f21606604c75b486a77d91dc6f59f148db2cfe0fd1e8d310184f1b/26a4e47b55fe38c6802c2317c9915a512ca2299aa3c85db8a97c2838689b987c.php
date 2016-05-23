<?php

/* core/themes/classy/templates/block/block--local-tasks-block.html.twig */
class __TwigTemplate_d113f7e18c512c9d05327c6d865f0bf3d51b210d308c14eafb6ce9c95c8b798a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "core/themes/classy/templates/block/block--local-tasks-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7dfbc7d4bb86872662eddb6fa543678d0546e5dfcfb22d9f963bf8b5ead582e1 = $this->env->getExtension("native_profiler");
        $__internal_7dfbc7d4bb86872662eddb6fa543678d0546e5dfcfb22d9f963bf8b5ead582e1->enter($__internal_7dfbc7d4bb86872662eddb6fa543678d0546e5dfcfb22d9f963bf8b5ead582e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/block/block--local-tasks-block.html.twig"));

        $tags = array("if" => 9);
        $filters = array("t" => 10);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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
        
        $__internal_7dfbc7d4bb86872662eddb6fa543678d0546e5dfcfb22d9f963bf8b5ead582e1->leave($__internal_7dfbc7d4bb86872662eddb6fa543678d0546e5dfcfb22d9f963bf8b5ead582e1_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_3a33b56686940eb164249bb3e239b77cf6fbc2cc45bf3a63c2ef26ac5f267425 = $this->env->getExtension("native_profiler");
        $__internal_3a33b56686940eb164249bb3e239b77cf6fbc2cc45bf3a63c2ef26ac5f267425->enter($__internal_3a33b56686940eb164249bb3e239b77cf6fbc2cc45bf3a63c2ef26ac5f267425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 10
            echo "    <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Tabs")));
            echo "\">
      ";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </nav>
  ";
        }
        
        $__internal_3a33b56686940eb164249bb3e239b77cf6fbc2cc45bf3a63c2ef26ac5f267425->leave($__internal_3a33b56686940eb164249bb3e239b77cf6fbc2cc45bf3a63c2ef26ac5f267425_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/block/block--local-tasks-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }
}
/* {% extends "block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for tabs.*/
/*  *//* */
/* #}*/
/* {% block content %}*/
/*   {% if content %}*/
/*     <nav class="tabs" role="navigation" aria-label="{{ 'Tabs'|t }}">*/
/*       {{ content }}*/
/*     </nav>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
