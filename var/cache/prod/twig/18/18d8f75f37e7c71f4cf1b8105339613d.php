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

/* parts/equipe.html.twig */
class __TwigTemplate_8a42b5440abfe1d70402a5770fd525e6 extends Template
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
        echo "<section class=\"equipe\">
    <div class=\"mx-auto max-w-screen-2xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16\">
        <div class=\"max-sm:w-auto\">
            <h2 class=\"title text-4xl font-bold tracking-tight sm:text-5xl\">
                Découvrez qui nous sommes
            </h2>
        </div>
    </div>
    <div class=\"container mx-auto p-8 md:px-12 xl:px-32\">
        <div class=\"grid gap-12 items-center sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 py-24\">
            <div class=\"relative space-y-4 text-center\">
                <img class=\"img shadow-lg w-64 h-64 mx-auto object-cover md:w-40 md:h-40 lg:w-64 lg:h-64\"
                     src=\"https://i.ibb.co/RykHVV4/pascal-pasquier.jpg\" alt=\"Pascal\" loading=\"lazy\">
                <div class=\"absolute bottom-0 w-full bg-blur text-left md:pl-20 sm:pl-10\">
                    <h4 class=\"text-2xl\">Pascal Pasquier</h4>
                    <span class=\"block text-sm text-gray-500 uppercase\">Co-Fondateur</span>
                </div>
            </div>
            <div class=\"relative space-y-4 text-center\">
                <img class=\"img shadow-lg w-64 h-64 mx-auto object-cover md:w-40 md:h-40 lg:w-64 lg:h-64\"
                     src=\"https://i.ibb.co/9bwcgX3/samuel-courreau.jpg\" alt=\"Samuel\" loading=\"lazy\">
                <div class=\"absolute bottom-0 w-full bg-blur text-left md:pl-20 sm:pl-10\">
                    <h4 class=\"text-2xl\">Samuel Coureau</h4>
                    <span class=\"block text-sm text-gray-500 uppercase\">Co-Fondateur</span>
                </div>
            </div>

            <div class=\"relative space-y-4 text-center\">
                <img class=\"img shadow-lg w-64 h-64 mx-auto object-cover md:w-40 md:h-40 lg:w-64 lg:h-64\"
                     src=\"https://i.ibb.co/V93bdfq/gwenael-chapron.jpg\" alt=\"Gwenaël\" loading=\"lazy\">
                <div class=\"absolute bottom-0 w-full bg-blur text-left md:pl-20 sm:pl-10\">
                    <h4 class=\"text-2xl\">Gwenaël Chapron</h4>
                    <span class=\"block text-sm text-gray-500 uppercase\">Technicien</span>
                </div>
            </div>
            <div class=\"relative space-y-4 text-center\">
                <img class=\"img shadow-lg w-64 h-64 mx-auto object-cover md:w-40 md:h-40 lg:w-64 lg:h-64\"
                     src=\"https://i.ibb.co/Msdm6zj/val-rie-pasquier.jpg\" alt=\"Valérie\" loading=\"lazy\">
                <div class=\"absolute bottom-0 w-full bg-blur text-left md:pl-20 sm:pl-10\">
                    <h4 class=\"text-2xl\">Valérie Pasquier</h4>
                    <span class=\"block text-sm text-gray-500 uppercase\">Secrétaire</span>
                </div>
            </div>
            <div class=\"relative space-y-4 text-center\">
                <img class=\"img bright shadow-lg w-64 h-64 mx-auto object-cover md:w-40 md:h-40 lg:w-64 lg:h-64\"
                     src=\"https://i.ibb.co/HY3dSM5/GOPR0017-1.jpg\" alt=\"Thomas\" loading=\"lazy\">
                <div class=\"absolute bottom-0 w-full bg-blur text-left md:pl-20 sm:pl-10\">
                    <h4 class=\"text-2xl\">Thomas Lenormand</h4>
                    <span class=\"block text-sm text-gray-500 uppercase\">Technicien</span>
                </div>
            </div>
            <div class=\"relative space-y-2 text-center\">
                <img class=\"img bright shadow-lg w-64 h-64 mx-auto object-cover md:w-40 md:h-40 lg:w-64 lg:h-64\"
                     src=\"https://i.ibb.co/Z2nb6QJ/GOPR0196.jpg\" alt=\"Aboubacar\" loading=\"lazy\">
                <div class=\"absolute bottom-0 w-full bg-blur text-left md:pl-20 sm:pl-10\">
                    <h4 class=\"text-2xl\">Aboubacar Traoré</h4>
                    <span class=\"block text-sm text-gray-500 uppercase\">Apprenti</span>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "parts/equipe.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "parts/equipe.html.twig", "/var/www/templates/parts/equipe.html.twig");
    }
}
