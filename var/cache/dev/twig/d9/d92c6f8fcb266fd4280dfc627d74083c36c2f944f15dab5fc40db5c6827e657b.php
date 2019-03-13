<?php

/* @SonataDoctrineORMAdmin/CRUD/edit_orm_many_to_one.html.twig */
class __TwigTemplate_3b4e773986d1fd90056f3f5c19fca69aace1fbb9cc45113fa5e0a07068467940 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/edit_orm_many_to_one.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/edit_orm_many_to_one.html.twig"));

        // line 11
        echo "
";
        // line 13
        echo "
";
        // line 14
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 14, $this->source); })()), "field_description", []), "hasassociationadmin", [])) {
            // line 15
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderRelationElement((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 15, $this->source); })()), "field_description", [])), "html", null, true);
            echo "
";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 16, $this->source); })()), "edit", []) == "inline")) {
            // line 17
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 17, $this->source); })()), "field_description", []), "associationadmin", []), "formfielddescriptions", []));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 18
                echo "        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["field_description"], "name", []), [], "array"), 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 21
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "\" class=\"field-container\">
        ";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 22, $this->source); })()), "edit", []) == "list")) {
                // line 23
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 23, $this->source); })()), "html", null, true);
                echo "\" class=\"field-short-description\">
                ";
                // line 24
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 24, $this->source); })()), "admin", []), "id", [0 => twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 24, $this->source); })()), "value", [])], "method")) {
                    // line 25
                    echo "                    ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_short_object_information", ["code" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 26
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 26, $this->source); })()), "field_description", []), "associationadmin", []), "code", []), "objectId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 27
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 27, $this->source); })()), "field_description", []), "associationadmin", []), "id", [0 => twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 27, $this->source); })()), "value", [])], "method"), "uniqid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 28
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 28, $this->source); })()), "field_description", []), "associationadmin", []), "uniqid", []), "linkParameters" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 29
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 29, $this->source); })()), "field_description", []), "options", []), "link_parameters", [])]));
                    // line 30
                    echo "
                ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 31
