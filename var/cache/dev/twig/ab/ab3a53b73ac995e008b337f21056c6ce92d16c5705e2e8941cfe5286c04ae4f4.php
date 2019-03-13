<?php

/* @SonataCore/FlashMessage/render.html.twig */
class __TwigTemplate_1474c0238d25d95c480554d2977b51d8747a6b4529e049b4aea44f18b99ccbfd extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataCore/FlashMessage/render.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataCore/FlashMessage/render.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getRuntime('Sonata\Twig\Extension\FlashMessageRuntime')->getFlashMessagesTypes());
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
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 13
            echo "    ";
            $context["domain"] = (((isset($context["domain"]) || array_key_exists("domain", $context))) ? ((isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new Twig_Error_Runtime('Variable "domain" does not exist.', 13, $this->source); })())) : (null));
            // line 14
            echo "    ";
            $context["messages"] = $this->env->getRuntime('Sonata\Twig\Extension\FlashMessageRuntime')->getFlashMessages($context["type"], (isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new Twig_Error_Runtime('Variable "domain" does not exist.', 14, $this->source); })()));
            // line 15
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 15, $this->source); })())) > 1)) {
                // line 16
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Sonata\Twig\Extension\StatusRuntime')->statusClass($context["type"]), "html", null, true);
                echo " alert-dismissible collapsed-box\">
            <button
                    type=\"button\"
                    class=\"close\"
                    data-dismiss=\"alert\"
                    aria-hidden=\"true\"
                    aria-label=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message_close", [], "SonataCoreBundle"), "html", null, true);
                echo "\">
                &times;
            </button>
            <input type=\"checkbox\" class=\"read-more-state\" id=\"toggle-more-";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
                echo "\" />
            <div class=\"read-more-wrap\">
                ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 27, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 28
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) >= 2)) {
                        // line 29
                        echo "                        <span class=\"read-more-target\">";
                        echo $context["message"];
                        echo "</span>
                    ";
                    } else {
                        // line 31
                        echo "                        ";
                        echo $context["message"];
                        echo "
                    ";
                    }
                    // line 33
                    echo "                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "            </div>

            <label for=\"toggle-more-";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
                echo "\" class=\"read-more-trigger\">
                <span class=\"more\">";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("more", [], "SonataCoreBundle"), "html", null, true);
                echo " &#9660;</span>
                <span class=\"less hide\">";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("less", [], "SonataCoreBundle"), "html", null, true);
                echo " &#9650;</span>
                <span class=\"badge badge-default\">";
                // line 39
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 39, $this->source); })())), "html", null, true);
                echo "</span>
            </label>
        </div>
    ";
            } elseif ((twig_length_filter($this->env,             // line 42
(isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 42, $this->source); })())) == 1)) {
                // line 43
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Sonata\Twig\Extension\StatusRuntime')->statusClass($context["type"]), "html", null, true);
                echo " alert-dismissable\">
            <button
                    type=\"button\"
                    class=\"close\"
                    data-dismiss=\"alert\"
                    aria-hidden=\"true\"
                    aria-label=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message_close", [], "SonataCoreBundle"), "html", null, true);
                echo "\">
                &times;
            </button>
            ";
                // line 52
                echo twig_first($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 52, $this->source); })()));
                echo "
        </div>
    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SonataCore/FlashMessage/render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 52,  159 => 49,  149 => 43,  147 => 42,  141 => 39,  137 => 38,  133 => 37,  129 => 36,  125 => 34,  111 => 33,  105 => 31,  99 => 29,  96 => 28,  79 => 27,  74 => 25,  68 => 22,  58 => 16,  55 => 15,  52 => 14,  49 => 13,  32 => 12,  29 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% for type in sonata_flashmessages_types() %}
    {% set domain = domain is defined ? domain : null %}
    {% set messages = sonata_flashmessages_get(type, domain) %}
    {% if messages|length > 1 %}
        <div class=\"alert alert-{{ type|sonata_status_class }} alert-dismissible collapsed-box\">
            <button
                    type=\"button\"
                    class=\"close\"
                    data-dismiss=\"alert\"
                    aria-hidden=\"true\"
                    aria-label=\"{{ 'message_close'|trans({}, 'SonataCoreBundle') }}\">
                &times;
            </button>
            <input type=\"checkbox\" class=\"read-more-state\" id=\"toggle-more-{{ loop.index }}\" />
            <div class=\"read-more-wrap\">
                {% for message in messages %}
                    {% if loop.index >= 2 %}
                        <span class=\"read-more-target\">{{ message|raw }}</span>
                    {% else %}
                        {{ message|raw }}
                    {% endif %}
                {% endfor %}
            </div>

            <label for=\"toggle-more-{{ loop.index }}\" class=\"read-more-trigger\">
                <span class=\"more\">{{ 'more'|trans({}, 'SonataCoreBundle') }} &#9660;</span>
                <span class=\"less hide\">{{ 'less'|trans({}, 'SonataCoreBundle') }} &#9650;</span>
                <span class=\"badge badge-default\">{{ messages|length }}</span>
            </label>
        </div>
    {% elseif messages|length == 1 %}
        <div class=\"alert alert-{{ type|sonata_status_class }} alert-dismissable\">
            <button
                    type=\"button\"
                    class=\"close\"
                    data-dismiss=\"alert\"
                    aria-hidden=\"true\"
                    aria-label=\"{{ 'message_close'|trans({}, 'SonataCoreBundle') }}\">
                &times;
            </button>
            {{ messages|first|raw }}
        </div>
    {% endif %}
{% endfor %}
", "@SonataCore/FlashMessage/render.html.twig", "/var/www/html/crud-symfony/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/views/FlashMessage/render.html.twig");
    }
}
