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

/* @tara/template-parts/slider.html.twig */
class __TwigTemplate_1d7ae3bdc332c6f0d54e6332f8e411e02590e19101ab3cd381e1f2ce2677c9bc extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 4);
        $filters = array("raw" => 5, "striptags" => 5);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw', 'striptags'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section id=\"slider\" class=\"section clear\">
  <div class=\"container\">
    <ul class=\"owl-carousel home-slider\">
      ";
        // line 4
        if ((($context["slider_code"] ?? null) != "")) {
            // line 5
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(strip_tags($this->sandbox->ensureToStringAllowed(($context["slider_code"] ?? null), 5, $this->source), "<ol>,<ul>,<li>,<p>,<a>,<img>,<video>,<h1>,<h2>,<h3>,<h4>,<h5>,<h6>,<em>,<strong>,<br>,<i>"));
            echo "
      ";
        } else {
            // line 7
            echo "      <li>
        <h1>Slider Heading One</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        <br />
        <a class=\"button\" href=\"#\">read more</a>
      </li>
      <li>
        <h1>Slider Heading Two</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        <br />
        <a class=\"button\" href=\"#\">read more</a>
      </li>
      <li>
        <h1>Slider Heading Three</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        <br />
        <a class=\"button\" href=\"#\">read more</a>
      </li>
      <li>
        <h1>Slider Heading Four</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        <br />
        <a class=\"button\" href=\"#\">read more</a>
      </li>
      ";
        }
        // line 32
        echo "    </ul> <!--/.home-slider -->
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "@tara/template-parts/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 32,  75 => 7,  69 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@tara/template-parts/slider.html.twig", "/var/www/html/drupal9/themes/contrib/tara/templates/template-parts/slider.html.twig");
    }
}
