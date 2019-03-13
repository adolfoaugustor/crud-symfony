<?php

/* @SonataAdmin/CRUD/list__action_history.html.twig */
class __TwigTemplate_d75b4f0622abec0c9546340fb811b7e467b8207c727319bde084615e5cf2d7f0 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__action_history.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__action_history.html.twig"));

        // line 11
        echo "
";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->source); })()), "hasAccess", [0 => "history", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 12, $this->source); })())], "method") && twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->source); })()), "hasRoute", [0 => "history"], "method"))) {
            // line 13
            echo "    <a 
        href=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 14, $this->source); })()), "generateObjectUrl", [0 => "history", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 14, $this->source); })())], "method"), "html", null, true);
            echo "\"
        class=\"btn btn-sm btn-default view_link\"
        title=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_action_history", [], "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"fa fa-history\" aria-hidden=\"true\"></i>
        ";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_action_history", [], "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__action_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 18,  42 => 16,  37 => 14,  34 => 13,  32 => 12,  29 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% if admin.hasAccess('history', object) and admin.hasRoute('history') %}
    <a 
        href=\"{{ admin.generateObjectUrl('history', object) }}\"
        class=\"btn btn-sm btn-default view_link\"
        title=\"{{ 'link_action_history'|trans({}, 'SonataAdminBundle') }}\">
        <i class=\"fa fa-history\" aria-hidden=\"true\"></i>
        {{ 'link_action_history'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endif %}
", "@SonataAdmin/CRUD/list__action_history.html.twig", "/var/www/html/crud-symfony/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list__action_history.html.twig");
    }
}
