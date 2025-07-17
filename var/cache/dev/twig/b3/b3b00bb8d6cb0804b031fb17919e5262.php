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

/* /parts/prestations.html.twig */
class __TwigTemplate_c20e0d04b7b70c463ffdddc6858f4fa4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/parts/prestations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/parts/prestations.html.twig"));

        // line 1
        echo "<section class=\"bg-[#f5f5f5] py-24\">
  <div class=\"mx-auto max-w-screen-2xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16\">
    <div class=\"md:flex md:items-end md:justify-between\">
      <div class=\"max-sm:w-auto\">
        <h2 class=\"title text-4xl font-bold tracking-tight sm:text-5xl\">
          📌 Des solutions adaptées à vos besoins
        </h2>
      </div>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-12 py-24\">
      <div class=\"flex flex-col items-center px-8 text-center\">
        <img
          class=\"w-full max-w-xs rounded shadow-lg mb-6\"
          src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/climatisation_air_air.png"), "html", null, true);
        echo "\"
          alt=\"installation-pc-clim\"
        />
        <h3 class=\"font-bold text-slate-700 text-2xl mb-2\">Installation</h3>
        <p class=\"text-xl text-slate-600 italic\">
          La pompe à chaleur, l'allié incontournable pour un habitat économe et durable.
        </p>
      </div>

      <div class=\"flex flex-col items-center px-8 text-center\">
        <img
          class=\"w-full max-w-xs rounded shadow-lg mb-6\"
          src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/employe-pc-clim.jpg"), "html", null, true);
        echo "\"
          alt=\"entretien-pc-clim\"
        />
        <h3 class=\"font-bold text-slate-700 text-2xl mb-2\">Entretien</h3>
        <p class=\"text-xl text-slate-600 italic\">
          Un entretien régulier, la clé d'une pompe à chaleur performante et durable.
        </p>
      </div>

      <div class=\"flex flex-col items-center px-8 text-center\">
        <img
          class=\"w-full max-w-xs rounded shadow-lg mb-6\"
          src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/projets-personnalises.jpg"), "html", null, true);
        echo "\"
          alt=\"sur-mesure-pc-clim\"
        />
        <h3 class=\"font-bold text-slate-700 text-2xl mb-2\">Sur-mesure</h3>
        <p class=\"text-xl text-slate-600 italic\">
          Contactez-nous et optez pour une installation sur-mesure, durable et performante.
        </p>
      </div>
    </div>
  </div>
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "/parts/prestations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 39,  74 => 27,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"bg-[#f5f5f5] py-24\">
  <div class=\"mx-auto max-w-screen-2xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16\">
    <div class=\"md:flex md:items-end md:justify-between\">
      <div class=\"max-sm:w-auto\">
        <h2 class=\"title text-4xl font-bold tracking-tight sm:text-5xl\">
          📌 Des solutions adaptées à vos besoins
        </h2>
      </div>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-12 py-24\">
      <div class=\"flex flex-col items-center px-8 text-center\">
        <img
          class=\"w-full max-w-xs rounded shadow-lg mb-6\"
          src=\"{{ asset('build/climatisation_air_air.png') }}\"
          alt=\"installation-pc-clim\"
        />
        <h3 class=\"font-bold text-slate-700 text-2xl mb-2\">Installation</h3>
        <p class=\"text-xl text-slate-600 italic\">
          La pompe à chaleur, l'allié incontournable pour un habitat économe et durable.
        </p>
      </div>

      <div class=\"flex flex-col items-center px-8 text-center\">
        <img
          class=\"w-full max-w-xs rounded shadow-lg mb-6\"
          src=\"{{ asset('build/employe-pc-clim.jpg') }}\"
          alt=\"entretien-pc-clim\"
        />
        <h3 class=\"font-bold text-slate-700 text-2xl mb-2\">Entretien</h3>
        <p class=\"text-xl text-slate-600 italic\">
          Un entretien régulier, la clé d'une pompe à chaleur performante et durable.
        </p>
      </div>

      <div class=\"flex flex-col items-center px-8 text-center\">
        <img
          class=\"w-full max-w-xs rounded shadow-lg mb-6\"
          src=\"{{ asset('build/projets-personnalises.jpg') }}\"
          alt=\"sur-mesure-pc-clim\"
        />
        <h3 class=\"font-bold text-slate-700 text-2xl mb-2\">Sur-mesure</h3>
        <p class=\"text-xl text-slate-600 italic\">
          Contactez-nous et optez pour une installation sur-mesure, durable et performante.
        </p>
      </div>
    </div>
  </div>
</section>
", "/parts/prestations.html.twig", "/var/www/html/templates/parts/prestations.html.twig");
    }
}
