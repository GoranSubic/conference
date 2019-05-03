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

/* themes/contrib/d8w3css/templates/navigation/menu.html.twig */
class __TwigTemplate_f40475c6420b06f20047e92fb65a6a85c606bc9cfe250a1757462680250b5b76 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 21, "macro" => 27, "set" => 30, "if" => 39, "for" => 45];
        $filters = ["clean_class" => 31];
        $functions = ["link" => 68];

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
        $context["menus"] = $this;
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)));
        echo "
";
    }

    // line 27
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
            // line 28
            echo "  ";
            $context["menus"] = $this;
            // line 29
            echo "  ";
            // line 30
            $context["menu_classes"] = [0 => ("ul-parent ul-parent-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 31
($context["menu_name"] ?? null))))];
            // line 34
            echo "  ";
            // line 35
            $context["submenu_classes"] = [0 => ("ul-child ul-child-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 36
($context["menu_name"] ?? null))))];
            // line 39
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 40
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 41
                    echo "      <ul ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["menu_classes"] ?? null)], "method")), "html", null, true);
                    echo " role=\"menu\">
    ";
                } else {
                    // line 43
                    echo "      <ul ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["menu_classes"] ?? null)], "method"), "addClass", [0 => ($context["submenu_classes"] ?? null)], "method")), "html", null, true);
                    echo " role=\"menu\">
    ";
                }
                // line 45
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 46
                    echo "      ";
                    // line 47
                    $context["item_classes"] = [0 => ("li-item li-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 48
($context["menu_name"] ?? null)))), 1 => (($this->getAttribute(                    // line 49
$context["item"], "is_expanded", [])) ? ("li-expanded") : ("")), 2 => ((($this->getAttribute(                    // line 50
$context["item"], "is_expanded", []) && (($context["menu_level"] ?? null) == 0))) ? ("li-parent") : ("")), 3 => (($this->getAttribute(                    // line 51
$context["item"], "in_active_trail", [])) ? ("active") : (""))];
                    // line 54
                    echo "     ";
                    if (((($context["menu_level"] ?? null) == 0) && $this->getAttribute($context["item"], "is_expanded", []))) {
                        // line 55
                        echo "        <li";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method")), "html", null, true);
                        echo " role=\"none\">
        <a href=\"#\" class=\"w3-button tMenu toggle-parent\" aria-haspopup=\"true\">";
                        // line 56
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                        echo " <span class=\"fa fa-chevron-down dropdown-arrow\"></span></a>
      ";
                    } elseif (((                    // line 57
($context["menu_level"] ?? null) != 0) && $this->getAttribute($context["item"], "is_expanded", []))) {
                        // line 58
                        echo "        <li";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method")), "html", null, true);
                        echo " role=\"none\">
        <a href=\"#\" class=\"w3-button tMenu toggle-child\" aria-haspopup=\"true\">";
                        // line 59
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                        echo " <span class=\"fa fa-arrow-right right-arrow\"></span><span class=\" fa fa-chevron-down dropdown-arrow\"></span></a>
      ";
                    } else {
                        // line 61
                        echo "      ";
                        // line 62
                        $context["link_classes"] = [0 => ("w3-button li-link li-link-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                        // line 63
($context["menu_name"] ?? null))))];
                        // line 66
                        echo "      <li";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method")), "html", null, true);
                        echo " role=\"none\">
        ";
                        // line 67
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute(                        // line 69
$context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute(                        // line 70
$context["item"], "url", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(                        // line 71
$context["item"], "attributes", []), "removeClass", [0 => ($context["item_classes"] ?? null)], "method"), "addClass", [0 => ($context["link_classes"] ?? null)], "method"))), "html", null, true);
                        // line 73
                        echo "
      ";
                    }
                    // line 75
                    echo "      ";
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 76
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["menu_name"] ?? null)));
                        echo "
      ";
                    }
                    // line 78
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
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
        return "themes/contrib/d8w3css/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 80,  174 => 78,  168 => 76,  165 => 75,  161 => 73,  159 => 71,  158 => 70,  157 => 69,  156 => 67,  151 => 66,  149 => 63,  148 => 62,  146 => 61,  141 => 59,  136 => 58,  134 => 57,  130 => 56,  125 => 55,  122 => 54,  120 => 51,  119 => 50,  118 => 49,  117 => 48,  116 => 47,  114 => 46,  109 => 45,  103 => 43,  97 => 41,  94 => 40,  91 => 39,  89 => 36,  88 => 35,  86 => 34,  84 => 31,  83 => 30,  81 => 29,  78 => 28,  63 => 27,  57 => 26,  55 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/d8w3css/templates/navigation/menu.html.twig", "/var/www/drupalvm/drupal/web/themes/contrib/d8w3css/templates/navigation/menu.html.twig");
    }
}
