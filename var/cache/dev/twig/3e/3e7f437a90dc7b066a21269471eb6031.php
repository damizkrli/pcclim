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

/* _footer.html.twig */
class __TwigTemplate_54faa9838a5ddf886ccfb1dd06cccccd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_footer.html.twig"));

        // line 1
        echo "<footer class=\"footer lg:grid lg:grid-cols-5 border-t-2\">
    <div class=\"relative block h-32 lg:col-span-2 lg:h-full\">
    <iframe
        src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2791.4547490880846!2d-0.9905059232644341!3d45.60150472426624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480175f3f8ce7e71%3A0xce4d7d1e3a6e1b95!2s40%20Av.%20Joseph%20B%C3%A9teille%2C%2017110%20Saint-Georges-de-Didonne!5e0!3m2!1sfr!2sfr!4v1715868387070!5m2!1sfr!2sfr\"
        class=\"w-full h-full block border-r-2\"
        allowfullscreen=\"allowfullscreen\"
        loading=\"lazy\"
        referrerpolicy=\"no-referrer-when-downgrade\">
    </iframe>
    </div>

    <div class=\"px-4 py-16 sm:px-6 lg:col-span-3 lg:px-8\">
        <div class=\"grid grid-cols-1 gap-8 md:grid-cols-1 sm:flex-row justify-center items-center text-end\">
            <div>
                <span class=\"text-xs uppercase tracking-wide text-gray-500\"> Adresse Postale </span>
                <p class=\"title block text-2xl font-medium text-gray-900 sm:text-3xl\">2 bis rue Marcel Pagnol</p>
                <p>17110 Saint Georges De Didonne</p>

                <ul class=\"mt-8 space-y-1 text-sm text-gray-700\">
                    <li>Le bureau vous accueille</li>
                    <li>du Lundi au Vendredi :</li>
                    <li>9h à 12h et de 14h à 18h</li>
                </ul>
            </div>
        </div>

        <div class=\"mt-12 border-t border-gray-100 pt-12\">

            <p class=\"mt-8 text-xs text-gray-500 sm:mt-0 flex flex-wrap justify-end items-end pt-2\">&copy; 2014. PC
                CLIM. Tout Droit Réservés.
            </p>

        </div>
    </div>

</footer>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer lg:grid lg:grid-cols-5 border-t-2\">
    <div class=\"relative block h-32 lg:col-span-2 lg:h-full\">
    <iframe
        src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2791.4547490880846!2d-0.9905059232644341!3d45.60150472426624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480175f3f8ce7e71%3A0xce4d7d1e3a6e1b95!2s40%20Av.%20Joseph%20B%C3%A9teille%2C%2017110%20Saint-Georges-de-Didonne!5e0!3m2!1sfr!2sfr!4v1715868387070!5m2!1sfr!2sfr\"
        class=\"w-full h-full block border-r-2\"
        allowfullscreen=\"allowfullscreen\"
        loading=\"lazy\"
        referrerpolicy=\"no-referrer-when-downgrade\">
    </iframe>
    </div>

    <div class=\"px-4 py-16 sm:px-6 lg:col-span-3 lg:px-8\">
        <div class=\"grid grid-cols-1 gap-8 md:grid-cols-1 sm:flex-row justify-center items-center text-end\">
            <div>
                <span class=\"text-xs uppercase tracking-wide text-gray-500\"> Adresse Postale </span>
                <p class=\"title block text-2xl font-medium text-gray-900 sm:text-3xl\">2 bis rue Marcel Pagnol</p>
                <p>17110 Saint Georges De Didonne</p>

                <ul class=\"mt-8 space-y-1 text-sm text-gray-700\">
                    <li>Le bureau vous accueille</li>
                    <li>du Lundi au Vendredi :</li>
                    <li>9h à 12h et de 14h à 18h</li>
                </ul>
            </div>
        </div>

        <div class=\"mt-12 border-t border-gray-100 pt-12\">

            <p class=\"mt-8 text-xs text-gray-500 sm:mt-0 flex flex-wrap justify-end items-end pt-2\">&copy; 2014. PC
                CLIM. Tout Droit Réservés.
            </p>

        </div>
    </div>

</footer>
", "_footer.html.twig", "/var/www/html/templates/_footer.html.twig");
    }
}
