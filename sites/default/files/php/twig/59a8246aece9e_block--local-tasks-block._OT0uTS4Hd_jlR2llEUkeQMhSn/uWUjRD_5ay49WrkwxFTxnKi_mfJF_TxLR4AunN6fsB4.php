<?php

/* core/themes/classy/templates/block/block--local-tasks-block.html.twig */
class __TwigTemplate_46c26679b9a6ed5660353e8efd3243e535e8115e157c8348bdd425580dd49495 extends Twig_Template
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
        $__internal_82943b683f8170c9622cf23d4e9d121eab08902dc9a1aa75cc9896d34d093c35 = $this->env->getExtension("native_profiler");
        $__internal_82943b683f8170c9622cf23d4e9d121eab08902dc9a1aa75cc9896d34d093c35->enter($__internal_82943b683f8170c9622cf23d4e9d121eab08902dc9a1aa75cc9896d34d093c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/block/block--local-tasks-block.html.twig"));

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
        
        $__internal_82943b683f8170c9622cf23d4e9d121eab08902dc9a1aa75cc9896d34d093c35->leave($__internal_82943b683f8170c9622cf23d4e9d121eab08902dc9a1aa75cc9896d34d093c35_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_999c5c6a898dcfb71e24bc23f085e432271473423f47c28ef7b0b47cd18a746b = $this->env->getExtension("native_profiler");
        $__internal_999c5c6a898dcfb71e24bc23f085e432271473423f47c28ef7b0b47cd18a746b->enter($__internal_999c5c6a898dcfb71e24bc23f085e432271473423f47c28ef7b0b47cd18a746b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_999c5c6a898dcfb71e24bc23f085e432271473423f47c28ef7b0b47cd18a746b->leave($__internal_999c5c6a898dcfb71e24bc23f085e432271473423f47c28ef7b0b47cd18a746b_prof);

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

    public function getSource()
    {
        return "{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Theme override for tabs.
 */
#}
{% block content %}
  {% if content %}
    <nav class=\"tabs\" role=\"navigation\" aria-label=\"{{ 'Tabs'|t }}\">
      {{ content }}
    </nav>
  {% endif %}
{% endblock %}
";
    }
}
