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

/* newcomer.html.twig */
class __TwigTemplate_fe6fe9afd5b07e08cd7e62ef76860029 extends \Twig\Template
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
        echo "<div id=\"NewcomerBox\" class=\"Themebox\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/themeboxes/newcomer/newcomerbox.gif);\">
\t<a class=\"ThemeboxButton\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()("account/create"), "html", null, true);
        echo "\" onMouseOver=\"MouseOverBigButton(this);\" onMouseOut=\"MouseOutBigButton(this);\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/buttons/sbutton.gif);\"><div class=\"BigButtonOver\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/buttons/sbutton_over.gif);\"></div><div class=\"ButtonText\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/buttons/_sbutton_jointibia.gif);\"></div>
\t</a>
\t<div class=\"Bottom\" style=\"background-image:url(";
        // line 4
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/general/box-bottom.gif);\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "newcomer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "newcomer.html.twig", "C:\\Users\\Rickson\\Documents\\GitHub\\Tibia-Web-Drk\\templates\\tibiacom\\boxes\\templates\\newcomer.html.twig");
    }
}
