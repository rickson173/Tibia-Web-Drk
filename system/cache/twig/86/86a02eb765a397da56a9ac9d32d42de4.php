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

/* highscores.html.twig */
class __TwigTemplate_d0864105b9509cd48985b9c3415878d9 extends \Twig\Template
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
        echo "<style type=\"text/css\">
\t.top_level {
\t\tposition: absolute;
\t\ttop: 29px;
\t\tleft: 6px;
\t\theight: 160px;
\t\twidth: 168px;
\t\tz-index: 20;
\t\tpadding-top: 6px;
\t\tfont-family: Tahoma, Geneva, sans-serif;
\t\tfont-size: 9.2pt;
\t\tcolor: #FFF;
\t\tfont-weight: bold;
\t\ttext-align: right;
\t\ttext-decoration: inherit;
\t\ttext-shadow: 0.1em 0.1em #333
\t}

\t#Topbar a {
\t\ttext-decoration: none;
\t}

\t.online {
\t\tcolor: #008000;
\t}

\t.offline {
\t\tcolor: #FF0000;
\t}

\ta.topfont {
\t\tfont-family: Verdana, Arial, Helvetica, sans-serif;
\t\tfont-size: 11px;
\t\ttext-decoration: none
\t}
\ta:hover.topfont {
\t\tfont-family: Verdana, Arial, Helvetica, sans-serif;
\t\tfont-size: 11px;
\t\tcolor: #CCC;
\t\ttext-decoration:none
\t}
</style>

<div id=\"Topbar\" class=\"Themebox\" style=\"background-image:url(";
        // line 44
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/themeboxes/highscores/highscores.png);\">
\t<div class=\"top_level\" style=\"background:url(";
        // line 45
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/themeboxes/bg_top.png)\" align=\"\t\">
    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["topPlayers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 47
            echo "\t    <div style=\"text-align:left\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('getPlayerLink')->getCallable()((($__internal_compile_0 = $context["player"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["name"] ?? null) : null), false), "html", null, true);
            echo " \" class=\"topfont ";
            if ((($__internal_compile_1 = $context["player"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["online"] ?? null) : null)) {
                echo "online";
            } else {
                echo "offline";
            }
            echo "\">
\t\t\t";
            // line 48
            if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "online_outfit", [], "any", false, false, false, 48)) {
                // line 49
                echo "\t\t\t\t<img style=\"position:absolute;margin-top:";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["player"], "looktype", [], "any", false, false, false, 49), [0 => 75, 1 => 266, 2 => 302])) {
                    echo "-20px;margin-left:-0px;";
                } else {
                    echo "-45px;margin-left:-25px;";
                }
                echo "\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "outfit", [], "any", false, false, false, 49), "html", null, true);
                echo "\" alt=\"player outfit\"/>
\t\t\t";
            }
            // line 51
            echo "\t\t\t\t<span style=\"color: #CCC; margin-left: 40px\">";
            echo twig_escape_filter($this->env, (($__internal_compile_2 = $context["player"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["rank"] ?? null) : null), "html", null, true);
            echo " - </span>
\t\t\t\t";
            // line 52
            echo twig_escape_filter($this->env, (($__internal_compile_3 = $context["player"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["name"] ?? null) : null), "html", null, true);
            echo "
\t\t\t<br>
\t\t\t<small><span style=\"color: white; margin-left: 50px\">Level: (";
            // line 54
            echo twig_escape_filter($this->env, (($__internal_compile_4 = $context["player"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["level"] ?? null) : null), "html", null, true);
            echo ")</span></small>
\t\t\t<br>
\t\t</a>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t<div class=\"Bottom\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/general/box-bottom.gif); top: 159px;; left:-5px;\">
\t</div>
</div>
</div>
<br/><br/><br/>
";
    }

    public function getTemplateName()
    {
        return "highscores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 59,  129 => 54,  124 => 52,  119 => 51,  107 => 49,  105 => 48,  94 => 47,  90 => 46,  86 => 45,  82 => 44,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "highscores.html.twig", "C:\\Users\\Rickson\\Documents\\GitHub\\Tibia-Web-Drk\\templates\\tibiacom\\boxes\\templates\\highscores.html.twig");
    }
}
