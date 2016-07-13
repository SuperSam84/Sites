<?php

/* themes/bootstrap/templates/system/page.html.twig */
class __TwigTemplate_15c67a5143040f09473a318fc7241cac8e901950a1dca754eea9176e39471247 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c65f3a0be86c29829bb8812594b90f41006a9e05a25edaa71db6241ea64b992 = $this->env->getExtension("native_profiler");
        $__internal_1c65f3a0be86c29829bb8812594b90f41006a9e05a25edaa71db6241ea64b992->enter($__internal_1c65f3a0be86c29829bb8812594b90f41006a9e05a25edaa71db6241ea64b992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/system/page.html.twig"));

        $tags = array("set" => 59, "if" => 61, "block" => 62);
        $filters = array("clean_class" => 67, "t" => 76);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
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

        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 61
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 62
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 93
        echo "
";
        // line 95
        $this->displayBlock('main', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 176
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        
        $__internal_1c65f3a0be86c29829bb8812594b90f41006a9e05a25edaa71db6241ea64b992->leave($__internal_1c65f3a0be86c29829bb8812594b90f41006a9e05a25edaa71db6241ea64b992_prof);

    }

    // line 62
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_8072c7e22867d4f9c3f479435b4242c25b3abf04fcf059ca6864c4ea60cd0670 = $this->env->getExtension("native_profiler");
        $__internal_8072c7e22867d4f9c3f479435b4242c25b3abf04fcf059ca6864c4ea60cd0670->enter($__internal_8072c7e22867d4f9c3f479435b4242c25b3abf04fcf059ca6864c4ea60cd0670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 63
        echo "    ";
        // line 64
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 66
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 67
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 70
        echo "    <header";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      <div class=\"navbar-header\">
        ";
        // line 72
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 74
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 75
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">";
            // line 76
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 82
        echo "      </div>

      ";
        // line 85
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 86
            echo "        <div class=\"navbar-collapse collapse\">
          ";
            // line 87
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 90
        echo "    </header>
  ";
        
        $__internal_8072c7e22867d4f9c3f479435b4242c25b3abf04fcf059ca6864c4ea60cd0670->leave($__internal_8072c7e22867d4f9c3f479435b4242c25b3abf04fcf059ca6864c4ea60cd0670_prof);

    }

    // line 95
    public function block_main($context, array $blocks = array())
    {
        $__internal_1b23afff3f6aab2aefd2fb5ea3ed602affaf32248a82db34fd626d5ee75d45ff = $this->env->getExtension("native_profiler");
        $__internal_1b23afff3f6aab2aefd2fb5ea3ed602affaf32248a82db34fd626d5ee75d45ff->enter($__internal_1b23afff3f6aab2aefd2fb5ea3ed602affaf32248a82db34fd626d5ee75d45ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 96
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 100
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 101
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 106
            echo "      ";
        }
        // line 107
        echo "
      ";
        // line 109
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 110
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 115
            echo "      ";
        }
        // line 116
        echo "
      ";
        // line 118
        echo "      ";
        // line 119
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 120
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 121
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 122
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 123
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 126
        echo "      <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

        ";
        // line 129
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 130
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 133
            echo "        ";
        }
        // line 134
        echo "
        ";
        // line 136
        echo "        ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 137
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 140
            echo "        ";
        }
        // line 141
        echo "
        ";
        // line 143
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 144
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 147
            echo "        ";
        }
        // line 148
        echo "
        ";
        // line 150
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 151
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 154
            echo "        ";
        }
        // line 155
        echo "
        ";
        // line 157
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 161
        echo "      </section>

      ";
        // line 164
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 165
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 170
            echo "      ";
        }
        // line 171
        echo "    </div>
  </div>
