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

/* mod_servicehosting_order.phtml */
class __TwigTemplate_b5d7fdeea6405b7c0799cc2efc91be086bb66fa6dcd7b20798c07e1f35e61145 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'content_before' => [$this, 'block_content_before'],
            'content' => [$this, 'block_content'],
            'sidebar2' => [$this, 'block_sidebar2'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_servicehosting_order.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_servicehosting_order.phtml", 2)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $this->loadTemplate("partial_steps.phtml", "mod_servicehosting_order.phtml", 6)->display(twig_array_merge($context, ["selected" => 2]));
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
";
        // line 11
        $context["periods"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_periods", [], "any", false, false, false, 11);
        // line 12
        $context["pricing"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 12);
        // line 13
        echo "
<form method=\"post\" action=\"\" class=\"api_form\" data-api-url=\"guest/cart/add_item\" data-api-redirect=\"";
        // line 14
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("cart");
        echo "\">

    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"number\">2</span></div>
            <h2>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "</h2>
            <p>";
        // line 20
        echo gettext("Please configure domain for your hosting account");
        echo "</p>
            ";
        // line 22
        echo "        </div>
        <div class=\"block\">
            ";
        // line 34
        echo "            <div class=\"clear\"></div>
            <div class=\"grid_8 alpha\">
                <div class=\"widget simpleTabs tabsRight\" style=\"margin: 10px 0 10px 10px;\">
                    <div class=\"head\">
                        ";
        // line 39
        echo "                    </div>

                    <ul class=\"tabs\">
                        <li><a href=\"#owndomain\" rel=\"owndomain\"><span class=\"dark-icon\"></span>";
        // line 42
        echo gettext("Use own");
        echo "</a></li>
                        <li><a href=\"#register\" rel=\"register\"><span class=\"dark-icon\"></span>";
        // line 43
        echo gettext("Register");
        echo "</a></li>
                        <li><a href=\"#transfer\" rel=\"transfer\"><span class=\"dark-icon\"></span>";
        // line 44
        echo gettext("Transfer");
        echo "</a></li>
                    </ul>

                    <div class=\"tabs_container\">

                        <div class=\"tab_content\" id=\"owndomain\">
                            <fieldset>
                                <legend>";
        // line 51
        echo gettext("I will use my existing domain and update nameservers");
        echo "</legend>
                                <p>
                                    <input type=\"text\" name=\"domain[owndomain_sld]\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "owndomain_sld", [], "any", false, false, false, 53), "html", null, true);
        echo "\" style=\"width: 321px\" placeholder=\"";
        echo gettext("Enter your domain name");
        echo "\">
                                    <input type=\"text\" name=\"domain[owndomain_tld]\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "owndomain_tld", [], "any", true, true, false, 54)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "owndomain_tld", [], "any", false, false, false, 54), ".com")) : (".com")), "html", null, true);
        echo "\" style=\"width: 80px\">
                                </p>
                            </fieldset>
                        </div>

                        <div class=\"tab_content\" id=\"register\">
                            <fieldset>
                                <legend>";
        // line 61
        echo gettext("Register a new domain");
        echo "</legend>
                                <p>
                                    <input type=\"text\" name=\"domain[register_sld]\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "register_sld", [], "any", false, false, false, 63), "html", null, true);
        echo "\" style=\"width: 333px\" placeholder=\"";
        echo gettext("Enter your domain name");
        echo "\">
                               
                                        ";
        // line 65
        $context["tlds"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "serviceDomain_tlds", [0 => ["allow_register" => 1]], "method", false, false, false, 65);
        // line 66
        echo "                                    
                                    ";
        // line 67
        echo twig_call_macro($macros["mf"], "macro_selectboxtld", ["domain[register_tld]", ($context["tlds"] ?? null)], 67, $context, $this->getSourceContext());
        echo "
                                </p>

                                <button class=\"bb-button bb-button-big\" type=\"button\" id=\"domain-check\" style=\"float: right;\">";
        // line 70
        echo gettext("Check");
        echo "</button>
                            
                                <div id=\"domain-config\" style=\"display:none;\">
                                    <label>";
        // line 73
        echo gettext("Period");
        echo ":
                                    ";
        // line 74
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["domain[register_years]", []], 74, $context, $this->getSourceContext());
        echo "</label>
                                </div>
                            </fieldset>
                        </div>

                        <div class=\"tab_content\" id=\"transfer\">
                            <fieldset>
                                <legend>";
        // line 81
        echo gettext("Transfer your domain from another registrar");
        echo "</legend>
                                <p>
                                    <input type=\"text\" name=\"domain[transfer_sld]\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "transfer_sld", [], "any", false, false, false, 83), "html", null, true);
        echo "\"  style=\"width: 333px\" placeholder=\"";
        echo gettext("Enter your domain name");
        echo "\">
                                    ";
        // line 84
        echo twig_call_macro($macros["mf"], "macro_selectboxtld", ["domain[transfer_tld]", twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "serviceDomain_tlds", [0 => ["allow_transfer" => 1]], "method", false, false, false, 84)], 84, $context, $this->getSourceContext());
        echo "
                                </p>
                                
                                <button class=\"bb-button bb-button-big\" type=\"button\" id=\"transfer-check\" style=\"float: right;\">";
        // line 87
        echo gettext("Check");
        echo "</button>
                            
                                <div id=\"domain-transfer-config\" style=\"display:none;\">
                                    <p>";
        // line 90
        echo gettext("Transfer price");
        echo ": <span id=\"transfer-price\"></span></p>
                                    <input type=\"text\" name=\"domain[transfer_code]\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "transfer_code", [], "any", false, false, false, 91), "html", null, true);
        echo "\" style=\"width: 200px\" placeholder=\"";
        echo gettext("Enter domain transfer code");
        echo "\">
                                </div>

                            </fieldset>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"grid_4 omega\">
                ";
        // line 102
        $this->loadTemplate("partial_pricing.phtml", "mod_servicehosting_order.phtml", 102)->display(twig_array_merge($context, ["product" => ($context["product"] ?? null)]));
        // line 103
        echo "            </div>
            
            <div class=\"clear\"></div>
        </div>
    </div>

    ";
        // line 109
        $this->loadTemplate("partial_addons.phtml", "mod_servicehosting_order.phtml", 109)->display(twig_array_merge($context, ["product" => ($context["product"] ?? null)]));
        // line 110
        echo "    
    <input type=\"hidden\" name=\"domain[action]\" value=\"owndomain\" id=\"domain-action\"/>
    <input type=\"hidden\" name=\"id\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 112), "html", null, true);
        echo "\" />
