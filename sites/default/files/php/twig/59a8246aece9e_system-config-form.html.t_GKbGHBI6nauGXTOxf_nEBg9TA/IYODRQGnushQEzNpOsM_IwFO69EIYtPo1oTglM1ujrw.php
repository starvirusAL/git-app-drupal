<?php

/* core/themes/stable/templates/admin/system-config-form.html.twig */
class __TwigTemplate_57ffbbf094e5f3f59a1ab4fbc0f3fb337853ac18e13be4401b37b4b802d1780e extends Twig_Template
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
        $__internal_775f8ac25e44dfa221b2c27139bd25533556304cb2b3015298ae15bdf3805cdd = $this->env->getExtension("native_profiler");
        $__internal_775f8ac25e44dfa221b2c27139bd25533556304cb2b3015298ae15bdf3805cdd->enter($__internal_775f8ac25e44dfa221b2c27139bd25533556304cb2b3015298ae15bdf3805cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/system-config-form.html.twig"));

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
        
        $__internal_775f8ac25e44dfa221b2c27139bd25533556304cb2b3015298ae15bdf3805cdd->leave($__internal_775f8ac25e44dfa221b2c27139bd25533556304cb2b3015298ae15bdf3805cdd_prof);

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

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for a system settings form.
 *
 * This template will be used when a system config form specifies 'config_form'
 * as its #theme callback.  Otherwise, by default, system config forms will be
 * themed by form.html.twig. This does not alter the appearance of a form at all,
 * but is provided as a convenience for themers.
 *
 * Available variables:
 * - form: The confirm form.
 */
#}
{{ form }}
";
    }
}
