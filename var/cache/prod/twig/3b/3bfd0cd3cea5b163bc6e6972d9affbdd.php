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

/* parts/contact.html.twig */
class __TwigTemplate_286994f8542a62045116b3aaff462991 extends Template
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
        echo "<section class=\"contact mb-20 text-gray-700\">

    <div class=\"mx-auto max-w-screen-2xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16\">
        <div class=\"max-sm:w-auto\">
            <h2 class=\"title text-4xl font-bold tracking-tight sm:text-5xl\">
                Nous sommes là pour vous
            </h2>
        </div>
    </div>

    <div id=\"contact\"></div>

    <div class=\"text-gray-600 body-font relative py-24\">
        <div class=\"container px-5 mx-auto flex\">
            <div>
                <div class=\"grid md:flex-col gap-6 text-center mt-4\">
                    <div>
                        <div class=\"block\">
                            <div class=\"overflow-hidden h-24\"></div>
                            <div class=\"w-24 -mt-12 overflow-hidden border-2 border-white rounded-full mx-auto bg-white\">
                                <img src=\"https://i.ibb.co/6HvVZyK/pascal-pasquier.jpg\" alt=\"pascal-pasquier\"
                                     border=\"0\">
                            </div>
                            <div class=\"p-6\">
                                <h4 class=\"text-2xl font-semibold mb-4\">Pascal Pasquier</h4>
                                <hr/>
                                <p class=\"mt-4\">
                                    Une question technique ? Contactez Pascal au
                                    <a href=\"tel:+33663292708\"><u>0663292708</u></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"block\">
                            <div class=\"overflow-hidden rounded-t-lg h-24\"></div>
                            <div class=\"w-24 -mt-12 overflow-hidden border-2 border-white rounded-full mx-auto bg-white\">
                                <img src=\"https://i.ibb.co/3h8FkVc/samuel-courreau.jpg\" alt=\"samuel-courreau\"
                                     border=\"0\">
                            </div>
                            <div class=\"p-6\">
                                <h4 class=\"text-2xl font-semibold mb-4\">Samuel Coureau</h4>
                                <hr/>
                                <p class=\"mt-4\">
                                    Une question technique ? Contactez Samuel au
                                    <a href=\"tel:+33662682637\"><u>0662682637</u></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"block\">
                            <div class=\"overflow-hidden rounded-t-lg h-24\"></div>
                            <div class=\"w-24 -mt-12 overflow-hidden border-2 border-white rounded-full mx-auto bg-white\">
                                <img src=\"https://i.ibb.co/fk4Ny0v/val-rie-pasquier.jpg\" alt=\"val-rie-pasquier\"
                                     border=\"0\">
                            </div>
                            <div class=\"p-6\">
                                <h4 class=\"text-2xl font-semibold mb-4\">Valérie Pasquier</h4>
                                <hr/>
                                <p class=\"mt-4\">
                                    Une question administrative ? Contactez Valérie au
                                    <a href=\"tel:+33754220799\"><u>0754220799</u></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"shadow-lg lg:w-1/2 md:w-1/2 xl:w-1/2 bg-white rounded p-8 flex flex-col md:ml-auto w-full md:mt-0 relative z-10\">
                <h2 class=\"text-gray-900 text-lg mb-1 font-medium title-font\">Vous souhaitez des informations ?</h2>
                <p class=\"leading-relaxed mb-5 text-gray-600\">Obtenez une estimation de votre projet et un rendez-vous
                    avec un technicien.</p>

                ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 75));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 76
            echo "                    <div class=\"bg-green-50 border-b border-green-400 text-green-800 text-sm p-4 mb-4 flex justify-between\">
                        <div>
                            <div class=\"flex items-center\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\"
                                     class=\"h-4 w-4 mr-2\"
                                     viewBox=\"0 0 20 20\"
                                     fill=\"currentColor\">
                                    <path fill-rule=\"evenodd\"
                                          d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z\"
                                          clip-rule=\"evenodd\"/>
                                </svg>

                                ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 89
                echo "                                    <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                                        ";
                // line 90
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
                <div class=\"disable-form\">
                    ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                    <div class=\"relative mb-4\">
                        <div class=\"grid gap-4 grid-cols-2 form-group\">
                            <div>
                                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 103), 'widget');
        echo "
                                <div class=\"error-message\">
                                    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 105), 'errors');
        echo "
                                </div>
                            </div>
                            <div>
                                ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", false, false, false, 109), 'widget');
        echo "
                                <div class=\"error-message\">
                                    ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", false, false, false, 111), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"mt-5\">
                            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 116), 'widget');
        echo "
                            <div class=\"error-message\">
                                ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 118), 'errors');
        echo "
                            </div>
                            <div class=\"grid gap-4 grid-cols-2 form-group\">
                                <div class=\"mt-5\">
                                    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postalCode", [], "any", false, false, false, 122), 'widget');
        echo "
                                    <div class=\"error-message\">
                                        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postalCode", [], "any", false, false, false, 124), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"mt-5\">
                                    ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", false, false, false, 128), 'widget');
        echo "
                                    <div class=\"error-message\">
                                        ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", false, false, false, 130), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"grid gap-4 grid-cols-2 form-group\">
                            <div class=\"mt-5\">
                                ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 137), 'widget');
        echo "
                                <div class=\"error-message\">
                                    ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 139), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"mt-5\">
                                ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 143), 'widget');
        echo "
                                ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 144), 'help');
        echo "
                                <div class=\"error-message\">
                                    ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 146), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"relative mb-4 mt-5 disable-form\">
                        ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 152), 'widget', ["attr" => ["style" => "height: 150px"]]);
        echo "
                        <div class=\"error-message\">
                            ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 154), 'errors');
        echo "
                        </div>
                    </div>

                    ";
        // line 160
        echo "                    <br/>

                    ";
        // line 163
        echo "                     <div class=\"g-recaptcha\" data-sitekey=\"6LcMqvEpAAAAACwqGEVM9h5mPCwJjW5u490ilmeQ\"></div><br/>

                    ";
        // line 165
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

                    <script src=\"https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit\"
                            async defer>
                    </script>
                </div>
                ";
        // line 172
        echo "                ";
        // line 173
        echo "                ";
        // line 174
        echo "                ";
        // line 175
        echo "                ";
        // line 176
        echo "                ";
        // line 177
        echo "                <hr class=\"mt-5\">
                <p class=\"text-xs text-gray-500 mt-3\">* Champs Obligatoires</p>
            </div>
        </div>
    </div>

</section>
";
    }

    public function getTemplateName()
    {
        return "parts/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 177,  300 => 176,  298 => 175,  296 => 174,  294 => 173,  292 => 172,  283 => 165,  279 => 163,  275 => 160,  268 => 154,  263 => 152,  254 => 146,  249 => 144,  245 => 143,  238 => 139,  233 => 137,  223 => 130,  218 => 128,  211 => 124,  206 => 122,  199 => 118,  194 => 116,  186 => 111,  181 => 109,  174 => 105,  169 => 103,  162 => 99,  158 => 97,  149 => 93,  140 => 90,  135 => 89,  131 => 88,  117 => 76,  113 => 75,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "parts/contact.html.twig", "/var/www/templates/parts/contact.html.twig");
    }
}
