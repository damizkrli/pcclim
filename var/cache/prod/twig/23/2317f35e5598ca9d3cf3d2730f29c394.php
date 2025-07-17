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

/* parts/prestations.html.twig */
class __TwigTemplate_4b1df912512272d83d215492dec09b4b extends Template
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
        echo "<section class=\"presta\">

    <div class=\"mx-auto max-w-screen-2xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16\">
        <div class=\"md:flex md:items-end md:justify-between\">
            <div class=\"max-sm:w-auto\">
                <h2 class=\"title text-4xl font-bold tracking-tight sm:text-5xl\">
                    Nos solutions pour vous
                </h2>
            </div>
        </div>

        <div class=\"grid grid-cols-1 gap-4 md:grid-cols-3 lg:grid-cols-1 xl:grid-cols-3 py-24\">

            ";
        // line 15
        echo "            <div class=\"card grid grid-rows-1 max-sm:grid-cols-1 max-xl:grid-cols-1 max-sm:m-4 min-md:grid-rows-1 px-10\">
                <div>
                    <img class=\"presta image-fixed-size max-xl:w-full mx-auto rounded shadow-lg\"
                         src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/climatisation_air_air.png"), "html", null, true);
        echo "\"
                         alt=\"installation-pc-clim\">
                </div>
                <div class=\"p-5\">
                    <h3 class=\"font-bold text-slate-700 leading-snug title text-center\">Installation</h3>
                    <p class=\"mt-2 text-xl text-slate-600 text\">
                        La pompe à chaleur, l'allié incontournable pour un habitat économe et durable.
                    </p>
                </div>
            </div>

            ";
        // line 30
        echo "            <div class=\"grid grid-rows-1 max-sm:grid-cols-1 max-xl:grid-cols-1 max-sm:m-4 min-md:grid-rows-1 ps-10 pe-10\">
                <div>
                    <img class=\"presta image-fixed-size max-xl:w-full mx-auto rounded shadow-lg\"
                         src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/employe-pc-clim.jpg"), "html", null, true);
        echo "\"
                         alt=\"entretien-pc-clim\">
                </div>
                <div class=\"p-5\">
                    <h3 class=\"font-bold text-slate-700 leading-snug title text-center\">Entretien</h3>
                    <p class=\"mt-2 text-xl text-slate-600 text\">
                        Un entretien régulier, la clé d'une pompe à chaleur performante et durable.
                    </p>
                </div>
            </div>

            ";
        // line 45
        echo "            <div class=\"grid grid-rows-1 max-sm:grid-cols-1 max-xl:grid-cols-1 max-sm:m-4 min-md:grid-rows-1 px-10\">
                <div>
                    <img class=\"presta image-fixed-size max-xl:w-full mx-auto rounded shadow-lg\"
                         src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/projets-personnalises.jpg"), "html", null, true);
        echo "\"
                         alt=\"entretien-pc-clim\">
                </div>
                <div class=\"p-5\">
                    <h3 class=\"font-bold text-slate-700 leading-snug title text-center\">Sur-mesure</h3>
                    <p class=\"mt-2 text-xl text-slate-600 text\">
                        Contactez-nous et optez pour une installation sur-mesure, durable et performante.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "parts/prestations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 48,  90 => 45,  76 => 33,  71 => 30,  57 => 18,  52 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "parts/prestations.html.twig", "/var/www/templates/parts/prestations.html.twig");
    }
}
