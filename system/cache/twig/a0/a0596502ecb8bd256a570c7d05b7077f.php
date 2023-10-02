<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin.statistics.html.twig */
class __TwigTemplate_883dca4f841e6013c8ca22d8f5f2c89b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"row\">
\t<div class=\"col-md-3 col-sm-6 col-xs-12\">
\t\t<div class=\"info-box\">
\t\t\t<span class=\"info-box-icon bg-aqua\"><i class=\"ion ion-person-add\"></i></span>
\t\t\t<div class=\"info-box-content\">
\t\t\t\t<span class=\"info-box-text\">Total accounts:</span>
\t\t\t\t<span class=\"info-box-number\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["total_accounts"] ?? null), "html", null, true);
        echo "</span>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-md-3 col-sm-6 col-xs-12\">
\t\t<div class=\"info-box\">
\t\t\t<span class=\"info-box-icon bg-red\"><i class=\"fa fa-male\"></i></span>
\t\t\t<div class=\"info-box-content\">
\t\t\t\t<span class=\"info-box-text\">Total players:</span>
\t\t\t\t<span class=\"info-box-number\">";
        // line 16
        echo twig_escape_filter($this->env, ($context["total_players"] ?? null), "html", null, true);
        echo "</span>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"clearfix visible-sm-block\"></div>
\t<div class=\"col-md-3 col-sm-6 col-xs-12\">
\t\t<div class=\"info-box\">
\t\t\t<span class=\"info-box-icon bg-green\"><i class=\"ion ion-pie-graph\"></i></span>
\t\t\t<div class=\"info-box-content\">
\t\t\t\t<span class=\"info-box-text\">Total guilds:</span>
\t\t\t\t<span class=\"info-box-number\">";
        // line 26
        echo twig_escape_filter($this->env, ($context["total_guilds"] ?? null), "html", null, true);
        echo "</span>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-md-3 col-sm-6 col-xs-12\">
\t\t<div class=\"info-box\">
\t\t\t<span class=\"info-box-icon bg-yellow\"><i class=\"fa fa-home\"></i></span>
\t\t\t<div class=\"info-box-content\">
\t\t\t\t<span class=\"info-box-text\">Total houses:</span>
\t\t\t\t<span class=\"info-box-number\">";
        // line 35
        echo twig_escape_filter($this->env, ($context["total_houses"] ?? null), "html", null, true);
        echo "</span>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "admin.statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 35,  70 => 26,  57 => 16,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin.statistics.html.twig", "C:\\Users\\Rickson\\Documents\\GitHub\\Tibia-Web-Drk\\system\\templates\\admin.statistics.html.twig");
    }
}
