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

/* partial_addons.phtml */
class __TwigTemplate_f042d3d638d9ab355e8eef0220c7f18a1c77a48de8c5f0d8924ba8ebc693c1ca extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "addons", [], "any", false, false, false, 1)) > 0)) {
            // line 2
            echo "<div class=\"addons\" style=\"display: none;\">
<div class=\"widget\">
    <div class=\"head\">
        <h2 class=\"dark-icon i-services\">";
            // line 5
            echo gettext("Addons & extras");
            echo "</h2>
    </div>
    <table>
        <tbody>
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "addons", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["addon"]) {
                // line 10
                echo "            <tr>
                <td>
                    <input type=\"hidden\" name=\"addons[";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 12), "html", null, true);
                echo "][selected]\" value=\"0\">
                    <input type=\"checkbox\" name=\"addons[";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 13), "html", null, true);
                echo "][selected]\" value=\"1\" id=\"addon_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 13), "html", null, true);
                echo "\">
                </td>
                <td>
                    <label for=\"addon_";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 16), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "icon_url", [], "any", false, false, false, 16), "html", null, true);
                echo "\" alt=\"\" width=\"36\"/></label>
                </td>
                <td style=\"width: 50%\">
                    <label for=\"addon_";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 19), "html", null, true);
                echo "\"><h2>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "title", [], "any", false, false, false, 19), "html", null, true);
                echo "</h2></label>
                    ";
                // line 20
                echo twig_bbmd_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "description", [], "any", false, false, false, 20));
                echo "
                </td>
                <td>
                    ";
                // line 23
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 23), "type", [], "any", false, false, false, 23) === "recurrent")) {
                    // line 24
                    echo "                    <select name=\"addons[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 24), "html", null, true);
                    echo "][period]\" class=\"addon-period-selector\" rel=\"addon-periods-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 24), "html", null, true);
                    echo "\">
                    ";
                    // line 25
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 25), "recurrent", [], "any", false, false, false, 25));
                    foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                        // line 26
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["prices"], "enabled", [], "any", false, false, false, 26)) {
                            // line 27
                            echo "                        <option value=\"";
                            echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["periods"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["code"]] ?? null) : null), "html", null, true);
                            echo "</option>
                        ";
                        }
                        // line 29
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 30
                    echo "                    </select>
                    ";
                }
                // line 32
                echo "                </td>
                <td class=\"currency\" style=\"width: 20%\">
                    ";
                // line 34
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 34), "type", [], "any", false, false, false, 34) === "recurrent")) {
                    // line 35
                    echo "                    <div id=\"addon-periods-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 35), "html", null, true);
                    echo "\">
                    ";
                    // line 36
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 36), "recurrent", [], "any", false, false, false, 36));
                    foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                        // line 37
                        echo "                        <span class=\"";
                        echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                        echo "\">";
                        echo twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, $context["prices"], "price", [], "any", false, false, false, 37) + twig_get_attribute($this->env, $this->source, $context["prices"], "setup", [], "any", false, false, false, 37)));
                        echo "</span>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 39
                    echo "                    </div>
                    ";
                }
                // line 41
                echo "
                    ";
                // line 42
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 42), "type", [], "any", false, false, false, 42) === "once")) {
                    // line 43
                    echo "                        ";
                    echo twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 43), "once", [], "any", false, false, false, 43), "price", [], "any", false, false, false, 43) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 43), "once", [], "any", false, false, false, 43), "setup", [], "any", false, false, false, 43)));
                    echo "
                    ";
                }
                // line 45
                echo "
                    ";
                // line 46
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 46), "type", [], "any", false, false, false, 46) === "free")) {
                    // line 47
                    echo "                        ";
                    echo twig_money_convert($this->env, 0);
                    echo "
                    ";
                }
                // line 49
                echo "                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "        </tbody>
    </table>
</div>
<div class=\"block\" style=\"text-align: right; margin-bottom:10px;\">
    <button class=\"bb-button bb-button-submit bb-button-big\" type=\"submit\">";
            // line 56
            echo gettext("Order now");
            echo "</button>
</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partial_addons.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 56,  185 => 52,  177 => 49,  171 => 47,  169 => 46,  166 => 45,  160 => 43,  158 => 42,  155 => 41,  151 => 39,  140 => 37,  136 => 36,  131 => 35,  129 => 34,  125 => 32,  121 => 30,  115 => 29,  107 => 27,  104 => 26,  100 => 25,  93 => 24,  91 => 23,  85 => 20,  79 => 19,  71 => 16,  63 => 13,  59 => 12,  55 => 10,  51 => 9,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if product.addons|length > 0 %}
<div class=\"addons\" style=\"display: none;\">
<div class=\"widget\">
    <div class=\"head\">
        <h2 class=\"dark-icon i-services\">{% trans 'Addons & extras' %}</h2>
    </div>
    <table>
        <tbody>
            {% for addon in product.addons %}
            <tr>
                <td>
                    <input type=\"hidden\" name=\"addons[{{ addon.id }}][selected]\" value=\"0\">
                    <input type=\"checkbox\" name=\"addons[{{ addon.id }}][selected]\" value=\"1\" id=\"addon_{{ addon.id }}\">
                </td>
                <td>
                    <label for=\"addon_{{ addon.id }}\"><img src=\"{{ addon.icon_url }}\" alt=\"\" width=\"36\"/></label>
                </td>
                <td style=\"width: 50%\">
                    <label for=\"addon_{{ addon.id }}\"><h2>{{ addon.title }}</h2></label>
                    {{ addon.description|bbmd }}
                </td>
                <td>
                    {% if addon.pricing.type is same as('recurrent') %}
                    <select name=\"addons[{{ addon.id }}][period]\" class=\"addon-period-selector\" rel=\"addon-periods-{{ addon.id }}\">
                    {% for code,prices in addon.pricing.recurrent %}
                        {% if prices.enabled %}
                        <option value=\"{{code}}\">{{ periods[code] }}</option>
                        {% endif %}
                    {% endfor %}
                    </select>
                    {% endif %}
                </td>
                <td class=\"currency\" style=\"width: 20%\">
                    {% if addon.pricing.type is same as('recurrent') %}
                    <div id=\"addon-periods-{{ addon.id }}\">
                    {% for code,prices in addon.pricing.recurrent %}
                        <span class=\"{{code}}\">{{ (prices.price + prices.setup) | money_convert }}</span>
                    {% endfor %}
                    </div>
                    {% endif %}

                    {% if addon.pricing.type is same as('once') %}
                        {{ (addon.pricing.once.price + addon.pricing.once.setup) | money_convert }}
                    {% endif %}

                    {% if addon.pricing.type is same as('free') %}
                        {{ 0 | money_convert }}
                    {% endif %}
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
<div class=\"block\" style=\"text-align: right; margin-bottom:10px;\">
    <button class=\"bb-button bb-button-submit bb-button-big\" type=\"submit\">{% trans 'Order now' %}</button>
</div>
</div>
{% endif %}", "partial_addons.phtml", "/home/fendi/Documents/php-workspace/BoxBilling/bb-themes/boxbilling/html/partial_addons.phtml");
    }
}
