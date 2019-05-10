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

/* themes/contrib/d8w3css/templates/layout/page.html.twig */
class __TwigTemplate_b0718f643b6a173b81003b058df69a4b069a2d26df4f919da1a9922058d783d6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 57];
        $filters = ["t" => 59];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t'],
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
        // line 57
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu_vertical", [])) {
            // line 58
            echo "  <!-- Start: Main Navigation - Vertical -->
  <div id=\"main-navigation-v\" class=\"main-navigation-wrapper w3-sidebar w3-bar-block w3-animate-left w3-card w3-theme ";
            // line 59
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null)), "html", null, true);
            echo "\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Main Navigation"));
            echo "\" >
    <div id=\"main-navigation-inner-v\" class=\"main-navigation-inner-v\">
      <i id=\"close-nav\" class=\"close-nav fa fa-bars w3-button w3-bar-block w3-xlarge w3-theme ";
            // line 61
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null)), "html", null, true);
            echo "\"></i>
        ";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu_vertical", [])), "html", null, true);
            echo "
    </div>
  </div>
  <!-- End: Main Navigation - Vertical -->
";
        }
        // line 67
        echo "<!-- Start: Page Wrapper -->
<div class=\"page-wrapper w3-col w3-clear w3-animate-opacity w3-text-theme ";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_page_wrapper"] ?? null)), "html", null, true);
        echo " \">
  <!-- Start: Header -->
  <header id=\"header\" class=\"w3-col w3-clear w3-theme-l4 ";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_header"] ?? null)), "html", null, true);
        echo "\" role=\"banner\" aria-label=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header"));
        echo "\">
    <div id=\"header-inner\" class=\"d8-fade w3-container header-inner ";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null)), "html", null, true);
        echo "\">
      ";
        // line 72
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu_vertical", [])) {
            // line 73
            echo "        <div id=\"open-nav-inner\" class=\"open-nav-inner w3-opacity w3-hover-opacity-off w3-left fa fa-bars w3-button w3-left-align w3-xxlarge w3-theme ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null)), "html", null, true);
            echo "\"></div>
      ";
        }
        // line 75
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 76
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
      ";
        }
        // line 78
        echo "    </div>
  </header>
  <!-- End: Header -->
  ";
        // line 81
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 82
            echo "  <!-- Start: Main Navigation - Horizontal -->
  <div id=\"main-navigation-h\" class=\"w3-col w3-clear main-navigation-wrapper w3-card w3-theme ";
            // line 83
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null)), "html", null, true);
            echo "\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Main Navigation"));
            echo "\" >
    <div id=\"main-navigation-inner-h\" class=\"d8-fade w3-row main-navigation-inner-h ";
            // line 84
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null)), "html", null, true);
            echo "\">
        <i class=\"mobile-nav fa fa-bars w3-hide-large w3-button w3-block w3-right-align w3-xxlarge w3-theme ";
            // line 85
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null)), "html", null, true);
            echo "\"></i>
        ";
            // line 86
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
    </div>
  </div>
  <!-- End: Main Navigation - Horizontal -->
  ";
        }
        // line 91
        echo "  ";
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "welcome_text", []))) {
            // line 92
            echo "    <!-- Start: Welcome Text -->
    <div id=\"welcome-text\" class=\"w3-col w3-clear w3-theme-l5 ";
            // line 93
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_welcome_text"] ?? null)), "html", null, true);
            echo "\">
      <div id=\"welcome-text-inner\" class=\"d8-fade w3-row welcome-text-inner ";
            // line 94
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 95
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "welcome_text", [])), "html", null, true);
            echo "
      </div>
    </div>
    <!-- End: Welcome Text -->
  ";
        }
        // line 100
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 101
            echo "    <!-- Start: Highlighted -->
    <div id=\"highlighted\" class=\"w3-col w3-clear w3-theme-l2 ";
            // line 102
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_highlighted"] ?? null)), "html", null, true);
            echo "\">
      <div id=\"highlighted-inner\" class=\"d8-fade w3-row highlighted-inner ";
            // line 103
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 104
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
      </div>
    </div>
    <!-- End: Highlighted -->
  ";
        }
        // line 109
        echo "  ";
        if (($context["is_front"] ?? null)) {
            // line 110
            echo "    ";
            if ((($this->getAttribute(($context["page"] ?? null), "top_first", []) || $this->getAttribute(($context["page"] ?? null), "top_second", [])) || $this->getAttribute(($context["page"] ?? null), "top_third", []))) {
                // line 111
                echo "      <!-- Start: Top Container -->
      <div id=\"top-container\" class=\"w3-col w3-clear w3-theme-l4 ";
                // line 112
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_container"] ?? null)), "html", null, true);
                echo "\">
        <div id=\"top-container-inner\" class=\"w3-row-padding w3-padding-large top-container-inner ";
                // line 113
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null)), "html", null, true);
                echo "\">
          ";
                // line 114
                if ($this->getAttribute(($context["page"] ?? null), "top_first", [])) {
                    // line 115
                    echo "            <!-- Start: Top container first region -->
            <div class=\"";
                    // line 116
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_w3css"] ?? null)), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["top_region"] ?? null)) ? ("top-region") : ("")));
                    echo " first-top\" >
              <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l5 ";
                    // line 117
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_first"] ?? null)), "html", null, true);
                    echo "\">
               ";
                    // line 118
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_first", [])), "html", null, true);
                    echo "
              </div>
            </div>
            <!-- End: Top Container First -->
          ";
                }
                // line 123
                echo "          ";
                if ($this->getAttribute(($context["page"] ?? null), "top_second", [])) {
                    // line 124
                    echo "            <!-- Start: Top Container Second  -->
            <div class=\"";
                    // line 125
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_w3css"] ?? null)), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["top_region"] ?? null)) ? ("top-region") : ("")));
                    echo " second-top\">
              <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l5 ";
                    // line 126
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_second"] ?? null)), "html", null, true);
                    echo "\">
               ";
                    // line 127
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_second", [])), "html", null, true);
                    echo "
              </div>
            </div>
            <!-- End: Top Container Second -->
          ";
                }
                // line 132
                echo "          ";
                if ($this->getAttribute(($context["page"] ?? null), "top_third", [])) {
                    // line 133
                    echo "          <!-- Start: Top Container Third -->
          <div class=\"";
                    // line 134
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_w3css"] ?? null)), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["top_region"] ?? null)) ? ("top-region") : ("")));
                    echo " third-top\">
            <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l5 ";
                    // line 135
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_third"] ?? null)), "html", null, true);
                    echo "\">
              ";
                    // line 136
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_third", [])), "html", null, true);
                    echo "
            </div>
          </div>
          <!-- End: Top Container Third -->
          ";
                }
                // line 141
                echo "        </div>
      </div>
      <!-- End: Top container -->
    ";
            }
            // line 145
            echo "  ";
        }
        // line 146
        echo "  ";
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 147
            echo "    <!-- Start: Page Title -->
    <div id=\"page-title\" class=\"w3-col w3-clear w3-theme-d5 ";
            // line 148
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_page_title"] ?? null)), "html", null, true);
            echo "\">
      <div id=\"page-title-inner\" class=\"d8-fade w3-row page-title-inner ";
            // line 149
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 150
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
      </div>
    </div>
    <!-- End: Page Title -- >
  ";
        }
        // line 155
        echo "  <!-- Start: Main -->
  <div id=\"main-container\" class=\"w3-col w3-clear w3-theme-l5 ";
        // line 156
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_main"] ?? null)), "html", null, true);
        echo "\">
    <div id=\"main-container-inner\" class=\"w3-container main-container-inner ";
        // line 157
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null)), "html", null, true);
        echo "\">
      ";
        // line 158
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])) {
            // line 159
            echo "        <!-- Breadcrumb -->
        <div class=\"";
            // line 160
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_breadcrumb"] ?? null)), "html", null, true);
            echo "\">
          ";
            // line 161
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "
        </div>
        <!-- End: Breadcrumb -->
      ";
        }
        // line 165
        echo "      <!-- Start Main Container  -->
      <div class=\"w3-col w3-clear w3-row-padding\">
        ";
        // line 167
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 168
            echo "          <!-- Start Left SideBar -->
          <div class =\"";
            // line 169
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_region"] ?? null)) ? ("main-region") : ("")));
            echo " first-sidebar\">
            <div class=\"d8-fade w3-card w3-round w3-sidebar-first w3-mobile ";
            // line 170
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_sidebar_first"] ?? null)), "html", null, true);
            echo "\">
              ";
            // line 171
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
            </div>
          </div>
          <!-- End: Left SideBar -->
        ";
        }
        // line 176
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 177
            echo "          <!-- Start: Main Content -->
          <div class=\"";
            // line 178
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_w3css"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_region"] ?? null)) ? ("main-region") : ("")));
            echo " w3css-content\">
            <div class=\"d8-fade w3-card w3-round w3-mobile  ";
            // line 179
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_content"] ?? null)), "html", null, true);
            echo "\">
              ";
            // line 180
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
            </div>
          </div>
          <!-- End: Main Content -->
        ";
        }
        // line 185
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 186
            echo "          <!-- Start: Right SideBar -->
          <div class=\"";
            // line 187
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_region"] ?? null)) ? ("main-region") : ("")));
            echo " second-sidebar\">
            <div class=\"d8-fade w3-card w3-round w3-sidebar-second w3-mobile ";
            // line 188
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_sidebar_second"] ?? null)), "html", null, true);
            echo "\">
              ";
            // line 189
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
            </div>
          </div>
          <!-- End: Right SideBar -->
        ";
        }
        // line 194
        echo "      </div>
      <!-- Endn: Main Container  -->
    </div>
  </div>
  <!-- End: Main -->
  ";
        // line 199
        if (($context["is_front"] ?? null)) {
            // line 200
            echo "    ";
            if (((($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_forth", []))) {
                // line 201
                echo "      <!-- Start: Bottom -->
      <div id=\"bottom-container\" class=\"w3-col w3-clear w3-theme-l2 ";
                // line 202
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_container"] ?? null)), "html", null, true);
                echo "\">
        <div id=\"bottom-container-inner\" class=\"w3-row-padding w3-padding-large bottom-container-inner ";
                // line 203
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 204
                if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                    // line 205
                    echo "              <!-- Start: Bottom First -->
              <div class=\"";
                    // line 206
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null)), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                    echo " first-bottom\">
                <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l4 ";
                    // line 207
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_first"] ?? null)), "html", null, true);
                    echo "\">
                  ";
                    // line 208
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                    echo "
                </div>
              </div>
              <!-- End: Bottom First -->
            ";
                }
                // line 213
                echo "            ";
                if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                    // line 214
                    echo "              <!-- Start: Bottom Second -->
              <div class=\"";
                    // line 215
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null)), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                    echo " second-bottom\">
                <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l4 ";
                    // line 216
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_second"] ?? null)), "html", null, true);
                    echo "\">
                  ";
                    // line 217
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                    echo "
                </div>
              </div>
              <!-- End: Bottom Second -->
            ";
                }
                // line 222
                echo "            ";
                if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                    // line 223
                    echo "              <!-- Start: Bottom Third  -->
              <div class=\"";
                    // line 224
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null)), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                    echo " third-bottom\">
                <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l4 ";
                    // line 225
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_third"] ?? null)), "html", null, true);
                    echo "\">
                  ";
                    // line 226
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                    echo "
                </div>
              </div>
              <!-- End: Bottom Third -->
            ";
                }
                // line 231
                echo "            ";
                if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])) {
                    // line 232
                    echo "              <!-- Start: Bottom Forth  -->
              <div class =\"";
                    // line 233
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null)), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                    echo " forth-bottom\">
                <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l4 ";
                    // line 234
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_forth"] ?? null)), "html", null, true);
                    echo "\">
                  ";
                    // line 235
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])), "html", null, true);
                    echo "
                </div>
              </div>
              <!-- End: Bottom Forth -->
            ";
                }
                // line 240
                echo "        </div>
      </div>
      <!-- End: Bottom -->
    ";
            }
            // line 244
            echo "  ";
        }
        // line 245
        echo "  ";
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", []))) {
            // line 246
            echo "    <!-- start: Footer -->
    <div id=\"footer-container\" class=\"w3-col w3-clear w3-theme-d3 ";
            // line 247
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_container"] ?? null)), "html", null, true);
            echo "\">
      <div id=\"footer-container-inner\" class=\"w3-row-padding w3-padding-large footer-container-inner ";
            // line 248
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null)), "html", null, true);
            echo "\">

        ";
            // line 250
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 251
                echo "          <!-- Start: Footer First  -->
          <div class=\"";
                // line 252
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_w3css"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_region"] ?? null)) ? ("footer-region") : ("")));
                echo " first-footer\">
            <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l4 ";
                // line 253
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_first"] ?? null)), "html", null, true);
                echo "\">
              ";
                // line 254
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
            </div>
          </div>
          <!-- End: Footer First -->
        ";
            }
            // line 259
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 260
                echo "          <!-- Start: Footer Second Region -->
          <div class=\"";
                // line 261
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_w3css"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_region"] ?? null)) ? ("footer-region") : ("")));
                echo " second-footer\">
            <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l5 ";
                // line 262
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_second"] ?? null)), "html", null, true);
                echo "\">
              ";
                // line 263
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
            </div>
          </div>
        <!-- End: Footer Second -->
        ";
            }
            // line 268
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 269
                echo "          <!-- Start: Footer Third -->
          <div class=\"";
                // line 270
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_w3css"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_region"] ?? null)) ? ("footer-region") : ("")));
                echo " third-footer\">
            <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l4 ";
                // line 271
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_third"] ?? null)), "html", null, true);
                echo "\">
              ";
                // line 272
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
            </div>
          </div>
          <!-- End: Footer Third -->
        ";
            }
            // line 277
            echo "      </div>
    </div>
    <!-- End: Footer -->
  ";
        }
        // line 281
        echo "  ";
        if (($this->getAttribute(($context["page"] ?? null), "footer_menu", []) || ($context["show_social_icon"] ?? null))) {
            // line 282
            echo "    <!-- Start: Footer Menu -->
    <div id=\"footer-menu\" class=\"w3-col w3-clear w3-card w3-theme-d4 ";
            // line 283
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_menu"] ?? null)), "html", null, true);
            echo "\">
      <div id=\"footer-menu-inner\" class=\"w3-row footer-menu-inner ";
            // line 284
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 285
            if (($context["show_social_icon"] ?? null)) {
                // line 286
                echo "          <!-- Start: Social Media -->
          <div class=\"d8-fade w3-center w3-container w3-mobile social-media\">
            ";
                // line 288
                if (($context["facebook_url"] ?? null)) {
                    // line 289
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            ";
                }
                // line 291
                echo "            ";
                if (($context["twitter_url"] ?? null)) {
                    // line 292
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            ";
                }
                // line 294
                echo "            ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 295
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-pinterest\"></i></a>
            ";
                }
                // line 297
                echo "            ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 298
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            ";
                }
                // line 300
                echo "            ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 301
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            ";
                }
                // line 303
                echo "            ";
                if (($context["instagram_url"] ?? null)) {
                    // line 304
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null)), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a>
            ";
                }
                // line 306
                echo "            ";
                if (($context["youtube_url"] ?? null)) {
                    // line 307
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_url"] ?? null)), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a>
            ";
                }
                // line 309
                echo "            ";
                if (($context["drupal_url"] ?? null)) {
                    // line 310
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["drupal_url"] ?? null)), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xxlarge w3-padding-large\" target=\"_blank\" ><i class=\"fa fa-drupal\"></i></a>
            ";
                }
                // line 312
                echo "            ";
                if (($context["rss_url"] ?? null)) {
                    // line 313
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding-large\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
                }
                // line 315
                echo "          </div>
          <!-- End: Social Media -->
        ";
            }
            // line 318
            echo "        <!-- Start: Bottom Menu -->
        ";
            // line 319
            if ($this->getAttribute(($context["page"] ?? null), "footer_menu", [])) {
                // line 320
                echo "          <div class=\"d8-fade w3-container w3-center w3-mobile\">
            ";
                // line 321
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
                echo "
          </div>
          <!-- End: Bottom Menu -->
        ";
            }
            // line 325
            echo "      </div>
    </div>
    <!-- End: Footer Menu -->
  ";
        }
        // line 329
        echo "  ";
        if ((($context["copyright_text"] ?? null) || ($context["show_credit_link"] ?? null))) {
            // line 330
            echo "    <!-- Start: Copyright -->
    <div id=\"copyright\" class=\"w3-col w3-clear w3-theme-d5 ";
            // line 331
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_copyright"] ?? null)), "html", null, true);
            echo "\">
      <div id=\"copyright-inner\" class=\"w3-row copyright-inner ";
            // line 332
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 333
            if (($context["copyright_text"] ?? null)) {
                // line 334
                echo "          <!-- Start: Copyright -->
          <div class=\"w3-half w3-container w3-mobile\">
            <p class=\"w3-section w3-left-align w3-opacity w3-hover-opacity-off\">";
                // line 336
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_text"] ?? null)), "html", null, true);
                echo "</p>
          </div>
          <!-- End: Copyright -->
        ";
            }
            // line 340
            echo "        ";
            if (($context["show_credit_link"] ?? null)) {
                // line 341
                echo "          <!-- Start: Credit Link -->
          <div class=\"w3-half w3-container w3-mobile\">
            <p class=\"w3-section w3-right-align w3-opacity w3-hover-opacity-off\">Designed by: <a href=\"http://www.flashwebcenter.com\" title=\"Flash Web Center LLC\" target=\"_blank\">Flash Web Center LLC</a></p>
          </div>
          <!-- End: Credit Link -->
        ";
            }
            // line 347
            echo "      </div>
    </div>
    <!-- End: Copyright -->
  ";
        }
        // line 351
        echo "</div>
