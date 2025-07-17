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

/* _navbar.html.twig */
class __TwigTemplate_2fd18807cf2a0b6d8df6ca91c466afcf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_navbar.html.twig"));

        // line 1
        echo "<nav class=\"w-full flex items-center justify-around flex-wrap p-2\">
    <div class=\"flex items-center flex-shrink-0 mr-6\">
        <div class=\"flex items-center\">
            <div class=\"h-16\">
                <img class=\"logo\" src=\"https://i.ibb.co/5nrV2ZV/2-480w.png\" alt=\"pc-clim-logo\" border=\"0\">
            </div>
            <p class=\"ml-2 max-sm:hidden title\">
                PC CLIM
            </p>
        </div>

    </div>

    <div class=\"flex-initial p-2 rounded\">
        <div class=\"flex justify-end items-center relative\">
            <div class=\"flex relative justify-around items-center\">
                <div class=\"text-white\">
                    <span>
                        <a class=\"bg-transparent hover:bg-[#112869] text-[#112869] font-semibold hover:text-white py-2 px-4 border border-[#112869] hover:border-transparent rounded\"
                           href=\"#contact\">Nous contacter</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"w-full flex items-center justify-around flex-wrap p-2\">
    <div class=\"flex items-center flex-shrink-0 mr-6\">
        <div class=\"flex items-center\">
            <div class=\"h-16\">
                <img class=\"logo\" src=\"https://i.ibb.co/5nrV2ZV/2-480w.png\" alt=\"pc-clim-logo\" border=\"0\">
            </div>
            <p class=\"ml-2 max-sm:hidden title\">
                PC CLIM
            </p>
        </div>

    </div>

    <div class=\"flex-initial p-2 rounded\">
        <div class=\"flex justify-end items-center relative\">
            <div class=\"flex relative justify-around items-center\">
                <div class=\"text-white\">
                    <span>
                        <a class=\"bg-transparent hover:bg-[#112869] text-[#112869] font-semibold hover:text-white py-2 px-4 border border-[#112869] hover:border-transparent rounded\"
                           href=\"#contact\">Nous contacter</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

</nav>", "_navbar.html.twig", "/var/www/html/templates/_navbar.html.twig");
    }
}
