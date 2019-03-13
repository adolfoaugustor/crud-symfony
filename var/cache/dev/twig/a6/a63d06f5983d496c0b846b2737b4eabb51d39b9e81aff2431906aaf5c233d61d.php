<?php

/* @SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig */
class __TwigTemplate_a31d256b3d127317ed8cc3cf4f69ade608b32217ba2f6405afcff18771d6b588 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'sonata_mosaic_background' => [$this, 'block_sonata_mosaic_background'],
            'sonata_mosaic_default_view' => [$this, 'block_sonata_mosaic_default_view'],
            'sonata_mosaic_hover_view' => [$this, 'block_sonata_mosaic_hover_view'],
            'sonata_mosaic_description' => [$this, 'block_sonata_mosaic_description'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig"));

        // line 11
        echo "
<!--
This template can be customized to match your needs. You should only extends the template and used the differents block to customize the view:
    - sonata_mosaic_default_view
    - sonata_mosaic_hover_view
    - sonata_mosaic_description
-->

<tr>
    <td colspan=\"";
        // line 20
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 20, $this->source); })()), "list", []), "elements", [])) - ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->source); })()), "request", []), "isXmlHttpRequest", [])) ? ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 20, $this->source); })()), "list", []), "has", [0 => "_action"], "method") + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 20, $this->source); })()), "list", []), "has", [0 => "batch"], "method"))) : (0))), "html", null, true);
        echo "\">
        <div class=\"row\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 22, $this->source); })()), "datagrid", []), "results", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 23
            echo "                ";
            $context["meta"] = twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 23, $this->source); })()), "getObjectMetadata", [0 => $context["object"]], "method");
            // line 24
            echo "                ";
            ob_start();
            // line 25
            echo "                    <div class=\"mosaic-box-outter\">
                        <div class=\"mosaic-inner-box\">
                            ";
            // line 30
            echo "
                            <div class=\"mosaic-inner-box-default\">
                                ";
            // line 32
            $this->displayBlock('sonata_mosaic_background', $context, $blocks);
            // line 37
            echo "                                ";
            $this->displayBlock('sonata_mosaic_default_view', $context, $blocks);
            // line 40
            echo "                            </div>

                            ";
            // line 46
            echo "                            <div class=\"mosaic-inner-box-hover\">
                                ";
            // line 47
            $this->displayBlock('sonata_mosaic_hover_view', $context, $blocks);
            // line 51
            echo "                            </div>
                        </div>

                        ";
            // line 55
            echo "                        ";
            $context["export_formats"] = (((isset($context["export_formats"]) || array_key_exists("export_formats", $context))) ? (_twig_default_filter((isset($context["export_formats"]) || array_key_exists("export_formats", $context) ? $context["export_formats"] : (function () { throw new Twig_Error_Runtime('Variable "export_formats" does not exist.', 55, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 55, $this->source); })()), "getExportFormats", []))) : (twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 55, $this->source); })()), "getExportFormats", [])));
            // line 56
            echo "
                        <div class=\"mosaic-inner-text\">
                            ";
            // line 58
            if (((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 58, $this->source); })()), "hasRoute", [0 => "batch"], "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) || array_key_exists("batchactions", $context) ? $context["batchactions"] : (function () { throw new Twig_Error_Runtime('Variable "batchactions" does not exist.', 58, $this->source); })())) > 0)) || ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 58, $this->source); })()), "hasRoute", [0 => "export"], "method") && twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 58, $this->source); })()), "hasAccess", [0 => "export"], "method")) && twig_length_filter($this->env, (isset($context["export_formats"]) || array_key_exists("export_formats", $context) ? $context["export_formats"] : (function () { throw new Twig_Error_Runtime('Variable "export_formats" does not exist.', 58, $this->source); })()))))) {
                // line 59
                echo "                                <input type=\"checkbox\" name=\"idx[]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 59, $this->source); })()), "id", [0 => $context["object"]], "method"), "html", null, true);
                echo "\">
                            ";
            } else {
                // line 61
                echo "                                &nbsp;
                            ";
            }
            // line 63
            echo "
                            ";
            // line 64
            $this->displayBlock('sonata_mosaic_description', $context, $blocks);
            // line 67
            echo "                        </div>
                    </div>
                ";
            $context["mosaic_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 70
            echo "                <div class=\"col-xs-6 col-sm-3 mosaic-box sonata-ba-list-field-batch sonata-ba-list-field\"
                     objectId=\"";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 71, $this->source); })()), "id", [0 => $context["object"]], "method"), "html", null, true);
            echo "\">
                    ";
            // line 72
            if ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 72, $this->source); })()), "hasAccess", [0 => "edit", 1 => $context["object"]], "method") && twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 72, $this->source); })()), "hasRoute", [0 => "edit"], "method"))) {
                // line 73
                echo "                        <a class=\"mosaic-inner-link\"
                           href=\"";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 74, $this->source); })()), "generateUrl", [0 => "edit", 1 => ["id" => $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getUrlsafeIdentifier($context["object"], (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 74, $this->source); })()))]], "method"), "html", null, true);
                echo "\">
                            ";
                // line 75
                echo twig_escape_filter($this->env, (isset($context["mosaic_content"]) || array_key_exists("mosaic_content", $context) ? $context["mosaic_content"] : (function () { throw new Twig_Error_Runtime('Variable "mosaic_content" does not exist.', 75, $this->source); })()), "html", null, true);
                echo "
                        </a>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 77
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 77, $this->source); })()), "hasAccess", [0 => "show", 1 => $context["object"]], "method") && twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 77, $this->source); })()), "hasRoute", [0 => "show"], "method"))) {
                // line 78
                echo "                        <a class=\"mosaic-inner-link\"
                           href=\"";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 79, $this->source); })()), "generateUrl", [0 => "show", 1 => ["id" => $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getUrlsafeIdentifier($context["object"], (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 79, $this->source); })()))]], "method"), "html", null, true);
                echo "\">
                            ";
                // line 80
                echo twig_escape_filter($this->env, (isset($context["mosaic_content"]) || array_key_exists("mosaic_content", $context) ? $context["mosaic_content"] : (function () { throw new Twig_Error_Runtime('Variable "mosaic_content" does not exist.', 80, $this->source); })()), "html", null, true);
                echo "
                        </a>
                    ";
            } else {
                // line 83
                echo "                        ";
                echo twig_escape_filter($this->env, (isset($context["mosaic_content"]) || array_key_exists("mosaic_content", $context) ? $context["mosaic_content"] : (function () { throw new Twig_Error_Runtime('Variable "mosaic_content" does not exist.', 83, $this->source); })()), "html", null, true);
                echo "
                    ";
            }
            // line 85
            echo "                </div>

                ";
            // line 87
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) % 4) == 0)) {
                // line 88
                echo "                    <div class=\"clearfix hidden-xs\"></div>
                ";
            }
            // line 90
            echo "                ";
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) % 2) == 0)) {
                // line 91
                echo "                    <div class=\"clearfix visible-xs\"></div>
                ";
            }
            // line 93
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "        </div>
    </td>
