<?php

/* @Menu/Default/index.html.twig */
class __TwigTemplate_89f2e4480d31805516bc08f595f1bbc5db6742617716df933da622b8d02037ae extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Menu/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Menu/Default/index.html.twig"));

        // line 1
        echo "<ul>
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listemenu"]) || array_key_exists("listemenu", $context) ? $context["listemenu"] : (function () { throw new Twig_Error_Runtime('Variable "listemenu" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 3
            echo "\t\t";
            if (twig_test_iterable($context["value"])) {
                // line 4
                echo "\t\t\t<li>Tickets<div><ul>
\t\t\t\t";
                // line 5
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["key1"] => $context["item1"]) {
                    // line 6
                    echo "\t\t\t\t\t<li><a href=\"http://127.0.0.1:8000/";
                    echo twig_escape_filter($this->env, $context["key1"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["item1"], "html", null, true);
                    echo "</a></li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key1'], $context['item1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 8
                echo "\t\t\t</ul></div></li>
\t\t";
            } else {
                // line 10
                echo "\t\t\t<li><a href=\"http://127.0.0.1:8000/";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</a></li>
\t\t";
            }
            // line 12
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Menu/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  69 => 12,  61 => 10,  57 => 8,  46 => 6,  42 => 5,  39 => 4,  36 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul>
\t{% for key, value in listemenu %}
\t\t{% if value is iterable %}
\t\t\t<li>Tickets<div><ul>
\t\t\t\t{% for key1, item1 in value %}
\t\t\t\t\t<li><a href=\"http://127.0.0.1:8000/{{ key1 }}\">{{ item1 }}</a></li>
\t\t\t\t{% endfor %}
\t\t\t</ul></div></li>
\t\t{% else %}
\t\t\t<li><a href=\"http://127.0.0.1:8000/{{ key }}\">{{ value }}</a></li>
\t\t{% endif %}
\t{% endfor %}
</ul>
", "@Menu/Default/index.html.twig", "C:\\wamp64\\www\\Sublimeapp\\src\\MenuBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
