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

/* home/index.html.twig */
class __TwigTemplate_c117414858ab9b7d067343f323ed1824 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "PC Clim";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->loadTemplate("/macro/button.html.twig", "home/index.html.twig", 6)->display($context);
        // line 7
        echo "    <section>
        ";
        // line 8
        $this->loadTemplate("/parts/accueil.html.twig", "home/index.html.twig", 8)->display($context);
        // line 9
        echo "    </section>

    <section class=\"chauffe-eau\">
        ";
        // line 12
        $this->loadTemplate("/parts/prestations.html.twig", "home/index.html.twig", 12)->display($context);
        // line 13
        echo "    </section>

    <section class=\"equipe\">
        ";
        // line 16
        $this->loadTemplate("/parts/equipe.html.twig", "home/index.html.twig", 16)->display($context);
        // line 17
        echo "    </section>

    <section>
        ";
        // line 20
        $this->loadTemplate("/parts/contact.html.twig", "home/index.html.twig", 20)->display($context);
        // line 21
        echo "    </section>

    <section class=\"avis\">
        ";
        // line 24
        $this->loadTemplate("/parts/avis.html.twig", "home/index.html.twig", 24)->display($context);
        // line 25
        echo "    </section>

    <script>
        let mybutton = document.getElementById(\"btn-back-to-top\");

        window.onscroll = function () {
            scrollFunction();
        };

        function scrollFunction() {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                mybutton.style.display = \"block\";
            } else {
                mybutton.style.display = \"none\";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener(\"click\", backToTop);

        function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 25,  92 => 24,  87 => 21,  85 => 20,  80 => 17,  78 => 16,  73 => 13,  71 => 12,  66 => 9,  64 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/var/www/templates/home/index.html.twig");
    }
}