</tr>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_sonata_mosaic_background($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_background"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_background"));

        // line 33
        echo "                                    <img src=\"";
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "isImageAvailable", [], "any", true, true) &&  !twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new Twig_Error_Runtime('Variable "meta" does not exist.', 33, $this->source); })()), "isImageAvailable", []))) ? (twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 34, $this->source); })()), "getMosaicBackground", [], "method")) : (twig_get_attribute($this->env, $this->source,         // line 35
(isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new Twig_Error_Runtime('Variable "meta" does not exist.', 35, $this->source); })()), "image", []))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new Twig_Error_Runtime('Variable "meta" does not exist.', 35, $this->source); })()), "title", []), "html", null, true);
        echo "\" />
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_sonata_mosaic_default_view($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_default_view"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_default_view"));

        // line 38
        echo "                                    <span class=\"mosaic-box-label label label-primary pull-right\">#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 38, $this->source); })()), "id", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 38, $this->source); })())], "method"), "html", null, true);
        echo "</span>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_sonata_mosaic_hover_view($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_hover_view"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_hover_view"));

        // line 48
        echo "                                    <span class=\"mosaic-box-label label label-primary pull-right\">#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 48, $this->source); })()), "id", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 48, $this->source); })())], "method"), "html", null, true);
        echo "</span>
                                    ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new Twig_Error_Runtime('Variable "meta" does not exist.', 49, $this->source); })()), "description", []), "html", null, true);
        echo "
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_sonata_mosaic_description($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_description"));

        // line 65
        echo "                                ";
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new Twig_Error_Runtime('Variable "meta" does not exist.', 65, $this->source); })()), "title", []), 40), "html", null, true);
        echo "
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 65,  288 => 64,  276 => 49,  271 => 48,  262 => 47,  249 => 38,  240 => 37,  226 => 35,  225 => 34,  223 => 33,  214 => 32,  201 => 94,  187 => 93,  183 => 91,  180 => 90,  176 => 88,  174 => 87,  170 => 85,  164 => 83,  158 => 80,  154 => 79,  151 => 78,  149 => 77,  144 => 75,  140 => 74,  137 => 73,  135 => 72,  131 => 71,  128 => 70,  123 => 67,  121 => 64,  118 => 63,  114 => 61,  108 => 59,  106 => 58,  102 => 56,  99 => 55,  94 => 51,  92 => 47,  89 => 46,  85 => 40,  82 => 37,  80 => 32,  76 => 30,  72 => 25,  69 => 24,  66 => 23,  49 => 22,  44 => 20,  33 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<!--
This template can be customized to match your needs. You should only extends the template and used the differents block to customize the view:
    - sonata_mosaic_default_view
    - sonata_mosaic_hover_view
    - sonata_mosaic_description
