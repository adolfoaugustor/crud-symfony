<?php

/* @SonataDoctrineORMAdmin/CRUD/edit_orm_many_association_script.html.twig */
class __TwigTemplate_3ab53691a59b9c8a2a4399ea7926482cdbd60731fec3910981e163793c166b66 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/edit_orm_many_association_script.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/edit_orm_many_association_script.html.twig"));

        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $context["associationadmin"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 23, $this->source); })()), "field_description", []), "associationadmin", []);
        // line 24
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 34
        echo "
    var field_dialog_form_list_link_";
        // line 35
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 35, $this->source); })());
        echo " = function(event) {
        initialize_popup_";
        // line 36
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 36, $this->source); })());
        echo "();

        var target = jQuery(this);

        if (target.attr('href').length === 0 || target.attr('href') === '#') {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 47
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 47, $this->source); })());
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 49
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 49, $this->source); })());
        echo " .sonata-ba-list-field');

        // the user does not click on a row column
        if (element.length == 0) {
            Admin.log('[";
        // line 53
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->source); })());
        echo "|field_dialog_form_list_link] the user does not click on a row column, make ajax call to retrieve inner html');
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[";
        // line 60
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 60, $this->source); })());
        echo "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_content_";
        // line 62
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 62, $this->source); })());
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 63
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 63, $this->source); })());
        echo "();

                    Admin.shared_setup(field_dialog_";
        // line 65
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 65, $this->source); })());
        echo ");
                }
            });

            return;
        }

        Admin.log('[";
        // line 72
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 72, $this->source); })());
        echo "|field_dialog_form_list_link] the user select one element, update input and hide the modal');

        jQuery('#";
        // line 74
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 74, $this->source); })());
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 75
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 75, $this->source); })());
        echo "').trigger('change');

        field_dialog_";
        // line 77
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 77, $this->source); })());
        echo ".modal('hide');
    };

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 81
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 81, $this->source); })());
        echo "  =  function() {
        Admin.log('[";
        // line 82
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 82, $this->source); })());
        echo "|field_dialog_form_list_handle_action] attaching valid js event');

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 86
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 86, $this->source); })());
        echo ").on('click', field_dialog_form_list_link_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 86, $this->source); })());
        echo ");
        jQuery('form', field_dialog_";
        // line 87
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 87, $this->source); })());
        echo ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 92
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 92, $this->source); })());
        echo "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 101
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 101, $this->source); })());
        echo "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_content_";
        // line 103
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 103, $this->source); })());
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 104
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 104, $this->source); })());
        echo "();

                    Admin.shared_setup(field_dialog_";
        // line 106
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 106, $this->source); })());
        echo ");
                }
            });
        });
    };

    // handle the list link
    var field_dialog_form_list_";
        // line 113
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 113, $this->source); })());
        echo " = function(event) {

        initialize_popup_";
        // line 115
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 115, $this->source); })());
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 120
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 120, $this->source); })());
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_content_";
        // line 124
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 124, $this->source); })());
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 132
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 132, $this->source); })());
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_content_";
        // line 135
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 135, $this->source); })());
        echo ".html(html);

                field_dialog_title_";
        // line 137
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 137, $this->source); })());
        echo ".html(\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationadmin" does not exist.', 137, $this->source); })()), "label", []), [], twig_get_attribute($this->env, $this->source, (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationadmin" does not exist.', 137, $this->source); })()), "translationdomain", []));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 139
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 139, $this->source); })());
        echo ");

                field_dialog_form_list_handle_action_";
        // line 141
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 141, $this->source); })());
        echo "();

                // open the dialog in modal mode
                field_dialog_";
        // line 144
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 144, $this->source); })());
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 146
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 146, $this->source); })());
        echo ");
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 152
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 152, $this->source); })());
        echo " = function(event) {
        initialize_popup_";
        // line 153
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 153, $this->source); })());
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_";
        // line 160
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 160, $this->source); })());
        echo ".html('');

        Admin.log('[";
        // line 162
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 162, $this->source); })());
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 170
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 170, $this->source); })());
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 170, $this->source); })());
        echo ");

                // populate the popup container
                field_dialog_content_";
        // line 173
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 173, $this->source); })());
        echo ".html(html);
                field_dialog_title_";
        // line 174
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 174, $this->source); })());
        echo ".html(\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationadmin" does not exist.', 174, $this->source); })()), "label", []), [], twig_get_attribute($this->env, $this->source, (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationadmin" does not exist.', 174, $this->source); })()), "translationdomain", []));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 176
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 176, $this->source); })());
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 180
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 180, $this->source); })());
        echo ").on('click', field_dialog_form_action_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 180, $this->source); })());
        echo ");
                jQuery('form', field_dialog_";
        // line 181
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 181, $this->source); })());
        echo ").on('submit', field_dialog_form_action_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 181, $this->source); })());
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 184
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 184, $this->source); })());
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 186
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 186, $this->source); })());
        echo ");
            }
        });
    };

    // handle the edit link
    var field_dialog_form_edit_";
        // line 192
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 192, $this->source); })());
        echo " = function(event) {
        initialize_popup_";
        // line 193
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 193, $this->source); })());
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_";
        // line 200
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 200, $this->source); })());
        echo ".html('');

        Admin.log('[";
        // line 202
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 202, $this->source); })());
        echo "|field_dialog_form_edit] edit link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 210
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 210, $this->source); })());
        echo "|field_dialog_form_edit] ajax success', field_dialog_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 210, $this->source); })());
        echo ");

                // populate the popup container
                field_dialog_content_";
        // line 213
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 213, $this->source); })());
        echo ".html(html);
                field_dialog_title_";
        // line 214
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 214, $this->source); })());
        echo ".html(\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationadmin" does not exist.', 214, $this->source); })()), "label", []), [], twig_get_attribute($this->env, $this->source, (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationadmin" does not exist.', 214, $this->source); })()), "translationdomain", []));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 216
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 216, $this->source); })());
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 220
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 220, $this->source); })());
        echo ").on('click', field_dialog_form_action_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 220, $this->source); })());
        echo ");
                jQuery('form', field_dialog_";
        // line 221
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 221, $this->source); })());
        echo ").on('submit', field_dialog_form_action_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 221, $this->source); })());
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 224
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 224, $this->source); })());
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 226
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 226, $this->source); })());
        echo ");
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 232
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 232, $this->source); })());
        echo " = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (
            this.nodeName === 'A'
            && (
                element.attr('href').length === 0
                || element.attr('href')[0] === '#'
                || element.attr('href').substr(0, 11) === 'javascript:'
            )
        ) {
            Admin.log('[";
        // line 245
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 245, $this->source); })());
        echo "|field_dialog_form_action] element is an anchor or a script, skipping action', this);
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 252
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 252, $this->source); })());
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 254
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 254, $this->source); })());
        echo "();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 268
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 268, $this->source); })());
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 278
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 278, $this->source); })());
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[";
        // line 286
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 286, $this->source); })());
        echo "|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_";
        // line 291
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 291, $this->source); })());
        echo ".modal('hide');

                    ";
        // line 293
        if ((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 293, $this->source); })()), "edit", []) == "list")) {
            // line 294
            echo "                        ";
            // line 298
            echo "                        jQuery('#";
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 298, $this->source); })());
            echo "').val(data.objectId);
                        jQuery('#";
            // line 299
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 299, $this->source); })());
            echo "').change();

                    ";
        } else {
            // line 302
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 304
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 304, $this->source); })());
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 305
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_retrieve_form_element", ["elementId" =>             // line 306
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 306, $this->source); })()), "subclass" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 307
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 307, $this->source); })()), "admin", []), "getActiveSubclassCode", [], "method"), "objectId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 308
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 308, $this->source); })()), "admin", []), "root", []), "id", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 308, $this->source); })()), "admin", []), "root", []), "subject", [])], "method"), "uniqid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 309
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 309, $this->source); })()), "admin", []), "root", []), "uniqid", []), "code" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 310
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 310, $this->source); })()), "admin", []), "root", []), "code", [])]);
            // line 311
            echo "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 316
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 316, $this->source); })());
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 317
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 317, $this->source); })());
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 324
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 324, $this->source); })());
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 329
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_content_";
        // line 334
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 334, $this->source); })());
        echo ".html(data);

                Admin.shared_setup(field_dialog_";
        // line 336
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 336, $this->source); })());
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 339
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 339, $this->source); })());
        echo ").submit(field_dialog_form_action_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 339, $this->source); })());
        echo ");
            }
        });

        return false;
    };

    var field_dialog_";
        // line 346
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 346, $this->source); })());
        echo "         = false;
    var field_dialog_content_";
        // line 347
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 347, $this->source); })());
        echo " = false;
    var field_dialog_title_";
        // line 348
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 348, $this->source); })());
        echo "   = false;

    function initialize_popup_";
        // line 350
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 350, $this->source); })());
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 352
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 352, $this->source); })());
        echo ") {
            field_dialog_";
        // line 353
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 353, $this->source); })());
        echo "         = jQuery(\"#field_dialog_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 353, $this->source); })());
        echo "\");
            field_dialog_content_";
        // line 354
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 354, $this->source); })());
        echo " = jQuery(\".modal-body\", \"#field_dialog_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 354, $this->source); })());
        echo "\");
            field_dialog_title_";
        // line 355
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 355, $this->source); })());
        echo "   = jQuery(\".modal-title\", \"#field_dialog_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 355, $this->source); })());
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 358
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 358, $this->source); })());
        echo ");

            Admin.log('[";
        // line 360
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 360, $this->source); })());
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 367
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 369
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 369, $this->source); })());
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 374
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 374, $this->source); })());
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 378
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 378, $this->source); })());
        echo ")
            .trigger('click')
        ;

        return false;
    }

    ";
        // line 388
        echo "    // this function initializes the popup
    // this can only be done this way as popup can be cascaded
    function start_field_dialog_form_edit_";
        // line 390
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 390, $this->source); })());
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 395
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 395, $this->source); })());
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_edit_";
        // line 399
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 399, $this->source); })());
        echo ")
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_";
        // line 406
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 406, $this->source); })());
        echo ") {
        Admin.shared_setup(field_dialog_";
        // line 407
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 407, $this->source); })());
        echo ");
    }

    ";
        // line 410
        if ((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 410, $this->source); })()), "edit", []) == "list")) {
            // line 411
            echo "        ";
            // line 414
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 416
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 416, $this->source); })());
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 420
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 420, $this->source); })());
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 424
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 424, $this->source); })());
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 431
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 431, $this->source); })());
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 436
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 436, $this->source); })());
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 443
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 443, $this->source); })());
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 446
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 446, $this->source); })());
            echo " option').get(0)) {
                jQuery('#";
            // line 447
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 447, $this->source); })());
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 450
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 450, $this->source); })());
            echo "').val('');
            jQuery('#";
            // line 451
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 451, $this->source); })());
            echo "').trigger('change');

            return false;
        }
        ";
            // line 458
            echo "
        // update the label
        jQuery('#";
            // line 460
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 460, $this->source); })());
            echo "').on('change', function(event) {

            Admin.log('[";
            // line 462
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 462, $this->source); })());
            echo "|on:change] update the label');

            jQuery('#field_widget_";
            // line 464
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 464, $this->source); })());
            echo "').html(\"<span><img src=\\\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("loading_information", [], "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 467
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_short_object_information", ["objectId" => "OBJECT_ID", "uniqid" => twig_get_attribute($this->env, $this->source,             // line 469
(isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationadmin" does not exist.', 469, $this->source); })()), "uniqid", []), "code" => twig_get_attribute($this->env, $this->source,             // line 470
(isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationadmin" does not exist.', 470, $this->source); })()), "code", []), "linkParameters" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 471
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 471, $this->source); })()), "field_description", []), "options", []), "link_parameters", [])]);
            // line 472
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_";
            // line 475
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 475, $this->source); })());
            echo "').html(html);
                }
            });

            ";
            // line 479
            if ((isset($context["btn_edit"]) || array_key_exists("btn_edit", $context) ? $context["btn_edit"] : (function () { throw new Twig_Error_Runtime('Variable "btn_edit" does not exist.', 479, $this->source); })())) {
                // line 480
                echo "                var edit_button_url = '";
                echo twig_get_attribute($this->env, $this->source,                 // line 481
(isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationadmin" does not exist.', 481, $this->source); })()), "generateUrl", [0 => "edit", 1 => ["id" => "OBJECT_ID"]], "method");
                // line 482
                echo "'.replace('OBJECT_ID', jQuery(this).val());

                jQuery('#field_actions_";
                // line 484
                echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 484, $this->source); })());
                echo " a.btn-warning').attr('href', edit_button_url);
            ";
            }
            // line 486
            echo "        });

    ";
        }
        // line 489
        echo "

