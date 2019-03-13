<?php

/* @SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_inline_tabs.html.twig */
class __TwigTemplate_f2ae6b4e2a79bf4ff27daddd2c8381ddf072af7acafd852fce2615843650f0e6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_inline_tabs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_inline_tabs.html.twig"));

        // line 11
        echo "
";
        // line 13
        echo "
<div class=\"sonata-ba-tabs\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->source); })()), "children", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["nested_group_field"]) {
            // line 16
            echo "        <div>
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\">
                    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["associationAdmin"]) || array_key_exists("associationAdmin", $context) ? $context["associationAdmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationAdmin" does not exist.', 19, $this->source); })()), "formgroups", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                // line 20
                echo "                        <li class=\"";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [])) {
                    echo "active";
                }
                echo "\">
                            <a
                                href=\"#";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["associationAdmin"]) || array_key_exists("associationAdmin", $context) ? $context["associationAdmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationAdmin" does not exist.', 22, $this->source); })()), "uniqid", []), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", []), "loop", []), "index", []), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
                echo "\"
                                data-toggle=\"tab\"
                            >
                                <i class=\"icon-exclamation-sign has-errors hide\"></i>
                                ";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["associationAdmin"]) || array_key_exists("associationAdmin", $context) ? $context["associationAdmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationAdmin" does not exist.', 26, $this->source); })()), "trans", [0 => $context["name"], 1 => [], 2 => twig_get_attribute($this->env, $this->source, $context["form_group"], "translation_domain", [])], "method"), "html", null, true);
                echo "
                            </a>
                        </li>
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                </ul>

                <div class=\"tab-content\">
                    ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["associationAdmin"]) || array_key_exists("associationAdmin", $context) ? $context["associationAdmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationAdmin" does not exist.', 33, $this->source); })()), "formgroups", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                // line 34
                echo "                        <div
                            class=\"tab-pane ";
                // line 35
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [])) {
                    echo "active";
                }
                echo "\"
                            id=\"";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["associationAdmin"]) || array_key_exists("associationAdmin", $context) ? $context["associationAdmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationAdmin" does not exist.', 36, $this->source); })()), "uniqid", []), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", []), "loop", []), "index", []), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
                echo "\"
                        >
                            <fieldset>
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["form_group"], "fields", []));
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_group_field"], "children", [], "any", false, true), $context["field_name"], [], "array", true, true)) {
                        // line 41
                        echo "                                        ";
                        $context["nested_field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_group_field"], "children", []), $context["field_name"], [], "array");
                        // line 42
                        echo "                                        <div class=\"sonata-ba-field-";
                        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 42, $this->source); })()), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                        echo "\">
                                            ";
                        // line 43
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["associationAdmin"] ?? null), "formfielddescriptions", [], "any", false, true), $context["field_name"], [], "array", true, true)) {
                            // line 44
                            echo "                                                ";
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["nested_field"]) || array_key_exists("nested_field", $context) ? $context["nested_field"] : (function () { throw new Twig_Error_Runtime('Variable "nested_field" does not exist.', 44, $this->source); })()), 'row', ["inline" => "natural", "edit" => "inline"]);
                            // line 47
                            echo "
                                                ";
                            // line 48
                            $context["dummy"] = twig_get_attribute($this->env, $this->source, $context["nested_group_field"], "setrendered", []);
                            // line 49
                            echo "                                            ";
                        } else {
                            // line 50
                            echo "                                                ";
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["nested_field"]) || array_key_exists("nested_field", $context) ? $context["nested_field"] : (function () { throw new Twig_Error_Runtime('Variable "nested_field" does not exist.', 50, $this->source); })()), 'row');
                            echo "
                                            ";
                        }
                        // line 52
                        echo "                                        </div>
                                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "                                </div>
                            </fieldset>
                        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                </div>
            </div>

            ";
            // line 61
            if (twig_get_attribute($this->env, $this->source, $context["nested_group_field"], "_delete", [], "array", true, true)) {
                // line 62
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["nested_group_field"], "_delete", [], "array"), 'row', ["label" => "action_delete", "translation_domain" => "SonataAdminBundle"]);
                echo "
            ";
            }
            // line 64
            echo "        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nested_group_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_inline_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 66,  226 => 64,  220 => 62,  218 => 61,  213 => 58,  196 => 54,  188 => 52,  182 => 50,  179 => 49,  177 => 48,  174 => 47,  171 => 44,  169 => 43,  162 => 42,  159 => 41,  154 => 40,  143 => 36,  137 => 35,  134 => 34,  117 => 33,  112 => 30,  94 => 26,  83 => 22,  75 => 20,  58 => 19,  53 => 16,  36 => 15,  32 => 13,  29 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% sonata_template_deprecate '@SonataAdmin/CRUD/Association/edit_one_to_many_inline_tabs.html.twig' %}

<div class=\"sonata-ba-tabs\">
    {% for nested_group_field in form.children %}
        <div>
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\">
                    {% for name, form_group in associationAdmin.formgroups %}
                        <li class=\"{% if loop.first %}active{% endif %}\">
                            <a
                                href=\"#{{ associationAdmin.uniqid }}_{{ loop.parent.loop.index }}_{{ loop.index }}\"
                                data-toggle=\"tab\"
                            >
                                <i class=\"icon-exclamation-sign has-errors hide\"></i>
                                {{ associationAdmin.trans(name, {}, form_group.translation_domain) }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>

                <div class=\"tab-content\">
                    {% for name, form_group in associationAdmin.formgroups %}
                        <div
                            class=\"tab-pane {% if loop.first %}active{% endif %}\"
                            id=\"{{ associationAdmin.uniqid }}_{{ loop.parent.loop.index }}_{{ loop.index }}\"
                        >
                            <fieldset>
                                <div class=\"sonata-ba-collapsed-fields\">
                                    {% for field_name in form_group.fields if nested_group_field.children[field_name] is defined %}
                                        {% set nested_field = nested_group_field.children[field_name] %}
                                        <div class=\"sonata-ba-field-{{ id }}-{{ field_name }}\">
                                            {% if associationAdmin.formfielddescriptions[field_name] is defined %}
                                                {{ form_row(nested_field, {
                                                    'inline': 'natural',
                                                    'edit'  : 'inline'
                                                }) }}
                                                {% set dummy = nested_group_field.setrendered %}
                                            {% else %}
                                                {{ form_row(nested_field) }}
                                            {% endif %}
                                        </div>
                                    {% endfor %}
                                </div>
                            </fieldset>
                        </div>
                    {% endfor %}
                </div>
            </div>

            {% if nested_group_field['_delete'] is defined %}
                {{ form_row(nested_group_field['_delete'], {'label': 'action_delete', 'translation_domain': 'SonataAdminBundle'}) }}
            {% endif %}
        </div>
    {% endfor %}
</div>
", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_inline_tabs.html.twig", "/var/www/html/crud-symfony/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/edit_orm_one_to_many_inline_tabs.html.twig");
    }
}
