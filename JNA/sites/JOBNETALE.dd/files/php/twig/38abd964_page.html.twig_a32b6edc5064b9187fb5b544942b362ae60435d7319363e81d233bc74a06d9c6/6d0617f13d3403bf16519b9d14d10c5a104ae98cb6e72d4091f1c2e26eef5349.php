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
        $__internal_78bee77a879432e15ac9a674df90dd8eeff72b35e69a39ff517e6aafcb2d7d6a = $this->env->getExtension("native_profiler");
        $__internal_78bee77a879432e15ac9a674df90dd8eeff72b35e69a39ff517e6aafcb2d7d6a->enter($__internal_78bee77a879432e15ac9a674df90dd8eeff72b35e69a39ff517e6aafcb2d7d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/system/page.html.twig"));

        $tags = array("set" => 64, "if" => 66, "block" => 67);
        $filters = array("clean_class" => 72, "t" => 81);
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

        // line 64
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 66
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 67
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 98
        echo "
";
        // line 100
        $this->displayBlock('main', $context, $blocks);
        // line 179
        echo "
";
        // line 180
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 181
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        
        $__internal_78bee77a879432e15ac9a674df90dd8eeff72b35e69a39ff517e6aafcb2d7d6a->leave($__internal_78bee77a879432e15ac9a674df90dd8eeff72b35e69a39ff517e6aafcb2d7d6a_prof);

    }

    // line 67
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_602697ff907348ae47f0aa4a37e4f2ce4bbbd21feb5b0585ab089bd3a84c52cd = $this->env->getExtension("native_profiler");
        $__internal_602697ff907348ae47f0aa4a37e4f2ce4bbbd21feb5b0585ab089bd3a84c52cd->enter($__internal_602697ff907348ae47f0aa4a37e4f2ce4bbbd21feb5b0585ab089bd3a84c52cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 68
        echo "    ";
        // line 69
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 71
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 72
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 75
        echo "    <header";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      <div class=\"navbar-header\">
        ";
        // line 77
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 79
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 80
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">";
            // line 81
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 87
        echo "      </div>

      ";
        // line 90
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 91
            echo "        <div class=\"navbar-collapse collapse\">
          ";
            // line 92
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 95
        echo "    </header>
  ";
        
        $__internal_602697ff907348ae47f0aa4a37e4f2ce4bbbd21feb5b0585ab089bd3a84c52cd->leave($__internal_602697ff907348ae47f0aa4a37e4f2ce4bbbd21feb5b0585ab089bd3a84c52cd_prof);

    }

    // line 100
    public function block_main($context, array $blocks = array())
    {
        $__internal_283604efe40d0bdcb1ea0ffa0575921902bfe552fdd539cabbc4d87d31535fd1 = $this->env->getExtension("native_profiler");
        $__internal_283604efe40d0bdcb1ea0ffa0575921902bfe552fdd539cabbc4d87d31535fd1->enter($__internal_283604efe40d0bdcb1ea0ffa0575921902bfe552fdd539cabbc4d87d31535fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 101
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 105
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 106
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 111
            echo "      ";
        }
        // line 112
        echo "
      ";
        // line 114
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 115
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 120
            echo "      ";
        }
        // line 121
        echo "
      ";
        // line 123
        echo "      ";
        // line 124
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 125
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 126
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 127
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 128
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 131
        echo "      <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

        ";
        // line 134
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 135
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 138
            echo "        ";
        }
        // line 139
        echo "
        ";
        // line 141
        echo "        ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 142
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 145
            echo "        ";
        }
        // line 146
        echo "
        ";
        // line 148
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 149
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 152
            echo "        ";
        }
        // line 153
        echo "
        ";
        // line 155
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 156
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 159
            echo "        ";
        }
        // line 160
        echo "
        ";
        // line 162
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 166
        echo "      </section>

      ";
        // line 169
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 170
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 175
            echo "      ";
        }
        // line 176
        echo "    </div>
  </div>
