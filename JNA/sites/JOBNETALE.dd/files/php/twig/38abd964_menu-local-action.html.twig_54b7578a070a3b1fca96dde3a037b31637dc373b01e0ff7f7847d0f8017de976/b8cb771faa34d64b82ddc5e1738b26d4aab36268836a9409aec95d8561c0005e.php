<?php

/* core/themes/classy/templates/navigation/menu-local-action.html.twig */
class __TwigTemplate_755da070fde802a1e13fd270a533dc6ba37a5630bbc86591c72753d8a70dc355 extends Twig_Template
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
        $__internal_9ebd2f5d9bf37b03f61d7a107866366bcfad0277279e5e459dbfc034612046b4 = $this->env->getExtension("native_profiler");
        $__internal_9ebd2f5d9bf37b03f61d7a107866366bcfad0277279e5e459dbfc034612046b4->enter($__internal_9ebd2f5d9bf37b03f61d7a107866366bcfad0277279e5e459dbfc034612046b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/navigation/menu-local-action.html.twig"));

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

        // line 13
        echo "<li";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
        echo "</li>
";
        
        $__internal_9ebd2f5d9bf37b03f61d7a107866366bcfad0277279e5e459dbfc034612046b4->leave($__internal_9ebd2f5d9bf37b03f61d7a107866366bcfad0277279e5e459dbfc034612046b4_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/navigation/menu-local-action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a single local action link.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the wrapper element.*/
/*  * - link: A rendered link element.*/
/*  **/
/*  * @see template_preprocess_menu_local_action()*/
/*  *//* */
/* #}*/
/* <li{{ attributes }}>{{ link }}</li>*/
/* */
