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

/* mod_servicecustom_config.phtml */
class __TwigTemplate_6601b44fcfe90617d55c5e7cb795bf2803540d784e04ddb12a93d1bb9e0eccf7 extends \Twig\Template
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
        echo "<div class=\"help\">
    <h5>";
        // line 2
        echo gettext("Stock control settings");
        echo "</h5>
</div>

<form method=\"post\" action=\"";
        // line 5
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/product/update");
        echo "\" class=\"mainForm api-form save\" data-api-msg=\"Settings updated\">
<fieldset>
    <div class=\"rowElem noborder\">
        <label>";
        // line 8
        echo gettext("Enable stock control");
        echo ":</label>
        <div class=\"formRight\">
            <input type=\"radio\" name=\"stock_control\" value=\"1\"";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "stock_control", [], "any", false, false, false, 10)) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Yes</label>
            <input type=\"radio\" name=\"stock_control\" value=\"0\"";
        // line 11
        if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "stock_control", [], "any", false, false, false, 11)) {
            echo " checked=\"checked\"";
        }
        echo " /><label>No</label>
        </div>
        <div class=\"fix\"></div>
    </div>
    
    <div class=\"rowElem\">
        <label>";
        // line 17
        echo gettext("Allow quantity select on order form");
        echo ":</label>
        <div class=\"formRight\">
            <input type=\"radio\" name=\"allow_quantity_select\" value=\"1\"";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "allow_quantity_select", [], "any", false, false, false, 19)) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Yes</label>
            <input type=\"radio\" name=\"allow_quantity_select\" value=\"0\"";
        // line 20
        if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "allow_quantity_select", [], "any", false, false, false, 20)) {
            echo " checked=\"checked\"";
        }
        echo " /><label>No</label>
        </div>
        <div class=\"fix\"></div>
    </div>

    <div class=\"rowElem\">
        <label>";
        // line 26
        echo gettext("Quantity in stock");
        echo ":</label>
        <div class=\"formRight\">
            <input type=\"text\" name=\"quantity_in_stock\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "quantity_in_stock", [], "any", false, false, false, 28), "html", null, true);
        echo "\">
        </div>
        <div class=\"fix\"></div>
    </div>
    
    <input type=\"submit\" value=\"";
        // line 33
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
</fieldset>
    
<input type=\"hidden\" name=\"id\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 36), "html", null, true);
        echo "\" />
</form>

<div class=\"help\">
    <h5>";
        // line 40
        echo gettext("Plugin");
        echo "</h5>
</div>

<form method=\"post\" action=\"";
        // line 43
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/product/update");
        echo "\" class=\"mainForm api-form save\" data-api-msg=\"Settings updated\">
<fieldset>
    <div class=\"rowElem noborder\">
        <label>";
        // line 46
        echo gettext("Plugin name");
        echo ":</label>
        <div class=\"formRight\">
            <input type=\"text\" name=\"plugin\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "plugin", [], "any", false, false, false, 48), "html", null, true);
        echo "\"/>
        </div>
        <div class=\"fix\"></div>
    </div>
    
    <input type=\"submit\" value=\"";
        // line 53
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
</fieldset>
    
<input type=\"hidden\" name=\"id\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 56), "html", null, true);
        echo "\" />
</form>

<form method=\"post\" action=\"";
        // line 59
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/product/update_config");
        echo "\" class=\"mainForm save api-form\" data-api-reload=\"1\">
    <fieldset>
        <legend>Custom parameters</legend>
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 62));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 63
            echo "        <div class=\"rowElem\">
            <label>";
            // line 64
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo ":</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"config[";
            // line 66
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "\">
            </div>
            <div class=\"fix\"></div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    </fieldset>
    
    <fieldset>
        <legend>Add custom parameter</legend>
        <div class=\"rowElem\">
            <label>Parameter name:</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"new_config_name\">
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>Parameter value:</label>
            <div class=\"formRight noborder\">
                <textarea rows=\"7\" cols=\"\" name=\"new_config_value\"></textarea>
            </div>
            <div class=\"fix\"></div>
        </div>
        <input type=\"submit\" value=\"";
        // line 90
        echo gettext("Update configuration fields");
        echo "\" class=\"greyishBtn submitForm\" />
        <div class=\"fix\"></div>
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 92), "html", null, true);
        echo "\"/>
    </fieldset>
