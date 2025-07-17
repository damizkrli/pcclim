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

/* /parts/avis.html.twig */
class __TwigTemplate_9e8cec511ee317a4eb8f61f4a369a5e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/parts/avis.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/parts/avis.html.twig"));

        // line 1
        echo "<section class=\"bg-white py-24\">
    <div class=\"mx-auto max-w-screen-2xl px-4 sm:px-6 lg:px-8 lg:py-16 py-24\">
        <div class=\"md:flex md:items-end md:justify-between\">
            <div class=\"max-w-xl\">
                <h2 class=\"title text-4xl font-bold tracking-tight sm:text-5xl sm:text-center\">
                    ⭐️ Ce que disent nos clients
                </h2>
            </div>
        </div>

        <div class=\"mt-8 grid grid-cols-1 gap-4 md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-3 py-24\">

            <blockquote class=\"flex h-full flex-col justify-between p-6 shadow-sm sm:p-8 rounded-2xl bg-[#f5f5f5]\">
                <div>
                    <div class=\"flex gap-0.5 text-green-500\">
                        <div class=\"flex items-center justify-center mb-2\">
                            ";
        // line 17
        $this->loadTemplate("/macro/stars.html.twig", "/parts/avis.html.twig", 17)->display($context);
        // line 18
        echo "                        </div>
                    </div>

                    <div class=\"mt-4\">
                        <p class=\"text-2xl font-bold text-rose-600 sm:text-3xl\">
                            Je recommande
                        </p>

                        <p class=\"mt-4 leading-relaxed text-gray-700\">
                            Très réactifs et bon travail !
                        </p>
                    </div>
                </div>

                <footer class=\"mt-4 text-sm font-medium text-gray-700 sm:mt-6\">
                    &mdash; Claire Oliveperreau
                    <p><small class=\"italic\">le 16/04/2024</small></p>
                </footer>
            </blockquote>

            <blockquote class=\"flex h-full flex-col justify-between p-6 shadow-sm sm:p-8 rounded-2xl bg-[#f5f5f5]\">
                <div>
                    <div class=\"flex gap-0.5 text-green-500\">
                        <div class=\"flex items-center justify-center mb-2\">
                            ";
        // line 42
        $this->loadTemplate("/macro/stars.html.twig", "/parts/avis.html.twig", 42)->display($context);
        // line 43
        echo "                        </div>
                    </div>

                    <div class=\"mt-4\">
                        <p class=\"text-2xl font-bold text-rose-600 sm:text-3xl\">
                            Très satisfaits
                        </p>

                        <p class=\"mt-4 leading-relaxed text-gray-700\">
                            Devis rapide. Efficace. Nous verrons après l’installation
                            La Clim est installée : ponctuels, travail soigné, personnel compétent, chantier propre au
                            départ de l’équipe. Ils sont venus à 6 les 2 Clim installées en moins de 4 h. Explications
                            pour la programmation claires.
                        </p>
                    </div>
                </div>

                <footer class=\"mt-4 text-sm font-medium text-gray-700 sm:mt-6\">
                    &mdash; Danièle Dangleterre
                    <p><small class=\"italic\">le 29/11/2023</small></p>
                </footer>
            </blockquote>

            <blockquote class=\"flex h-full flex-col justify-between p-6 shadow-sm sm:p-8 rounded-2xl bg-[#f5f5f5]\">
                <div>
                    <div class=\"flex gap-0.5 text-green-500\">
                        <div class=\"flex items-center justify-center mb-2\">
                            ";
        // line 70
        $this->loadTemplate("/macro/stars.html.twig", "/parts/avis.html.twig", 70)->display($context);
        // line 71
        echo "                        </div>
                    </div>

                    <div class=\"mt-4\">
                        <p class=\"text-2xl font-bold text-rose-600 sm:text-3xl\">
                            Service Exceptionnel
                        </p>

                        <p class=\"mt-4 leading-relaxed text-gray-700\">
                            Je suis serein pour l'avenir : l'équipe de PC Clim sera à même d'assurer l'entretien ou
                            toute opération de SAV qui serait nécessaire. À l'appui de toute mon expérience client, je
                            recommande vivement la Société PC CLIM. Un grand merci à toute l'équipe pour la qualité de
                            votre travail.
                        </p>
                    </div>
                </div>

                <footer class=\"mt-4 text-sm font-medium text-gray-700 sm:mt-6\">
                    &mdash; Laurent C.
                    <p><small class=\"italic\">le 21/10/2023</small></p>
                </footer>
            </blockquote>

            <blockquote class=\"flex h-full flex-col justify-between p-6 shadow-sm sm:p-8 rounded-2xl bg-[#f5f5f5]\">
                <div>
                    <div class=\"flex gap-0.5 text-green-500\">
                        <div class=\"flex items-center justify-center mb-2\">
                            ";
        // line 98
        $this->loadTemplate("/macro/stars.html.twig", "/parts/avis.html.twig", 98)->display($context);
        // line 99
        echo "                        </div>
                    </div>

                    <div class=\"mt-4\">
                        <p class=\"text-2xl font-bold text-rose-600 sm:text-3xl\">
                            Satisfaction totale
                        </p>

                        <p class=\"mt-4 leading-relaxed text-gray-700\">
                            Délais devis rapide, date intervention et heure respectés, clim installé avec une équipe
                            sympathique en une 1/2 journée avec 5 employés . Chantier rendu propre. Rapport qualité prix
                            excellent. Entreprise très sérieuse.que je recommande vivement.
                        </p>
                    </div>
                </div>

                <footer class=\"mt-4 text-sm font-medium text-gray-700 sm:mt-6\">
                    &mdash; Phillipe MAINCENT
                    <p><small class=\"italic\">le 17/08/2023</small></p>
                </footer>
            </blockquote>

            <blockquote class=\"flex h-full flex-col justify-between p-6 shadow-sm sm:p-8 rounded-2xl bg-[#f5f5f5]\">
                <div>
                    <div class=\"flex gap-0.5 text-green-500\">
                        <div class=\"flex items-center justify-center mb-2\">
                            ";
        // line 125
        $this->loadTemplate("/macro/stars.html.twig", "/parts/avis.html.twig", 125)->display($context);
        // line 126
        echo "                        </div>
                    </div>

                    <div class=\"mt-4\">
                        <p class=\"text-2xl font-bold text-rose-600 sm:text-3xl\">
                            Nous recommandons cette entreprise
                        </p>

                        <p class=\"mt-4 leading-relaxed text-gray-700\">
                            Installation d’une climatisation : devis rapide , rendez-vous pour la pose fixé dès
                            l’acceptation du devis , confirmation la veille de l’intervention réalisée au jour et heures
                            prévus. Travaux effectués très proprement par personnes agréables et compétentes !
                        <p><b>Aspects positifs :</b> Ponctualité, Professionnalisme, Qualité, Rapport qualité-prix,
                            Réactivité</p>
                        </p>
                    </div>
                </div>

                <footer class=\"mt-4 text-sm font-medium text-gray-700 sm:mt-6\">
                    &mdash; Claude MAUCOURANT
                    <p><small class=\"italic\">le 12/04/2023</small></p>
                </footer>
            </blockquote>

            <blockquote class=\"flex h-full flex-col justify-between p-6 shadow-sm sm:p-8 rounded-2xl bg-[#f5f5f5]\">
                <div>
                    <div class=\"flex gap-0.5 text-green-500\">
                        <div class=\"flex items-center justify-center mb-2\">
                            ";
        // line 154
        $this->loadTemplate("/macro/stars.html.twig", "/parts/avis.html.twig", 154)->display($context);
        // line 155
        echo "                        </div>
                    </div>

                    <div class=\"mt-4\">
                        <p class=\"text-2xl font-bold text-rose-600 sm:text-3xl\">
                            Professionnalisme
                        </p>

                        <p class=\"mt-4 leading-relaxed text-gray-700\">
                            Personnes compétentes et sympathiques , chantier tres propre : de bons professionnels.
                        </p>
                    </div>
                </div>

                <footer class=\"mt-4 text-sm font-medium text-gray-700 sm:mt-6\">
                    &mdash; Jean-Pascal THENEVOT
                    <p><small class=\"italic\">le 18/03/2021</small></p>
                </footer>
            </blockquote>

        </div>
    </div>
