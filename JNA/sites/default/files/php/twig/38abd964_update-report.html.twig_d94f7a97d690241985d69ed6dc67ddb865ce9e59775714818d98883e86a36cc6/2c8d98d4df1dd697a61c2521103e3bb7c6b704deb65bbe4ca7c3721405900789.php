<?php

/* core/themes/stable/templates/admin/update-report.html.twig */
class __TwigTemplate_37b29013ca5fe672b23fe41f609b918632b21f2a0dff13ea4f7b36e0c2d0c17d extends Twig_Template
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
        $__internal_4c46314afbb3fd9301a7608219154ec2c421d34bbd5a0d75ccb01398193a852f = $this->env->getExtension("native_profiler");
        $__internal_4c46314afbb3fd9301a7608219154ec2c421d34bbd5a0d75ccb01398193a852f->enter($__internal_4c46314afbb3fd9301a7608219154ec2c421d34bbd5a0d75ccb01398193a852f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/update-report.html.twig"));

        $tags = array("for" => 18);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
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

        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["last_checked"]) ? $context["last_checked"] : null), "html", null, true));
        echo "

";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["project_types"]) ? $context["project_types"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["project_type"]) {
            // line 19
            echo "  <h3>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["project_type"], "label", array()), "html", null, true));
            echo "</h3>
  ";
            // line 20
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["project_type"], "table", array()), "html", null, true));
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "  <p>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["no_updates_message"]) ? $context["no_updates_message"] : null), "html", null, true));
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4c46314afbb3fd9301a7608219154ec2c421d34bbd5a0d75ccb01398193a852f->leave($__internal_4c46314afbb3fd9301a7608219154ec2c421d34bbd5a0d75ccb01398193a852f_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/update-report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  61 => 20,  56 => 19,  51 => 18,  46 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for the project status report.*/
/*  **/
/*  * Available variables:*/
/*  * - last_checked: Themed last time update data was checked.*/
/*  * - no_updates_message: Message when there are no project updates.*/
/*  * - project_types: A list of project types.*/
/*  *   - label: The project type label.*/
/*  *   - table: The project status table.*/
/*  **/
/*  * @see template_preprocess_update_report()*/
/*  *//* */
/* #}*/
/* {{ last_checked }}*/
/* */
/* {% for project_type in project_types %}*/
/*   <h3>{{ project_type.label }}</h3>*/
/*   {{ project_type.table }}*/
/* {% else %}*/
/*   <p>{{ no_updates_message }}</p>*/
/* {% endfor %}*/
/* */
