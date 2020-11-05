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

/* themes/contrib/d8w3css/templates/views/views-view.html.twig */
class __TwigTemplate_f4dff3e8ec139ced70c5f1eb361e58417a9f79104d3af6bb97419545a5c1cebd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 34, "if" => 45];
        $filters = ["clean_class" => 37];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class'],
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
        // line 34
        $context["classes"] = [0 => "w3-row", 1 => "view", 2 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 37
($context["id"] ?? null)))), 3 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 38
($context["id"] ?? null))), 4 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 39
($context["display_id"] ?? null))), 5 => ((        // line 40
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null)))) : (""))];
        // line 43
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 45
        if (($context["title"] ?? null)) {
            // line 46
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 48
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 49
        if (($context["header"] ?? null)) {
            // line 50
            echo "    <header class=\"view-header\">
      ";
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null)), "html", null, true);
            echo "
    </header>
  ";
        }
        // line 54
        echo "  ";
        if (($context["exposed"] ?? null)) {
            // line 55
            echo "    <div class=\"view-filters form-group\">
      ";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 59
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 60
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 61
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 64
        echo "
  ";
        // line 65
        if (($context["rows"] ?? null)) {
            // line 66
            echo "    <div class=\"view-content\">
      ";
            // line 67
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        } elseif (        // line 69
($context["empty"] ?? null)) {
            // line 70
            echo "    <div class=\"view-empty\">
      ";
            // line 71
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 74
        echo "
  ";
        // line 75
        if (($context["pager"] ?? null)) {
            // line 76
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 78
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 79
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 80
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 83
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 84
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 86
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 87
            echo "    <footer class=\"view-footer\">
      ";
            // line 88
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null)), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 91
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 92
            echo "    <div class=\"feed-icons\">
      ";
            // line 93
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 96
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/d8w3css/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 96,  192 => 93,  189 => 92,  186 => 91,  180 => 88,  177 => 87,  174 => 86,  168 => 84,  165 => 83,  159 => 80,  156 => 79,  153 => 78,  147 => 76,  145 => 75,  142 => 74,  136 => 71,  133 => 70,  131 => 69,  126 => 67,  123 => 66,  121 => 65,  118 => 64,  112 => 61,  109 => 60,  106 => 59,  100 => 56,  97 => 55,  94 => 54,  88 => 51,  85 => 50,  83 => 49,  78 => 48,  72 => 46,  70 => 45,  66 => 44,  61 => 43,  59 => 40,  58 => 39,  57 => 38,  56 => 37,  55 => 34,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/d8w3css/templates/views/views-view.html.twig", "/var/www/drupalvm/drupal/web/themes/contrib/d8w3css/templates/views/views-view.html.twig");
    }
}
