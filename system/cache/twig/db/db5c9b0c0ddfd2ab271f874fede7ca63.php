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

/* gallery.html.twig */
class __TwigTemplate_0cf88a4d0cbe77324bff577b717a273f extends \Twig\Template
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
        echo "<div id=\"GalleryBox\" class=\"Themebox\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/themeboxes/gallery/gallerybox.gif);\">
\t<a href=\"?subtopic=gallery&image=";
        // line 2
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["config"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["gallery_image_id_from_database"] ?? null) : null), "html", null, true);
        echo "\" >
\t\t<img id=\"GalleryContent\" class=\"ThemeboxContent\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["image"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["thumb"] ?? null) : null), "html", null, true);
        echo "\" alt=\"Screenshot of the Day\" />
\t</a>
\t<div class=\"Bottom\" style=\"background-image:url(";
        // line 5
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/general/box-bottom.gif);\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "gallery.html.twig", "C:\\Users\\Rickson\\Documents\\GitHub\\Tibia-Web-Drk\\templates\\tibiacom\\boxes\\templates\\gallery.html.twig");
    }
}
