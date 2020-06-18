<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/webform/templates/webform-composite-name.html.twig */
class __TwigTemplate_e58bc0d1a06dfe63636c107aaac7195f23fd8ecf1c9c1abda2128e2a31f0c46d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 16];
        $filters = ["escape" => 19];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
        // line 16
        if (($context["flexbox"] ?? null)) {
            // line 17
            echo "  <div class=\"webform-flexbox\">
    ";
            // line 18
            if ($this->getAttribute(($context["content"] ?? null), "title", [])) {
                // line 19
                echo "      <div class=\"webform-flex webform-flex--2\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "title", [])), "html", null, true);
                echo "</div></div>
    ";
            }
            // line 21
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "first", [])) {
                // line 22
                echo "      <div class=\"webform-flex webform-flex--3\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "first", [])), "html", null, true);
                echo "</div></div>
    ";
            }
            // line 24
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "middle", [])) {
                // line 25
                echo "      <div class=\"webform-flex webform-flex--2\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "middle", [])), "html", null, true);
                echo "</div></div>
    ";
            }
            // line 27
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "last", [])) {
                // line 28
                echo "      <div class=\"webform-flex webform-flex--3\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "last", [])), "html", null, true);
                echo "</div></div>
    ";
            }
            // line 30
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "suffix", [])) {
                // line 31
                echo "      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "suffix", [])), "html", null, true);
                echo "</div></div>
    ";
            }
            // line 33
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "degree", [])) {
                // line 34
                echo "      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "degree", [])), "html", null, true);
                echo "</div></div>
    ";
            }
            // line 36
            echo "  </div>
";
        } else {
            // line 38
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "modules/webform/templates/webform-composite-name.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 38,  113 => 36,  107 => 34,  104 => 33,  98 => 31,  95 => 30,  89 => 28,  86 => 27,  80 => 25,  77 => 24,  71 => 22,  68 => 21,  62 => 19,  60 => 18,  57 => 17,  55 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/webform/templates/webform-composite-name.html.twig", "C:\\MAMP\\htdocs\\modules\\webform\\templates\\webform-composite-name.html.twig");
    }
}