";
        
        $__internal_1b23afff3f6aab2aefd2fb5ea3ed602affaf32248a82db34fd626d5ee75d45ff->leave($__internal_1b23afff3f6aab2aefd2fb5ea3ed602affaf32248a82db34fd626d5ee75d45ff_prof);

    }

    // line 101
    public function block_header($context, array $blocks = array())
    {
        $__internal_4cc7918a5f4a24bc6212b840bbeda34d87a6bbc0cea9d6dc7cdd52b09f323846 = $this->env->getExtension("native_profiler");
        $__internal_4cc7918a5f4a24bc6212b840bbeda34d87a6bbc0cea9d6dc7cdd52b09f323846->enter($__internal_4cc7918a5f4a24bc6212b840bbeda34d87a6bbc0cea9d6dc7cdd52b09f323846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 102
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 103
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
        
        $__internal_4cc7918a5f4a24bc6212b840bbeda34d87a6bbc0cea9d6dc7cdd52b09f323846->leave($__internal_4cc7918a5f4a24bc6212b840bbeda34d87a6bbc0cea9d6dc7cdd52b09f323846_prof);

    }

    // line 110
    public function block_sidebar_first($context, array $blocks = array())
    {
        $__internal_7804b633ecc9f411cf0dd8689b7a06291a41b578b095152b336e966ecd952259 = $this->env->getExtension("native_profiler");
        $__internal_7804b633ecc9f411cf0dd8689b7a06291a41b578b095152b336e966ecd952259->enter($__internal_7804b633ecc9f411cf0dd8689b7a06291a41b578b095152b336e966ecd952259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_first"));

        // line 111
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 112
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
        
        $__internal_7804b633ecc9f411cf0dd8689b7a06291a41b578b095152b336e966ecd952259->leave($__internal_7804b633ecc9f411cf0dd8689b7a06291a41b578b095152b336e966ecd952259_prof);

    }

    // line 130
    public function block_highlighted($context, array $blocks = array())
    {
        $__internal_05ea08003565612b55975794f5c683500585a4d53c26ffc65a23f96cb7e0e2eb = $this->env->getExtension("native_profiler");
        $__internal_05ea08003565612b55975794f5c683500585a4d53c26ffc65a23f96cb7e0e2eb->enter($__internal_05ea08003565612b55975794f5c683500585a4d53c26ffc65a23f96cb7e0e2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "highlighted"));

        // line 131
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
        
        $__internal_05ea08003565612b55975794f5c683500585a4d53c26ffc65a23f96cb7e0e2eb->leave($__internal_05ea08003565612b55975794f5c683500585a4d53c26ffc65a23f96cb7e0e2eb_prof);

    }

    // line 137
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_142a8f7ae546bd93c24f3758ccdb5c5ab6165d1ffd24d6f42fb8c514696b031b = $this->env->getExtension("native_profiler");
        $__internal_142a8f7ae546bd93c24f3758ccdb5c5ab6165d1ffd24d6f42fb8c514696b031b->enter($__internal_142a8f7ae546bd93c24f3758ccdb5c5ab6165d1ffd24d6f42fb8c514696b031b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 138
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
          ";
        
        $__internal_142a8f7ae546bd93c24f3758ccdb5c5ab6165d1ffd24d6f42fb8c514696b031b->leave($__internal_142a8f7ae546bd93c24f3758ccdb5c5ab6165d1ffd24d6f42fb8c514696b031b_prof);

    }

    // line 144
    public function block_action_links($context, array $blocks = array())
    {
        $__internal_423626c05ae1d422d932da173e953fdc560ad290d4762d235fa559f76a64ce71 = $this->env->getExtension("native_profiler");
        $__internal_423626c05ae1d422d932da173e953fdc560ad290d4762d235fa559f76a64ce71->enter($__internal_423626c05ae1d422d932da173e953fdc560ad290d4762d235fa559f76a64ce71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "action_links"));

        // line 145
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
        
        $__internal_423626c05ae1d422d932da173e953fdc560ad290d4762d235fa559f76a64ce71->leave($__internal_423626c05ae1d422d932da173e953fdc560ad290d4762d235fa559f76a64ce71_prof);

    }

    // line 151
    public function block_help($context, array $blocks = array())
    {
        $__internal_ee89d0bc2db90c67892eb3836876765fdbe504bdc819feaa6abb6e693807f3e6 = $this->env->getExtension("native_profiler");
        $__internal_ee89d0bc2db90c67892eb3836876765fdbe504bdc819feaa6abb6e693807f3e6->enter($__internal_ee89d0bc2db90c67892eb3836876765fdbe504bdc819feaa6abb6e693807f3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        // line 152
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
        
        $__internal_ee89d0bc2db90c67892eb3836876765fdbe504bdc819feaa6abb6e693807f3e6->leave($__internal_ee89d0bc2db90c67892eb3836876765fdbe504bdc819feaa6abb6e693807f3e6_prof);

    }

    // line 157
    public function block_content($context, array $blocks = array())
    {
        $__internal_9e37fb41d0efa6f951b0e233691e1fb117053d965f0fe925cb0782632650308e = $this->env->getExtension("native_profiler");
        $__internal_9e37fb41d0efa6f951b0e233691e1fb117053d965f0fe925cb0782632650308e->enter($__internal_9e37fb41d0efa6f951b0e233691e1fb117053d965f0fe925cb0782632650308e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 158
        echo "          <a id=\"main-content\"></a>
          ";
        // line 159
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
        
        $__internal_9e37fb41d0efa6f951b0e233691e1fb117053d965f0fe925cb0782632650308e->leave($__internal_9e37fb41d0efa6f951b0e233691e1fb117053d965f0fe925cb0782632650308e_prof);

    }

    // line 165
    public function block_sidebar_second($context, array $blocks = array())
    {
        $__internal_0d70b066a806a647b52bc20004a047d865606d6d2431b140a95b9fe176ff814b = $this->env->getExtension("native_profiler");
        $__internal_0d70b066a806a647b52bc20004a047d865606d6d2431b140a95b9fe176ff814b->enter($__internal_0d70b066a806a647b52bc20004a047d865606d6d2431b140a95b9fe176ff814b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_second"));

        // line 166
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 167
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
        
        $__internal_0d70b066a806a647b52bc20004a047d865606d6d2431b140a95b9fe176ff814b->leave($__internal_0d70b066a806a647b52bc20004a047d865606d6d2431b140a95b9fe176ff814b_prof);

    }

    // line 176
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3237fcf779b9b07e11998c993908f344c5ca65bbbff6b8a4a0a50b6bb49cba61 = $this->env->getExtension("native_profiler");
        $__internal_3237fcf779b9b07e11998c993908f344c5ca65bbbff6b8a4a0a50b6bb49cba61->enter($__internal_3237fcf779b9b07e11998c993908f344c5ca65bbbff6b8a4a0a50b6bb49cba61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 177
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 178
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
        
        $__internal_3237fcf779b9b07e11998c993908f344c5ca65bbbff6b8a4a0a50b6bb49cba61->leave($__internal_3237fcf779b9b07e11998c993908f344c5ca65bbbff6b8a4a0a50b6bb49cba61_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 178,  414 => 177,  408 => 176,  398 => 167,  395 => 166,  389 => 165,  380 => 159,  377 => 158,  371 => 157,  361 => 152,  355 => 151,  345 => 145,  339 => 144,  329 => 138,  323 => 137,  313 => 131,  307 => 130,  297 => 112,  294 => 111,  288 => 110,  278 => 103,  275 => 102,  269 => 101,  260 => 171,  257 => 170,  254 => 165,  251 => 164,  247 => 161,  244 => 157,  241 => 155,  238 => 154,  235 => 151,  232 => 150,  229 => 148,  226 => 147,  223 => 144,  220 => 143,  217 => 141,  214 => 140,  211 => 137,  208 => 136,  205 => 134,  202 => 133,  199 => 130,  196 => 129,  190 => 126,  188 => 123,  187 => 122,  186 => 121,  185 => 120,  184 => 119,  182 => 118,  179 => 116,  176 => 115,  173 => 110,  170 => 109,  167 => 107,  164 => 106,  161 => 101,  158 => 100,  151 => 96,  145 => 95,  137 => 90,  131 => 87,  128 => 86,  125 => 85,  121 => 82,  112 => 76,  109 => 75,  106 => 74,  102 => 72,  96 => 70,  94 => 67,  93 => 66,  92 => 64,  90 => 63,  84 => 62,  75 => 176,  73 => 175,  70 => 174,  68 => 95,  65 => 93,  61 => 62,  59 => 61,  57 => 59,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Navigation:*/
/*  * - breadcrumb: The breadcrumb trail for the current page.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the*/
/*  *   view and edit tabs when displaying a node).*/
/*  * - action_links: Actions local to the page, such as "Add menu" on the menu*/
/*  *   administration interface.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.navigation: Items for the navigation region.*/
/*  * - page.navigation_collapsible: Items for the navigation (collapsible) region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* {% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}*/
/* {# Navbar #}*/
/* {% if page.navigation or page.navigation_collapsible %}*/
/*   {% block navbar %}*/
/*     {%*/
/*       set navbar_classes = [*/
/*         'navbar',*/
/*         theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',*/
/*         theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,*/
/*       ]*/
/*     %}*/
/*     <header{{ navbar_attributes.addClass(navbar_classes) }} id="navbar" role="banner">*/
/*       <div class="navbar-header">*/
/*         {{ page.navigation }}*/
/*         {# .btn-navbar is used as the toggle for collapsed navbar content #}*/
/*         {% if page.navigation_collapsible %}*/
/*           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*             <span class="sr-only">{{ 'Toggle navigation'|t }}</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*       {# Navigation (collapsible) #}*/
/*       {% if page.navigation_collapsible %}*/
/*         <div class="navbar-collapse collapse">*/
/*           {{ page.navigation_collapsible }}*/
/*         </div>*/
/*       {% endif %}*/
/*     </header>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
/* {# Main #}*/
/* {% block main %}*/
/*   <div role="main" class="main-container {{ container }} js-quickedit-main-content">*/
/*     <div class="row">*/
/* */
/*       {# Header #}*/
/*       {% if page.header %}*/
/*         {% block header %}*/
/*           <div class="col-sm-12" role="heading">*/
/*             {{ page.header }}*/
/*           </div>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# Sidebar First #}*/
/*       {% if page.sidebar_first %}*/
/*         {% block sidebar_first %}*/
/*           <aside class="col-sm-3" role="complementary">*/
/*             {{ page.sidebar_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# Content #}*/
/*       {%*/
/*         set content_classes = [*/
/*           page.sidebar_first and page.sidebar_second ? 'col-sm-6',*/
/*           page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',*/
/*           page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',*/
/*           page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'*/
/*         ]*/
/*       %}*/
/*       <section{{ content_attributes.addClass(content_classes) }}>*/
/* */
/*         {# Highlighted #}*/
/*         {% if page.highlighted %}*/
/*           {% block highlighted %}*/
/*             <div class="highlighted">{{ page.highlighted }}</div>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Breadcrumbs #}*/
/*         {% if breadcrumb %}*/
/*           {% block breadcrumb %}*/
/*             {{ breadcrumb }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Action Links #}*/
/*         {% if action_links %}*/
/*           {% block action_links %}*/
/*             <ul class="action-links">{{ action_links }}</ul>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Help #}*/
/*         {% if page.help %}*/
/*           {% block help %}*/
/*             {{ page.help }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Content #}*/
/*         {% block content %}*/
/*           <a id="main-content"></a>*/
/*           {{ page.content }}*/
/*         {% endblock %}*/
/*       </section>*/
/* */
/*       {# Sidebar Second #}*/
/*       {% if page.sidebar_second %}*/
/*         {% block sidebar_second %}*/
/*           <aside class="col-sm-3" role="complementary">*/
/*             {{ page.sidebar_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
/* {% if page.footer %}*/
/*   {% block footer %}*/
/*     <footer class="footer {{ container }}" role="contentinfo">*/
/*       {{ page.footer }}*/
/*     </footer>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