</script>
<!-- / edit many association -->

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  876 => 489,  871 => 486,  866 => 484,  862 => 482,  860 => 481,  858 => 480,  856 => 479,  849 => 475,  844 => 472,  842 => 471,  841 => 470,  840 => 469,  839 => 467,  829 => 464,  824 => 462,  819 => 460,  815 => 458,  808 => 451,  804 => 450,  798 => 447,  794 => 446,  788 => 443,  778 => 436,  770 => 431,  760 => 424,  753 => 420,  746 => 416,  742 => 414,  740 => 411,  738 => 410,  732 => 407,  728 => 406,  718 => 399,  711 => 395,  703 => 390,  699 => 388,  689 => 378,  682 => 374,  674 => 369,  670 => 367,  663 => 360,  658 => 358,  650 => 355,  644 => 354,  638 => 353,  634 => 352,  629 => 350,  624 => 348,  620 => 347,  616 => 346,  604 => 339,  598 => 336,  593 => 334,  586 => 329,  578 => 324,  568 => 317,  564 => 316,  557 => 311,  555 => 310,  554 => 309,  553 => 308,  552 => 307,  551 => 306,  550 => 305,  546 => 304,  542 => 302,  536 => 299,  531 => 298,  529 => 294,  527 => 293,  522 => 291,  514 => 286,  503 => 278,  490 => 268,  473 => 254,  468 => 252,  458 => 245,  442 => 232,  433 => 226,  428 => 224,  420 => 221,  414 => 220,  407 => 216,  400 => 214,  396 => 213,  388 => 210,  377 => 202,  372 => 200,  362 => 193,  358 => 192,  349 => 186,  344 => 184,  336 => 181,  330 => 180,  323 => 176,  316 => 174,  312 => 173,  304 => 170,  293 => 162,  288 => 160,  278 => 153,  274 => 152,  265 => 146,  260 => 144,  254 => 141,  249 => 139,  242 => 137,  237 => 135,  231 => 132,  220 => 124,  213 => 120,  205 => 115,  200 => 113,  190 => 106,  185 => 104,  181 => 103,  176 => 101,  164 => 92,  156 => 87,  150 => 86,  143 => 82,  139 => 81,  132 => 77,  127 => 75,  123 => 74,  118 => 72,  108 => 65,  103 => 63,  99 => 62,  94 => 60,  84 => 53,  77 => 49,  72 => 47,  58 => 36,  54 => 35,  51 => 34,  44 => 24,  42 => 23,  39 => 22,  36 => 20,  33 => 18,  29 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}


