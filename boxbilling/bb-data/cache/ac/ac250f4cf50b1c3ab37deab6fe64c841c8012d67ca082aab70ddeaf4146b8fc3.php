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

/* mod_formbuilder_settings.phtml */
class __TwigTemplate_f6dfde62d19c1436535f83da6757271de2169572290a04a66a7a53dfbab31905 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 2)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_formbuilder_settings.phtml", 2);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [0 => ["mod" => "formbuilder"]], "method", false, false, false, 1)) {
            // line 2
            $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_formbuilder_settings.phtml", 2)->unwrap();
            $context["active_menu"] = "system";
        }
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Custom form builder";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<style type=\"text/css\">
#background_overlay
    {
    display: none;
    position: fixed;
    top: 0%;
    left: 0%;
    width: 100%;
    height: 100%;
    background-color: #000;
    z-index:1001;
    -moz-opacity: 0.7;
    opacity:.70;
    filter: alpha(opacity=70);
    }
.update-field
{
    display: none;
    position: absolute;
    top: 20%;
    left: 20%;
    margin-left: 0px;
    margin-top: 0px;
    padding: 10px;
    background: url(images/alertOpacityOverlay.png) repeat;
    border-radius: 10px;
    --webkit-border-radius: 10px;
    z-index:1002;
    overflow:visible;
}
#background-loader
{
    display: none;
    position: absolute;
    left: 50%;
    top: 50%;
    margin-left: -110px;
    margin-top: -10px;
}
.manage
{
    position: relative;
    background: #ffffff;
}
</style>
";
    }

    // line 52
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\" id=\"open-index-tab\">";
        // line 56
        echo gettext("Custom forms");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>

        <div class=\"tab_content nopadding\" id=\"tab-index\">
            <table class=\"tableStatic wide\">
                <thead>
                <tr>
                    <th>";
        // line 66
        echo gettext("Form");
        echo "</th>
                    <th>";
        // line 67
        echo gettext("Orders using this form");
        echo "</th>
                    <th>";
        // line 68
        echo gettext("Products using this form");
        echo "</th>
                    <td width=\"23%\">";
        // line 69
        echo gettext("Actions");
        echo "</td>
                </tr>
                </thead>

                <tbody>
                ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formbuilder_get_forms", [], "any", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 75
            echo "
                <tr>
                    <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["form"], "name", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                    <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["form"], "order_count", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                    <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["form"], "product_count", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                    <td class=\"actions\">
                        <a class=\"bb-button btn14\" href=\"";
            // line 81
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/formbuilder", ["id" => twig_get_attribute($this->env, $this->source, $context["form"], "id", [], "any", false, false, false, 81)]);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"bb-button btn14 copy_form\" href=\"#\" data-api-reload=\"1\"  title=\"Copy\" data-form-id=\"";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["form"], "id", [], "any", false, false, false, 82), "html", null, true);
            echo "\"><img src=\"images/icons/dark/baloons.png\" alt=\"\"></a>
                        <a class=\"btn14 bb-rm-tr api-link\" href=\"";
            // line 83
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/formbuilder/delete_form", ["id" => twig_get_attribute($this->env, $this->source, $context["form"], "id", [], "any", false, false, false, 83)]);
            echo "\" data-api-confirm=\"Are you sure?\" ><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                </tbody>
                <tfoot>
                <tr>
                    <td colspan=\"4\">
                        <input type=\"button\" value=\"";
        // line 91
        echo gettext("Create new form");
        echo "\" class=\"greyishBtn\" id=\"new-form\" style=\"width: 150px; float: right;\"/>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>

        <div class=\"tab_content\" id=\"tab-import\">
            <form method=\"post\" action=\"";
        // line 99
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/formbuilder/import");
        echo "\" class=\"mainForm api-form save\" data-api-reload=\"1\">
                <fieldset>
                    <div class=\"formBottom\">
                        <textarea name=\"form\" cols=\"5\" rows=\"5\" placeholder=\"Paste new form configuration text.\"></textarea>
                    </div>
                    <div class=\"fix\"></div>
                    <input type=\"submit\" value=\"";
        // line 105
        echo gettext("Import");
        echo "\" class=\"greyishBtn submitForm\" style=\"margin: 0\"/>
                </fieldset>
            </form>
        </div>

    </div>
