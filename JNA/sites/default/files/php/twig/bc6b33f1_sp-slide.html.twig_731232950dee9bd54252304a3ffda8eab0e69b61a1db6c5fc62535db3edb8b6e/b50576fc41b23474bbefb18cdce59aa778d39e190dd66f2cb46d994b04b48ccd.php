<?php

/* modules/tabvn/sp/templates/sp-slide.html.twig */
class __TwigTemplate_c75facc1056f64949aa428fe1ebc2eebc71cdc2a1a2faf7ab17ac69599bf7695 extends Twig_Template
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
        $__internal_cda51b25e73932a8bfcda30b85c17a8434c5483318e8fbc79d409834211136bc = $this->env->getExtension("native_profiler");
        $__internal_cda51b25e73932a8bfcda30b85c17a8434c5483318e8fbc79d409834211136bc->enter($__internal_cda51b25e73932a8bfcda30b85c17a8434c5483318e8fbc79d409834211136bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/tabvn/sp/templates/sp-slide.html.twig"));

        $tags = array("if" => 3);
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
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
    ";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true));
        echo "
    ";
        // line 3
        if ((isset($context["thumbnail"]) ? $context["thumbnail"] : null)) {
            // line 4
            echo "        <div class=\"sp-thumbnail\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["thumbnail"]) ? $context["thumbnail"] : null), "html", null, true));
            echo "</div>
    ";
        }
        // line 6
        echo "    ";
        if ((isset($context["caption"]) ? $context["caption"] : null)) {
            // line 7
            echo "        <div class=\"sp-caption\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true));
            echo "</div>
    ";
        }
        // line 9
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["layers"]) ? $context["layers"] : null), "html", null, true));
        echo "

</div>";
        
        $__internal_cda51b25e73932a8bfcda30b85c17a8434c5483318e8fbc79d409834211136bc->leave($__internal_cda51b25e73932a8bfcda30b85c17a8434c5483318e8fbc79d409834211136bc_prof);

    }

    public function getTemplateName()
    {
        return "modules/tabvn/sp/templates/sp-slide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 9,  66 => 7,  63 => 6,  57 => 4,  55 => 3,  51 => 2,  46 => 1,);
    }
}
/* <div{{ attributes.addClass(classes) }}>*/
/*     {{ image }}*/
/*     {% if(thumbnail) %}*/
/*         <div class="sp-thumbnail">{{ thumbnail }}</div>*/
/*     {% endif %}*/
/*     {% if(caption) %}*/
/*         <div class="sp-caption">{{ caption }}</div>*/
/*     {% endif %}*/
/*     {{ layers }}*/
/* */
/* </div>*/
