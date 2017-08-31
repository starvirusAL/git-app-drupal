<?php

/* core/themes/seven/templates/block--local-actions-block.html.twig */
class __TwigTemplate_3a7eb4a41aa1067ce2b8d947a5ca39f3fbf1263959f59b02705f5f4ccfe55d3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@block/block.html.twig", "core/themes/seven/templates/block--local-actions-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@block/block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88240b18c83efbc947d0a0af7938481deaa6e8e7017b1bee771a2ce15f023839 = $this->env->getExtension("native_profiler");
        $__internal_88240b18c83efbc947d0a0af7938481deaa6e8e7017b1bee771a2ce15f023839->enter($__internal_88240b18c83efbc947d0a0af7938481deaa6e8e7017b1bee771a2ce15f023839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/seven/templates/block--local-actions-block.html.twig"));

        $tags = array("if" => 9);
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88240b18c83efbc947d0a0af7938481deaa6e8e7017b1bee771a2ce15f023839->leave($__internal_88240b18c83efbc947d0a0af7938481deaa6e8e7017b1bee771a2ce15f023839_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_b6ece2bca6a962923c30bf2e4efd7875942a6ba0f351d1ff892e9259a2a350b3 = $this->env->getExtension("native_profiler");
        $__internal_b6ece2bca6a962923c30bf2e4efd7875942a6ba0f351d1ff892e9259a2a350b3->enter($__internal_b6ece2bca6a962923c30bf2e4efd7875942a6ba0f351d1ff892e9259a2a350b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 10
            echo "    <ul class=\"action-links\">
      ";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </ul>
  ";
        }
        
        $__internal_b6ece2bca6a962923c30bf2e4efd7875942a6ba0f351d1ff892e9259a2a350b3->leave($__internal_b6ece2bca6a962923c30bf2e4efd7875942a6ba0f351d1ff892e9259a2a350b3_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/block--local-actions-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"@block/block.html.twig\" %}
{#
/**
 * @file
 * Theme override for local actions (primary admin actions.)
 */
#}
{% block content %}
  {% if content %}
    <ul class=\"action-links\">
      {{ content }}
    </ul>
  {% endif %}
{% endblock %}
";
    }
}
