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
class __TwigTemplate_45cced65b6d29bcee1a03280b210dc7c extends Template
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
        echo "<footer class=\"footer lg:grid lg:grid-cols-5 border-t-2\">
    <div class=\"relative block h-32 lg:col-span-2 lg:h-full\">
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2791.4547490880846!2d-0.9905059232644341!3d45.60150472426624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480175f3f8ce7e71%3A0xce4d7d1e3a6e1b95!2s40%20Av.%20Joseph%20B%C3%A9teille%2C%2017110%20Saint-Georges-de-Didonne!5e0!3m2!1sfr!2sfr!4v1715868387070!5m2!1sfr!2sfr\"
                class=\"p-10 border-r-2\" width=\"600\" height=\"450\" allowfullscreen=\"allowfullscreen\" loading=\"lazy\"
                referrerpolicy=\"no-referrer-when-downgrade\">
        </iframe>
    </div>

    <div class=\"px-4 py-16 sm:px-6 lg:col-span-3 lg:px-8\">
        <div class=\"grid grid-cols-1 gap-8 md:grid-cols-1 sm:flex-row justify-center items-center text-end\">
            <div>
                <span class=\"text-xs uppercase tracking-wide text-gray-500\"> Adresse Postale </span>
                <p class=\"title block text-2xl font-medium text-gray-900 sm:text-3xl\">40 avenue Joseph Béteille</p>
                <p>17110 Saint Georges De Didonne</p>

                <ul class=\"mt-8 space-y-1 text-sm text-gray-700\">
                    <li>Le bureau vous accueille</li>
                    <li>du Lundi au Vendredi :</li>
                    <li>9h à 12h et de 13h30 à 18h</li>
                </ul>
            </div>
        </div>

        <div class=\"mt-12 border-t border-gray-100 pt-12\">

";
        // line 34
        echo "
";
        // line 42
        echo "
";
        // line 44
        echo "
            <p class=\"mt-8 text-xs text-gray-500 sm:mt-0 flex flex-wrap justify-end items-end pt-2\">&copy; 2014. PC
                CLIM. Tout Droit Réservés.
            </p>

        </div>
    </div>

</footer>
";
    }

    public function getTemplateName()
    {
        return "_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 44,  67 => 42,  64 => 34,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_footer.html.twig", "/var/www/templates/_footer.html.twig");
    }
}
