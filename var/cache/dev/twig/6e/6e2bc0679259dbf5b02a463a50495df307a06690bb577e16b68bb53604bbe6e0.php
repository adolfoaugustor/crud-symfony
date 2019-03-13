<?php

/* @SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_sortable_script_tabs.html.twig */
class __TwigTemplate_558ac8b50eded7938f0029a9be99f87049d249e1f14619db2c301ad794a0051a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_sortable_script_tabs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_sortable_script_tabs.html.twig"));

        // line 11
        echo "
";
        // line 13
        echo "
<script type=\"text/javascript\">
    jQuery('div#field_container_";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " .sonata-ba-tabs').sortable({
        axis: 'y',
        opacity: 0.6,
        items: '> div',
        stop: apply_position_value_";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "
    });

    function apply_position_value_";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "() {
        // update the input value position
        jQuery('div#field_container_";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 24, $this->source); })()), "html", null, true);
        echo " .sonata-ba-tabs .sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 24, $this->source); })()), "field_description", []), "options", []), "sortable", []), "html", null, true);
        echo "').each(function(index, element) {
            // remove the sortable handler and put it back
            var parent = jQuery(element).closest('.nav-tabs-custom');
            var tabs = parent.find('> .nav-tabs');
            jQuery('.sonata-ba-sortable-handler', tabs).remove();
            \$('<li class=\"sonata-ba-sortable-handler pull-right\"></li>')
                    .prepend('<span class=\"ui-icon ui-icon-grip-solid-horizontal\"></span>')
                    .appendTo(tabs);
            jQuery('input', element).hide();
        });

        jQuery('div#field_container_";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 35, $this->source); })()), "html", null, true);
        echo " .sonata-ba-tabs .sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 35, $this->source); })()), "field_description", []), "options", []), "sortable", []), "html", null, true);
        echo " input').each(function(index, value) {
            jQuery(value).val(index + 1);
        });
    }

    // refresh the sortable option when a new element is added
    jQuery('#sonata-ba-field-container-";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "').bind('sonata.add_element', function() {
        apply_position_value_";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "();
        jQuery('div#field_container_";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 43, $this->source); })()), "html", null, true);
        echo " .sonata-ba-tabs').sortable('refresh');
    });

    apply_position_value_";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "();
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_sortable_script_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 46,  93 => 43,  89 => 42,  85 => 41,  72 => 35,  54 => 24,  49 => 22,  43 => 19,  36 => 15,  32 => 13,  29 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% sonata_template_deprecate '@SonataAdmin/CRUD/Association/edit_one_to_many_sortable_script_tabs.html.twig' %}

<script type=\"text/javascript\">
    jQuery('div#field_container_{{ id }} .sonata-ba-tabs').sortable({
        axis: 'y',
        opacity: 0.6,
        items: '> div',
        stop: apply_position_value_{{ id }}
    });

    function apply_position_value_{{ id }}() {
        // update the input value position
        jQuery('div#field_container_{{ id }} .sonata-ba-tabs .sonata-ba-field-{{ id }}-{{ sonata_admin.field_description.options.sortable }}').each(function(index, element) {
            // remove the sortable handler and put it back
            var parent = jQuery(element).closest('.nav-tabs-custom');
            var tabs = parent.find('> .nav-tabs');
            jQuery('.sonata-ba-sortable-handler', tabs).remove();
            \$('<li class=\"sonata-ba-sortable-handler pull-right\"></li>')
                    .prepend('<span class=\"ui-icon ui-icon-grip-solid-horizontal\"></span>')
                    .appendTo(tabs);
            jQuery('input', element).hide();
        });

        jQuery('div#field_container_{{ id }} .sonata-ba-tabs .sonata-ba-field-{{ id }}-{{ sonata_admin.field_description.options.sortable }} input').each(function(index, value) {
            jQuery(value).val(index + 1);
        });
    }

    // refresh the sortable option when a new element is added
    jQuery('#sonata-ba-field-container-{{ id }}').bind('sonata.add_element', function() {
        apply_position_value_{{ id }}();
        jQuery('div#field_container_{{ id }} .sonata-ba-tabs').sortable('refresh');
    });

    apply_position_value_{{ id }}();
</script>
", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_sortable_script_tabs.html.twig", "/var/www/html/crud-symfony/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/edit_orm_one_to_many_sortable_script_tabs.html.twig");
    }
}
