<?php

/* themes/bootstrap/templates/system/breadcrumb.html.twig */
class __TwigTemplate_f82e1203d509129c8dfa641a4029e0e50a0638c96f6c29b5ead7a2e933c6dd19 extends Twig_Template
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
        $__internal_3259c2682113487a9ccc7e059f2dce099ca65a46da9e82ce4a751edaa32720a0 = $this->env->getExtension("native_profiler");
        $__internal_3259c2682113487a9ccc7e059f2dce099ca65a46da9e82ce4a751edaa32720a0->enter($__internal_3259c2682113487a9ccc7e059f2dce099ca65a46da9e82ce4a751edaa32720a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/system/breadcrumb.html.twig"));

        $tags = array("if" => 12, "for" => 14);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
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

        // line 12
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 13
            echo "  <ol class=\"breadcrumb\">
    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "      <li ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                echo ">
        ";
                // line 16
                if ($this->getAttribute($context["item"], "url", array())) {
                    // line 17
                    echo "          <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                    echo "</a>
        ";
                } else {
                    // line 19
                    echo "          ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                    echo "
        ";
                }
                // line 21
                echo "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "  </ol>
";
        }
        
        $__internal_3259c2682113487a9ccc7e059f2dce099ca65a46da9e82ce4a751edaa32720a0->leave($__internal_3259c2682113487a9ccc7e059f2dce099ca65a46da9e82ce4a751edaa32720a0_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/system/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  76 => 21,  70 => 19,  62 => 17,  60 => 16,  55 => 15,  51 => 14,  48 => 13,  46 => 12,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a breadcrumb trail.*/
/*  **/
/*  * Available variables:*/
/*  * - breadcrumb: Breadcrumb trail items.*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {% if breadcrumb %}*/
/*   <ol class="breadcrumb">*/
/*     {% for item in breadcrumb %}*/
/*       <li {{ item.attributes }}>*/
/*         {% if item.url %}*/
/*           <a href="{{ item.url }}">{{ item.text }}</a>*/
/*         {% else %}*/
/*           {{ item.text }}*/
/*         {% endif %}*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ol>*/
/* {% endif %}*/
/* */
