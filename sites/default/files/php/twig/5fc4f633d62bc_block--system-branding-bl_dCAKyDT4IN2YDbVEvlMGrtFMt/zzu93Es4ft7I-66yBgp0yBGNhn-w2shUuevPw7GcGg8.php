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

/* themes/contrib/tara/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_c7a38f1799dab497ab6a39cfeb8aff2f5b061c84a5127f54c94b84a86c4f9bc2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 18);
        $filters = array("t" => 20, "escape" => 21);
        $functions = array("path" => 20);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
                ['path']
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

    protected function doGetParent(array $context)
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("block.html.twig", "themes/contrib/tara/templates/block/block--system-branding-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "<div class=\"site-branding\">
  ";
        // line 18
        if (($context["site_logo"] ?? null)) {
            // line 19
            echo "\t\t<div class=\"site-logo\">
         <a href=\"";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\">
            <img src=\"";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 21, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" />
         </a>
\t </div>
  ";
        }
        // line 25
        echo "   ";
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 26
            echo "   <div class=\"site-name-slogan\">
      ";
            // line 27
            if (($context["site_name"] ?? null)) {
                // line 28
                echo "         <div class=\"site-name\">
            <a href=\"";
                // line 29
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 29, $this->source), "html", null, true);
                echo "</a>
         </div>
      ";
            }
            // line 32
            echo "      ";
            if (($context["site_slogan"] ?? null)) {
                // line 33
                echo "         <div class=\"site-slogan\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 33, $this->source), "html", null, true);
                echo "</div>
      ";
            }
            // line 35
            echo "   </div>
   ";
        }
        // line 37
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/tara/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 37,  128 => 35,  122 => 33,  119 => 32,  109 => 29,  106 => 28,  104 => 27,  101 => 26,  98 => 25,  89 => 21,  83 => 20,  80 => 19,  78 => 18,  75 => 17,  71 => 16,  60 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/tara/templates/block/block--system-branding-block.html.twig", "/var/www/html/drupal9/themes/contrib/tara/templates/block/block--system-branding-block.html.twig");
    }
}
