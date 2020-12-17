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

/* themes/contrib/tara/templates/layout/page--front.html.twig */
class __TwigTemplate_948ae7eebf79f4a6c233e4d9a264751b2653ba8f0e0fd05a99bf9f1415aa0f70 extends \Twig\Template
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
        $tags = array("include" => 11, "if" => 12);
        $filters = array("escape" => 25);
        $functions = array("attach_library" => 54);

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                ['attach_library']
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
        // line 11
        $this->loadTemplate("@tara/template-parts/header.html.twig", "themes/contrib/tara/templates/layout/page--front.html.twig", 11)->display($context);
        // line 12
        if (($context["slider_show"] ?? null)) {
            // line 13
            echo "  ";
            $this->loadTemplate("@tara/template-parts/slider.html.twig", "themes/contrib/tara/templates/layout/page--front.html.twig", 13)->display($context);
        }
        // line 15
        echo "<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"container\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 18
        echo "    ";
        if (($context["front_sidebar"] ?? null)) {
            // line 19
            echo "      <main id=\"main\" class=\"homepage-content page-content\" role=\"main\">
    ";
        } else {
            // line 21
            echo "      <main id=\"front-main\" class=\"homepage-content page-content\" role=\"main\">
    ";
        }
        // line 23
        echo "      ";
        $this->loadTemplate("@tara/template-parts/content_top.html.twig", "themes/contrib/tara/templates/layout/page--front.html.twig", 23)->display($context);
        // line 24
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 24)) {
            // line 25
            echo "\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "
\t\t\t";
        }
        // line 27
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_home", [], "any", false, false, true, 27)) {
            // line 28
            echo "\t\t\t\t<div class=\"homepage-content\">
\t\t\t\t\t";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_home", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "
\t\t\t\t</div><!--/.homepage-content -->
\t\t\t";
        }
        // line 32
        echo "      ";
        $this->loadTemplate("@tara/template-parts/content_bottom.html.twig", "themes/contrib/tara/templates/layout/page--front.html.twig", 32)->display($context);
        // line 33
        echo "    </main>
    ";
        // line 34
        if (($context["front_sidebar"] ?? null)) {
            // line 35
            echo "      ";
            $this->loadTemplate("@tara/template-parts/left_sidebar.html.twig", "themes/contrib/tara/templates/layout/page--front.html.twig", 35)->display($context);
            // line 36
            echo "      ";
            $this->loadTemplate("@tara/template-parts/right_sidebar.html.twig", "themes/contrib/tara/templates/layout/page--front.html.twig", 36)->display($context);
            // line 37
            echo "    ";
        }
        // line 38
        echo "  </div> <!--/.container -->
</div><!-- /main-wrapper -->
";
        // line 40
        $this->loadTemplate("@tara/template-parts/footer.html.twig", "themes/contrib/tara/templates/layout/page--front.html.twig", 40)->display($context);
        // line 41
        if (($context["slider_show"] ?? null)) {
            // line 42
            echo "  <script>
  jQuery(document).ready(function (\$) {
    \$('.home-slider').owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      nav: false,
      dots: ";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slider_dots"] ?? null), 49, $this->source), "html", null, true);
            echo ",
      autoplayTimeout: ";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slider_time"] ?? null), 50, $this->source), "html", null, true);
            echo ",
    });
  });
  </script>
\t";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tara/slider"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/tara/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 54,  147 => 50,  143 => 49,  134 => 42,  132 => 41,  130 => 40,  126 => 38,  123 => 37,  120 => 36,  117 => 35,  115 => 34,  112 => 33,  109 => 32,  103 => 29,  100 => 28,  97 => 27,  91 => 25,  88 => 24,  85 => 23,  81 => 21,  77 => 19,  74 => 18,  70 => 15,  66 => 13,  64 => 12,  62 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/tara/templates/layout/page--front.html.twig", "/var/www/html/drupal9/themes/contrib/tara/templates/layout/page--front.html.twig");
    }
}