</section>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "/parts/avis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 155,  213 => 154,  183 => 126,  181 => 125,  153 => 99,  151 => 98,  122 => 71,  120 => 70,  91 => 43,  89 => 42,  63 => 18,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"bg-white py-24\">
    <div class=\"mx-auto max-w-screen-2xl px-4 sm:px-6 lg:px-8 lg:py-16 py-24\">
        <div class=\"md:flex md:items-end md:justify-between\">
            <div class=\"max-w-xl\">
                <h2 class=\"title text-4xl font-bold tracking-tight sm:text-5xl sm:text-center\">
                    ⭐️ Ce que disent nos clients
                </h2>
            </div>
        </div>

        <div class=\"mt-8 grid grid-cols-1 gap-4 md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-3 py-24\">

            <blockquote class=\"flex h-full flex-col justify-between p-6 shadow-sm sm:p-8 rounded-2xl bg-[#f5f5f5]\">
                <div>
                    <div class=\"flex gap-0.5 text-green-500\">
                        <div class=\"flex items-center justify-center mb-2\">
                            {% include '/macro/stars.html.twig' %}
                        </div>
                    </div>

                    <div class=\"mt-4\">
                        <p class=\"text-2xl font-bold text-rose-600 sm:text-3xl\">
                            Je recommande
                        </p>

                        <p class=\"mt-4 leading-relaxed text-gray-700\">
                            Très réactifs et bon travail !
                        </p>
                    </div>
                </div>

                <footer class=\"mt-4 text-sm font-medium text-gray-700 sm:mt-6\">
                    &mdash; Claire Oliveperreau
                    <p><small class=\"italic\">le 16/04/2024</small></p>
                </footer>
            </blockquote>

            <blockquote class=\"flex h-full flex-col justify-between p-6 shadow-sm sm:p-8 rounded-2xl bg-[#f5f5f5]\">
                <div>
                    <div class=\"flex gap-0.5 text-green-500\">
                        <div class=\"flex items-center justify-center mb-2\">
                            {% include '/macro/stars.html.twig' %}
                        </div>
                    </div>

                    <div class=\"mt-4\">
                        <p class=\"text-2xl font-bold text-rose-600 sm:text-3xl\">
                            Très satisfaits
                        </p>

                        <p class=\"mt-4 leading-relaxed text-gray-700\">
                            Devis rapide. Efficace. Nous verrons après l’installation
                            La Clim est installée : ponctuels, travail soigné, personnel compétent, chantier propre au
                            départ de l’équipe. Ils sont venus à 6 les 2 Clim installées en moins de 4 h. Explications
                            pour la programmation claires.
                        </p>
                    </div>
                </div>

                <footer class=\"mt-4 text-sm font-medium text-gray-700 sm:mt-6\">
                    &mdash; Danièle Dangleterre
                    <p><small class=\"italic\">le 29/11/2023</small></p>
                </footer>
            </blockquote>

            <blockquote class=\"flex h-full flex-col justify-between p-6 shadow-sm sm:p-8 rounded-2xl bg-[#f5f5f5]\">
                <div>
                    <div class=\"flex gap-0.5 text-green-500\">
                        <div class=\"flex items-center justify-center mb-2\">
                            {% include '/macro/stars.html.twig' %}
                        </div>
                    </div>

                    <div class=\"mt-4\">
                        <p class=\"text-2xl font-bold text-rose-600 sm:text-3xl\">
                            Service Exceptionnel
                        </p>

                        <p class=\"mt-4 leading-relaxed text-gray-700\">
                            Je suis serein pour l'avenir : l'équipe de PC Clim sera à même d'assurer l'entretien ou
                            toute opération de SAV qui serait nécessaire. À l'appui de toute mon expérience client, je
                            recommande vivement la Société PC CLIM. Un grand merci à toute l'équipe pour la qualité de
                            votre travail.
                        </p>
                    </div>
                </div>

                <footer class=\"mt-4 text-sm font-medium text-gray-700 sm:mt-6\">
                    &mdash; Laurent C.
                    <p><small class=\"italic\">le 21/10/2023</small></p>
                </footer>
            </blockquote>

            <blockquote class=\"flex h-full flex-col justify-between p-6 shadow-sm sm:p-8 rounded-2xl bg-[#f5f5f5]\">
                <div>
                    <div class=\"flex gap-0.5 text-green-500\">
                        <div class=\"flex items-center justify-center mb-2\">
                            {% include '/macro/stars.html.twig' %}
                        </div>
                    </div>

                    <div class=\"mt-4\">
                        <p class=\"text-2xl font-bold text-rose-600 sm:text-3xl\">
                            Satisfaction totale
                        </p>

                        <p class=\"mt-4 leading-relaxed text-gray-700\">
                            Délais devis rapide, date intervention et heure respectés, clim installé avec une équipe
                            sympathique en une 1/2 journée avec 5 employés . Chantier rendu propre. Rapport qualité prix
                            excellent. Entreprise très sérieuse.que je recommande vivement.
                        </p>
                    </div>
                </div>

                <footer class=\"mt-4 text-sm font-medium text-gray-700 sm:mt-6\">
                    &mdash; Phillipe MAINCENT
                    <p><small class=\"italic\">le 17/08/2023</small></p>
                </footer>
            </blockquote>

            <blockquote class=\"flex h-full flex-col justify-between p-6 shadow-sm sm:p-8 rounded-2xl bg-[#f5f5f5]\">
                <div>
                    <div class=\"flex gap-0.5 text-green-500\">
                        <div class=\"flex items-center justify-center mb-2\">
                            {% include '/macro/stars.html.twig' %}
                        </div>
                    </div>

                    <div class=\"mt-4\">
                        <p class=\"text-2xl font-bold text-rose-600 sm:text-3xl\">
                            Nous recommandons cette entreprise
                        </p>

                        <p class=\"mt-4 leading-relaxed text-gray-700\">
                            Installation d’une climatisation : devis rapide , rendez-vous pour la pose fixé dès
                            l’acceptation du devis , confirmation la veille de l’intervention réalisée au jour et heures
                            prévus. Travaux effectués très proprement par personnes agréables et compétentes !
                        <p><b>Aspects positifs :</b> Ponctualité, Professionnalisme, Qualité, Rapport qualité-prix,
                            Réactivité</p>
                        </p>
                    </div>
                </div>

                <footer class=\"mt-4 text-sm font-medium text-gray-700 sm:mt-6\">
                    &mdash; Claude MAUCOURANT
                    <p><small class=\"italic\">le 12/04/2023</small></p>
                </footer>
            </blockquote>

            <blockquote class=\"flex h-full flex-col justify-between p-6 shadow-sm sm:p-8 rounded-2xl bg-[#f5f5f5]\">
                <div>
                    <div class=\"flex gap-0.5 text-green-500\">
                        <div class=\"flex items-center justify-center mb-2\">
                            {% include '/macro/stars.html.twig' %}
                        </div>
                    </div>

                    <div class=\"mt-4\">
                        <p class=\"text-2xl font-bold text-rose-600 sm:text-3xl\">
                            Professionnalisme
                        </p>

                        <p class=\"mt-4 leading-relaxed text-gray-700\">
                            Personnes compétentes et sympathiques , chantier tres propre : de bons professionnels.
                        </p>
                    </div>
                </div>

                <footer class=\"mt-4 text-sm font-medium text-gray-700 sm:mt-6\">
                    &mdash; Jean-Pascal THENEVOT
                    <p><small class=\"italic\">le 18/03/2021</small></p>
                </footer>
            </blockquote>

        </div>
    </div>
</section>

{#
<blockquote class=\"blockquote flex h-full flex-col justify-between p-6 shadow-sm sm:p-8 rounded-2xl\">
    <div>
        <div class=\"flex gap-0.5 text-green-500\">
            <div class=\"flex items-center justify-center mb-2\">
                {% include '/macro/stars.html.twig' %}
            </div>
        </div>

        <div class=\"mt-4\">
            <p class=\"text-2xl font-bold text-rose-600 sm:text-3xl\">
                TITRE DE L'AVIS
            </p>

            <p class=\"mt-4 leading-relaxed text-gray-700\">
                CORPS DE L'AVIS
            </p>
        </div>
    </div>

    <footer class=\"mt-4 text-sm font-medium text-gray-700 sm:mt-6\">
        &mdash; NOM DE LA PERSONNE
        <p><small class=\"italic\">le XX/XX/20XX</small></p>
    </footer>
</blockquote>
#}", "/parts/avis.html.twig", "/var/www/html/templates/parts/avis.html.twig");
    }
}