</form>";
    }

    public function getTemplateName()
    {
        return "mod_servicecustom_config.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 92,  211 => 90,  190 => 71,  177 => 66,  172 => 64,  169 => 63,  165 => 62,  159 => 59,  153 => 56,  147 => 53,  139 => 48,  134 => 46,  128 => 43,  122 => 40,  115 => 36,  109 => 33,  101 => 28,  96 => 26,  85 => 20,  79 => 19,  74 => 17,  63 => 11,  57 => 10,  52 => 8,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"help\">
    <h5>{% trans 'Stock control settings' %}</h5>
</div>

<form method=\"post\" action=\"{{ 'api/admin/product/update'|link }}\" class=\"mainForm api-form save\" data-api-msg=\"Settings updated\">
<fieldset>
    <div class=\"rowElem noborder\">
        <label>{% trans 'Enable stock control' %}:</label>
        <div class=\"formRight\">
            <input type=\"radio\" name=\"stock_control\" value=\"1\"{% if product.stock_control %} checked=\"checked\"{% endif %}/><label>Yes</label>
            <input type=\"radio\" name=\"stock_control\" value=\"0\"{% if not product.stock_control %} checked=\"checked\"{% endif %} /><label>No</label>
        </div>
        <div class=\"fix\"></div>
    </div>
    
    <div class=\"rowElem\">
        <label>{% trans 'Allow quantity select on order form' %}:</label>
        <div class=\"formRight\">
            <input type=\"radio\" name=\"allow_quantity_select\" value=\"1\"{% if product.allow_quantity_select %} checked=\"checked\"{% endif %}/><label>Yes</label>
            <input type=\"radio\" name=\"allow_quantity_select\" value=\"0\"{% if not product.allow_quantity_select %} checked=\"checked\"{% endif %} /><label>No</label>
        </div>
        <div class=\"fix\"></div>
    </div>

    <div class=\"rowElem\">
        <label>{% trans 'Quantity in stock' %}:</label>
        <div class=\"formRight\">
            <input type=\"text\" name=\"quantity_in_stock\" value=\"{{ product.quantity_in_stock }}\">
        </div>
        <div class=\"fix\"></div>
    </div>
    
    <input type=\"submit\" value=\"{% trans 'Update' %}\" class=\"greyishBtn submitForm\" />
</fieldset>
    
<input type=\"hidden\" name=\"id\" value=\"{{ product.id }}\" />
</form>

<div class=\"help\">
    <h5>{% trans 'Plugin' %}</h5>
</div>

<form method=\"post\" action=\"{{ 'api/admin/product/update'|link }}\" class=\"mainForm api-form save\" data-api-msg=\"Settings updated\">
<fieldset>
    <div class=\"rowElem noborder\">
        <label>{% trans 'Plugin name' %}:</label>
        <div class=\"formRight\">
            <input type=\"text\" name=\"plugin\" value=\"{{ product.plugin }}\"/>
        </div>
        <div class=\"fix\"></div>
    </div>
    
    <input type=\"submit\" value=\"{% trans 'Update' %}\" class=\"greyishBtn submitForm\" />
</fieldset>
    
<input type=\"hidden\" name=\"id\" value=\"{{ product.id }}\" />
</form>

<form method=\"post\" action=\"{{ 'api/admin/product/update_config'|link }}\" class=\"mainForm save api-form\" data-api-reload=\"1\">
    <fieldset>
        <legend>Custom parameters</legend>
        {% for k,v in product.config %}
        <div class=\"rowElem\">
            <label>{{k}}:</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"config[{{k}}]\" value=\"{{v}}\">
            </div>
            <div class=\"fix\"></div>
        </div>
        {% endfor %}
    </fieldset>
    
    <fieldset>
        <legend>Add custom parameter</legend>
        <div class=\"rowElem\">
            <label>Parameter name:</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"new_config_name\">
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>Parameter value:</label>
            <div class=\"formRight noborder\">
                <textarea rows=\"7\" cols=\"\" name=\"new_config_value\"></textarea>
            </div>
            <div class=\"fix\"></div>
        </div>
        <input type=\"submit\" value=\"{% trans 'Update configuration fields' %}\" class=\"greyishBtn submitForm\" />
        <div class=\"fix\"></div>
        <input type=\"hidden\" name=\"id\" value=\"{{ product.id }}\"/>
    </fieldset>
</form>", "mod_servicecustom_config.phtml", "/home/fendi/Documents/php-workspace/BoxBilling/bb-themes/admin_default/html/mod_servicecustom_config.phtml");
    }
}
