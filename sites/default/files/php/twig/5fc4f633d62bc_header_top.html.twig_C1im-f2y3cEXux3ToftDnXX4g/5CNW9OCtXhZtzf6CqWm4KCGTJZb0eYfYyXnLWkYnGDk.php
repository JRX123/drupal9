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

/* @tara/template-parts/header_top.html.twig */
class __TwigTemplate_ee08538314dc950a09c3c6049d45f17aafb7d685e9fd0bf91201a334473a1f45 extends \Twig\Template
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
        $tags = array("if" => 4, "include" => 11);
        $filters = array("escape" => 6);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
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
        // line 1
        echo "<div class=\"header-top clear\">
  <div class=\"container\">
    <div class=\"header-top-container\">
      ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 4)) {
            // line 5
            echo "        <div class=\"header-top-left\">
            ";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "
        </div> <!--/.header-top-left -->
      ";
        }
        // line 9
        echo "      ";
        if (($context["all_icons_show"] ?? null)) {
            // line 10
            echo "        <div class=\"header-top-right\">
          ";
            // line 11
            $this->loadTemplate("@tara/template-parts/social-icons.html.twig", "@tara/template-parts/header_top.html.twig", 11)->display($context);
            // line 12
            echo "        </div> <!--/.header-top-right -->
      ";
        }
        // line 14
        echo "    </div> <!--/.header-top-container -->
  </div> <!--/.container -->
</div> <!--/.header-top -->
";
    }

    public function getTemplateName()
    {
        return "@tara/template-parts/header_top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 14,  86 => 12,  84 => 11,  81 => 10,  78 => 9,  72 => 6,  69 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@tara/template-parts/header_top.html.twig", "/var/www/html/drupal9/themes/contrib/tara/templates/template-parts/header_top.html.twig");
    }
}
