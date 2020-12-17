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

/* core/modules/system/templates/status-report.html.twig */
class __TwigTemplate_f7bc298848776f5fd3c6b0087606c97a3a9bf918abfe6352fd4f25e76029442a extends \Twig\Template
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
        $tags = array("for" => 23, "if" => 28);
        $filters = array("escape" => 24);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["grouped_requirements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 24
            echo "  <h3 id=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["group"], "type", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["group"], "title", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</h3>
  ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "items", [], "any", false, false, true, 25));
            foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
                // line 26
                echo "    <details>
      <summary role=\"button\">
        ";
                // line 28
                if (twig_get_attribute($this->env, $this->source, $context["requirement"], "severity_title", [], "any", false, false, true, 28)) {
                    // line 29
                    echo "          <span class=\"visually-hidden\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["requirement"], "severity_title", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                    echo "</span>
        ";
                }
                // line 31
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["requirement"], "title", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo "
      </summary>
      ";
                // line 33
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["requirement"], "value", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                echo "
      ";
                // line 34
                if (twig_get_attribute($this->env, $this->source, $context["requirement"], "description", [], "any", false, false, true, 34)) {
                    // line 35
                    echo "        <div>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["requirement"], "description", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                    echo "</div>
      ";
                }
                // line 37
                echo "    </details>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requirement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/status-report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 37,  101 => 35,  99 => 34,  95 => 33,  89 => 31,  83 => 29,  81 => 28,  77 => 26,  73 => 25,  66 => 24,  62 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/system/templates/status-report.html.twig", "/var/www/html/drupal9/core/modules/system/templates/status-report.html.twig");
    }
}
