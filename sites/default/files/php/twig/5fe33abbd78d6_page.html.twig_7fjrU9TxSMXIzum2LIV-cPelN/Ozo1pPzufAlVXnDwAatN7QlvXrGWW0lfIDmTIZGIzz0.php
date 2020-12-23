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

/* themes/contrib/tara/templates/layout/page.html.twig */
class __TwigTemplate_01aa7790c90e17b93e3ab554fc0bd3348de3e0bb56e17874082d4ccba83cd918 extends \Twig\Template
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
        $tags = array("include" => 52);
        $filters = array("escape" => 60);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape'],
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
        // line 52
        $this->loadTemplate("@tara/template-parts/header.html.twig", "themes/contrib/tara/templates/layout/page.html.twig", 52)->display($context);
        // line 53
        $this->loadTemplate("@tara/template-parts/breadcrumb_region.html.twig", "themes/contrib/tara/templates/layout/page.html.twig", 53)->display($context);
        // line 54
        $this->loadTemplate("@tara/template-parts/highlighted.html.twig", "themes/contrib/tara/templates/layout/page.html.twig", 54)->display($context);
        // line 55
        echo "<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"container\">
\t\t<a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 58
        echo "    <main id=\"main\" class=\"page-content\">
      ";
        // line 59
        $this->loadTemplate("@tara/template-parts/content_top.html.twig", "themes/contrib/tara/templates/layout/page.html.twig", 59)->display($context);
        // line 60
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "
      ";
        // line 61
        $this->loadTemplate("@tara/template-parts/content_bottom.html.twig", "themes/contrib/tara/templates/layout/page.html.twig", 61)->display($context);
        // line 62
        echo "    </main>
    ";
        // line 63
        $this->loadTemplate("@tara/template-parts/left_sidebar.html.twig", "themes/contrib/tara/templates/layout/page.html.twig", 63)->display($context);
        // line 64
        echo "    ";
        $this->loadTemplate("@tara/template-parts/right_sidebar.html.twig", "themes/contrib/tara/templates/layout/page.html.twig", 64)->display($context);
        // line 65
        echo "  </div> ";
        // line 66
        echo "</div>";
        // line 67
        $this->loadTemplate("@tara/template-parts/footer.html.twig", "themes/contrib/tara/templates/layout/page.html.twig", 67)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/contrib/tara/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 67,  94 => 66,  92 => 65,  89 => 64,  87 => 63,  84 => 62,  82 => 61,  77 => 60,  75 => 59,  72 => 58,  68 => 55,  66 => 54,  64 => 53,  62 => 52,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/tara/templates/layout/page.html.twig", "/var/www/html/drupal9/themes/contrib/tara/templates/layout/page.html.twig");
    }
}