($context["sonata_admin"] ?? null), "field_description", [], "any", false, true), "options", [], "any", false, true), "placeholder", [], "any", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 31, $this->source); })()), "field_description", []), "options", []), "placeholder", []))) {
                    // line 32
                    echo "                    <span class=\"inner-field-short-description\">
                        ";
                    // line 33
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 33, $this->source); })()), "field_description", []), "options", []), "placeholder", []), [], "SonataAdminBundle"), "html", null, true);
                    echo "
                    </span>
                ";
                }
                // line 36
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 38
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), 'widget');
                echo "
            </span>
        ";
            } else {
                // line 41
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 41, $this->source); })()), "html", null, true);
                echo "\" >
                ";
                // line 42
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), 'widget');
                echo "
            </span>
        ";
            }
            // line 45
            echo "
        <div id=\"field_actions_";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 46, $this->source); })()), "html", null, true);
            echo "\" class=\"field-actions\">
            ";
            // line 47
            $context["display_btn_list"] = ((((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 47, $this->source); })()), "edit", []) == "list") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 47, $this->source); })()), "field_description", []), "associationadmin", []), "hasRoute", [0 => "list"], "method")) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 47, $this->source); })()), "field_description", []), "associationadmin", []), "isGranted", [0 => "LIST"], "method")) && (isset($context["btn_list"]) || array_key_exists("btn_list", $context) ? $context["btn_list"] : (function () { throw new Twig_Error_Runtime('Variable "btn_list" does not exist.', 47, $this->source); })()));
            // line 48
            echo "            ";
            $context["display_btn_add"] = ((((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 48, $this->source); })()), "edit", []) != "admin") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 48, $this->source); })()), "field_description", []), "associationadmin", []), "hasRoute", [0 => "create"], "method")) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 48, $this->source); })()), "field_description", []), "associationadmin", []), "isGranted", [0 => "CREATE"], "method")) && (isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new Twig_Error_Runtime('Variable "btn_add" does not exist.', 48, $this->source); })()));
            // line 49
            echo "            ";
            if (((isset($context["display_btn_list"]) || array_key_exists("display_btn_list", $context) ? $context["display_btn_list"] : (function () { throw new Twig_Error_Runtime('Variable "display_btn_list" does not exist.', 49, $this->source); })()) || (isset($context["display_btn_add"]) || array_key_exists("display_btn_add", $context) ? $context["display_btn_add"] : (function () { throw new Twig_Error_Runtime('Variable "display_btn_add" does not exist.', 49, $this->source); })()))) {
                // line 50
                echo "            <div class=\"btn-group\">
                ";
                // line 51
                if ((isset($context["display_btn_list"]) || array_key_exists("display_btn_list", $context) ? $context["display_btn_list"] : (function () { throw new Twig_Error_Runtime('Variable "display_btn_list" does not exist.', 51, $this->source); })())) {
                    // line 52
                    echo "                    <a  href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 52, $this->source); })()), "field_description", []), "associationadmin", []), "generateUrl", [0 => "list", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 52, $this->source); })()), "field_description", []), "getOption", [0 => "link_parameters", 1 => []], "method")], "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_dialog_form_list_";
                    // line 53
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->source); })()), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-info btn-sm sonata-ba-action\"
                        title=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["btn_list"]) || array_key_exists("btn_list", $context) ? $context["btn_list"] : (function () { throw new Twig_Error_Runtime('Variable "btn_list" does not exist.', 55, $this->source); })()), [], (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new Twig_Error_Runtime('Variable "btn_catalogue" does not exist.', 55, $this->source); })())), "html", null, true);
                    echo "\"
                        >
                        <i class=\"fa fa-list\"></i>
                        ";
                    // line 58
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["btn_list"]) || array_key_exists("btn_list", $context) ? $context["btn_list"] : (function () { throw new Twig_Error_Runtime('Variable "btn_list" does not exist.', 58, $this->source); })()), [], (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new Twig_Error_Runtime('Variable "btn_catalogue" does not exist.', 58, $this->source); })())), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 61
                echo "
                ";
                // line 62
                if ((isset($context["display_btn_add"]) || array_key_exists("display_btn_add", $context) ? $context["display_btn_add"] : (function () { throw new Twig_Error_Runtime('Variable "display_btn_add" does not exist.', 62, $this->source); })())) {
                    // line 63
                    echo "                    <a  href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 63, $this->source); })()), "field_description", []), "associationadmin", []), "generateUrl", [0 => "create", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 63, $this->source); })()), "field_description", []), "getOption", [0 => "link_parameters", 1 => []], "method")], "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 64
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 64, $this->source); })()), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 66
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new Twig_Error_Runtime('Variable "btn_add" does not exist.', 66, $this->source); })()), [], (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new Twig_Error_Runtime('Variable "btn_catalogue" does not exist.', 66, $this->source); })())), "html", null, true);
                    echo "\"
                        >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 69
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new Twig_Error_Runtime('Variable "btn_add" does not exist.', 69, $this->source); })()), [], (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new Twig_Error_Runtime('Variable "btn_catalogue" does not exist.', 69, $this->source); })())), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 72
                echo "            </div>
            ";
            }
            // line 74
            echo "
            ";
            // line 75
            if (((((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 75, $this->source); })()), "edit", []) == "list") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 75, $this->source); })()), "field_description", []), "associationadmin", []), "hasRoute", [0 => "delete"], "method")) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 75, $this->source); })()), "field_description", []), "associationadmin", []), "isGranted", [0 => "DELETE"], "method")) && (isset($context["btn_delete"]) || array_key_exists("btn_delete", $context) ? $context["btn_delete"] : (function () { throw new Twig_Error_Runtime('Variable "btn_delete" does not exist.', 75, $this->source); })()))) {
                // line 76
                echo "                <a  href=\"\"
                    onclick=\"return remove_selected_element_";
                // line 77
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 77, $this->source); })()), "html", null, true);
                echo "(this);\"
                    class=\"btn btn-danger btn-sm sonata-ba-action\"
                    title=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["btn_delete"]) || array_key_exists("btn_delete", $context) ? $context["btn_delete"] : (function () { throw new Twig_Error_Runtime('Variable "btn_delete" does not exist.', 79, $this->source); })()), [], (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new Twig_Error_Runtime('Variable "btn_catalogue" does not exist.', 79, $this->source); })())), "html", null, true);
                echo "\"
                    >
                    <i class=\"fa fa-minus-circle\"></i>
                    ";
                // line 82
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["btn_delete"]) || array_key_exists("btn_delete", $context) ? $context["btn_delete"] : (function () { throw new Twig_Error_Runtime('Variable "btn_delete" does not exist.', 82, $this->source); })()), [], (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new Twig_Error_Runtime('Variable "btn_catalogue" does not exist.', 82, $this->source); })())), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 85
            echo "        </div>

        ";
            // line 87
            $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig", "@SonataDoctrineORMAdmin/CRUD/edit_orm_many_to_one.html.twig", 87)->display($context);
            // line 88
            echo "    </div>

    ";
            // line 90
            $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_many_association_script.html.twig", "@SonataDoctrineORMAdmin/CRUD/edit_orm_many_to_one.html.twig", 90)->display($context);
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/edit_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 90,  219 => 88,  217 => 87,  213 => 85,  207 => 82,  201 => 79,  196 => 77,  193 => 76,  191 => 75,  188 => 74,  184 => 72,  178 => 69,  172 => 66,  167 => 64,  162 => 63,  160 => 62,  157 => 61,  151 => 58,  145 => 55,  140 => 53,  135 => 52,  133 => 51,  130 => 50,  127 => 49,  124 => 48,  122 => 47,  118 => 46,  115 => 45,  109 => 42,  104 => 41,  98 => 38,  94 => 36,  88 => 33,  85 => 32,  83 => 31,  80 => 30,  78 => 29,  77 => 28,  76 => 27,  75 => 26,  73 => 25,  71 => 24,  66 => 23,  64 => 22,  59 => 21,  49 => 18,  44 => 17,  42 => 16,  37 => 15,  35 => 14,  32 => 13,  29 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% sonata_template_deprecate '@SonataAdmin/CRUD/Association/edit_many_to_one.html.twig' %}

