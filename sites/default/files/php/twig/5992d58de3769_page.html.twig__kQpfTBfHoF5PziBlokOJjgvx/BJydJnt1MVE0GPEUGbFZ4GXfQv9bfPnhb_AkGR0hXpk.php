<?php

/* core/themes/gist/templates/page.html.twig */
class __TwigTemplate_91f6460711c1b66941c558fd5cd3bc814313a30417d38e31b58f40c765e9071d extends Twig_Template
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

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>GIST app</title>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
\t<meta charset=\"UTF-8\">
</head>
<body>
\t<div class=\"container-fluid\">
\t<a href=\"index.php\" id=\"title\"><h2>GIST-APP, v.05.08</h2></a>
\t\t<div class=\"row\">
        <div class=\"col-md-3 col-sm-3\">
        <h4>Choose file:</h4>
        \t<ul class=\"list-unstyled\">
        \t\t
        \t</ul>
        </div>
        <div class=\"col-md-9 col-sm-9\">
        \t<button id=\"editBtn\" type=\"button\" class=\"btn btn-success\" disabled>EDIT</button>
\t\t\t\t\t<button id=\"openBtn\" type=\"button\" class=\"btn btn-info\" disabled>OPEN <img src=\"img/n-tab.png\" width=\"16\"></button>
\t\t\t\t\t<h3 id=\"filename\"></h3>
\t\t\t\t\t<textarea class=\"form-control top-buffer\" rows=\"10\" style=\"min-width: 100%\" disabled></textarea>
\t\t\t\t\t<button id=\"saveBtn\" type=\"button\" class=\"btn btn-primary pull-right mt-5 top-buffer\" disabled>Save</button> 
        </div>
      </div>
\t</div>
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t<script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "core/themes/gist/templates/page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
\t<title>GIST app</title>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
\t<meta charset=\"UTF-8\">
</head>
<body>
\t<div class=\"container-fluid\">
\t<a href=\"index.php\" id=\"title\"><h2>GIST-APP, v.05.08</h2></a>
\t\t<div class=\"row\">
        <div class=\"col-md-3 col-sm-3\">
        <h4>Choose file:</h4>
        \t<ul class=\"list-unstyled\">
        \t\t
        \t</ul>
        </div>
        <div class=\"col-md-9 col-sm-9\">
        \t<button id=\"editBtn\" type=\"button\" class=\"btn btn-success\" disabled>EDIT</button>
\t\t\t\t\t<button id=\"openBtn\" type=\"button\" class=\"btn btn-info\" disabled>OPEN <img src=\"img/n-tab.png\" width=\"16\"></button>
\t\t\t\t\t<h3 id=\"filename\"></h3>
\t\t\t\t\t<textarea class=\"form-control top-buffer\" rows=\"10\" style=\"min-width: 100%\" disabled></textarea>
\t\t\t\t\t<button id=\"saveBtn\" type=\"button\" class=\"btn btn-primary pull-right mt-5 top-buffer\" disabled>Save</button> 
        </div>
      </div>
\t</div>
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t<script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

\t</body>
</html>
";
    }
}
