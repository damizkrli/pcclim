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

/* /parts/accueil.html.twig */
class __TwigTemplate_acfe9a3c74819ddbddac80a2ffcdf967 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/parts/accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/parts/accueil.html.twig"));

        // line 1
        echo "<section class=\"bg-white py-24\">

    <img 
    class=\"w-full aspect-[16/5] object-cover max-sm:h-auto max-sm:w-auto\"
    src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/equipe_pc_clim.jpeg"), "html", null, true);
        echo "\"
    alt=\"clim\"
    />

    <div class=\"flex justify-between max-w-[1200px] mx-auto -translate-y-1/2 flex-wrap\">
        <div class=\"hidden sm:inline-block shadow-lg overflow-hidden p-2 m-2 text-center bg-[#112869] rounded-lg\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"0.8\"
                    stroke=\"white\"
                    class=\"w-32 h-32 pl-3 pr-3 pb-3 pt-3\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\"
                        d=\"M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z\"/>
                </svg>
            <div class=\"mb-2 text-white\">
                <p class=\"text-center whitespace-pre\">Dépannage</p>
                <p class=\"text-center whitespace-pre\">Rapide</p>
            </div>
        </div>

        <div class=\"hidden sm:inline-block shadow-lg overflow-hidden p-2 m-2 text-center bg-[#112869] rounded-lg\">
             <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"0.8\"
                 stroke=\"white\"
                 class=\"w-32 h-32 pl-3 pr-3 pb-3 pt-3\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\"
                      d=\"M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z\"/>
            </svg>
            <div class=\"mb-2 text-white\">
                <p class=\"text-center whitespace-pre\">Devis</p>
                <p class=\"text-center whitespace-pre\">gratuits</p>
            </div>
        </div>

        <div class=\"hidden sm:inline-block shadow-lg overflow-hidden p-2 m-2 text-center bg-[#112869] rounded-lg\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"0.8\"
                 stroke=\"white\" class=\"w-32 h-32 pl-3 pr-3 pb-3 pt-3\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\"
                      d=\"M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18\"/>
            </svg>
            <div class=\"mb-2 text-white\">
                <p class=\"text-center whitespace-pre\">Conseils</p>
                <p class=\"text-center whitespace-pre\">personnalisés</p>
            </div>
        </div>

        <div class=\"hidden sm:inline-block shadow-lg overflow-hidden p-2 m-2 text-center bg-[#112869] rounded-lg\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"0.8\"
                 stroke=\"white\" class=\"w-32 h-32 pl-3 pr-3 pb-3 pt-3\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\"
                      d=\"M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z\"/>
            </svg>
            <div class=\"mb-2 text-white\">
                <p class=\"text-center whitespace-pre\">Étude de votre</p>
                <p class=\"text-center whitespace-pre\">projet</p>
            </div>
        </div>
    </div>

</section>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "/parts/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"bg-white py-24\">

    <img 
    class=\"w-full aspect-[16/5] object-cover max-sm:h-auto max-sm:w-auto\"
    src=\"{{ asset('build/equipe_pc_clim.jpeg') }}\"
    alt=\"clim\"
    />

    <div class=\"flex justify-between max-w-[1200px] mx-auto -translate-y-1/2 flex-wrap\">
        <div class=\"hidden sm:inline-block shadow-lg overflow-hidden p-2 m-2 text-center bg-[#112869] rounded-lg\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"0.8\"
                    stroke=\"white\"
                    class=\"w-32 h-32 pl-3 pr-3 pb-3 pt-3\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\"
                        d=\"M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z\"/>
                </svg>
            <div class=\"mb-2 text-white\">
                <p class=\"text-center whitespace-pre\">Dépannage</p>
                <p class=\"text-center whitespace-pre\">Rapide</p>
            </div>
        </div>

        <div class=\"hidden sm:inline-block shadow-lg overflow-hidden p-2 m-2 text-center bg-[#112869] rounded-lg\">
             <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"0.8\"
                 stroke=\"white\"
                 class=\"w-32 h-32 pl-3 pr-3 pb-3 pt-3\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\"
                      d=\"M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z\"/>
            </svg>
            <div class=\"mb-2 text-white\">
                <p class=\"text-center whitespace-pre\">Devis</p>
                <p class=\"text-center whitespace-pre\">gratuits</p>
            </div>
        </div>

        <div class=\"hidden sm:inline-block shadow-lg overflow-hidden p-2 m-2 text-center bg-[#112869] rounded-lg\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"0.8\"
                 stroke=\"white\" class=\"w-32 h-32 pl-3 pr-3 pb-3 pt-3\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\"
                      d=\"M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18\"/>
            </svg>
            <div class=\"mb-2 text-white\">
                <p class=\"text-center whitespace-pre\">Conseils</p>
                <p class=\"text-center whitespace-pre\">personnalisés</p>
            </div>
        </div>

        <div class=\"hidden sm:inline-block shadow-lg overflow-hidden p-2 m-2 text-center bg-[#112869] rounded-lg\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"0.8\"
                 stroke=\"white\" class=\"w-32 h-32 pl-3 pr-3 pb-3 pt-3\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\"
                      d=\"M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z\"/>
            </svg>
            <div class=\"mb-2 text-white\">
                <p class=\"text-center whitespace-pre\">Étude de votre</p>
                <p class=\"text-center whitespace-pre\">projet</p>
            </div>
        </div>
    </div>

</section>", "/parts/accueil.html.twig", "/var/www/html/templates/parts/accueil.html.twig");
    }
}