{% if not sonata_admin.field_description.hasassociationadmin%}
    {{ value|render_relation_element(sonata_admin.field_description) }}
{% elseif sonata_admin.edit == 'inline' %}
    {% for field_description in sonata_admin.field_description.associationadmin.formfielddescriptions %}
        {{ form_row(form[field_description.name])}}
    {% endfor %}
{% else %}
    <div id=\"field_container_{{ id }}\" class=\"field-container\">
        {% if sonata_admin.edit == 'list' %}
            <span id=\"field_widget_{{ id }}\" class=\"field-short-description\">
                {% if sonata_admin.admin.id(sonata_admin.value) %}
                    {{ render(path('sonata_admin_short_object_information', {
                        'code':     sonata_admin.field_description.associationadmin.code,
                        'objectId': sonata_admin.field_description.associationadmin.id(sonata_admin.value),
                        'uniqid':   sonata_admin.field_description.associationadmin.uniqid,
                        'linkParameters': sonata_admin.field_description.options.link_parameters
                    })) }}
                {% elseif sonata_admin.field_description.options.placeholder is defined and sonata_admin.field_description.options.placeholder %}
                    <span class=\"inner-field-short-description\">
                        {{ sonata_admin.field_description.options.placeholder|trans({}, 'SonataAdminBundle') }}
                    </span>
                {% endif %}
            </span>
            <span style=\"display: none\" >
                {{ form_widget(form) }}
            </span>
        {% else %}
            <span id=\"field_widget_{{ id }}\" >
                {{ form_widget(form) }}
            </span>
        {% endif %}

        <div id=\"field_actions_{{ id }}\" class=\"field-actions\">
            {% set display_btn_list = sonata_admin.edit == 'list' and sonata_admin.field_description.associationadmin.hasRoute('list') and sonata_admin.field_description.associationadmin.isGranted('LIST') and btn_list %}
            {% set display_btn_add = sonata_admin.edit != 'admin' and sonata_admin.field_description.associationadmin.hasRoute('create') and sonata_admin.field_description.associationadmin.isGranted('CREATE') and btn_add %}
            {% if display_btn_list or display_btn_add %}
            <div class=\"btn-group\">
                {% if display_btn_list %}
                    <a  href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('list', sonata_admin.field_description.getOption('link_parameters', {})) }}\"
                        onclick=\"return start_field_dialog_form_list_{{ id }}(this);\"
                        class=\"btn btn-info btn-sm sonata-ba-action\"
                        title=\"{{ btn_list|trans({}, btn_catalogue) }}\"
                        >
                        <i class=\"fa fa-list\"></i>
                        {{ btn_list|trans({}, btn_catalogue) }}
                    </a>
                {% endif %}

                {% if display_btn_add %}
                    <a  href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('create', sonata_admin.field_description.getOption('link_parameters', {})) }}\"
                        onclick=\"return start_field_dialog_form_add_{{ id }}(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"{{ btn_add|trans({}, btn_catalogue) }}\"
                        >
                        <i class=\"fa fa-plus-circle\"></i>
                        {{ btn_add|trans({}, btn_catalogue) }}
                    </a>
                {% endif %}
            </div>
            {% endif %}

            {% if sonata_admin.edit == 'list' and sonata_admin.field_description.associationadmin.hasRoute('delete') and sonata_admin.field_description.associationadmin.isGranted('DELETE') and btn_delete %}
                <a  href=\"\"
                    onclick=\"return remove_selected_element_{{ id }}(this);\"
                    class=\"btn btn-danger btn-sm sonata-ba-action\"
                    title=\"{{ btn_delete|trans({}, btn_catalogue) }}\"
                    >
                    <i class=\"fa fa-minus-circle\"></i>
                    {{ btn_delete|trans({}, btn_catalogue) }}
                </a>
            {% endif %}
        </div>

        {% include '@SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig' %}
    </div>

    {% include '@SonataDoctrineORMAdmin/CRUD/edit_orm_many_association_script.html.twig' %}
{% endif %}
", "@SonataDoctrineORMAdmin/CRUD/edit_orm_many_to_one.html.twig", "/var/www/html/crud-symfony/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/edit_orm_many_to_one.html.twig");
    }
}
