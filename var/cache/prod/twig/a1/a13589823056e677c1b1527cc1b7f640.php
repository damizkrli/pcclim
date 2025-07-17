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
class __TwigTemplate_5cdf61917db84a543c404d5ab4964255 extends Template
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
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "firstname", [], "any", false, false, false, 78)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "lastname", [], "any", false, false, false, 78)), "html", null, true);
        echo "
            </h1>
            <div class=\"mb\">
                <div style=\"margin-top: 12px; margin-bottom: 12px\">
                    Le ";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "createdAt", [], "any", false, false, false, 82), "medium", "medium", "dd MMMM YYYY", null, "gregorian", "fr"), "html", null, true);
        echo "
                    à ";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "createdAt", [], "any", false, false, false, 83), "medium", "medium", "HH", null, "gregorian", "fr"), "html", null, true);
        echo "
                    h";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "createdAt", [], "any", false, false, false, 84), "medium", "medium", "mm", null, "gregorian", "fr"), "html", null, true);
        echo ".
                </div>

                <p class=\"block\">
                    \"";
        // line 88
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "message", [], "any", false, false, false, 88)), "html", null, true);
        echo ".\"
                </p>

                <h3 class=\"text-center\" style=\"padding-top: 15px\">Informations du contact</h3>

                <p class=\"text-center\">Email : <a href=\"mailto:";
        // line 93
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", false, false, false, 93)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", false, false, false, 93)), "html", null, true);
        echo "</a></p>
                <p class=\"text-center\">Téléphone : <a href=\"tel:";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "phone", [], "any", false, false, false, 94), "html", null, true);
        echo "\">+33";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "phone", [], "any", false, false, false, 94), "html", null, true);
        echo "</a></p>
                <p class=\"text-center\">Adresse Complète
                    : ";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "address", [], "any", false, false, false, 96), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "postalCode", [], "any", false, false, false, 96), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "city", [], "any", false, false, false, 96), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
";
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
        return array (  161 => 96,  154 => 94,  148 => 93,  140 => 88,  133 => 84,  129 => 83,  125 => 82,  116 => 78,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mail/emails.html.twig", "/var/www/templates/mail/emails.html.twig");
    }
}
