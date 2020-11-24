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

/* mod_servicedomain_order.phtml */
class __TwigTemplate_3866765f347f81ea92ec512b4517950861f39e004788ec2bdabe07b8704b1921 extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_servicedomain_order.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_servicedomain_order.phtml", 3)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Register new domain");
    }

    // line 7
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        $this->loadTemplate("partial_steps.phtml", "mod_servicedomain_order.phtml", 8)->display(twig_array_merge($context, ["selected" => 2]));
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
";
        // line 13
        $context["periods"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_periods", [], "any", false, false, false, 13);
        // line 14
        $context["pricing"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 14);
        // line 15
        echo "
<form method=\"post\" action=\"\" class=\"api_form\" data-api-url=\"guest/cart/add_item\" data-api-redirect=\"";
        // line 16
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("cart");
        echo "\">
    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"number\">2</span></div>
            <h2>";
        // line 20
        echo gettext("Configure");
        echo "</h2>
            <p>";
        // line 21
        echo gettext("The product/service you have chosen has the following configuration options for you to choose from.");
        echo "</p>
        </div>
        <div class=\"block conversation\">
    
            <div class=\"widget simpleTabs tabsRight first\">
                <div class=\"head\">
                    ";
        // line 28
        echo "                </div>

                <ul class=\"tabs\">
                    <li><a href=\"#register\" rel=\"register\"><span class=\"dark-icon\"></span>";
        // line 31
        echo gettext("Register new domain");
        echo "</a></li>
                    <li><a href=\"#transfer\" rel=\"transfer\"><span class=\"dark-icon\"></span>";
        // line 32
        echo gettext("Transfer my domain");
        echo "</a></li>
                </ul>

                <div class=\"tabs_container\" style=\"margin-top: 20px\">

                    <div class=\"tab_content\" id=\"register\">

                        <fieldset>
                            <legend>";
        // line 40
        echo gettext("Check domain availability");
        echo "</legend>
                            <p>
                                <input type=\"text\" name=\"register_sld\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "register_sld", [], "any", false, false, false, 42), "html", null, true);
        echo "\" style=\"width: 583px\" placeholder=\"";
        echo gettext("Enter new domain name to register");
        echo "\">
                                ";
        // line 43
        echo twig_call_macro($macros["mf"], "macro_selectboxtld", ["register_tld", twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "serviceDomain_tlds", [0 => ["allow_register" => 1]], "method", false, false, false, 43)], 43, $context, $this->getSourceContext());
        echo "
                            </p>
                            <button class=\"bb-button bb-button-big\" id=\"domain-check\" style=\"float: right;\">";
        // line 45
        echo gettext("Check");
        echo "</button>
                            <button class=\"bb-button bb-button-submit bb-button-big order-button\" type=\"submit\" style=\"float: right; display: none;\">";
        // line 46
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "addons", [], "any", false, false, false, 46)) > 0)) {
            echo gettext("Continue");
        } else {
            echo gettext("Order now");
        }
        echo "</button>

                            <div class=\"onAfterDomainCheck\" style=\"display:none;\">
                                <label>
                                    <select name=\"register_years\" id=\"registration-years\"></select>
                                </label>
                                <br/>
                                <label><input type=\"checkbox\" onclick=\"\$('#nameservers').slideToggle();\">";
        // line 53
        echo gettext("I want to use my nameservers");
        echo "</label>
                                <div id=\"nameservers\" style=\"display:none; margin: 10px 0;\">
                                    <p><input type=\"text\" name=\"ns1\" value=\"\" placeholder=\"";
        // line 55
        echo gettext("Nameserver 1");
        echo "\"></p>
                                    <p><input type=\"text\" name=\"ns2\" value=\"\" placeholder=\"";
        // line 56
        echo gettext("Nameserver 2");
        echo "\"></p>
                                    <p><input type=\"text\" name=\"ns3\" value=\"\" placeholder=\"";
        // line 57
        echo gettext("Nameserver 3");
        echo "\"></p>
                                    <p><input type=\"text\" name=\"ns4\" value=\"\" placeholder=\"";
        // line 58
        echo gettext("Nameserver 4");
        echo "\"></p>
                                </div>

                            </div>

                        </fieldset>
                    </div>

                    <div class=\"tab_content\" id=\"transfer\">
                        <fieldset>
                            <p>
                                <input type=\"text\" name=\"transfer_sld\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "transfer_sld", [], "any", false, false, false, 69), "html", null, true);
        echo "\"  style=\"width: 583px\" placeholder=\"";
        echo gettext("Enter your domain name to transfer");
        echo "\">
                                ";
        // line 70
        echo twig_call_macro($macros["mf"], "macro_selectboxtld", ["transfer_tld", twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "serviceDomain_tlds", [0 => ["allow_transfer" => 1]], "method", false, false, false, 70)], 70, $context, $this->getSourceContext());
        echo "
                            </p>

                            <button class=\"bb-button bb-button-big\" type=\"button\" id=\"transfer-check\" style=\"float: right;\">";
        // line 73
        echo gettext("Check");
        echo "</button>
                            <button class=\"bb-button bb-button-submit bb-button-big order-button\" type=\"submit\" style=\"float: right; display: none;\">";
        // line 74
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "addons", [], "any", false, false, false, 74)) > 0)) {
            echo gettext("Continue");
        } else {
            echo gettext("Order now");
        }
        echo "</button>

                            <div id=\"domain-transfer-config\" style=\"display:none;\">
                                <p>";
        // line 77
        echo gettext("Transfer price");
        echo ": <span id=\"transfer-price\"></span></p>
                                <input type=\"text\" name=\"transfer_code\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "transfer_code", [], "any", false, false, false, 78), "html", null, true);
        echo "\" style=\"width: 200px\" placeholder=\"";
        echo gettext("Enter domain transfer code");
        echo "\">
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class=\"clear\"></div>
            </div>

        </div>
        <div class=\"clear\"></div>
    </div>
    <div class=\"clear\"></div>
    ";
        // line 90
        $this->loadTemplate("partial_addons.phtml", "mod_servicedomain_order.phtml", 90)->display(twig_array_merge($context, ["product" => ($context["product"] ?? null)]));
        // line 91
        echo "    
