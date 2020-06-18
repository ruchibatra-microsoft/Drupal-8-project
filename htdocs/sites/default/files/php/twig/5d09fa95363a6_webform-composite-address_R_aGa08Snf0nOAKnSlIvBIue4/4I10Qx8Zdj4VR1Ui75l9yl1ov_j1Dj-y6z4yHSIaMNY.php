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

/* modules/webform/templates/webform-composite-address.html.twig */
class __TwigTemplate_6a52c01257a62ea7035fb43c926d06e11b7f6e0006a8841a7ee0da527cf25b05 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 16];
        $filters = ["escape" => 20];
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
            echo "
  ";
            // line 18
            if ($this->getAttribute(($context["content"] ?? null), "address", [])) {
                // line 19
                echo "    <div class=\"webform-flexbox\">
      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                // line 20
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "address", [])), "html", null, true);
                echo "</div></div>
    </div>
  ";
            }
            // line 23
            echo "
  ";
            // line 24
            if ($this->getAttribute(($context["content"] ?? null), "address_2", [])) {
                // line 25
                echo "    <div class=\"webform-flexbox\">
      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                // line 26
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "address_2", [])), "html", null, true);
                echo "</div></div>
    </div>
  ";
            }
            // line 29
            echo "
  <div class=\"webform-flexbox\">
    ";
            // line 31
            if ($this->getAttribute(($context["content"] ?? null), "city", [])) {
                // line 32
                echo "      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "city", [])), "html", null, true);
                echo "</div></div>
    ";
            }
            // line 34
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "state_province", [])) {
                // line 35
                echo "      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "state_province", [])), "html", null, true);
                echo "</div></div>
    ";
            }
            // line 37
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "postal_code", [])) {
                // line 38
                echo "      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "postal_code", [])), "html", null, true);
                echo "</div></div>
    ";
            }
            // line 40
            echo "  </div>

  ";
            // line 42
            if ($this->getAttribute(($context["content"] ?? null), "country", [])) {
                // line 43
                echo "    <div class=\"webform-flexbox\">
      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                // line 44
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "country", [])), "html", null, true);
                echo "</div></div>
    </div>
  ";
            }
            // line 47
            echo "
";
        } else {
            // line 49
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "modules/webform/templates/webform-composite-address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 49,  130 => 47,  124 => 44,  121 => 43,  119 => 42,  115 => 40,  109 => 38,  106 => 37,  100 => 35,  97 => 34,  91 => 32,  89 => 31,  85 => 29,  79 => 26,  76 => 25,  74 => 24,  71 => 23,  65 => 20,  62 => 19,  60 => 18,  57 => 17,  55 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/webform/templates/webform-composite-address.html.twig", "C:\\MAMP\\htdocs\\modules\\webform\\templates\\webform-composite-address.html.twig");
    }
}