";
        
        $__internal_283604efe40d0bdcb1ea0ffa0575921902bfe552fdd539cabbc4d87d31535fd1->leave($__internal_283604efe40d0bdcb1ea0ffa0575921902bfe552fdd539cabbc4d87d31535fd1_prof);

    }

    // line 106
    public function block_header($context, array $blocks = array())
    {
        $__internal_7632623eda39e3e36492f27c16ef1576060f6914a1b01f3ceead88faf9ac9585 = $this->env->getExtension("native_profiler");
        $__internal_7632623eda39e3e36492f27c16ef1576060f6914a1b01f3ceead88faf9ac9585->enter($__internal_7632623eda39e3e36492f27c16ef1576060f6914a1b01f3ceead88faf9ac9585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 107
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 108
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
        
        $__internal_7632623eda39e3e36492f27c16ef1576060f6914a1b01f3ceead88faf9ac9585->leave($__internal_7632623eda39e3e36492f27c16ef1576060f6914a1b01f3ceead88faf9ac9585_prof);

    }

    // line 115
    public function block_sidebar_first($context, array $blocks = array())
    {
        $__internal_c3a971c6d166799717b591ee84b6b62bc31dbe1f80e7123e77f046195f4d948c = $this->env->getExtension("native_profiler");
        $__internal_c3a971c6d166799717b591ee84b6b62bc31dbe1f80e7123e77f046195f4d948c->enter($__internal_c3a971c6d166799717b591ee84b6b62bc31dbe1f80e7123e77f046195f4d948c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_first"));

        // line 116
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 117
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
        
        $__internal_c3a971c6d166799717b591ee84b6b62bc31dbe1f80e7123e77f046195f4d948c->leave($__internal_c3a971c6d166799717b591ee84b6b62bc31dbe1f80e7123e77f046195f4d948c_prof);

    }

    // line 135
    public function block_highlighted($context, array $blocks = array())
    {
        $__internal_27a6790e07ed23d809e4b223f5e6c25e6c7cf18a8ae9abc7d29770824411f714 = $this->env->getExtension("native_profiler");
        $__internal_27a6790e07ed23d809e4b223f5e6c25e6c7cf18a8ae9abc7d29770824411f714->enter($__internal_27a6790e07ed23d809e4b223f5e6c25e6c7cf18a8ae9abc7d29770824411f714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "highlighted"));

        // line 136
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
        
        $__internal_27a6790e07ed23d809e4b223f5e6c25e6c7cf18a8ae9abc7d29770824411f714->leave($__internal_27a6790e07ed23d809e4b223f5e6c25e6c7cf18a8ae9abc7d29770824411f714_prof);

    }

    // line 142
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_188b23ba0d49eb5cad956c9ea39064930a80c1402c20ca2422b3efc5ad0c2008 = $this->env->getExtension("native_profiler");
        $__internal_188b23ba0d49eb5cad956c9ea39064930a80c1402c20ca2422b3efc5ad0c2008->enter($__internal_188b23ba0d49eb5cad956c9ea39064930a80c1402c20ca2422b3efc5ad0c2008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 143
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
          ";
        
        $__internal_188b23ba0d49eb5cad956c9ea39064930a80c1402c20ca2422b3efc5ad0c2008->leave($__internal_188b23ba0d49eb5cad956c9ea39064930a80c1402c20ca2422b3efc5ad0c2008_prof);

    }

    // line 149
    public function block_action_links($context, array $blocks = array())
    {
        $__internal_b2632e18874bd763c99a3ca51f278e31e1f4c6e517ac89df5a7b3f4201f3f944 = $this->env->getExtension("native_profiler");
        $__internal_b2632e18874bd763c99a3ca51f278e31e1f4c6e517ac89df5a7b3f4201f3f944->enter($__internal_b2632e18874bd763c99a3ca51f278e31e1f4c6e517ac89df5a7b3f4201f3f944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "action_links"));

        // line 150
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
        
        $__internal_b2632e18874bd763c99a3ca51f278e31e1f4c6e517ac89df5a7b3f4201f3f944->leave($__internal_b2632e18874bd763c99a3ca51f278e31e1f4c6e517ac89df5a7b3f4201f3f944_prof);

    }

    // line 156
    public function block_help($context, array $blocks = array())
    {
        $__internal_329dcef65b1847c44978f711377d4fa97b7c1c84a69e3b114d5d5c8696e9df4b = $this->env->getExtension("native_profiler");
        $__internal_329dcef65b1847c44978f711377d4fa97b7c1c84a69e3b114d5d5c8696e9df4b->enter($__internal_329dcef65b1847c44978f711377d4fa97b7c1c84a69e3b114d5d5c8696e9df4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        // line 157
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
        
        $__internal_329dcef65b1847c44978f711377d4fa97b7c1c84a69e3b114d5d5c8696e9df4b->leave($__internal_329dcef65b1847c44978f711377d4fa97b7c1c84a69e3b114d5d5c8696e9df4b_prof);

    }

    // line 162
    public function block_content($context, array $blocks = array())
    {
        $__internal_a1f99292cc50614da0753904aefb7818806cf4e59f5bd1cd6519b94e700dfd6e = $this->env->getExtension("native_profiler");
        $__internal_a1f99292cc50614da0753904aefb7818806cf4e59f5bd1cd6519b94e700dfd6e->enter($__internal_a1f99292cc50614da0753904aefb7818806cf4e59f5bd1cd6519b94e700dfd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 163
        echo "          <a id=\"main-content\"></a>
          ";
        // line 164
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
        
        $__internal_a1f99292cc50614da0753904aefb7818806cf4e59f5bd1cd6519b94e700dfd6e->leave($__internal_a1f99292cc50614da0753904aefb7818806cf4e59f5bd1cd6519b94e700dfd6e_prof);

    }

    // line 170
    public function block_sidebar_second($context, array $blocks = array())
    {
        $__internal_47148be7ca9aa20887784839c5801f18f6c3f59ecc0b7dfb3ccf0eebb9157b5a = $this->env->getExtension("native_profiler");
        $__internal_47148be7ca9aa20887784839c5801f18f6c3f59ecc0b7dfb3ccf0eebb9157b5a->enter($__internal_47148be7ca9aa20887784839c5801f18f6c3f59ecc0b7dfb3ccf0eebb9157b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_second"));

        // line 171
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 172
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
        
        $__internal_47148be7ca9aa20887784839c5801f18f6c3f59ecc0b7dfb3ccf0eebb9157b5a->leave($__internal_47148be7ca9aa20887784839c5801f18f6c3f59ecc0b7dfb3ccf0eebb9157b5a_prof);

    }

    // line 181
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a070660eb3921434f43e4952a2cd4b00c5d1d80124baf850f8c87c41780a2e4a = $this->env->getExtension("native_profiler");
        $__internal_a070660eb3921434f43e4952a2cd4b00c5d1d80124baf850f8c87c41780a2e4a->enter($__internal_a070660eb3921434f43e4952a2cd4b00c5d1d80124baf850f8c87c41780a2e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 182
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 183
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
        
        $__internal_a070660eb3921434f43e4952a2cd4b00c5d1d80124baf850f8c87c41780a2e4a->leave($__internal_a070660eb3921434f43e4952a2cd4b00c5d1d80124baf850f8c87c41780a2e4a_prof);

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
        return array (  419 => 183,  414 => 182,  408 => 181,  398 => 172,  395 => 171,  389 => 170,  380 => 164,  377 => 163,  371 => 162,  361 => 157,  355 => 156,  345 => 150,  339 => 149,  329 => 143,  323 => 142,  313 => 136,  307 => 135,  297 => 117,  294 => 116,  288 => 115,  278 => 108,  275 => 107,  269 => 106,  260 => 176,  257 => 175,  254 => 170,  251 => 169,  247 => 166,  244 => 162,  241 => 160,  238 => 159,  235 => 156,  232 => 155,  229 => 153,  226 => 152,  223 => 149,  220 => 148,  217 => 146,  214 => 145,  211 => 142,  208 => 141,  205 => 139,  202 => 138,  199 => 135,  196 => 134,  190 => 131,  188 => 128,  187 => 127,  186 => 126,  185 => 125,  184 => 124,  182 => 123,  179 => 121,  176 => 120,  173 => 115,  170 => 114,  167 => 112,  164 => 111,  161 => 106,  158 => 105,  151 => 101,  145 => 100,  137 => 95,  131 => 92,  128 => 91,  125 => 90,  121 => 87,  112 => 81,  109 => 80,  106 => 79,  102 => 77,  96 => 75,  94 => 72,  93 => 71,  92 => 69,  90 => 68,  84 => 67,  75 => 181,  73 => 180,  70 => 179,  68 => 100,  65 => 98,  61 => 67,  59 => 66,  57 => 64,);
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
/*  * - logo: The url of the logo image, as defined in theme settings.*/
/*  * - site_name: The name of the site. This is empty when displaying the site*/
/*  *   name has been disabled in the theme settings.*/
/*  * - site_slogan: The slogan of the site. This is empty when displaying the site*/
/*  *   slogan has been disabled in theme settings.*/
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
/*  * - page.primary_menu: Items for the primary menu region.*/
/*  * - page.secondary_menu: Items for the secondary menu region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  **/
/*  * @ingroup templates*/
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
