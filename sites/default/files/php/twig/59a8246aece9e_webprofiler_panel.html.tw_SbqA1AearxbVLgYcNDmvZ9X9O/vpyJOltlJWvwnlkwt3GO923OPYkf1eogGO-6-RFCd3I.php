<?php

/* modules/devel/webprofiler/templates/Profiler/webprofiler_panel.html.twig */
class __TwigTemplate_5bfbc8a8a8bb6f75230100106f676ae031d8706f7b673bc19a0a106e2212e0d0 extends Twig_Template
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
        $__internal_17c10bf5390a7482973fbd1d1641b9623f100866c5794fbb641ab198dc367dee = $this->env->getExtension("native_profiler");
        $__internal_17c10bf5390a7482973fbd1d1641b9623f100866c5794fbb641ab198dc367dee->enter($__internal_17c10bf5390a7482973fbd1d1641b9623f100866c5794fbb641ab198dc367dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/devel/webprofiler/templates/Profiler/webprofiler_panel.html.twig"));

        $tags = array();
        $filters = array("raw" => 1);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('raw'),
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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["panel"]) ? $context["panel"] : null)));
        echo "
";
        
        $__internal_17c10bf5390a7482973fbd1d1641b9623f100866c5794fbb641ab198dc367dee->leave($__internal_17c10bf5390a7482973fbd1d1641b9623f100866c5794fbb641ab198dc367dee_prof);

    }

    public function getTemplateName()
    {
        return "modules/devel/webprofiler/templates/Profiler/webprofiler_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }

    public function getSource()
    {
        return "{{ panel|raw }}
";
    }
}
