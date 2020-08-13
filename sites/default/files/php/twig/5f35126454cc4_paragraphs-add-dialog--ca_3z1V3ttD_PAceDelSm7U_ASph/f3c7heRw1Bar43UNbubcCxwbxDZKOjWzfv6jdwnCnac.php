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

/* modules/contrib/paragraphs_ee/templates/paragraphs-add-dialog--categorized.html.twig */
class __TwigTemplate_b2b02bb365bb7304c820a6f0445d593ff84f762d3642a076e0e2d22a176b97c4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 21, "for" => 22];
        $filters = ["escape" => 9, "t" => 15, "default" => 21, "length" => 25];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 't', 'default', 'length'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/contrib/paragraphs_ee/templates/paragraphs-add-dialog--categorized.html.twig"));

        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["add"] ?? null)), "html", null, true);
        echo "
<div ";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  <div class=\"dialog-header clearfix\">
    <div class=\"filter js-hide\" role=\"search\">
      <input type=\"search\" class=\"item-filter\" placeholder=\"";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["filter_placeholder"] ?? null)), "html", null, true);
        echo "\" aria-label=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["filter_placeholder"] ?? null)), "html", null, true);
        echo "\" />
      <div class=\"search-description\">
        <label title=\"";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Include description when searching"));
        echo "\"><input type=\"checkbox\" name=\"search_description\" value=\"1\" aria-label=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Include description when searching"));
        echo "\" />";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Include description when searching"));
        echo "</label>
      </div>
    </div>
    <button type=\"button\" class=\"display-toggle style-list\" title=\"";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Display Paragraphs as list"));
        echo "\">list</button>
    <button type=\"button\" class=\"display-toggle style-tiles\" title=\"";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Display Paragraphs as tiles"));
        echo "\">tiles</button>
  </div>
  ";
        // line 21
        if (((((isset($context["add_mode"]) || array_key_exists("add_mode", $context))) ? (_twig_default_filter(($context["add_mode"] ?? null), "modal")) : ("modal")) != "off_canvas")) {
            // line 22
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
            foreach ($context['_seq'] as $context["category_id"] => $context["group"]) {
                // line 23
                echo "      <div class=\"button-group clearfix\" role=\"group\"";
                if ($this->getAttribute($this->getAttribute(($context["categories"] ?? null), $context["category_id"], [], "array"), "id", [])) {
                    echo " aria-labelledby=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["categories"] ?? null), $context["category_id"], [], "array"), "id", [])), "html", null, true);
                    echo "--label\" aria-describedby=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["categories"] ?? null), $context["category_id"], [], "array"), "id", [])), "html", null, true);
                    echo "--description\"";
                }
                echo ">
        <div";
                // line 24
                if ($this->getAttribute($this->getAttribute(($context["categories"] ?? null), $context["category_id"], [], "array"), "id", [])) {
                    echo " id=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["categories"] ?? null), $context["category_id"], [], "array"), "id", [])), "html", null, true);
                    echo "--label\"";
                }
                echo " class=\"category-title\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["categories"] ?? null), $context["category_id"], [], "array"), "title", [])), "html", null, true);
                echo "</div>
        ";
                // line 25
                if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["categories"] ?? null), $context["category_id"], [], "array"), "description", []))) {
                    // line 26
                    echo "          <summary";
                    if ($this->getAttribute($this->getAttribute(($context["categories"] ?? null), $context["category_id"], [], "array"), "id", [])) {
                        echo " id=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["categories"] ?? null), $context["category_id"], [], "array"), "id", [])), "html", null, true);
                        echo "--description\"";
                    }
                    echo " class=\"summary\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["categories"] ?? null), $context["category_id"], [], "array"), "description", [])), "html", null, true);
                    echo "</summary>
        ";
                }
                // line 28
                echo "        <ul class=\"paragraphs-add-dialog-list\">
          ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["group"]);
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 30
                    echo "            <li class=\"paragraphs-add-dialog-row\"";
                    if ($this->getAttribute($context["button"], "#easy_access", [], "array")) {
                        echo " data-easy-access-weight=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["button"], "#weight", [], "array")), "html", null, true);
                        echo "\"";
                    }
                    echo ">
              ";
                    // line 31
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["button"]), "html", null, true);
                    echo "
            </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "        </ul>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category_id'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "  ";
        }
        // line 38
        echo "</div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/paragraphs_ee/templates/paragraphs-add-dialog--categorized.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 38,  169 => 37,  161 => 34,  152 => 31,  143 => 30,  139 => 29,  136 => 28,  124 => 26,  122 => 25,  112 => 24,  101 => 23,  96 => 22,  94 => 21,  89 => 19,  85 => 18,  75 => 15,  68 => 13,  62 => 10,  58 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/paragraphs_ee/templates/paragraphs-add-dialog--categorized.html.twig", "/Users/784187/Projects/sph/SPH-Drupal-Distro/web/modules/contrib/paragraphs_ee/templates/paragraphs-add-dialog--categorized.html.twig");
    }
}