<input type=\"hidden\" name=\"id\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 92), "html", null, true);
        echo "\" />
<input type=\"hidden\" name=\"action\" value=\"register\" id=\"domain-action\"/>
</form>
";
    }

    // line 97
    public function block_sidebar2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "    ";
        $this->loadTemplate("partial_currency.phtml", "mod_servicedomain_order.phtml", 98)->display($context);
    }

    // line 101
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        $context["currency"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "cart_get_currency", [], "any", false, false, false, 102);
        // line 103
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

    if(\$(\".addons\").length) {
        \$('.order-button').one('click', function(){
            \$(this).hide();
            \$('.addons').slideDown('fast');
            return false;
        });
    }

    \$('.addon-period-selector').change(function(){
        var r = \$(this).attr('rel');
        \$('#' + r + ' span').hide();
        \$('#' + r + ' span.' + \$(this).val()).fadeIn();
    }).trigger('change');

    \$('#transfer-check').bind('click',function(event){
        var sld = \$('input[name=\"transfer_sld\"]').val();
        var tld = \$('select[name=\"transfer_tld\"]').val();
        var domain = sld + tld;
        bb.post(
            'guest/servicedomain/can_be_transferred',
            { sld: sld, tld: tld },
            function(result) {
                setTransferPricing(tld);
                \$('#domain-name').text(domain);
                \$('#domain-transfer-config').fadeIn('fast');
                \$('.onAfterDomainCheck').fadeIn('fast');
                \$('#transfer-check').hide();
                \$('#transfer .order-button').show();
            }
        );
        return false;
    });

    \$('#domain-check').bind('click',function(event){
        var sld = \$('input[name=\"register_sld\"]').val();
        var tld = \$('select[name=\"register_tld\"]').val();
        var domain = sld + tld;
        bb.post(
            'guest/servicedomain/check',
            { sld: sld, tld: tld },
            function(result) {
                setPricing(tld);
                \$('#domain-name').text(domain);
                \$('.onAfterDomainCheck').fadeIn('fast');
                \$('#domain-check').hide();
                \$('#register .order-button').show();
            }
        );
        return false;
    });

    function setPricing(tld)
    {
        bb.post(
            'guest/servicedomain/pricing',
            { tld: tld },
            function(result) {
                var s = \$(\"#registration-years\");
                s.find('option').remove();
                for (i=1;i<6;i++) {
                    var price = bb.currency(result.price_registration, ";
        // line 179
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "conversion_rate", [], "any", false, false, false, 179), "html", null, true);
        echo ", \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "code", [], "any", false, false, false, 179), "html", null, true);
        echo "\", i);
                    s.append(new Option(i + \"";
        // line 180
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
        // line 192
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "conversion_rate", [], "any", false, false, false, 192), "html", null, true);
        echo ", \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "code", [], "any", false, false, false, 192), "html", null, true);
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
        return "mod_servicedomain_order.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 192,  345 => 180,  339 => 179,  261 => 103,  259 => 102,  255 => 101,  250 => 98,  246 => 97,  238 => 92,  235 => 91,  233 => 90,  216 => 78,  212 => 77,  202 => 74,  198 => 73,  192 => 70,  186 => 69,  172 => 58,  168 => 57,  164 => 56,  160 => 55,  155 => 53,  141 => 46,  137 => 45,  132 => 43,  126 => 42,  121 => 40,  110 => 32,  106 => 31,  101 => 28,  92 => 21,  88 => 20,  81 => 16,  78 => 15,  76 => 14,  74 => 13,  71 => 12,  67 => 11,  63 => 8,  59 => 7,  52 => 5,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}

{% import \"macro_functions.phtml\" as mf %}

{% block meta_title %}{% trans 'Register new domain' %}{% endblock %}

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
            <h2>{% trans 'Configure' %}</h2>
            <p>{% trans 'The product/service you have chosen has the following configuration options for you to choose from.' %}</p>
        </div>
        <div class=\"block conversation\">
    
            <div class=\"widget simpleTabs tabsRight first\">
                <div class=\"head\">
                    {#<h2 class=\"dark-icon i-services\">{% trans 'Domain configuration' %}</h2>#}
                </div>

                <ul class=\"tabs\">
                    <li><a href=\"#register\" rel=\"register\"><span class=\"dark-icon\"></span>{% trans 'Register new domain' %}</a></li>
                    <li><a href=\"#transfer\" rel=\"transfer\"><span class=\"dark-icon\"></span>{% trans 'Transfer my domain' %}</a></li>
                </ul>

                <div class=\"tabs_container\" style=\"margin-top: 20px\">

                    <div class=\"tab_content\" id=\"register\">

                        <fieldset>
                            <legend>{% trans 'Check domain availability' %}</legend>
                            <p>
                                <input type=\"text\" name=\"register_sld\" value=\"{{ request.register_sld }}\" style=\"width: 583px\" placeholder=\"{% trans 'Enter new domain name to register' %}\">
                                {{ mf.selectboxtld('register_tld', guest.serviceDomain_tlds({\"allow_register\":1})) }}
                            </p>
                            <button class=\"bb-button bb-button-big\" id=\"domain-check\" style=\"float: right;\">{% trans 'Check' %}</button>
                            <button class=\"bb-button bb-button-submit bb-button-big order-button\" type=\"submit\" style=\"float: right; display: none;\">{% if product.addons|length > 0 %}{% trans 'Continue' %}{% else %}{% trans 'Order now' %}{% endif %}</button>

                            <div class=\"onAfterDomainCheck\" style=\"display:none;\">
                                <label>
                                    <select name=\"register_years\" id=\"registration-years\"></select>
                                </label>
                                <br/>
                                <label><input type=\"checkbox\" onclick=\"\$('#nameservers').slideToggle();\">{% trans 'I want to use my nameservers' %}</label>
                                <div id=\"nameservers\" style=\"display:none; margin: 10px 0;\">
                                    <p><input type=\"text\" name=\"ns1\" value=\"\" placeholder=\"{% trans 'Nameserver 1' %}\"></p>
                                    <p><input type=\"text\" name=\"ns2\" value=\"\" placeholder=\"{% trans 'Nameserver 2' %}\"></p>
                                    <p><input type=\"text\" name=\"ns3\" value=\"\" placeholder=\"{% trans 'Nameserver 3' %}\"></p>
                                    <p><input type=\"text\" name=\"ns4\" value=\"\" placeholder=\"{% trans 'Nameserver 4' %}\"></p>
                                </div>

                            </div>

                        </fieldset>
                    </div>

                    <div class=\"tab_content\" id=\"transfer\">
                        <fieldset>
                            <p>
                                <input type=\"text\" name=\"transfer_sld\" value=\"{{ request.transfer_sld }}\"  style=\"width: 583px\" placeholder=\"{% trans 'Enter your domain name to transfer' %}\">
                                {{ mf.selectboxtld('transfer_tld', guest.serviceDomain_tlds({\"allow_transfer\":1})) }}
                            </p>

                            <button class=\"bb-button bb-button-big\" type=\"button\" id=\"transfer-check\" style=\"float: right;\">{% trans 'Check' %}</button>
                            <button class=\"bb-button bb-button-submit bb-button-big order-button\" type=\"submit\" style=\"float: right; display: none;\">{% if product.addons|length > 0 %}{% trans 'Continue' %}{% else %}{% trans 'Order now' %}{% endif %}</button>

                            <div id=\"domain-transfer-config\" style=\"display:none;\">
                                <p>{% trans 'Transfer price'%}: <span id=\"transfer-price\"></span></p>
                                <input type=\"text\" name=\"transfer_code\" value=\"{{ request.transfer_code }}\" style=\"width: 200px\" placeholder=\"{% trans 'Enter domain transfer code' %}\">
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class=\"clear\"></div>
            </div>

        </div>
        <div class=\"clear\"></div>
    </div>
    <div class=\"clear\"></div>
    {% include 'partial_addons.phtml' with {'product': product} %}
    
<input type=\"hidden\" name=\"id\" value=\"{{ product.id }}\" />
<input type=\"hidden\" name=\"action\" value=\"register\" id=\"domain-action\"/>
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

    if(\$(\".addons\").length) {
        \$('.order-button').one('click', function(){
            \$(this).hide();
            \$('.addons').slideDown('fast');
            return false;
        });
    }

    \$('.addon-period-selector').change(function(){
        var r = \$(this).attr('rel');
        \$('#' + r + ' span').hide();
        \$('#' + r + ' span.' + \$(this).val()).fadeIn();
    }).trigger('change');

    \$('#transfer-check').bind('click',function(event){
        var sld = \$('input[name=\"transfer_sld\"]').val();
        var tld = \$('select[name=\"transfer_tld\"]').val();
        var domain = sld + tld;
        bb.post(
            'guest/servicedomain/can_be_transferred',
            { sld: sld, tld: tld },
            function(result) {
                setTransferPricing(tld);
                \$('#domain-name').text(domain);
                \$('#domain-transfer-config').fadeIn('fast');
                \$('.onAfterDomainCheck').fadeIn('fast');
                \$('#transfer-check').hide();
                \$('#transfer .order-button').show();
            }
        );
        return false;
    });

    \$('#domain-check').bind('click',function(event){
        var sld = \$('input[name=\"register_sld\"]').val();
        var tld = \$('select[name=\"register_tld\"]').val();
        var domain = sld + tld;
        bb.post(
            'guest/servicedomain/check',
            { sld: sld, tld: tld },
            function(result) {
                setPricing(tld);
                \$('#domain-name').text(domain);
                \$('.onAfterDomainCheck').fadeIn('fast');
                \$('#domain-check').hide();
                \$('#register .order-button').show();
            }
        );
        return false;
    });

    function setPricing(tld)
    {
        bb.post(
            'guest/servicedomain/pricing',
            { tld: tld },
            function(result) {
                var s = \$(\"#registration-years\");
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
{% endblock %}", "mod_servicedomain_order.phtml", "/home/fendi/Documents/php-workspace/BoxBilling/bb-themes/boxbilling/html/mod_servicedomain_order.phtml");
    }
}
