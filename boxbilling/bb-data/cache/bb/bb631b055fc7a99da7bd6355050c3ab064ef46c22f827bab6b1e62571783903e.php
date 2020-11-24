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

/* partial_pricing.phtml */
class __TwigTemplate_1c9aa15dda1207ef391b00a8c200c8633885f7e03c35474538db2cc56dc4917a extends \Twig\Template
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
        echo "<div class=\"box\">
    <div class=\"block pricing\">

        <div class=\"total\">
            ";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, ($context["pricing"] ?? null), "type", [], "any", false, false, false, 5) == "free")) {
            // line 6
            echo "            
                ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "allow_quantity_select", [], "any", false, false, false, 7)) {
                // line 8
                echo "                    <label>";
                echo gettext("Quantity:");
                // line 9
                echo "                        <input type=\"text\" name=\"quantity\" value=\"1\" style=\"width:30px;\"/>
                    </label>
                    <hr/>
                ";
            }
            // line 13
            echo "                
                <p>";
            // line 14
            echo gettext("Total price:");
            echo "</p>
                <div class=\"currency\">";
            // line 15
            echo twig_money_convert($this->env, 0);
            echo "</div>
            ";
        }
        // line 17
        echo "
            ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, ($context["pricing"] ?? null), "type", [], "any", false, false, false, 18) == "once")) {
            // line 19
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "allow_quantity_select", [], "any", false, false, false, 19)) {
                // line 20
                echo "                    <label>";
                echo gettext("Quantity:");
                // line 21
                echo "                        <input type=\"text\" name=\"quantity\" value=\"1\" style=\"width:30px;\"/>
                    </label>
                    <hr/>
                ";
            }
            // line 25
            echo "
                <p>";
            // line 26
            echo gettext("Total price:");
            echo "</p>
                <div class=\"currency\">";
            // line 27
            echo twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pricing"] ?? null), "once", [], "any", false, false, false, 27), "price", [], "any", false, false, false, 27) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pricing"] ?? null), "once", [], "any", false, false, false, 27), "setup", [], "any", false, false, false, 27)));
            echo "</div>
            ";
        }
        // line 29
        echo "

        ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, ($context["pricing"] ?? null), "type", [], "any", false, false, false, 31) == "recurrent")) {
            // line 32
            echo "        
        ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "allow_quantity_select", [], "any", false, false, false, 33)) {
                // line 34
                echo "            <label>";
                echo gettext("Quantity:");
                // line 35
                echo "                <input type=\"text\" name=\"quantity\" value=\"1\" style=\"width:30px;\"/>
            </label>
            <hr/>
        ";
            }
            // line 39
            echo "                
        <select name=\"period\" id=\"period-selector\">
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pricing"] ?? null), "recurrent", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                // line 42
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["prices"], "enabled", [], "any", false, false, false, 42)) {
                    // line 43
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo "\"";
                    if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "period", [], "any", false, false, false, 43) == $context["code"])) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["periods"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["code"]] ?? null) : null), "html", null, true);
                    echo "</option>
            ";
                }
                // line 45
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "        </select>

        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pricing"] ?? null), "recurrent", [], "any", false, false, false, 48));
            foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                // line 49
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["prices"], "enabled", [], "any", false, false, false, 49)) {
                    // line 50
                    echo "        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["prices"], "setup", [], "any", false, false, false, 50) > 0)) {
                        // line 51
                        echo "        <div class=\"period ";
                        echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                        echo "\" style=\"display: none;\">
            <table>
                <tr>
                    <td>";
                        // line 54
                        echo gettext("Price");
                        echo "</td>
                    <td>";
                        // line 55
                        echo twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["prices"], "price", [], "any", false, false, false, 55));
                        echo "</td>
                </tr>
                <tr>
                    <td>";
                        // line 58
                        echo gettext("Setup Price");
                        echo "</td>
                    <td>";
                        // line 59
                        echo twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["prices"], "setup", [], "any", false, false, false, 59));
                        echo "</td>
                </tr>
            </table>
        </div>
        ";
                    }
                    // line 64
                    echo "        ";
                }
                // line 65
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "
        <hr/>
        <p>";
            // line 69
            echo gettext("Total price:");
            echo "</p>
        ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pricing"] ?? null), "recurrent", [], "any", false, false, false, 70));
            foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                // line 71
                echo "        <div class=\"currency period ";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\">";
                echo twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, $context["prices"], "price", [], "any", false, false, false, 71) + twig_get_attribute($this->env, $this->source, $context["prices"], "setup", [], "any", false, false, false, 71)));
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "        
        ";
        }
        // line 75
        echo "        </div>

        ";
        // line 77
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "addons", [], "any", false, false, false, 77)) > 0)) {
            // line 78
            echo "        <button class=\"bb-button bb-button-submit bb-button-big\" type=\"submit\" id=\"order-button\">";
            echo gettext("Continue");
            echo "</button>
        ";
        } else {
            // line 80
            echo "        <button class=\"bb-button bb-button-submit bb-button-big\" type=\"submit\" id=\"order-button\">";
            echo gettext("Order now");
            echo "</button>
        ";
        }
        // line 82
        echo "        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "partial_pricing.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 82,  241 => 80,  235 => 78,  233 => 77,  229 => 75,  225 => 73,  214 => 71,  210 => 70,  206 => 69,  202 => 67,  195 => 65,  192 => 64,  184 => 59,  180 => 58,  174 => 55,  170 => 54,  163 => 51,  160 => 50,  157 => 49,  153 => 48,  149 => 46,  143 => 45,  131 => 43,  128 => 42,  124 => 41,  120 => 39,  114 => 35,  111 => 34,  109 => 33,  106 => 32,  104 => 31,  100 => 29,  95 => 27,  91 => 26,  88 => 25,  82 => 21,  79 => 20,  76 => 19,  74 => 18,  71 => 17,  66 => 15,  62 => 14,  59 => 13,  53 => 9,  50 => 8,  48 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"box\">
    <div class=\"block pricing\">

        <div class=\"total\">
            {% if pricing.type == 'free' %}
            
                {% if product.allow_quantity_select %}
                    <label>{% trans 'Quantity:' %}
                        <input type=\"text\" name=\"quantity\" value=\"1\" style=\"width:30px;\"/>
                    </label>
                    <hr/>
                {% endif %}
                
                <p>{% trans 'Total price:' %}</p>
                <div class=\"currency\">{{ 0 | money_convert }}</div>
            {% endif %}

            {% if pricing.type == 'once'  %}
                {% if product.allow_quantity_select %}
                    <label>{% trans 'Quantity:' %}
                        <input type=\"text\" name=\"quantity\" value=\"1\" style=\"width:30px;\"/>
                    </label>
                    <hr/>
                {% endif %}

                <p>{% trans 'Total price:' %}</p>
                <div class=\"currency\">{{ (pricing.once.price + pricing.once.setup) | money_convert }}</div>
            {% endif %}


        {% if pricing.type == 'recurrent'  %}
        
        {% if product.allow_quantity_select %}
            <label>{% trans 'Quantity:' %}
                <input type=\"text\" name=\"quantity\" value=\"1\" style=\"width:30px;\"/>
            </label>
            <hr/>
        {% endif %}
                
        <select name=\"period\" id=\"period-selector\">
        {% for code,prices in pricing.recurrent %}
            {% if prices.enabled %}
            <option value=\"{{code}}\"{% if request.period == code %} selected=\"selected\"{% endif %}>{{ periods[code] }}</option>
            {% endif %}
        {% endfor %}
        </select>

        {% for code,prices in pricing.recurrent %}
        {% if prices.enabled %}
        {% if prices.setup > 0 %}
        <div class=\"period {{code}}\" style=\"display: none;\">
            <table>
                <tr>
                    <td>{% trans 'Price' %}</td>
                    <td>{{ prices.price | money_convert }}</td>
                </tr>
                <tr>
                    <td>{% trans 'Setup Price' %}</td>
                    <td>{{ prices.setup | money_convert }}</td>
                </tr>
            </table>
        </div>
        {% endif %}
        {% endif %}

        {% endfor %}

        <hr/>
        <p>{% trans 'Total price:' %}</p>
        {% for code,prices in pricing.recurrent %}
        <div class=\"currency period {{code}}\">{{ (prices.price + prices.setup) | money_convert }}</div>
        {% endfor %}
        
        {% endif %}
        </div>

        {% if product.addons|length > 0 %}
        <button class=\"bb-button bb-button-submit bb-button-big\" type=\"submit\" id=\"order-button\">{% trans 'Continue' %}</button>
        {% else %}
        <button class=\"bb-button bb-button-submit bb-button-big\" type=\"submit\" id=\"order-button\">{% trans 'Order now' %}</button>
        {% endif %}
        </div>
    </div>", "partial_pricing.phtml", "/home/fendi/Documents/php-workspace/BoxBilling/bb-themes/boxbilling/html/partial_pricing.phtml");
    }
}
