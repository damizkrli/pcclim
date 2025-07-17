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

/* /parts/equipe.html.twig */
class __TwigTemplate_aefa9c50b22714d74410ec1247b31df6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/parts/equipe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/parts/equipe.html.twig"));

        // line 1
        echo "<section class=\"bg-white py-24\">
  
    <div class=\"mx-auto max-w-screen-2xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16\">

        <div class=\"md:flex md:items-end md:justify-between\">
            <div class=\"max-sm:w-auto\">
                <h2 class=\"title text-4xl font-bold tracking-tight sm:text-5xl\">
                    👥 Notre équipe à votre service
                </h2>
            </div>
        </div>

        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 py-24\">
    
            <div class=\"flex flex-col items-center text-center\">
                <img
                src=\"https://i.ibb.co/RykHVV4/pascal-pasquier.jpg\"
                alt=\"Pascal\"
                loading=\"lazy\"
                class=\"w-64 h-64 object-cover rounded-full shadow-lg mb-4\"
                >
            <h4 class=\"text-2xl font-semibold\">Pascal Pasquier</h4>
            <span class=\"text-sm text-gray-500 uppercase\">Co-Fondateur</span>
            <p class=\"mt-4\">
                <a href=\"tel:+33663292708\"><u>0663292708</u></a>
            </p>
        </div>
        <div class=\"flex flex-col items-center text-center\">
            <img
            src=\"https://i.ibb.co/9bwcgX3/samuel-courreau.jpg\"
            alt=\"Samuel\"
            loading=\"lazy\"
            class=\"w-64 h-64 object-cover rounded-full shadow-lg mb-4\"
            >
            <h4 class=\"text-2xl font-semibold\">Samuel Coureau</h4>
            <span class=\"text-sm text-gray-500 uppercase\">Co-Fondateur</span>
            <p class=\"mt-4\">
                <a href=\"tel:+33662682637\"><u>0662682637</u></a>
            </p>
        </div>
        <div class=\"flex flex-col items-center text-center\">
            <img
            src=\"https://i.ibb.co/Msdm6zj/val-rie-pasquier.jpg\"
            alt=\"Valérie\"
            loading=\"lazy\"
            class=\"w-64 h-64 object-cover rounded-full shadow-lg mb-4\"
            >
            <h4 class=\"text-2xl font-semibold\">Valérie Pasquier</h4>
            <span class=\"text-sm text-gray-500 uppercase\">Secrétaire</span>
            <p class=\"mt-4\">
                <a href=\"tel:+33754220799\"><u>0754220799</u></a>
            </p>

        </div>
        <div class=\"flex flex-col items-center text-center\">
            <img
            src=\"https://i.ibb.co/V93bdfq/gwenael-chapron.jpg\"
            alt=\"Gwenaël\"
            loading=\"lazy\"
            class=\"w-64 h-64 object-cover rounded-full shadow-lg mb-4\"
            >
            <h4 class=\"text-2xl font-semibold\">Gwenaël Chapron</h4>
            <span class=\"text-sm text-gray-500 uppercase\">Technicien</span>
        </div>
        <div class=\"flex flex-col items-center text-center\">
            <img
            src=\"https://i.ibb.co/HY3dSM5/GOPR0017-1.jpg\"
            alt=\"Thomas\"
            loading=\"lazy\"
            class=\"w-64 h-64 object-cover rounded-full shadow-lg mb-4\"
            >
            <h4 class=\"text-2xl font-semibold\">Thomas Lenormand</h4>
            <span class=\"text-sm text-gray-500 uppercase\">Technicien</span>
        </div>
        <div class=\"flex flex-col items-center text-center\">
            <img
            src=\"https://i.ibb.co/Z2nb6QJ/GOPR0196.jpg\"
            alt=\"Aboubacar\"
            loading=\"lazy\"
            class=\"w-64 h-64 object-cover rounded-full shadow-lg mb-4\"
            >
            <h4 class=\"text-2xl font-semibold\">Aboubacar Traoré</h4>
            <span class=\"text-sm text-gray-500 uppercase\">Apprenti</span>
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
        return "/parts/equipe.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"bg-white py-24\">
  
    <div class=\"mx-auto max-w-screen-2xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16\">

        <div class=\"md:flex md:items-end md:justify-between\">
            <div class=\"max-sm:w-auto\">
                <h2 class=\"title text-4xl font-bold tracking-tight sm:text-5xl\">
                    👥 Notre équipe à votre service
                </h2>
            </div>
        </div>

        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 py-24\">
    
            <div class=\"flex flex-col items-center text-center\">
                <img
                src=\"https://i.ibb.co/RykHVV4/pascal-pasquier.jpg\"
                alt=\"Pascal\"
                loading=\"lazy\"
                class=\"w-64 h-64 object-cover rounded-full shadow-lg mb-4\"
                >
            <h4 class=\"text-2xl font-semibold\">Pascal Pasquier</h4>
            <span class=\"text-sm text-gray-500 uppercase\">Co-Fondateur</span>
            <p class=\"mt-4\">
                <a href=\"tel:+33663292708\"><u>0663292708</u></a>
            </p>
        </div>
        <div class=\"flex flex-col items-center text-center\">
            <img
            src=\"https://i.ibb.co/9bwcgX3/samuel-courreau.jpg\"
            alt=\"Samuel\"
            loading=\"lazy\"
            class=\"w-64 h-64 object-cover rounded-full shadow-lg mb-4\"
            >
            <h4 class=\"text-2xl font-semibold\">Samuel Coureau</h4>
            <span class=\"text-sm text-gray-500 uppercase\">Co-Fondateur</span>
            <p class=\"mt-4\">
                <a href=\"tel:+33662682637\"><u>0662682637</u></a>
            </p>
        </div>
        <div class=\"flex flex-col items-center text-center\">
            <img
            src=\"https://i.ibb.co/Msdm6zj/val-rie-pasquier.jpg\"
            alt=\"Valérie\"
            loading=\"lazy\"
            class=\"w-64 h-64 object-cover rounded-full shadow-lg mb-4\"
            >
            <h4 class=\"text-2xl font-semibold\">Valérie Pasquier</h4>
            <span class=\"text-sm text-gray-500 uppercase\">Secrétaire</span>
            <p class=\"mt-4\">
                <a href=\"tel:+33754220799\"><u>0754220799</u></a>
            </p>

        </div>
        <div class=\"flex flex-col items-center text-center\">
            <img
            src=\"https://i.ibb.co/V93bdfq/gwenael-chapron.jpg\"
            alt=\"Gwenaël\"
            loading=\"lazy\"
            class=\"w-64 h-64 object-cover rounded-full shadow-lg mb-4\"
            >
            <h4 class=\"text-2xl font-semibold\">Gwenaël Chapron</h4>
            <span class=\"text-sm text-gray-500 uppercase\">Technicien</span>
        </div>
        <div class=\"flex flex-col items-center text-center\">
            <img
            src=\"https://i.ibb.co/HY3dSM5/GOPR0017-1.jpg\"
            alt=\"Thomas\"
            loading=\"lazy\"
            class=\"w-64 h-64 object-cover rounded-full shadow-lg mb-4\"
            >
            <h4 class=\"text-2xl font-semibold\">Thomas Lenormand</h4>
            <span class=\"text-sm text-gray-500 uppercase\">Technicien</span>
        </div>
        <div class=\"flex flex-col items-center text-center\">
            <img
            src=\"https://i.ibb.co/Z2nb6QJ/GOPR0196.jpg\"
            alt=\"Aboubacar\"
            loading=\"lazy\"
            class=\"w-64 h-64 object-cover rounded-full shadow-lg mb-4\"
            >
            <h4 class=\"text-2xl font-semibold\">Aboubacar Traoré</h4>
            <span class=\"text-sm text-gray-500 uppercase\">Apprenti</span>
        </div>

    </div>

  </div>

</section>
", "/parts/equipe.html.twig", "/var/www/html/templates/parts/equipe.html.twig");
    }
}
