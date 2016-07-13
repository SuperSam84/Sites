<?php

/* core/themes/stable/templates/admin/system-config-form.html.twig */
class __TwigTemplate_9754fff61aaca502ef0f00c82c48fa5023909b8527c9ef2d4f46892cf62710e1 extends Twig_Template
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
        $__internal_dfac5c46108f0e3ae0af591f281a098b794ed040c6fa5e3dd2a96b1f743a2364 = $this->env->getExtension("native_profiler");
        $__internal_dfac5c46108f0e3ae0af591f281a098b794ed040c6fa5e3dd2a96b1f743a2364->enter($__internal_dfac5c46108f0e3ae0af591f281a098b794ed040c6fa5e3dd2a96b1f743a2364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/system-config-form.html.twig"));

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

        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["form"]) ? $context["form"] : null), "html", null, true));
        echo "
";
        
        $__internal_dfac5c46108f0e3ae0af591f281a098b794ed040c6fa5e3dd2a96b1f743a2364->leave($__internal_dfac5c46108f0e3ae0af591f281a098b794ed040c6fa5e3dd2a96b1f743a2364_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/system-config-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a system settings form.*/
/*  **/
/*  * This template will be used when a system config form specifies 'config_form'*/
/*  * as its #theme callback.  Otherwise, by default, system config forms will be*/
/*  * themed by form.html.twig. This does not alter the appearance of a form at all,*/
/*  * but is provided as a convenience for themers.*/
/*  **/
/*  * Available variables:*/
/*  * - form: The confirm form.*/
/*  *//* */
/* #}*/
/* {{ form }}*/
/* */
