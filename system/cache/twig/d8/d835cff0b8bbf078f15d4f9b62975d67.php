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

/* networks.html.twig */
class __TwigTemplate_ec89388ccc4792313849f21a80581f02 extends \Twig\Template
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
        echo "<div id=\"NetworksBox\" class=\"Themebox\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/themeboxes/networks/networksbox.png);\">
\t";
        // line 2
        if ( !twig_test_empty((($__internal_compile_0 = ($context["config"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["network_facebook"] ?? null) : null))) {
            // line 3
            echo "\t<div id=\"FacebookBlock\">
\t\t<div id=\"FacebookLikeBox\">
\t\t\t<div class=\"fb-like-box fb_iframe_widget\" data-href=\"https://www.facebook.com/";
            // line 5
            echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["config"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["network_facebook"] ?? null) : null), "html", null, true);
            echo "\" data-width=\"175\" data-height=\"180\" data-show-faces=\"true\" data-stream=\"false\" data-border-color=\"none\" data-header=\"false\" fb-xfbml-state=\"rendered\">
\t\t\t\t\t\t\t\t\t\t<span style=\"vertical-align: bottom; width: 181px; height: 180px;\">
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"FacebookSendBox\">
\t\t\t<div class=\"fb-send fb_iframe_widget\" data-href=\"https://www.facebook.com/";
            // line 11
            echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["config"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["network_facebook"] ?? null) : null), "html", null, true);
            echo "\" data-width=\"50\" data-height=\"20\" fb-xfbml-state=\"rendered\">
\t\t\t\t\t\t\t\t\t\t<span style=\"vertical-align: bottom; width: 50px; height: 20px;\">
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"FacebookLikes\">
\t\t\t<div class=\"fb-like fb_edge_widget_with_comment fb_iframe_widget\" data-href=\"https://www.facebook.com/";
            // line 17
            echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["config"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["network_facebook"] ?? null) : null), "html", null, true);
            echo "\" data-send=\"false\" data-width=\"225\" data-show-faces=\"false\" fb-xfbml-state=\"rendered\">
\t\t\t\t\t\t\t\t\t\t<span style=\"height: 28px; width: 225px;\">
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        // line 24
        echo "\t";
        if ( !twig_test_empty((($__internal_compile_4 = ($context["config"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["network_twitter"] ?? null) : null))) {
            // line 25
            echo "\t<div id=\"TwitterBlock\">
\t\t<a href=\"https://twitter.com/";
            // line 26
            echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["config"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["network_twitter"] ?? null) : null), "html", null, true);
            echo "\" class=\"twitter-follow-button\" data-show-count=\"false\">Follow @";
            echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["config"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["network_twitter"] ?? null) : null), "html", null, true);
            echo "</a>
\t\t<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
\t</div>
\t";
        }
        // line 30
        echo "\t<div class=\"Bottom\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/general/box-bottom.gif);\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "networks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 30,  82 => 26,  79 => 25,  76 => 24,  66 => 17,  57 => 11,  48 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "networks.html.twig", "C:\\Users\\Rickson\\Documents\\GitHub\\Tibia-Web-Drk\\templates\\tibiacom\\boxes\\templates\\networks.html.twig");
    }
}
