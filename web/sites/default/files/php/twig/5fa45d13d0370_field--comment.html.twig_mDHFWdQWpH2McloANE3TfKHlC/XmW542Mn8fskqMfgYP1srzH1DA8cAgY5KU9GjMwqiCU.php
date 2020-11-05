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

/* themes/contrib/d8w3css/templates/field/field--comment.html.twig */
class __TwigTemplate_e76c9aaca81bd42878fc4bef4df7ee8824f88ef738dff247508803cc64c93f58 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 29, "if" => 45];
        $filters = ["clean_class" => 32, "t" => 54];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 't'],
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
        // line 29
        $context["classes"] = [0 => "w3-row", 1 => "field", 2 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 32
($context["field_name"] ?? null)))), 3 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 33
($context["field_type"] ?? null)))), 4 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 34
($context["label_display"] ?? null))), 5 => "comment-wrapper"];
        // line 39
        $context["title_classes"] = [0 => "title", 1 => (((        // line 41
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 44
        echo "<section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 45
        if ((($context["comments"] ?? null) &&  !($context["label_hidden"] ?? null))) {
            // line 46
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
    <h2";
            // line 47
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null), 1 => "w3-margin-left"], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</h2>
    ";
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 50
        echo "
  ";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comments"] ?? null)), "html", null, true);
        echo "

  ";
        // line 53
        if (($context["comment_form"] ?? null)) {
            // line 54
            echo "    <h2 class=\"w3-opacity w3-hover-opacity-off w3-margin-left title comment-form__title\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Add new comment"));
            echo "</h2>
    ";
            // line 55
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_form"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 57
        echo "
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/d8w3css/templates/field/field--comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 57,  101 => 55,  96 => 54,  94 => 53,  89 => 51,  86 => 50,  81 => 48,  75 => 47,  70 => 46,  68 => 45,  63 => 44,  61 => 41,  60 => 39,  58 => 34,  57 => 33,  56 => 32,  55 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/d8w3css/templates/field/field--comment.html.twig", "/var/www/drupalvm/drupal/web/themes/contrib/d8w3css/templates/field/field--comment.html.twig");
    }
}
