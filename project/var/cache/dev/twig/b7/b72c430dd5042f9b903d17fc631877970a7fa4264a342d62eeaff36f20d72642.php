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

/* user/remove-user.html.twig */
class __TwigTemplate_a712eb95ff8684e6adb2cca126bae6c5d3d816a7f656f5372d8e5c4d013881e1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/remove-user.html.twig"));

        // line 1
        if ((null === (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    <h1>User not found</h1>
";
        } else {
            // line 4
            echo "    <h1>User removed with success!</h1>
    <h4>Details</h4>
    <p>Name: ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 6, $this->source); })()), "userName", [], "any", false, false, false, 6), "html", null, true);
            echo "</p>
    <p>Type: ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "address", [], "any", false, false, false, 7), "street", [], "any", false, false, false, 7), "html", null, true);
            echo "</p>
    <p>Breed: ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "address", [], "any", false, false, false, 8), "number", [], "any", false, false, false, 8), "html", null, true);
            echo "</p>
    <p>Date Birth: ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "address", [], "any", false, false, false, 9), "city", [], "any", false, false, false, 9), "html", null, true);
            echo "</p>
    <p><a href=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clinic_index");
            echo "\"> Return index of Users</a> | <a href=\"localhost:8000\">Home</a></p>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/remove-user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 4,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if user is null %}
    <h1>User not found</h1>
{% else %}
    <h1>User removed with success!</h1>
    <h4>Details</h4>
    <p>Name: {{user.userName}}</p>
    <p>Type: {{user.address.street}}</p>
    <p>Breed: {{user.address.number}}</p>
    <p>Date Birth: {{user.address.city}}</p>
    <p><a href=\"{{ path('clinic_index')}}\"> Return index of Users</a> | <a href=\"localhost:8000\">Home</a></p>
{% endif %}", "user/remove-user.html.twig", "/home/micaelmf/Documentos/projetos/web/learning-api-rest/project/templates/user/remove-user.html.twig");
    }
}