</div>

";
        // line 113
        if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "id", [], "any", false, false, false, 113)) {
            $context["form"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formbuilder_get_form", [0 => ["id" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "id", [], "any", false, false, false, 113)]], "method", false, false, false, 113);
            // line 114
            echo "
<div class=\"widget\" id=\"form-options-";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 115), "html", null, true);
            echo "\">
    <div class=\"head\">
        <h5 class=\"iCog\">";
            // line 117
            echo gettext("Form options");
            echo "</h5>
    </div>

    <div class=\"mainForm\">
                <form  id=\"update-form-options\">
                    <div class=\"rowElem\">
                        <label>
                            <strong>";
            // line 124
            echo gettext("New form name and options");
            echo "</strong>
                        </label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"form_name\"  id=\"form_name\" value=\"";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 127), "html", null, true);
            echo "\" style=\"width:300px;\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <div class=\"formRight\">
                            <select name=\"type\" id=\"form_type\" style=\"width:300px;\">
                                <option value=\"default\" ";
            // line 134
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "style", [], "any", false, false, false, 134), "type", [], "any", false, false, false, 134) == "default")) {
                echo " selected ";
            }
            echo ">";
            echo gettext("Labels on top");
            echo "</option>
                                <option value=\"horizontal\" ";
            // line 135
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "style", [], "any", false, false, false, 135), "type", [], "any", false, false, false, 135) == "horizontal")) {
                echo " selected ";
            }
            echo ">";
            echo gettext("Labels on the left");
            echo "</option>
                            </select>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <div class=\"formRight\">
                            <select name=\"show_title\" id=\"show_title\" style=\"width:300px;\">
                                <option value=\"1\" ";
            // line 143
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "style", [], "any", false, false, false, 143), "show_title", [], "any", false, false, false, 143) == "1")) {
                echo " selected ";
            }
            echo ">";
            echo gettext("Show form title");
            echo "</option>
                                <option value=\"0\" ";
            // line 144
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "style", [], "any", false, false, false, 144), "show_title", [], "any", false, false, false, 144) == "0")) {
                echo " selected ";
            }
            echo ">";
            echo gettext("Do not show form title");
            echo "</option>
                            </select>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"hidden\" name=\"form_id\" value=\"";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 150), "html", null, true);
            echo "\">

                    <div class=\"rowElem\">
                        <div class=\"formRight\">
                            <button type=\"submit\" href=\"#\" class=\"button blueBtn\">";
            // line 154
            echo gettext("Update");
            echo "</button>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                </form>
            <div class=\"fix\"></div>
    </div>
</div>

<div class=\"widget\" id=\"form-";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 163), "html", null, true);
            echo "\">
<div class=\"head\">
    <h5 class=\"iCog\">";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 165), "html", null, true);
            echo "</h5>
</div>

<div class=\"mainForm\">

