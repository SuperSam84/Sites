<?php

/* modules/tabvn/sp/templates/sp-slider.html.twig */
class __TwigTemplate_d9d0f42ae052c9b742e95dfe1c99bf4f8249e85ae231bb1d9b8ffe3142bce7cf extends Twig_Template
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
        $__internal_0a8dcca485f8e47740b7e96435ad8f91bb024d59fc6dc271ccc94c1282d3f72e = $this->env->getExtension("native_profiler");
        $__internal_0a8dcca485f8e47740b7e96435ad8f91bb024d59fc6dc271ccc94c1282d3f72e->enter($__internal_0a8dcca485f8e47740b7e96435ad8f91bb024d59fc6dc271ccc94c1282d3f72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/tabvn/sp/templates/sp-slider.html.twig"));

        $tags = array("if" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 1
        if ((isset($context["slides"]) ? $context["slides"] : null)) {
            // line 2
            echo "<div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    <div class=\"sp-slides\">";
            // line 3
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["slides"]) ? $context["slides"] : null), "html", null, true));
            echo "</div>
</div>
";
        }
        
        $__internal_0a8dcca485f8e47740b7e96435ad8f91bb024d59fc6dc271ccc94c1282d3f72e->leave($__internal_0a8dcca485f8e47740b7e96435ad8f91bb024d59fc6dc271ccc94c1282d3f72e_prof);

    }

    public function getTemplateName()
    {
        return "modules/tabvn/sp/templates/sp-slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 3,  48 => 2,  46 => 1,);
    }
}
/* {% if(slides) %}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*     <div class="sp-slides">{{ slides }}</div>*/
/* </div>*/
/* {% endif %}*/
