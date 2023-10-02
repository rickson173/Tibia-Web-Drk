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

/* points.html.twig */
class __TwigTemplate_e4cafa9d89442698614860a456fec931 extends \Twig\Template
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
        if (twig_test_iterable(($context["points"] ?? null))) {
            // line 2
            echo "\t<div class=\"col-md-3\">
\t\t<div class=\"box\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<h3 class=\"box-title\">Top 10 - Most premium points</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body no-padding\">
\t\t\t\t<table class=\"table table-condensed\">
\t\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t<th>Account ";
            // line 12
            echo twig_escape_filter($this->env, ($context["account_type"] ?? null), "html", null, true);
            echo "</th>
\t\t\t\t\t\t<th>Premium points</th>
\t\t\t\t\t</tr>
\t\t\t\t\t";
            // line 15
            $context["i"] = 0;
            // line 16
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["points"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 17
                echo "\t\t\t\t\t\t";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 18
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 19
                echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "name", [], "any", false, false, false, 20), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "premium_points", [], "any", false, false, false, 21), "html", null, true);
                echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "points.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  78 => 21,  74 => 20,  70 => 19,  67 => 18,  64 => 17,  59 => 16,  57 => 15,  51 => 12,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "points.html.twig", "C:\\Users\\Rickson\\Documents\\GitHub\\Tibia-Web-Drk\\admin\\pages\\modules\\templates\\points.html.twig");
    }
}