<div class=\"body\" id=\"fields\">
    <a href=\"";
            // line 171
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/formbuilder/add_field", ["form_id" => twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 171), "type" => "text"]);
            echo "\" title=\"\" class=\"btnIconLeft mr10 api-link\" data-api-reload=\"1\" ><img src=\"images/icons/dark/add.png\" alt=\"\" class=\"icon\"><span>";
            echo gettext("Text");
            echo "</span></a>
    <a href=\"";
            // line 172
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/formbuilder/add_field", ["form_id" => twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 172), "type" => "select"]);
            echo "\" title=\"\" class=\"btnIconLeft mr10 api-link\" data-api-reload=\"1\"><img src=\"images/icons/dark/add.png\" alt=\"\" class=\"icon\"><span>";
            echo gettext("Dropdown");
            echo "</span></a>
    <a href=\"";
            // line 173
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/formbuilder/add_field", ["form_id" => twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 173), "type" => "radio"]);
            echo "\" title=\"\" class=\"btnIconLeft mr10 api-link\" data-api-reload=\"1\"><img src=\"images/icons/dark/add.png\" alt=\"\" class=\"icon\"><span>";
            echo gettext("Radio");
            echo "</span></a>
    <a href=\"";
            // line 174
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/formbuilder/add_field", ["form_id" => twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 174), "type" => "checkbox"]);
            echo "\" title=\"\" class=\"btnIconLeft mr10 api-link\" data-api-reload=\"1\"><img src=\"images/icons/dark/add.png\" alt=\"\" class=\"icon\"><span>";
            echo gettext("Checkbox");
            echo "</span></a>
    <a href=\"";
            // line 175
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/formbuilder/add_field", ["form_id" => twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 175), "type" => "textarea"]);
            echo "\" title=\"\" class=\"btnIconLeft mr10 api-link\" data-api-reload=\"1\"><img src=\"images/icons/dark/add.png\" alt=\"\" class=\"icon\"><span>";
            echo gettext("Textarea");
            echo "</span></a>
</div>


<fieldset>
";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fields", [], "any", false, false, false, 180));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["i"] => $context["field"]) {
                // line 181
                echo "    <div class=\"wrap-field\">
    ";
                // line 182
                $this->loadTemplate("mod_formbuilder_field.phtml", "mod_formbuilder_settings.phtml", 182)->display(twig_array_merge($context, $context["field"]));
                // line 183
                echo "    ";
                $this->loadTemplate("mod_formbuilder_preview.phtml", "mod_formbuilder_settings.phtml", 183)->display(twig_array_merge($context, $context["field"]));
                // line 184
                echo "    </div>
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "</fieldset>



</div>
<div class=\"fix\"></div>
</div>";
        }
        // line 193
        echo "<div id=\"background_overlay\">
    <img src=\"images/loaders/loader7.gif\" alt=\"\" id=\"background-loader\">
</div>

