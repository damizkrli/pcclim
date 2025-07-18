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

/* parts/accueil.html.twig */
class __TwigTemplate_84e086f1c064c55de461bd56eb80440e extends Template
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
        echo "<div class=\"accueil mb-8\">

        <img class=\"presentation max-sm:h-auto max-sm:w-auto\"
             src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/equipe_pc_clim.jpeg"), "html", null, true);
        echo "\"
             width=\"900\" height=\"300\"
             alt=\"clim\">

    <div class=\"box flex justify-between mx-auto\">

        <div class=\"div1 inline-block max-sm:block shadow-lg max-xl:overflow-hidden max-sm:hidden\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"0.8\"
                 stroke=\"white\"
                 class=\"w-32 w-32 pl-3 pr-3 pb-3 pt-3\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\"
                      d=\"M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z\"/>
            </svg>
            <div class=\"info mb-2\">
                <p class=\"text-center whitespace-pre\">Dépannage</p>
                <p class=\"text-center whitespace-pre\">Rapide</p>
            </div>
        </div>

        <div class=\"div2 inline-block max-md:block shadow-lg max-xl:overflow-hidden max-sm:hidden\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"0.8\"
                 stroke=\"white\"
                 class=\"w-32 w-32 pl-3 pr-3 pb-3 pt-3\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\"
                      d=\"M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z\"/>
            </svg>
            <div class=\"mb-2\">
                <p class=\"text-center whitespace-pre\">Devis</p>
                <p class=\"text-center whitespace-pre\">gratuits</p>
            </div>
        </div>

        <div class=\"div3 inline-block max-md:block shadow-lg max-xl:overflow-hidden max-sm:hidden\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"0.8\"
                 stroke=\"white\" class=\"w-32 w-32 pl-3 pr-3 pb-3 pt-3\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\"
                      d=\"M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18\"/>
            </svg>
            <div class=\"mb-2\">
                <p class=\"text-center whitespace-pre\">Conseils</p>
                <p class=\"text-center whitespace-pre\">personnalisés</p>
            </div>
        </div>

        <div class=\"div4 inline-block max-md:block shadow-lg max-xl:overflow-hidden max-sm:hidden\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"0.8\"
                 stroke=\"white\" class=\"w-32 w-32 pl-3 pr-3 pb-3 pt-3\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\"
                      d=\"M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z\"/>
            </svg>
            <div class=\"mb-2\">
                <p class=\"text-center whitespace-pre\">Étude de votre</p>
                <p class=\"text-center whitespace-pre\">projet</p>
            </div>
        </div>

    </div>

    <div class=\"container justify-start mx-auto max-sm:p-5 max-sm:block\">
        <p class=\"indent-5 text\">
            Pascal Pasquier et Samuel Coureau sont les fondateurs de l'entreprise PC Clim, spécialisée dans
            l'installation
            de pompes à chaleur, basée en Charente-Maritime.
        </p>
        <p class=\"indent-5 mt-4 text\">
            Depuis le debut de leur collaboration en 2014, ils proposent une large gamme de
            pompes à chaleur adaptées aux besoins de chaque client, que ce soit pour le chauffage de leur
            habitation, le rafraîchissement de leur maison en été ou encore la production d'eau chaude sanitaire.
        </p>
        <p class=\"indent-5 mt-4 text\">
            Ils sont également en mesure de proposer des solutions personnalisés, économiques et écologiques pour
            répondre aux exigences spécifiques de chaque projet.
        </p>

    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "parts/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "parts/accueil.html.twig", "/var/www/templates/parts/accueil.html.twig");
    }
}
