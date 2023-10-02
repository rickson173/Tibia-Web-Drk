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

/* admin.dashboard.html.twig */
class __TwigTemplate_521d562b03d1fd93dd2ac6815101f96f extends \Twig\Template
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
\t<div class=\"col-md-6\">
\t\t<div class=\"box box-warning\">
\t\t\t<div class=\"box-header with-border\">
\t\t\t\t<h3 class=\"box-title\">Maintenance</h3>
\t\t\t\t<div class=\"box-tools pull-right\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<form action=\"?p=dashboard&maintenance\" method=\"post\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"status\" class=\"col-sm-2 control-label\">Website:</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"status\" name=\"status\">
\t\t\t\t\t\t\t\t\t<option value=\"0\"";
        // line 18
        if ( !($context["is_closed"] ?? null)) {
            echo " selected";
        }
        echo ">Open</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\"";
        // line 19
        if (($context["is_closed"] ?? null)) {
            echo " selected";
        }
        echo ">Closed</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"message\" class=\"col-sm-2 control-label\">Message:<br>
\t\t\t\t\t\t\t\t<small>(only if closed)</small>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
                                <textarea name=\"message\" cols=\"40\" class=\"form-control\" rows=\"5\" maxlength=\"255\"
\t\t\t\t\t\t\t\t\t\t  placeholder=\"Enter ...\">";
        // line 29
        echo twig_escape_filter($this->env, ($context["closed_message"] ?? null), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-footer\">
\t\t\t\t\t\t<a href=\"?p=dashboard&clear_cache\" onclick=\"return confirm('Are you sure?');\"><span
\t\t\t\t\t\t\t\t\tclass=\"btn btn-danger\">Clear cache</span></a>
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Update\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 44
        if (twig_test_iterable(($context["points"] ?? null))) {
            // line 45
            echo "\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h3 class=\"box-title\">Top 10 - Most premium points</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"box-body no-padding\">
\t\t\t\t\t<table class=\"table table-condensed\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t<th>Account ";
            // line 55
            echo twig_escape_filter($this->env, ($context["account_type"] ?? null), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t<th>Premium points</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            // line 58
            $context["i"] = 0;
            // line 59
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["points"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 60
                echo "\t\t\t\t\t\t\t";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 61
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 62
                echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "name", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "premium_points", [], "any", false, false, false, 64), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 73
        echo "\t";
        if (twig_test_iterable(($context["coins"] ?? null))) {
            // line 74
            echo "\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h3 class=\"box-title\">Top 10 - Most coins</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"box-body no-padding\">
\t\t\t\t\t<table class=\"table table-condensed\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t<th>Account ";
            // line 84
            echo twig_escape_filter($this->env, ($context["account_type"] ?? null), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t<th>Tibia coins</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            // line 87
            $context["i"] = 0;
            // line 88
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["coins"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 89
                echo "\t\t\t\t\t\t\t";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 90
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 91
                echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "name", [], "any", false, false, false, 92), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "coins", [], "any", false, false, false, 93), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 102
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "admin.dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 102,  204 => 96,  195 => 93,  191 => 92,  187 => 91,  184 => 90,  181 => 89,  176 => 88,  174 => 87,  168 => 84,  156 => 74,  153 => 73,  145 => 67,  136 => 64,  132 => 63,  128 => 62,  125 => 61,  122 => 60,  117 => 59,  115 => 58,  109 => 55,  97 => 45,  95 => 44,  77 => 29,  62 => 19,  56 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin.dashboard.html.twig", "C:\\Users\\Rickson\\Documents\\GitHub\\Tibia-Web-Drk\\system\\templates\\admin.dashboard.html.twig");
    }
}
