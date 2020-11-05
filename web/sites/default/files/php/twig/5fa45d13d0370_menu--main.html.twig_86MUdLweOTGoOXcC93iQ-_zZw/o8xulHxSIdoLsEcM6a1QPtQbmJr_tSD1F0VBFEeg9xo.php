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

/* themes/custom/goran_d8w3css/templates/menu--main.html.twig */
class __TwigTemplate_1e073d813dd4bb1f9e8a840f266ca27ead904d945299e533be1a730b4f4461ee extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 22, "macro" => 28, "set" => 31, "if" => 40, "for" => 46];
        $filters = ["clean_class" => 32];
        $functions = ["link" => 69];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'set', 'if', 'for'],
                ['clean_class'],
                ['link']
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
        // line 21
        echo "<div class=\"ul-responsive-v\">
";
        // line 22
        $context["menus"] = $this;
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)));
        echo "
";
        // line 84
        echo "</div>
";
    }

    // line 28
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 29
            echo "  ";
            $context["menus"] = $this;
            // line 30
            echo "  ";
            // line 31
            $context["menu_classes"] = [0 => ("ul-parent ul-parent-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 32
($context["menu_name"] ?? null))))];
            // line 35
            echo "  ";
            // line 36
            $context["submenu_classes"] = [0 => ("ul-child ul-child-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 37
($context["menu_name"] ?? null))))];
            // line 40
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 41
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 42
                    echo "      <ul ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["menu_classes"] ?? null)], "method")), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 44
                    echo "      <ul ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["menu_classes"] ?? null)], "method"), "addClass", [0 => ($context["submenu_classes"] ?? null)], "method")), "html", null, true);
                    echo ">
    ";
                }
                // line 46
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 47
                    echo "      ";
                    // line 48
                    $context["item_classes"] = [0 => ("li-item li-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 49
($context["menu_name"] ?? null)))), 1 => (($this->getAttribute(                    // line 50
$context["item"], "is_expanded", [])) ? ("li-expanded") : ("")), 2 => ((($this->getAttribute(                    // line 51
$context["item"], "is_expanded", []) && (($context["menu_level"] ?? null) == 0))) ? ("li-parent") : ("")), 3 => (($this->getAttribute(                    // line 52
$context["item"], "in_active_trail", [])) ? ("active") : (""))];
                    // line 55
                    echo "     ";
                    if (((($context["menu_level"] ?? null) == 0) && $this->getAttribute($context["item"], "is_expanded", []))) {
                        // line 56
                        echo "        <li";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method")), "html", null, true);
                        echo ">
        <a href=\"#\" class=\"w3-button tMenu-v toggle-parent\">";
                        // line 57
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                        echo " <span class=\"fa fa-chevron-down\"></span></a>
      ";
                    } elseif (((                    // line 58
($context["menu_level"] ?? null) != 0) && $this->getAttribute($context["item"], "is_expanded", []))) {
                        // line 59
                        echo "        <li";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method")), "html", null, true);
                        echo ">
        <a href=\"#\" class=\"w3-button tMenu-v toggle-child\">";
                        // line 60
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                        echo " <span class=\" fa fa-chevron-down\"></span></a>
      ";
                    } else {
                        // line 62
                        echo "      ";
                        // line 63
                        $context["link_classes"] = [0 => ("w3-button li-link li-link-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                        // line 64
($context["menu_name"] ?? null))))];
                        // line 67
                        echo "      <li";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method")), "html", null, true);
                        echo ">
        ";
                        // line 68
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute(                        // line 70
$context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute(                        // line 71
$context["item"], "url", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(                        // line 72
$context["item"], "attributes", []), "removeClass", [0 => ($context["item_classes"] ?? null)], "method"), "addClass", [0 => ($context["link_classes"] ?? null)], "method"))), "html", null, true);
                        // line 74
                        echo "
      ";
                    }
                    // line 76
                    echo "      ";
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 77
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["menu_name"] ?? null)));
                        echo "
      ";
                    }
                    // line 79
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "    </ul>
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/custom/goran_d8w3css/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 81,  180 => 79,  174 => 77,  171 => 76,  167 => 74,  165 => 72,  164 => 71,  163 => 70,  162 => 68,  157 => 67,  155 => 64,  154 => 63,  152 => 62,  147 => 60,  142 => 59,  140 => 58,  136 => 57,  131 => 56,  128 => 55,  126 => 52,  125 => 51,  124 => 50,  123 => 49,  122 => 48,  120 => 47,  115 => 46,  109 => 44,  103 => 42,  100 => 41,  97 => 40,  95 => 37,  94 => 36,  92 => 35,  90 => 32,  89 => 31,  87 => 30,  84 => 29,  69 => 28,  64 => 84,  60 => 27,  58 => 22,  55 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/goran_d8w3css/templates/menu--main.html.twig", "/var/www/drupalvm/drupal/web/themes/custom/goran_d8w3css/templates/menu--main.html.twig");
    }
}
