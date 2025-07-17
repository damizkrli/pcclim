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
class __TwigTemplate_5bb956c31da19c3ec44c11fa8a3b7ecb extends Template
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
                        <a class=\"bg-transparent hover:bg-blue text-blue font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded\"
                           href=\"#contact\">Nous contacter</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

</nav>";
    }

    public function getTemplateName()
    {
        return "_navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_navbar.html.twig", "/var/www/templates/_navbar.html.twig");
    }
}