<!-- End: Page Wrapper -->
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/d8w3css/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  801 => 351,  795 => 347,  787 => 341,  784 => 340,  777 => 336,  773 => 334,  771 => 333,  767 => 332,  763 => 331,  760 => 330,  757 => 329,  751 => 325,  744 => 321,  741 => 320,  739 => 319,  736 => 318,  731 => 315,  725 => 313,  722 => 312,  716 => 310,  713 => 309,  707 => 307,  704 => 306,  698 => 304,  695 => 303,  689 => 301,  686 => 300,  680 => 298,  677 => 297,  671 => 295,  668 => 294,  662 => 292,  659 => 291,  653 => 289,  651 => 288,  647 => 286,  645 => 285,  641 => 284,  637 => 283,  634 => 282,  631 => 281,  625 => 277,  617 => 272,  613 => 271,  607 => 270,  604 => 269,  601 => 268,  593 => 263,  589 => 262,  583 => 261,  580 => 260,  577 => 259,  569 => 254,  565 => 253,  559 => 252,  556 => 251,  554 => 250,  549 => 248,  545 => 247,  542 => 246,  539 => 245,  536 => 244,  530 => 240,  522 => 235,  518 => 234,  512 => 233,  509 => 232,  506 => 231,  498 => 226,  494 => 225,  488 => 224,  485 => 223,  482 => 222,  474 => 217,  470 => 216,  464 => 215,  461 => 214,  458 => 213,  450 => 208,  446 => 207,  440 => 206,  437 => 205,  435 => 204,  431 => 203,  427 => 202,  424 => 201,  421 => 200,  419 => 199,  412 => 194,  404 => 189,  400 => 188,  394 => 187,  391 => 186,  388 => 185,  380 => 180,  376 => 179,  370 => 178,  367 => 177,  364 => 176,  356 => 171,  352 => 170,  346 => 169,  343 => 168,  341 => 167,  337 => 165,  330 => 161,  326 => 160,  323 => 159,  321 => 158,  317 => 157,  313 => 156,  310 => 155,  302 => 150,  298 => 149,  294 => 148,  291 => 147,  288 => 146,  285 => 145,  279 => 141,  271 => 136,  267 => 135,  261 => 134,  258 => 133,  255 => 132,  247 => 127,  243 => 126,  237 => 125,  234 => 124,  231 => 123,  223 => 118,  219 => 117,  213 => 116,  210 => 115,  208 => 114,  204 => 113,  200 => 112,  197 => 111,  194 => 110,  191 => 109,  183 => 104,  179 => 103,  175 => 102,  172 => 101,  169 => 100,  161 => 95,  157 => 94,  153 => 93,  150 => 92,  147 => 91,  139 => 86,  135 => 85,  131 => 84,  125 => 83,  122 => 82,  120 => 81,  115 => 78,  109 => 76,  106 => 75,  100 => 73,  98 => 72,  94 => 71,  88 => 70,  83 => 68,  80 => 67,  72 => 62,  68 => 61,  61 => 59,  58 => 58,  55 => 57,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/d8w3css/templates/layout/page.html.twig", "/var/www/drupalvm/drupal/web/themes/contrib/d8w3css/templates/layout/page.html.twig");
    }
}