-->

<tr>
    <td colspan=\"{{ admin.list.elements|length - (app.request.isXmlHttpRequest ? (admin.list.has('_action') + admin.list.has('batch')) : 0) }}\">
        <div class=\"row\">
            {% for object in admin.datagrid.results %}
                {% set meta = admin.getObjectMetadata(object) %}
                {% set mosaic_content %}
                    <div class=\"mosaic-box-outter\">
                        <div class=\"mosaic-inner-box\">
                            {#
                                This box will be display when the mouse is not on the box
                            #}

                            <div class=\"mosaic-inner-box-default\">
                                {% block sonata_mosaic_background %}
                                    <img src=\"{{ meta.isImageAvailable is defined and not meta.isImageAvailable ?
                                        sonata_admin.getMosaicBackground() :
                                        meta.image }}\" alt=\"{{ meta.title }}\" />
                                {% endblock %}
                                {% block sonata_mosaic_default_view %}
                                    <span class=\"mosaic-box-label label label-primary pull-right\">#{{ admin.id(object) }}</span>
                                {% endblock %}
                            </div>

                            {#
                                This box will be display when the mouse is on the box
                                You can add more description
                            #}
                            <div class=\"mosaic-inner-box-hover\">
                                {% block sonata_mosaic_hover_view %}
                                    <span class=\"mosaic-box-label label label-primary pull-right\">#{{ admin.id(object) }}</span>
                                    {{ meta.description }}
                                {% endblock %}
                            </div>
                        </div>

                        {# NEXT_MAJOR : remove this assignment #}
                        {% set export_formats = export_formats|default(admin.getExportFormats) %}

                        <div class=\"mosaic-inner-text\">
                            {% if (admin.hasRoute('batch') and batchactions|length > 0) or (admin.hasRoute('export') and admin.hasAccess('export') and export_formats|length) %}
                                <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
                            {% else %}
                                &nbsp;
                            {% endif %}

                            {% block sonata_mosaic_description %}
                                {{ meta.title|truncate(40) }}
                            {% endblock %}
                        </div>
                    </div>
                {% endset %}
                <div class=\"col-xs-6 col-sm-3 mosaic-box sonata-ba-list-field-batch sonata-ba-list-field\"
                     objectId=\"{{ admin.id(object) }}\">
                    {% if admin.hasAccess('edit', object) and admin.hasRoute('edit') %}
                        <a class=\"mosaic-inner-link\"
                           href=\"{{ admin.generateUrl('edit', {'id' : object|sonata_urlsafeid(admin) }) }}\">
                            {{ mosaic_content }}
                        </a>
                    {% elseif admin.hasAccess('show', object) and admin.hasRoute('show') %}
                        <a class=\"mosaic-inner-link\"
                           href=\"{{ admin.generateUrl('show', {'id' : object|sonata_urlsafeid(admin) }) }}\">
                            {{ mosaic_content }}
                        </a>
                    {% else %}
                        {{ mosaic_content }}
                    {% endif %}
                </div>

                {% if loop.index % 4 == 0 %}
                    <div class=\"clearfix hidden-xs\"></div>
                {% endif %}
                {% if loop.index % 2 == 0 %}
                    <div class=\"clearfix visible-xs\"></div>
                {% endif %}
            {% endfor %}
        </div>
    </td>
</tr>
", "@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig", "/var/www/html/crud-symfony/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_outer_rows_mosaic.html.twig");
    }
}