{#

This code manage the many-to-[one|many] association field popup

#}

{% sonata_template_deprecate '@SonataAdmin/CRUD/Association/edit_many_script.html.twig' %}

{% autoescape false %}

{% set associationadmin = sonata_admin.field_description.associationadmin %}

<!-- edit many association -->

<script type=\"text/javascript\">

    {#
      handle link click in a list :
        - if the parent has an objectId defined then the related input get updated
        - if the parent has NO object then an ajax request is made to refresh the popup
    #}

    var field_dialog_form_list_link_{{ id }} = function(event) {
        initialize_popup_{{ id }}();

        var target = jQuery(this);

        if (target.attr('href').length === 0 || target.attr('href') === '#') {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[{{ id }}|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_{{ id }} .sonata-ba-list-field');

        // the user does not click on a row column
        if (element.length == 0) {
            Admin.log('[{{ id }}|field_dialog_form_list_link] the user does not click on a row column, make ajax call to retrieve inner html');
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[{{ id }}|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_content_{{ id }}.html(html);
                    field_dialog_form_list_handle_action_{{ id }}();

                    Admin.shared_setup(field_dialog_{{ id }});
                }
            });

            return;
        }

        Admin.log('[{{ id }}|field_dialog_form_list_link] the user select one element, update input and hide the modal');

        jQuery('#{{ id }}').val(element.attr('objectId'));
        jQuery('#{{ id }}').trigger('change');

        field_dialog_{{ id }}.modal('hide');
    };

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_{{ id }}  =  function() {
        Admin.log('[{{ id }}|field_dialog_form_list_handle_action] attaching valid js event');

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_{{ id }}).on('click', field_dialog_form_list_link_{{ id }});
        jQuery('form', field_dialog_{{ id }}).on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[{{ id }}|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[{{ id }}|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_content_{{ id }}.html(html);
                    field_dialog_form_list_handle_action_{{ id }}();

                    Admin.shared_setup(field_dialog_{{ id }});
                }
            });
        });
    };

    // handle the list link
    var field_dialog_form_list_{{ id }} = function(event) {

        initialize_popup_{{ id }}();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[{{ id }}|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_content_{{ id }}.html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[{{ id }}|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_content_{{ id }}.html(html);

                field_dialog_title_{{ id }}.html(\"{{ associationadmin.label|trans({}, associationadmin.translationdomain) }}\");

                Admin.shared_setup(field_dialog_{{ id }});

                field_dialog_form_list_handle_action_{{ id }}();

                // open the dialog in modal mode
                field_dialog_{{ id }}.modal();

                Admin.setup_list_modal(field_dialog_{{ id }});
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_{{ id }} = function(event) {
        initialize_popup_{{ id }}();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_{{ id }}.html('');

        Admin.log('[{{ id }}|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[{{ id }}|field_dialog_form_add] ajax success', field_dialog_{{ id }});

                // populate the popup container
                field_dialog_content_{{ id }}.html(html);
                field_dialog_title_{{ id }}.html(\"{{ associationadmin.label|trans({}, associationadmin.translationdomain) }}\");

                Admin.shared_setup(field_dialog_{{ id }});

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_{{ id }}).on('click', field_dialog_form_action_{{ id }});
                jQuery('form', field_dialog_{{ id }}).on('submit', field_dialog_form_action_{{ id }});

                // open the dialog in modal mode
                field_dialog_{{ id }}.modal();

                Admin.setup_list_modal(field_dialog_{{ id }});
            }
        });
    };

    // handle the edit link
    var field_dialog_form_edit_{{ id }} = function(event) {
        initialize_popup_{{ id }}();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_{{ id }}.html('');

        Admin.log('[{{ id }}|field_dialog_form_edit] edit link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[{{ id }}|field_dialog_form_edit] ajax success', field_dialog_{{ id }});

                // populate the popup container
                field_dialog_content_{{ id }}.html(html);
                field_dialog_title_{{ id }}.html(\"{{ associationadmin.label|trans({}, associationadmin.translationdomain) }}\");

                Admin.shared_setup(field_dialog_{{ id }});

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_{{ id }}).on('click', field_dialog_form_action_{{ id }});
                jQuery('form', field_dialog_{{ id }}).on('submit', field_dialog_form_action_{{ id }});

                // open the dialog in modal mode
                field_dialog_{{ id }}.modal();

                Admin.setup_list_modal(field_dialog_{{ id }});
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_{{ id }} = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (
            this.nodeName === 'A'
            && (
                element.attr('href').length === 0
                || element.attr('href')[0] === '#'
                || element.attr('href').substr(0, 11) === 'javascript:'
            )
        ) {
            Admin.log('[{{ id }}|field_dialog_form_action] element is an anchor or a script, skipping action', this);
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[{{ id }}|field_dialog_form_action] action catch', this);

        initialize_popup_{{ id }}();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[{{ id }}|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[{{ id }}|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[{{ id }}|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_{{ id }}.modal('hide');

                    {% if sonata_admin.edit == 'list' %}
                        {#
                           in this case we update the hidden input, and call the change event to
                           retrieve the post information
                        #}
                        jQuery('#{{ id }}').val(data.objectId);
                        jQuery('#{{ id }}').change();

                    {% else %}

                        // reload the form element
                        jQuery('#field_widget_{{ id }}').closest('form').ajaxSubmit({
                            url: '{{ path('sonata_admin_retrieve_form_element', {
                                'elementId': id,
                                'subclass':  sonata_admin.admin.getActiveSubclassCode(),
                                'objectId':  sonata_admin.admin.root.id(sonata_admin.admin.root.subject),
                                'uniqid':    sonata_admin.admin.root.uniqid,
                                'code':      sonata_admin.admin.root.code
                            }) }}',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_{{ id }}').replaceWith(html);
                                var newElement = jQuery('#{{ id }} [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_{{ id }}').trigger('sonata-admin-append-form-element');
                            }
                        });

                    {% endif %}

                    return;
                }

                // otherwise, display form error
                field_dialog_content_{{ id }}.html(data);

                Admin.shared_setup(field_dialog_{{ id }});

                // reattach the event
                jQuery('form', field_dialog_{{ id }}).submit(field_dialog_form_action_{{ id }});
            }
        });

        return false;
    };

    var field_dialog_{{ id }}         = false;
    var field_dialog_content_{{ id }} = false;
    var field_dialog_title_{{ id }}   = false;

    function initialize_popup_{{ id }}() {
        // initialize component
        if (!field_dialog_{{ id }}) {
            field_dialog_{{ id }}         = jQuery(\"#field_dialog_{{ id }}\");
            field_dialog_content_{{ id }} = jQuery(\".modal-body\", \"#field_dialog_{{ id }}\");
            field_dialog_title_{{ id }}   = jQuery(\".modal-title\", \"#field_dialog_{{ id }}\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_{{ id }});

            Admin.log('[{{ id }}|field_dialog] move dialog container as a document child');
        }
    }

    {#
        This code is used to defined the \"add\" popup
    #}
    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_{{ id }}(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_{{ id }}();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_{{ id }})
            .trigger('click')
        ;

        return false;
    }

    {#
        This code is used to define the \"edit\" popup
    #}
    // this function initializes the popup
    // this can only be done this way as popup can be cascaded
    function start_field_dialog_form_edit_{{ id }}(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_{{ id }}();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_edit_{{ id }})
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_{{ id }}) {
        Admin.shared_setup(field_dialog_{{ id }});
    }

    {% if sonata_admin.edit == 'list' %}
        {#
            This code is used to defined the \"list\" popup
        #}
        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_{{ id }}(link) {

            link.onclick = null;

            initialize_popup_{{ id }}();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_{{ id }})
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_{{ id }}(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_{{ id}})
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_{{ id }}(event) {
            event.preventDefault();

            if (jQuery('#{{ id }} option').get(0)) {
                jQuery('#{{ id }}').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#{{ id }}').val('');
            jQuery('#{{ id }}').trigger('change');

            return false;
        }
        {#
          attach onchange event on the input
        #}

        // update the label
        jQuery('#{{ id }}').on('change', function(event) {

            Admin.log('[{{ id }}|on:change] update the label');

            jQuery('#field_widget_{{ id }}').html(\"<span><img src=\\\"{{ asset('bundles/sonataadmin/ajax-loader.gif') }}\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>{{ 'loading_information'|trans([], 'SonataAdminBundle') }}</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '{{ path('sonata_admin_short_object_information', {
                    'objectId': 'OBJECT_ID',
                    'uniqid': associationadmin.uniqid,
                    'code': associationadmin.code,
                    'linkParameters': sonata_admin.field_description.options.link_parameters
                })}}'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_{{ id }}').html(html);
                }
            });

            {% if btn_edit %}
                var edit_button_url = '{{
                    associationadmin.generateUrl('edit', {'id' : 'OBJECT_ID'})
                }}'.replace('OBJECT_ID', jQuery(this).val());

                jQuery('#field_actions_{{ id }} a.btn-warning').attr('href', edit_button_url);
            {% endif %}
        });

    {% endif %}


</script>
<!-- / edit many association -->

{% endautoescape %}
", "@SonataDoctrineORMAdmin/CRUD/edit_orm_many_association_script.html.twig", "/var/www/html/crud-symfony/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/edit_orm_many_association_script.html.twig");
    }
}
