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

/* modules/contrib/simple_block_slider/templates/paragraph--simple-block-slide.html.twig */
class __TwigTemplate_186a22a31466dce5f3c35fd6681eb11275be7a85d22de77e7a39c327f0c296c6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 42, "block" => 49, "if" => 54];
        $filters = ["lower" => 45];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['lower'],
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
        // line 42
        $context["classes"] = [0 => "sbs-slide", 1 => "swiper-slide", 2 => ("text-background-" . twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(        // line 45
($context["content"] ?? null), "field_sbs_text_background", []), 0, [], "array"), "#markup", [], "array"))))];
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 50
        echo "  <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo " style=\"background-image: url(";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_sbs_background", []), 0, [], "array"), "#markup", [], "array")), "html", null, true);
        echo ")\">
    ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "  </div>
";
    }

    // line 51
    public function block_content($context, array $blocks = [])
    {
        // line 52
        echo "      <div class=\"container\">
        <div class=\"slide-content-wrapper\">
          ";
        // line 54
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_sbs_title", []), 0, [], "array")) {
            // line 55
            echo "            <div class=\"slide-title\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_sbs_title", [])), "html", null, true);
            echo "</div>
          ";
        }
        // line 57
        echo "          ";
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_sbs_subtitle", []), 0, [], "array")) {
            // line 58
            echo "            <div class=\"slide-subtitle\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_sbs_subtitle", [])), "html", null, true);
            echo "</div>
          ";
        }
        // line 60
        echo "          ";
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_sbs_cta", []), 0, [], "array")) {
            // line 61
            echo "            <div class=\"slide-cta\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_sbs_cta", [])), "html", null, true);
            echo "</div>
          ";
        }
        // line 63
        echo "        </div>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "modules/contrib/simple_block_slider/templates/paragraph--simple-block-slide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 63,  110 => 61,  107 => 60,  101 => 58,  98 => 57,  92 => 55,  90 => 54,  86 => 52,  83 => 51,  78 => 66,  76 => 51,  69 => 50,  63 => 49,  60 => 48,  58 => 45,  57 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/simple_block_slider/templates/paragraph--simple-block-slide.html.twig", "/var/www/drupalvm/drupal/web/modules/contrib/simple_block_slider/templates/paragraph--simple-block-slide.html.twig");
    }
}
