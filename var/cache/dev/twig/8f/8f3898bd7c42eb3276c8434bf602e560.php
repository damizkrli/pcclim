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

/* /parts/contact.html.twig */
class __TwigTemplate_43259a94270ff2ed89ee491609a4e164 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/parts/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/parts/contact.html.twig"));

        // line 1
        echo "<div id=\"contact\"></div>
<section class=\"bg-[#f5f5f5] py-24\">

    <div class=\"mx-auto max-w-screen-2xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16\">
            <div class=\"md:flex md:items-end md:justify-between\">
            <div class=\"max-sm:w-auto\">
                <h2 class=\"title text-4xl font-bold tracking-tight sm:text-5xl\">
                    📞 Restons en contact
                </h2>
            </div>
        </div>

  <div class=\"text-gray-600 body-font relative py-24\">
    <div class=\"container mx-auto flex flex-col\">

      ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 17
            echo "        <div class=\"bg-green-50 border-b border-green-400 text-green-800 text-sm p-4 mb-4 flex justify-between\">
          <div class=\"flex items-center\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
              <path fill-rule=\"evenodd\"
                d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z\"
                clip-rule=\"evenodd\"/>
            </svg>
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 25
                echo "              <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                ";
                // line 26
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "          </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
      ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_start');
        echo "

      <div class=\"flex flex-col lg:flex-row gap-4\">
        <div class=\"flex flex-col w-full lg:w-1/3\">
          ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "lastname", [], "any", false, false, false, 37), 'widget');
        echo "
          ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "firstname", [], "any", false, false, false, 38), 'widget');
        echo "
          ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'widget');
        echo "
          ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "address", [], "any", false, false, false, 40), 'widget');
        echo "
          ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "postalCode", [], "any", false, false, false, 41), 'widget');
        echo "
          ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "city", [], "any", false, false, false, 42), 'widget');
        echo "
        </div>

        <div class=\"w-full lg:w-2/3\">
          ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "message", [], "any", false, false, false, 46), 'widget', ["attr" => ["rows" => "10", "class" => "w-full"]]);
        echo "
        </div>
      </div>

      <div class=\"flex flex-col lg:flex-row gap-4 items-center\">
        <div class=\"w-full lg:w-1/3\">
          ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "phone", [], "any", false, false, false, 52), 'widget');
        echo "
        </div>

        <div class=\"w-full lg:w-1/3 flex justify-center\">
          <div class=\"g-recaptcha\" data-sitekey=\"6LcMqvEpAAAAACwqGEVM9h5mPCwJjW5u490ilmeQ\"></div>
        </div>

        <div class=\"w-full lg:w-1/3 flex justify-end\">
          <button type=\"submit\" class=\"bg-[#112869] text-white font-bold py-2 px-6 rounded\">
            Envoyer votre message
          </button>
        </div>
      </div>

      ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_end');
        echo "

      <hr class=\"mt-5\">
      <p class=\"text-xs text-gray-500 mt-3\">* Champs Obligatoires</p>
    </div>
  </div>
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "/parts/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 66,  145 => 52,  136 => 46,  129 => 42,  125 => 41,  121 => 40,  117 => 39,  113 => 38,  109 => 37,  102 => 33,  99 => 32,  91 => 29,  82 => 26,  77 => 25,  73 => 24,  64 => 17,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"contact\"></div>
<section class=\"bg-[#f5f5f5] py-24\">

    <div class=\"mx-auto max-w-screen-2xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16\">
            <div class=\"md:flex md:items-end md:justify-between\">
            <div class=\"max-sm:w-auto\">
                <h2 class=\"title text-4xl font-bold tracking-tight sm:text-5xl\">
                    📞 Restons en contact
                </h2>
            </div>
        </div>

  <div class=\"text-gray-600 body-font relative py-24\">
    <div class=\"container mx-auto flex flex-col\">

      {% for label, messages in app.flashes %}
        <div class=\"bg-green-50 border-b border-green-400 text-green-800 text-sm p-4 mb-4 flex justify-between\">
          <div class=\"flex items-center\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
              <path fill-rule=\"evenodd\"
                d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z\"
                clip-rule=\"evenodd\"/>
            </svg>
            {% for message in messages %}
              <div class=\"flash-{{ label }}\">
                {{ message }}
              </div>
            {% endfor %}
          </div>
        </div>
      {% endfor %}

      {{ form_start(form) }}

      <div class=\"flex flex-col lg:flex-row gap-4\">
        <div class=\"flex flex-col w-full lg:w-1/3\">
          {{ form_widget(form.lastname) }}
          {{ form_widget(form.firstname) }}
          {{ form_widget(form.email) }}
          {{ form_widget(form.address) }}
          {{ form_widget(form.postalCode) }}
          {{ form_widget(form.city) }}
        </div>

        <div class=\"w-full lg:w-2/3\">
          {{ form_widget(form.message, {'attr': {'rows': '10', 'class': 'w-full'}}) }}
        </div>
      </div>

      <div class=\"flex flex-col lg:flex-row gap-4 items-center\">
        <div class=\"w-full lg:w-1/3\">
          {{ form_widget(form.phone) }}
        </div>

        <div class=\"w-full lg:w-1/3 flex justify-center\">
          <div class=\"g-recaptcha\" data-sitekey=\"6LcMqvEpAAAAACwqGEVM9h5mPCwJjW5u490ilmeQ\"></div>
        </div>

        <div class=\"w-full lg:w-1/3 flex justify-end\">
          <button type=\"submit\" class=\"bg-[#112869] text-white font-bold py-2 px-6 rounded\">
            Envoyer votre message
          </button>
        </div>
      </div>

      {{ form_end(form) }}

      <hr class=\"mt-5\">
      <p class=\"text-xs text-gray-500 mt-3\">* Champs Obligatoires</p>
    </div>
  </div>
</section>
", "/parts/contact.html.twig", "/var/www/html/templates/parts/contact.html.twig");
    }
}