</form>
";
    }

    // line 116
    public function block_sidebar2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 117
        echo "    ";
        $this->loadTemplate("partial_currency.phtml", "mod_servicehosting_order.phtml", 117)->display($context);
    }

    // line 120
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "
";
        // line 122
        $context["currency"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "cart_get_currency", [], "any", false, false, false, 122);
        // line 123
        echo "<script type=\"text/javascript\">
\$(function() {

    \$('ul.tabs li a').bind('click', function (){
        \$('#domain-action').val(\$(this).attr('rel'));

        \$(this).parents('ul').find('span.dark-icon')
            .removeClass('i-check i-uncheck')
            .addClass('i-uncheck');

        \$(this).find('span')
            .removeClass('i-uncheck')
            .addClass('i-check');
    });
    \$('ul.tabs li a:first').click();

    \$('#transfer-check').bind('click',function(event){
        var sld = \$('input[name=\"domain[transfer_sld]\"]').val();
        var tld = \$('select[name=\"domain[transfer_tld]\"]').val();
        var domain = sld + tld;
        bb.post(
            'guest/servicedomain/can_be_transferred',
            { sld: sld, tld: tld },
            function(result) {
                setTransferPricing(tld);
                \$('#domain-transfer-config').fadeIn('slow');
            }
        );
        return false;
    });

    \$('#domain-check').bind('click',function(event){
        var sld = \$('input[name=\"domain[register_sld]\"]').val();
        var tld = \$('select[name=\"domain[register_tld]\"]').val();
        var domain = sld + tld;
        bb.post(
            'guest/servicedomain/check',
            { sld: sld, tld: tld },
            function(result) {
                setRegistrationPricing(tld);
                \$('#domain-config').fadeIn('slow');
            }
        );
        return false;
    });

    if(\$(\".addons\").length && \$(\".addons\").is(':hidden')) {
        \$('#order-button').one('click', function(){
            \$(this).slideUp('fast');
            \$('.addons').slideDown('fast');
            return false;
        });
    }

    \$('#period-selector').change(function(){
        \$('.period').hide();
        \$('.period.' + \$(this).val()).show();
    }).trigger('change');

    \$('.addon-period-selector').change(function(){
        var r = \$(this).attr('rel');
        \$('#' + r + ' span').hide();
        \$('#' + r + ' span.' + \$(this).val()).fadeIn();
    }).trigger('change');

    function setRegistrationPricing(tld)
    {
        bb.post(
            'guest/servicedomain/pricing',
            { tld: tld },
            function(result) {
                var s = \$(\"select[name='domain[register_years]']\");
                s.find('option').remove();
                for (i=1;i<6;i++) {
                    var price = bb.currency(result.price_registration, ";
        // line 197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "conversion_rate", [], "any", false, false, false, 197), "html", null, true);
        echo ", \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "code", [], "any", false, false, false, 197), "html", null, true);
        echo "\", i);
                    s.append(new Option(i + \"";
        // line 198
        echo gettext(" Year/s @ ");
        echo "\" + price, i));
                }
            }
        );
    }

    function setTransferPricing(tld)
    {
        bb.post(
            'guest/servicedomain/pricing',
            { tld: tld },
            function(result) {
                var price = bb.currency(result.price_transfer, ";
        // line 210
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "conversion_rate", [], "any", false, false, false, 210), "html", null, true);
        echo ", \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "code", [], "any", false, false, false, 210), "html", null, true);
        echo "\");
                \$('#transfer-price').text(price);
            }
        );
    }
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_servicehosting_order.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 210,  360 => 198,  354 => 197,  278 => 123,  276 => 122,  273 => 121,  269 => 120,  264 => 117,  260 => 116,  253 => 112,  249 => 110,  247 => 109,  239 => 103,  237 => 102,  221 => 91,  217 => 90,  211 => 87,  205 => 84,  199 => 83,  194 => 81,  184 => 74,  180 => 73,  174 => 70,  168 => 67,  165 => 66,  163 => 65,  156 => 63,  151 => 61,  141 => 54,  135 => 53,  130 => 51,  120 => 44,  116 => 43,  112 => 42,  107 => 39,  101 => 34,  97 => 22,  93 => 20,  89 => 19,  81 => 14,  78 => 13,  76 => 12,  74 => 11,  71 => 10,  67 => 9,  63 => 6,  59 => 5,  52 => 3,  48 => 1,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{{product.title}}{% endblock %}

{% block content_before %}
{% include \"partial_steps.phtml\" with {'selected': 2} %}
{% endblock %}

{% block content %}

{% set periods = guest.system_periods %}
{% set pricing = product.pricing %}

<form method=\"post\" action=\"\" class=\"api_form\" data-api-url=\"guest/cart/add_item\" data-api-redirect=\"{{ 'cart'|link }}\">

    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"number\">2</span></div>
            <h2>{{ product.title }}</h2>
            <p>{% trans 'Please configure domain for your hosting account' %}</p>
            {#{ product.description|bbmd }#}
        </div>
        <div class=\"block\">
            {#
            <div class=\"grid_11 alpha omega\">
                <div class=\"box\">
                    <div class=\"block\">
                        <h2>{{ product.title }}</h2>
                        {{ product.description|bbmd }}
                    </div>
                </div>
            </div>
            #}
            <div class=\"clear\"></div>
            <div class=\"grid_8 alpha\">
                <div class=\"widget simpleTabs tabsRight\" style=\"margin: 10px 0 10px 10px;\">
                    <div class=\"head\">
                        {#<h2 class=\"dark-icon i-services\">{% trans 'Domain configuration' %}</h2>#}
                    </div>

                    <ul class=\"tabs\">
                        <li><a href=\"#owndomain\" rel=\"owndomain\"><span class=\"dark-icon\"></span>{% trans 'Use own' %}</a></li>
                        <li><a href=\"#register\" rel=\"register\"><span class=\"dark-icon\"></span>{% trans 'Register' %}</a></li>
                        <li><a href=\"#transfer\" rel=\"transfer\"><span class=\"dark-icon\"></span>{% trans 'Transfer' %}</a></li>
                    </ul>

                    <div class=\"tabs_container\">

                        <div class=\"tab_content\" id=\"owndomain\">
                            <fieldset>
                                <legend>{% trans 'I will use my existing domain and update nameservers' %}</legend>
                                <p>
                                    <input type=\"text\" name=\"domain[owndomain_sld]\" value=\"{{ request.owndomain_sld }}\" style=\"width: 321px\" placeholder=\"{% trans 'Enter your domain name' %}\">
                                    <input type=\"text\" name=\"domain[owndomain_tld]\" value=\"{{ request.owndomain_tld|default('.com') }}\" style=\"width: 80px\">
                                </p>
                            </fieldset>
                        </div>

                        <div class=\"tab_content\" id=\"register\">
                            <fieldset>
                                <legend>{% trans 'Register a new domain' %}</legend>
                                <p>
                                    <input type=\"text\" name=\"domain[register_sld]\" value=\"{{ request.register_sld }}\" style=\"width: 333px\" placeholder=\"{% trans 'Enter your domain name' %}\">
                               
                                        {% set tlds = guest.serviceDomain_tlds({\"allow_register\":1})%}
                                    
                                    {{ mf.selectboxtld('domain[register_tld]', tlds)}}
                                </p>

                                <button class=\"bb-button bb-button-big\" type=\"button\" id=\"domain-check\" style=\"float: right;\">{% trans 'Check' %}</button>
                            
                                <div id=\"domain-config\" style=\"display:none;\">
                                    <label>{% trans 'Period' %}:
                                    {{ mf.selectbox('domain[register_years]', {}) }}</label>
                                </div>
                            </fieldset>
                        </div>

                        <div class=\"tab_content\" id=\"transfer\">
                            <fieldset>
                                <legend>{% trans 'Transfer your domain from another registrar' %}</legend>
                                <p>
                                    <input type=\"text\" name=\"domain[transfer_sld]\" value=\"{{ request.transfer_sld }}\"  style=\"width: 333px\" placeholder=\"{% trans 'Enter your domain name' %}\">
                                    {{ mf.selectboxtld('domain[transfer_tld]', guest.serviceDomain_tlds({\"allow_transfer\":1})) }}
                                </p>
                                
                                <button class=\"bb-button bb-button-big\" type=\"button\" id=\"transfer-check\" style=\"float: right;\">{% trans 'Check' %}</button>
                            
                                <div id=\"domain-transfer-config\" style=\"display:none;\">
                                    <p>{% trans 'Transfer price'%}: <span id=\"transfer-price\"></span></p>
                                    <input type=\"text\" name=\"domain[transfer_code]\" value=\"{{ request.transfer_code }}\" style=\"width: 200px\" placeholder=\"{% trans 'Enter domain transfer code' %}\">
                                </div>

                            </fieldset>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"grid_4 omega\">
                {% include 'partial_pricing.phtml' with {'product': product} %}
            </div>
            
            <div class=\"clear\"></div>
        </div>
    </div>

    {% include 'partial_addons.phtml' with {'product': product} %}
    
    <input type=\"hidden\" name=\"domain[action]\" value=\"owndomain\" id=\"domain-action\"/>
    <input type=\"hidden\" name=\"id\" value=\"{{ product.id }}\" />
</form>
{% endblock %}

{% block sidebar2 %}
    {% include 'partial_currency.phtml' %}
{% endblock %}

{% block js %}

{% set currency = guest.cart_get_currency %}
<script type=\"text/javascript\">
\$(function() {

    \$('ul.tabs li a').bind('click', function (){
        \$('#domain-action').val(\$(this).attr('rel'));

        \$(this).parents('ul').find('span.dark-icon')
            .removeClass('i-check i-uncheck')
            .addClass('i-uncheck');

        \$(this).find('span')
            .removeClass('i-uncheck')
            .addClass('i-check');
    });
    \$('ul.tabs li a:first').click();

    \$('#transfer-check').bind('click',function(event){
        var sld = \$('input[name=\"domain[transfer_sld]\"]').val();
        var tld = \$('select[name=\"domain[transfer_tld]\"]').val();
        var domain = sld + tld;
        bb.post(
            'guest/servicedomain/can_be_transferred',
            { sld: sld, tld: tld },
            function(result) {
                setTransferPricing(tld);
                \$('#domain-transfer-config').fadeIn('slow');
            }
        );
        return false;
    });

    \$('#domain-check').bind('click',function(event){
        var sld = \$('input[name=\"domain[register_sld]\"]').val();
        var tld = \$('select[name=\"domain[register_tld]\"]').val();
        var domain = sld + tld;
        bb.post(
            'guest/servicedomain/check',
            { sld: sld, tld: tld },
            function(result) {
                setRegistrationPricing(tld);
                \$('#domain-config').fadeIn('slow');
            }
        );
        return false;
    });

    if(\$(\".addons\").length && \$(\".addons\").is(':hidden')) {
        \$('#order-button').one('click', function(){
            \$(this).slideUp('fast');
            \$('.addons').slideDown('fast');
            return false;
        });
    }

    \$('#period-selector').change(function(){
        \$('.period').hide();
        \$('.period.' + \$(this).val()).show();
    }).trigger('change');

    \$('.addon-period-selector').change(function(){
        var r = \$(this).attr('rel');
        \$('#' + r + ' span').hide();
        \$('#' + r + ' span.' + \$(this).val()).fadeIn();
    }).trigger('change');

    function setRegistrationPricing(tld)
    {
        bb.post(
            'guest/servicedomain/pricing',
            { tld: tld },
            function(result) {
                var s = \$(\"select[name='domain[register_years]']\");
                s.find('option').remove();
                for (i=1;i<6;i++) {
                    var price = bb.currency(result.price_registration, {{ currency.conversion_rate }}, \"{{ currency.code }}\", i);
                    s.append(new Option(i + \"{% trans ' Year/s @ ' %}\" + price, i));
                }
            }
        );
    }

    function setTransferPricing(tld)
    {
        bb.post(
            'guest/servicedomain/pricing',
            { tld: tld },
            function(result) {
                var price = bb.currency(result.price_transfer, {{ currency.conversion_rate }}, \"{{ currency.code }}\");
                \$('#transfer-price').text(price);
            }
        );
    }
});
</script>
{% endblock %}", "mod_servicehosting_order.phtml", "/home/fendi/Documents/php-workspace/BoxBilling/bb-themes/boxbilling/html/mod_servicehosting_order.phtml");
    }
}
