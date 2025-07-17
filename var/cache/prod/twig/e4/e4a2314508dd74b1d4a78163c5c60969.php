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

/* base.html.twig */
class __TwigTemplate_aab362871e73a9f9bd4066c974f786dc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"https://i.ibb.co/5nrV2ZV/2-480w.png\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" />
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\" />
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css\" />
        <script src=\"https://cdn.tailwindcss.com\"></script>
        <script src=\"https://www.google.com/recaptcha/enterprise.js?render=6Lcyp_EpAAAAAEUdAM0TXFJ4E16lz3YujdxiXHuj\"></script>
        ";
        // line 14
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
        ";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </head>
    <body>
    ";
        // line 23
        $this->loadTemplate("_navbar.html.twig", "base.html.twig", 23)->display($context);
        // line 24
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "    ";
        $this->loadTemplate("_footer.html.twig", "base.html.twig", 25)->display($context);
        // line 26
        echo "    </body>
    <script src=\"https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js\"></script>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
    }

    // line 18
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
    }

    // line 24
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 24,  108 => 19,  104 => 18,  97 => 15,  93 => 14,  86 => 6,  78 => 26,  75 => 25,  72 => 24,  70 => 23,  66 => 21,  64 => 18,  61 => 17,  58 => 14,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/templates/base.html.twig");
    }
}