";
    }

    // line 199
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 200
        echo "<script type=\"text/javascript\">

    \$(function () {

        \$(\"form\").submit( function () {
            \$(':checkbox:not(:checked)').removeAttr('checked');
        });

        \$('.new-field').click(function () {
            var p = \$(this).closest('.rowElem').prev();
            p.clone().insertAfter(p);
            p.next().find('input').val(\"\");
            return false;
        });

        \$('#textarea-width, #textarea-height').change(function () {
            var p = \$(this).closest('.rowElem');
            var width = \$('#textarea-width').val();
            var height = \$('#textarea-height').val();
            p.next().find('textarea').css({\"width\":width, \"height\":height});
            return false;
        });

        \$('#prefix_text, #suffix_text').change(function () {
            var prefix = \$('#prefix_text').val();
            var suffix = \$('#suffix_text').val();
           \$('#prepended_text').text(prefix);
           \$('#appended_text').text(suffix);
            return false;
        });


        \$('.rm').click(function () {
            var fid = \$(this).attr('data-field-id');
            var rm = \$(this);
            jConfirm('Are you sure?', 'Confirm', function(r) {
                if(r) {
                    bb.post('admin/formbuilder/delete_field', {id: fid}, function () {
                        \$(rm).parents('.wrap-field').slideUp(\"normal\", function () {
                            \$(rm).remove();
                        });
                    });
                }
            });
            return false;
        });

        \$('.ed').click(function () {
            var edit_button = \$(this);

            var center = function(edit_button){
                var leftPosition = (\$(window).width() / 2) - ((  \$(edit_button).parents('.wrap-field').find('.update-field').width() / 2) + 10);
                var topPosition = (\$(document).height() / 2) - ((  \$(edit_button).parents('.wrap-field').find('.update-field').height() / 2) + 50);

                \$(edit_button).parents('.wrap-field').find('.update-field').css({
                    'top': topPosition,
                    'left': leftPosition
                });
            };

            center(edit_button);

            \$('#background_overlay').fadeIn(function(){


                \$(window).resize(function() {
                    center(edit_button);
                });

                \$(edit_button).parents('.wrap-field').find('.update-field').fadeIn(function(){
                    \$('html, body').animate({
                        scrollTop: \$(this).offset().top
                    }, 500);
                });

                \$('#background_overlay').click(function(){
                    hide_edit_form();
                });

                \$('body').delegate('.close-field-form','click',function(){
                    hide_edit_form();
                    return false;
                });

                \$(document).keyup(function(e) {
                    if (e.keyCode == 27) {
                       hide_edit_form();
                    }
                });

                var hide_edit_form  = function (){
                    \$('#background_overlay').fadeOut();
                    \$(edit_button).parents('.wrap-field').find('.update-field').fadeOut();
                };
            });
            return false;
        });

        \$('.pr').click(function () {
            \$(this).hide().siblings('.ed').show();
            \$(this).parents('.wrap-field').find('.preview').show();
            \$(this).parents('.wrap-field').find('.manage').hide();
            return false;
        });

        \$('#update-form-options').bind('submit',function (event) {
            bb.post('admin/formbuilder/update_form_settings',  \$(this).serialize(), function(){
                bb.msg(\"";
        // line 307
        echo gettext("Form options were updated");
        echo "\")
            })
            return false;
        });

        \$('.update-field').bind('submit',function (event) {
            var field_form = \$(this);
            bb.post('admin/formbuilder/update_field',  \$(this).serialize(), function(){
                \$(field_form).fadeOut();
                \$('#background-loader').show();
                bb.reload();
            })
            return false;
        });

       \$('#new-form').click(function () {
            jPrompt('Give your new form a title', 'My new form', 'Form title', function (title) {
                if (title) {
                    bb.post('admin/formbuilder/create_form', {name: title}, function (id) {
                        bb.redirect(\"";
        // line 326
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/formbuilder", ["id" => ""]);
        echo "\" + id);
                    });
                }
            });
            return false;
        });

        \$('.copy_form').click(function () {
            var fid = \$(this).attr('data-form-id');
            jPrompt('Give your new form a title', 'My new form', 'Form title', function (title) {
                if (title) {
                    bb.post('admin/formbuilder/copy_form', {name: title, form_id: fid}, function (id) {
                        bb.redirect(\"";
        // line 338
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/formbuilder", ["id" => ""]);
        echo "\" + id);
                    });
                }
            });
            return false;
        });
    });

</script>";
    }

    public function getTemplateName()
    {
        return "mod_formbuilder_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  586 => 338,  571 => 326,  549 => 307,  440 => 200,  436 => 199,  428 => 193,  419 => 186,  404 => 184,  401 => 183,  399 => 182,  396 => 181,  379 => 180,  369 => 175,  363 => 174,  357 => 173,  351 => 172,  345 => 171,  336 => 165,  331 => 163,  319 => 154,  312 => 150,  299 => 144,  291 => 143,  276 => 135,  268 => 134,  258 => 127,  252 => 124,  242 => 117,  237 => 115,  234 => 114,  231 => 113,  220 => 105,  211 => 99,  200 => 91,  194 => 87,  184 => 83,  180 => 82,  176 => 81,  171 => 79,  167 => 78,  163 => 77,  159 => 75,  155 => 74,  147 => 69,  143 => 68,  139 => 67,  135 => 66,  122 => 56,  117 => 53,  113 => 52,  64 => 5,  60 => 4,  47 => 2,  45 => 1,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% if guest.extension_is_on({\"mod\":\"formbuilder\"}) %}
{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}{% import \"macro_functions.phtml\" as mf %}{% block meta_title %}Custom form builder{% endblock %}{% set active_menu = 'system' %}

{% block head %}
<style type=\"text/css\">
#background_overlay
    {
    display: none;
    position: fixed;
    top: 0%;
    left: 0%;
    width: 100%;
    height: 100%;
    background-color: #000;
    z-index:1001;
    -moz-opacity: 0.7;
    opacity:.70;
    filter: alpha(opacity=70);
    }
.update-field
{
    display: none;
    position: absolute;
    top: 20%;
    left: 20%;
    margin-left: 0px;
    margin-top: 0px;
    padding: 10px;
    background: url(images/alertOpacityOverlay.png) repeat;
    border-radius: 10px;
    --webkit-border-radius: 10px;
    z-index:1002;
    overflow:visible;
}
#background-loader
{
    display: none;
    position: absolute;
    left: 50%;
    top: 50%;
    margin-left: -110px;
    margin-top: -10px;
}
.manage
{
    position: relative;
    background: #ffffff;
}
</style>
{% endblock %}

{% block content %}
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\" id=\"open-index-tab\">{% trans 'Custom forms' %}</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>

        <div class=\"tab_content nopadding\" id=\"tab-index\">
            <table class=\"tableStatic wide\">
                <thead>
                <tr>
                    <th>{% trans 'Form' %}</th>
                    <th>{% trans 'Orders using this form' %}</th>
                    <th>{% trans 'Products using this form' %}</th>
                    <td width=\"23%\">{% trans 'Actions' %}</td>
                </tr>
                </thead>

                <tbody>
                {% for form in admin.formbuilder_get_forms %}

                <tr>
                    <td>{{ form.name }}</td>
                    <td>{{ form.order_count }}</td>
                    <td>{{ form.product_count }}</td>
                    <td class=\"actions\">
                        <a class=\"bb-button btn14\" href=\"{{ 'extension/settings/formbuilder'|alink({'id' : form.id}) }}\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"bb-button btn14 copy_form\" href=\"#\" data-api-reload=\"1\"  title=\"Copy\" data-form-id=\"{{ form.id }}\"><img src=\"images/icons/dark/baloons.png\" alt=\"\"></a>
                        <a class=\"btn14 bb-rm-tr api-link\" href=\"{{'api/admin/formbuilder/delete_form'|link({'id' : form.id}) }}\" data-api-confirm=\"Are you sure?\" ><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                {% endfor %}
                </tbody>
                <tfoot>
                <tr>
                    <td colspan=\"4\">
                        <input type=\"button\" value=\"{% trans 'Create new form' %}\" class=\"greyishBtn\" id=\"new-form\" style=\"width: 150px; float: right;\"/>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>

        <div class=\"tab_content\" id=\"tab-import\">
            <form method=\"post\" action=\"{{ 'api/admin/formbuilder/import'|link }}\" class=\"mainForm api-form save\" data-api-reload=\"1\">
                <fieldset>
                    <div class=\"formBottom\">
                        <textarea name=\"form\" cols=\"5\" rows=\"5\" placeholder=\"Paste new form configuration text.\"></textarea>
                    </div>
                    <div class=\"fix\"></div>
                    <input type=\"submit\" value=\"{% trans 'Import' %}\" class=\"greyishBtn submitForm\" style=\"margin: 0\"/>
                </fieldset>
            </form>
        </div>

    </div>
</div>

{% if request.id %}{% set form = admin.formbuilder_get_form({\"id\":request.id}) %}

<div class=\"widget\" id=\"form-options-{{ form.id }}\">
    <div class=\"head\">
        <h5 class=\"iCog\">{% trans 'Form options' %}</h5>
    </div>

    <div class=\"mainForm\">
                <form  id=\"update-form-options\">
                    <div class=\"rowElem\">
                        <label>
                            <strong>{% trans 'New form name and options' %}</strong>
                        </label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"form_name\"  id=\"form_name\" value=\"{{form.name}}\" style=\"width:300px;\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <div class=\"formRight\">
                            <select name=\"type\" id=\"form_type\" style=\"width:300px;\">
                                <option value=\"default\" {% if form.style.type == 'default' %} selected {% endif %}>{% trans 'Labels on top' %}</option>
                                <option value=\"horizontal\" {% if form.style.type == 'horizontal' %} selected {% endif %}>{% trans 'Labels on the left' %}</option>
                            </select>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <div class=\"formRight\">
                            <select name=\"show_title\" id=\"show_title\" style=\"width:300px;\">
                                <option value=\"1\" {% if form.style.show_title == '1' %} selected {% endif %}>{% trans 'Show form title' %}</option>
                                <option value=\"0\" {% if form.style.show_title == '0' %} selected {% endif %}>{% trans 'Do not show form title' %}</option>
                            </select>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"hidden\" name=\"form_id\" value=\"{{ form.id }}\">

                    <div class=\"rowElem\">
                        <div class=\"formRight\">
                            <button type=\"submit\" href=\"#\" class=\"button blueBtn\">{% trans 'Update' %}</button>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                </form>
            <div class=\"fix\"></div>
    </div>
</div>

<div class=\"widget\" id=\"form-{{ form.id }}\">
<div class=\"head\">
    <h5 class=\"iCog\">{{ form.name }}</h5>
</div>

<div class=\"mainForm\">

<div class=\"body\" id=\"fields\">
    <a href=\"{{ 'api/admin/formbuilder/add_field'|link({'form_id' : form.id, 'type' : 'text'}) }}\" title=\"\" class=\"btnIconLeft mr10 api-link\" data-api-reload=\"1\" ><img src=\"images/icons/dark/add.png\" alt=\"\" class=\"icon\"><span>{% trans 'Text' %}</span></a>
    <a href=\"{{ 'api/admin/formbuilder/add_field'|link({'form_id' : form.id, 'type' : 'select'}) }}\" title=\"\" class=\"btnIconLeft mr10 api-link\" data-api-reload=\"1\"><img src=\"images/icons/dark/add.png\" alt=\"\" class=\"icon\"><span>{% trans 'Dropdown' %}</span></a>
    <a href=\"{{ 'api/admin/formbuilder/add_field'|link({'form_id' : form.id, 'type' : 'radio'}) }}\" title=\"\" class=\"btnIconLeft mr10 api-link\" data-api-reload=\"1\"><img src=\"images/icons/dark/add.png\" alt=\"\" class=\"icon\"><span>{% trans 'Radio' %}</span></a>
    <a href=\"{{ 'api/admin/formbuilder/add_field'|link({'form_id' : form.id, 'type' : 'checkbox'}) }}\" title=\"\" class=\"btnIconLeft mr10 api-link\" data-api-reload=\"1\"><img src=\"images/icons/dark/add.png\" alt=\"\" class=\"icon\"><span>{% trans 'Checkbox' %}</span></a>
    <a href=\"{{ 'api/admin/formbuilder/add_field'|link({'form_id' : form.id, 'type' : 'textarea'}) }}\" title=\"\" class=\"btnIconLeft mr10 api-link\" data-api-reload=\"1\"><img src=\"images/icons/dark/add.png\" alt=\"\" class=\"icon\"><span>{% trans 'Textarea' %}</span></a>
</div>


<fieldset>
{% for i,field in form.fields %}
    <div class=\"wrap-field\">
    {% include 'mod_formbuilder_field.phtml' with field %}
    {% include 'mod_formbuilder_preview.phtml' with field %}
    </div>
{% endfor %}
</fieldset>



</div>
<div class=\"fix\"></div>
</div>{% endif %}
<div id=\"background_overlay\">
    <img src=\"images/loaders/loader7.gif\" alt=\"\" id=\"background-loader\">
</div>

{% endblock %}

{% block js %}
<script type=\"text/javascript\">

    \$(function () {

        \$(\"form\").submit( function () {
            \$(':checkbox:not(:checked)').removeAttr('checked');
        });

        \$('.new-field').click(function () {
            var p = \$(this).closest('.rowElem').prev();
            p.clone().insertAfter(p);
            p.next().find('input').val(\"\");
            return false;
        });

        \$('#textarea-width, #textarea-height').change(function () {
            var p = \$(this).closest('.rowElem');
            var width = \$('#textarea-width').val();
            var height = \$('#textarea-height').val();
            p.next().find('textarea').css({\"width\":width, \"height\":height});
            return false;
        });

        \$('#prefix_text, #suffix_text').change(function () {
            var prefix = \$('#prefix_text').val();
            var suffix = \$('#suffix_text').val();
           \$('#prepended_text').text(prefix);
           \$('#appended_text').text(suffix);
            return false;
        });


        \$('.rm').click(function () {
            var fid = \$(this).attr('data-field-id');
            var rm = \$(this);
            jConfirm('Are you sure?', 'Confirm', function(r) {
                if(r) {
                    bb.post('admin/formbuilder/delete_field', {id: fid}, function () {
                        \$(rm).parents('.wrap-field').slideUp(\"normal\", function () {
                            \$(rm).remove();
                        });
                    });
                }
            });
            return false;
        });

        \$('.ed').click(function () {
            var edit_button = \$(this);

            var center = function(edit_button){
                var leftPosition = (\$(window).width() / 2) - ((  \$(edit_button).parents('.wrap-field').find('.update-field').width() / 2) + 10);
                var topPosition = (\$(document).height() / 2) - ((  \$(edit_button).parents('.wrap-field').find('.update-field').height() / 2) + 50);

                \$(edit_button).parents('.wrap-field').find('.update-field').css({
                    'top': topPosition,
                    'left': leftPosition
                });
            };

            center(edit_button);

            \$('#background_overlay').fadeIn(function(){


                \$(window).resize(function() {
                    center(edit_button);
                });

                \$(edit_button).parents('.wrap-field').find('.update-field').fadeIn(function(){
                    \$('html, body').animate({
                        scrollTop: \$(this).offset().top
                    }, 500);
                });

                \$('#background_overlay').click(function(){
                    hide_edit_form();
                });

                \$('body').delegate('.close-field-form','click',function(){
                    hide_edit_form();
                    return false;
                });

                \$(document).keyup(function(e) {
                    if (e.keyCode == 27) {
                       hide_edit_form();
                    }
                });

                var hide_edit_form  = function (){
                    \$('#background_overlay').fadeOut();
                    \$(edit_button).parents('.wrap-field').find('.update-field').fadeOut();
                };
            });
            return false;
        });

        \$('.pr').click(function () {
            \$(this).hide().siblings('.ed').show();
            \$(this).parents('.wrap-field').find('.preview').show();
            \$(this).parents('.wrap-field').find('.manage').hide();
            return false;
        });

        \$('#update-form-options').bind('submit',function (event) {
            bb.post('admin/formbuilder/update_form_settings',  \$(this).serialize(), function(){
                bb.msg(\"{% trans 'Form options were updated' %}\")
            })
            return false;
        });

        \$('.update-field').bind('submit',function (event) {
            var field_form = \$(this);
            bb.post('admin/formbuilder/update_field',  \$(this).serialize(), function(){
                \$(field_form).fadeOut();
                \$('#background-loader').show();
                bb.reload();
            })
            return false;
        });

       \$('#new-form').click(function () {
            jPrompt('Give your new form a title', 'My new form', 'Form title', function (title) {
                if (title) {
                    bb.post('admin/formbuilder/create_form', {name: title}, function (id) {
                        bb.redirect(\"{{ 'extension/settings/formbuilder'|alink({'id' : ''}) }}\" + id);
                    });
                }
            });
            return false;
        });

        \$('.copy_form').click(function () {
            var fid = \$(this).attr('data-form-id');
            jPrompt('Give your new form a title', 'My new form', 'Form title', function (title) {
                if (title) {
                    bb.post('admin/formbuilder/copy_form', {name: title, form_id: fid}, function (id) {
                        bb.redirect(\"{{ 'extension/settings/formbuilder'|alink({'id' : ''}) }}\" + id);
                    });
                }
            });
            return false;
        });
    });

</script>{% endblock %}

{% endif %}", "mod_formbuilder_settings.phtml", "/home/fendi/Documents/php-workspace/BoxBilling/bb-modules/Formbuilder/html_admin/mod_formbuilder_settings.phtml");
    }
}
