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

/* mail/emails.html.twig */
class __TwigTemplate_aee496a15ff447d84b6fa789f80b7988 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/emails.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/emails.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <title>Welcome to the Space Bar!</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: white;
            font-family: Helvetica, Arial, sans-serif;
        }

        h1 {
            background-color: #112869;
            color: #ffffff;
            padding: 30px 0 50px 0;
            font-weight: normal;
        }

        hr {
            border: none;
            border-top: 3px solid #112869;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .container {
            background-color: #fefefe;
            width: 580px;
            margin: 0 auto;
        }

        .bottom {
            background-color: #efefee;
        }

        .block {
            margin: 0;
            padding: 20px 20px 20px 20px;
            border-radius: 5px;
            background-color: #112869;
            color: white;
        }

        .logo {
            width: 100%;
        }

        .text-center {
            text-align: center;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #112869;
            color: #fefefe;
            border: 1px solid #fff;
            border-radius: 3px;
            font-size: 20px;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class=\"body\">
    <div class=\"container\">
        <div class=\"header text-center\">
            <a href=\"https://www.pc-clim.fr\">
                <img src=\"https://i.ibb.co/MRNR8Q0/2-480w.png\" alt=\"pc-clim-logo\" border=\"0\">
            </a>
        </div>
        <div class=\"content\">
            <h1 class=\"text-center p-6 rounded-lg\">Nouveau message de <br>
                ";
        // line 78
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 78, $this->source); })()), "firstname", [], "array", false, false, false, 78)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 78, $this->source); })()), "lastname", [], "array", false, false, false, 78)), "html", null, true);
        echo "
            </h1>
            <div class=\"mb\">
                <div style=\"margin-top: 12px; margin-bottom: 12px\">
                    Le ";
        // line 82
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/y", "Europe/Paris"), "html", null, true);
        echo "
                    à ";
        // line 83
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "H", "Europe/Paris"), "html", null, true);
        echo "h";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "i", "Europe/Paris"), "html", null, true);
        echo ".
                </div>

                <p class=\"block\">
                    \"";
        // line 87
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 87, $this->source); })()), "message", [], "array", false, false, false, 87)), "html", null, true);
        echo ".\"
                </p>

                <h3 class=\"text-center\" style=\"padding-top: 15px\">Informations du contact</h3>

                <p class=\"text-center\">Email : <a href=\"mailto:";
        // line 92
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 92, $this->source); })()), "email", [], "array", false, false, false, 92)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 92, $this->source); })()), "email", [], "array", false, false, false, 92)), "html", null, true);
        echo "</a></p>
                <p class=\"text-center\">Téléphone : <a href=\"tel:";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 93, $this->source); })()), "phone", [], "array", false, false, false, 93), "html", null, true);
        echo "\">+33";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 93, $this->source); })()), "phone", [], "array", false, false, false, 93), "html", null, true);
        echo "</a></p>
                <p class=\"text-center\">Adresse Complète
                    : ";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 95, $this->source); })()), "address", [], "array", false, false, false, 95), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 95, $this->source); })()), "postalCode", [], "array", false, false, false, 95), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 95, $this->source); })()), "city", [], "array", false, false, false, 95), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "mail/emails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 95,  158 => 93,  152 => 92,  144 => 87,  135 => 83,  131 => 82,  122 => 78,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <title>Welcome to the Space Bar!</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: white;
            font-family: Helvetica, Arial, sans-serif;
        }

        h1 {
            background-color: #112869;
            color: #ffffff;
            padding: 30px 0 50px 0;
            font-weight: normal;
        }

        hr {
            border: none;
            border-top: 3px solid #112869;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .container {
            background-color: #fefefe;
            width: 580px;
            margin: 0 auto;
        }

        .bottom {
            background-color: #efefee;
        }

        .block {
            margin: 0;
            padding: 20px 20px 20px 20px;
            border-radius: 5px;
            background-color: #112869;
            color: white;
        }

        .logo {
            width: 100%;
        }

        .text-center {
            text-align: center;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #112869;
            color: #fefefe;
            border: 1px solid #fff;
            border-radius: 3px;
            font-size: 20px;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class=\"body\">
    <div class=\"container\">
        <div class=\"header text-center\">
            <a href=\"https://www.pc-clim.fr\">
                <img src=\"https://i.ibb.co/MRNR8Q0/2-480w.png\" alt=\"pc-clim-logo\" border=\"0\">
            </a>
        </div>
        <div class=\"content\">
            <h1 class=\"text-center p-6 rounded-lg\">Nouveau message de <br>
                {{ contact['firstname']|capitalize }} {{ contact['lastname']|capitalize }}
            </h1>
            <div class=\"mb\">
                <div style=\"margin-top: 12px; margin-bottom: 12px\">
                    Le {{ \"now\"|date(\"d/m/y\", \"Europe/Paris\") }}
                    à {{ \"now\"|date(\"H\", \"Europe/Paris\") }}h{{ \"now\"|date(\"i\", \"Europe/Paris\") }}.
                </div>

                <p class=\"block\">
                    \"{{ contact['message']|capitalize }}.\"
                </p>

                <h3 class=\"text-center\" style=\"padding-top: 15px\">Informations du contact</h3>

                <p class=\"text-center\">Email : <a href=\"mailto:{{ contact['email'] | lower }}\">{{ contact['email'] | lower }}</a></p>
                <p class=\"text-center\">Téléphone : <a href=\"tel:{{ contact['phone'] }}\">+33{{ contact['phone'] }}</a></p>
                <p class=\"text-center\">Adresse Complète
                    : {{ contact['address'] }} {{ contact['postalCode'] }} {{ contact['city'] }}</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
", "mail/emails.html.twig", "/var/www/html/templates/mail/emails.html.twig");
    }
}
