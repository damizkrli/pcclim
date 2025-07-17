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

/* form_div_layout.html.twig */
class __TwigTemplate_c60cc3cb32a19b89b4f32d76e0fc3910 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form_widget' => [$this, 'block_form_widget'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'form_widget_compound' => [$this, 'block_form_widget_compound'],
            'collection_widget' => [$this, 'block_collection_widget'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'choice_widget' => [$this, 'block_choice_widget'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'choice_widget_options' => [$this, 'block_choice_widget_options'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'dateinterval_widget' => [$this, 'block_dateinterval_widget'],
            'number_widget' => [$this, 'block_number_widget'],
            'integer_widget' => [$this, 'block_integer_widget'],
            'money_widget' => [$this, 'block_money_widget'],
            'url_widget' => [$this, 'block_url_widget'],
            'search_widget' => [$this, 'block_search_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'password_widget' => [$this, 'block_password_widget'],
            'hidden_widget' => [$this, 'block_hidden_widget'],
            'email_widget' => [$this, 'block_email_widget'],
            'range_widget' => [$this, 'block_range_widget'],
            'button_widget' => [$this, 'block_button_widget'],
            'submit_widget' => [$this, 'block_submit_widget'],
            'reset_widget' => [$this, 'block_reset_widget'],
            'tel_widget' => [$this, 'block_tel_widget'],
            'color_widget' => [$this, 'block_color_widget'],
            'week_widget' => [$this, 'block_week_widget'],
            'form_label' => [$this, 'block_form_label'],
            'form_label_content' => [$this, 'block_form_label_content'],
            'button_label' => [$this, 'block_button_label'],
            'form_help' => [$this, 'block_form_help'],
            'form_help_content' => [$this, 'block_form_help_content'],
            'repeated_row' => [$this, 'block_repeated_row'],
            'form_row' => [$this, 'block_form_row'],
            'button_row' => [$this, 'block_button_row'],
            'hidden_row' => [$this, 'block_hidden_row'],
            'form' => [$this, 'block_form'],
            'form_start' => [$this, 'block_form_start'],
            'form_end' => [$this, 'block_form_end'],
            'form_errors' => [$this, 'block_form_errors'],
            'form_rest' => [$this, 'block_form_rest'],
            'form_rows' => [$this, 'block_form_rows'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'widget_container_attributes' => [$this, 'block_widget_container_attributes'],
            'button_attributes' => [$this, 'block_button_attributes'],
            'attributes' => [$this, 'block_attributes'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 20
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 30
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 37
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 41
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 49
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 58
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 80
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 93
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 97
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 101
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 114
        $this->displayBlock('date_widget', $context, $blocks);
        // line 128
        $this->displayBlock('time_widget', $context, $blocks);
        // line 139
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 174
        $this->displayBlock('number_widget', $context, $blocks);
        // line 180
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 185
        $this->displayBlock('money_widget', $context, $blocks);
        // line 189
        $this->displayBlock('url_widget', $context, $blocks);
        // line 194
        $this->displayBlock('search_widget', $context, $blocks);
        // line 199
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 204
        $this->displayBlock('password_widget', $context, $blocks);
        // line 209
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 214
        $this->displayBlock('email_widget', $context, $blocks);
        // line 219
        $this->displayBlock('range_widget', $context, $blocks);
        // line 224
        $this->displayBlock('button_widget', $context, $blocks);
        // line 252
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 257
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 262
        $this->displayBlock('tel_widget', $context, $blocks);
        // line 267
        $this->displayBlock('color_widget', $context, $blocks);
        // line 272
        $this->displayBlock('week_widget', $context, $blocks);
        // line 285
        $this->displayBlock('form_label', $context, $blocks);
        // line 299
        $this->displayBlock('form_label_content', $context, $blocks);
        // line 325
        $this->displayBlock('button_label', $context, $blocks);
        // line 328
        echo "
";
        // line 329
        $this->displayBlock('form_help', $context, $blocks);
        // line 337
        echo "
";
        // line 338
        $this->displayBlock('form_help_content', $context, $blocks);
        // line 353
        echo "
";
        // line 356
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 364
        $this->displayBlock('form_row', $context, $blocks);
        // line 377
        $this->displayBlock('button_row', $context, $blocks);
        // line 383
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 389
        $this->displayBlock('form', $context, $blocks);
        // line 395
        $this->displayBlock('form_start', $context, $blocks);
        // line 409
        $this->displayBlock('form_end', $context, $blocks);
        // line 416
        $this->displayBlock('form_errors', $context, $blocks);
        // line 426
        $this->displayBlock('form_rest', $context, $blocks);
        // line 447
        echo "
";
        // line 450
        $this->displayBlock('form_rows', $context, $blocks);
        // line 456
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 463
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 468
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 473
        $this->displayBlock('attributes', $context, $blocks);
    }

    // line 3
    public function block_form_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if (($context["compound"] ?? null)) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 13
        if (((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color"))) {
            // line 15
            $context["required"] = false;
        }
        // line 17
        echo "<input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>";
    }

    // line 20
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 22
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        }
        // line 25
        $this->displayBlock("form_rows", $context, $blocks);
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 27
        echo "</div>";
    }

    // line 30
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        if ((array_key_exists("prototype", $context) &&  !twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "rendered", [], "any", false, false, false, 31))) {
            // line 32
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
        }
        // line 34
        $this->displayBlock("form_widget", $context, $blocks);
    }

    // line 37
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</textarea>";
    }

    // line 41
    public function block_choice_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        if (($context["expanded"] ?? null)) {
            // line 43
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 45
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
    }

    // line 49
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</div>";
    }

    // line 58
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        if (((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null)) && ( !twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "size", [], "any", true, true, false, 59) || (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "size", [], "any", false, false, false, 59) <= 1)))) {
            // line 60
            $context["required"] = false;
        }
        // line 62
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 63
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 64
            echo "<option value=\"\"";
            if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            (((($context["placeholder"] ?? null) != "")) ? (print (twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["placeholder"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["placeholder"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true))) : (print ("")));
            echo "</option>";
        }
        // line 66
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
            // line 67
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 68
            echo "            ";
            $context["render_preferred_choices"] = true;
            // line 69
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 70
            if (((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 71
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                echo "</option>";
            }
        }
        // line 74
        $context["options"] = ($context["choices"] ?? null);
        // line 75
        $context["render_preferred_choices"] = false;
        // line 76
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 77
        echo "</select>";
    }

    // line 80
    public function block_choice_widget_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 82
            if (twig_test_iterable($context["choice"])) {
                // line 83
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? null) === false)) ? ($context["group_label"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["group_label"], [], ($context["choice_translation_domain"] ?? null)))), "html", null, true);
                echo "\">
                ";
                // line 84
                $context["options"] = $context["choice"];
                // line 85
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 86
                echo "</optgroup>";
            } else {
                // line 88
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 88), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 88)) {
                    $__internal_compile_0 = $context;
                    $__internal_compile_1 = ["attr" => twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 88)];
                    if (!twig_test_iterable($__internal_compile_1)) {
                        throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 88, $this->getSourceContext());
                    }
                    $__internal_compile_1 = twig_to_array($__internal_compile_1);
                    $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $__internal_compile_0;
                }
                if (( !((array_key_exists("render_preferred_choices", $context)) ? (_twig_default_filter(($context["render_preferred_choices"] ?? null), false)) : (false)) && Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null)))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? null) === false)) ? (twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 88)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 88), twig_get_attribute($this->env, $this->source, $context["choice"], "labelTranslationParameters", [], "any", false, false, false, 88), ($context["choice_translation_domain"] ?? null)))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 93
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " />";
    }

    // line 97
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " />";
    }

    // line 101
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 103
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 105
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 106
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 106), 'errors');
            // line 107
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 107), 'errors');
            // line 108
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 108), 'widget');
            // line 109
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 109), 'widget');
            // line 110
            echo "</div>";
        }
    }

    // line 114
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 116
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 118
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 119
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 120
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 120), 'widget'), "{{ month }}" =>             // line 121
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 121), 'widget'), "{{ day }}" =>             // line 122
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 122), 'widget')]);
            // line 124
            echo "</div>";
        }
    }

    // line 128
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 129
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 130
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 132
            $context["vars"] = (((($context["widget"] ?? null) == "text")) ? (["attr" => ["size" => 1]]) : ([]));
            // line 133
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 134
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 134), 'widget', ($context["vars"] ?? null));
            if (($context["with_minutes"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 134), 'widget', ($context["vars"] ?? null));
            }
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 134), 'widget', ($context["vars"] ?? null));
            }
            // line 135
            echo "        </div>";
        }
    }

    // line 139
    public function block_dateinterval_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 140
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 141
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 143
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 144
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 145
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? null), "")) : ("")), "html", null, true);
            echo "\" role=\"presentation\">
                <thead>
                    <tr>";
            // line 148
            if (($context["with_years"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 148), 'label');
                echo "</th>";
            }
            // line 149
            if (($context["with_months"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 149), 'label');
                echo "</th>";
            }
            // line 150
            if (($context["with_weeks"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 150), 'label');
                echo "</th>";
            }
            // line 151
            if (($context["with_days"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 151), 'label');
                echo "</th>";
            }
            // line 152
            if (($context["with_hours"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 152), 'label');
                echo "</th>";
            }
            // line 153
            if (($context["with_minutes"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 153), 'label');
                echo "</th>";
            }
            // line 154
            if (($context["with_seconds"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 154), 'label');
                echo "</th>";
            }
            // line 155
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 159
            if (($context["with_years"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 159), 'widget');
                echo "</td>";
            }
            // line 160
            if (($context["with_months"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 160), 'widget');
                echo "</td>";
            }
            // line 161
            if (($context["with_weeks"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 161), 'widget');
                echo "</td>";
            }
            // line 162
            if (($context["with_days"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 162), 'widget');
                echo "</td>";
            }
            // line 163
            if (($context["with_hours"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 163), 'widget');
                echo "</td>";
            }
            // line 164
            if (($context["with_minutes"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 164), 'widget');
                echo "</td>";
            }
            // line 165
            if (($context["with_seconds"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 165), 'widget');
                echo "</td>";
            }
            // line 166
            echo "</tr>
                </tbody>
            </table>";
            // line 169
            if (($context["with_invert"] ?? null)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "invert", [], "any", false, false, false, 169), 'widget');
            }
            // line 170
            echo "</div>";
        }
    }

    // line 174
    public function block_number_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 176
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 177
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 180
    public function block_integer_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 181
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "number")) : ("number"));
        // line 182
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 185
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null),         $this->renderBlock("form_widget_simple", $context, $blocks));
    }

    // line 189
    public function block_url_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "url")) : ("url"));
        // line 191
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 194
    public function block_search_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 195
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "search")) : ("search"));
        // line 196
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 199
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 200
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 201
        $this->displayBlock("form_widget_simple", $context, $blocks);
        if (($context["symbol"] ?? null)) {
            echo " ";
            echo twig_escape_filter($this->env, ((array_key_exists("symbol", $context)) ? (_twig_default_filter(($context["symbol"] ?? null), "%")) : ("%")), "html", null, true);
        }
    }

    // line 204
    public function block_password_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 205
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "password")) : ("password"));
        // line 206
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 209
    public function block_hidden_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 210
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "hidden")) : ("hidden"));
        // line 211
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 214
    public function block_email_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 215
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "email")) : ("email"));
        // line 216
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 219
    public function block_range_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 220
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "range")) : ("range"));
        // line 221
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 224
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 225
        if (twig_test_empty(($context["label"] ?? null))) {
            // line 226
            if ( !twig_test_empty(($context["label_format"] ?? null))) {
                // line 227
                $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                 // line 228
($context["name"] ?? null), "%id%" =>                 // line 229
($context["id"] ?? null)]);
            } elseif ( !(            // line 231
($context["label"] ?? null) === false)) {
                // line 232
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 235
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        // line 236
        if ((($context["translation_domain"] ?? null) === false)) {
            // line 237
            if ((($context["label_html"] ?? null) === false)) {
                // line 238
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            } else {
                // line 240
                echo ($context["label"] ?? null);
            }
        } else {
            // line 243
            if ((($context["label_html"] ?? null) === false)) {
                // line 244
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
            } else {
                // line 246
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
            }
        }
        // line 249
        echo "</button>";
    }

    // line 252
    public function block_submit_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 253
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "submit")) : ("submit"));
        // line 254
        $this->displayBlock("button_widget", $context, $blocks);
    }

    // line 257
    public function block_reset_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 258
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "reset")) : ("reset"));
        // line 259
        $this->displayBlock("button_widget", $context, $blocks);
    }

    // line 262
    public function block_tel_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 263
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "tel")) : ("tel"));
        // line 264
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 267
    public function block_color_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 268
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "color")) : ("color"));
        // line 269
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 272
    public function block_week_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 273
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 274
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 276
            $context["vars"] = (((($context["widget"] ?? null) == "text")) ? (["attr" => ["size" => 1]]) : ([]));
            // line 277
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 278
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 278), 'widget', ($context["vars"] ?? null));
            echo "-";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "week", [], "any", false, false, false, 278), 'widget', ($context["vars"] ?? null));
            echo "
        </div>";
        }
    }

    // line 285
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 286
        if ( !(($context["label"] ?? null) === false)) {
            // line 287
            if ( !($context["compound"] ?? null)) {
                // line 288
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 290
            if (($context["required"] ?? null)) {
                // line 291
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 291)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 291), "")) : ("")) . " required"))]);
            }
            // line 293
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_compile_2 = $context;
                $__internal_compile_3 = ["attr" => ($context["label_attr"] ?? null)];
                if (!twig_test_iterable($__internal_compile_3)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 293, $this->getSourceContext());
                }
                $__internal_compile_3 = twig_to_array($__internal_compile_3);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $__internal_compile_2;
            }
            echo ">";
            // line 294
            $this->displayBlock("form_label_content", $context, $blocks);
            // line 295
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            echo ">";
        }
    }

    // line 299
    public function block_form_label_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 300
        if (twig_test_empty(($context["label"] ?? null))) {
            // line 301
            if ( !twig_test_empty(($context["label_format"] ?? null))) {
                // line 302
                $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                 // line 303
($context["name"] ?? null), "%id%" =>                 // line 304
($context["id"] ?? null)]);
            } else {
                // line 307
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 310
        if ((($context["translation_domain"] ?? null) === false)) {
            // line 311
            if ((($context["label_html"] ?? null) === false)) {
                // line 312
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            } else {
                // line 314
                echo ($context["label"] ?? null);
            }
        } else {
            // line 317
            if ((($context["label_html"] ?? null) === false)) {
                // line 318
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
            } else {
                // line 320
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
            }
        }
    }

    // line 325
    public function block_button_label($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 329
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 330
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 331
            $context["help_attr"] = twig_array_merge(($context["help_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 331)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 331), "")) : ("")) . " help-text"))]);
            // line 332
            echo "<div id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "_help\"";
            $__internal_compile_4 = $context;
            $__internal_compile_5 = ["attr" => ($context["help_attr"] ?? null)];
            if (!twig_test_iterable($__internal_compile_5)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 332, $this->getSourceContext());
            }
            $__internal_compile_5 = twig_to_array($__internal_compile_5);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $__internal_compile_4;
            echo ">";
            // line 333
            $this->displayBlock("form_help_content", $context, $blocks);
            // line 334
            echo "</div>";
        }
    }

    // line 338
    public function block_form_help_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 339
        if ((($context["translation_domain"] ?? null) === false)) {
            // line 340
            if ((($context["help_html"] ?? null) === false)) {
                // line 341
                echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
            } else {
                // line 343
                echo ($context["help"] ?? null);
            }
        } else {
            // line 346
            if ((($context["help_html"] ?? null) === false)) {
                // line 347
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), ($context["help_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
            } else {
                // line 349
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), ($context["help_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
            }
        }
    }

    // line 356
    public function block_repeated_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 361
        $this->displayBlock("form_rows", $context, $blocks);
    }

    // line 364
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 365
        $context["widget_attr"] = [];
        // line 366
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 367
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 369
        echo "<div";
        $__internal_compile_6 = $context;
        $__internal_compile_7 = ["attr" => ($context["row_attr"] ?? null)];
        if (!twig_test_iterable($__internal_compile_7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 369, $this->getSourceContext());
        }
        $__internal_compile_7 = twig_to_array($__internal_compile_7);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_6;
        echo ">";
        // line 370
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 371
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 372
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 373
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 374
        echo "</div>";
    }

    // line 377
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 378
        echo "<div";
        $__internal_compile_8 = $context;
        $__internal_compile_9 = ["attr" => ($context["row_attr"] ?? null)];
        if (!twig_test_iterable($__internal_compile_9)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 378, $this->getSourceContext());
        }
        $__internal_compile_9 = twig_to_array($__internal_compile_9);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_9));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_8;
        echo ">";
        // line 379
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 380
        echo "</div>";
    }

    // line 383
    public function block_hidden_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 384
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
    }

    // line 389
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 390
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        // line 391
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 392
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
    }

    // line 395
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 396
        twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "setMethodRendered", [], "method", false, false, false, 396);
        // line 397
        $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? null));
        // line 398
        if (twig_in_filter(($context["method"] ?? null), [0 => "GET", 1 => "POST"])) {
            // line 399
            $context["form_method"] = ($context["method"] ?? null);
        } else {
            // line 401
            $context["form_method"] = "POST";
        }
        // line 403
        echo "<form";
        if ((($context["name"] ?? null) != "")) {
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"";
        }
        echo " method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["form_method"] ?? null)), "html", null, true);
        echo "\"";
        if ((($context["action"] ?? null) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
            echo "\"";
        }
        $this->displayBlock("attributes", $context, $blocks);
        if (($context["multipart"] ?? null)) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 404
        if ((($context["form_method"] ?? null) != ($context["method"] ?? null))) {
            // line 405
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
            echo "\" />";
        }
    }

    // line 409
    public function block_form_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 410
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? null))) {
            // line 411
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        }
        // line 413
        echo "</form>";
    }

    // line 416
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 417
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 418
            echo "<ul>";
            // line 419
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 420
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 420), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 422
            echo "</ul>";
        }
    }

    // line 426
    public function block_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 427
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 428
            if ( !twig_get_attribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 428)) {
                // line 429
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 433
        if (( !twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "methodRendered", [], "any", false, false, false, 433) && Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null)))) {
            // line 434
            twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "setMethodRendered", [], "method", false, false, false, 434);
            // line 435
            $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? null));
            // line 436
            if (twig_in_filter(($context["method"] ?? null), [0 => "GET", 1 => "POST"])) {
                // line 437
                $context["form_method"] = ($context["method"] ?? null);
            } else {
                // line 439
                $context["form_method"] = "POST";
            }
            // line 442
            if ((($context["form_method"] ?? null) != ($context["method"] ?? null))) {
                // line 443
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
                echo "\" />";
            }
        }
    }

    // line 450
    public function block_form_rows($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 451
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__child__) use ($context, $macros) { $context["child"] = $__child__; return  !twig_get_attribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 451); }));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 452
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 456
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 457
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\"";
        // line 458
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 459
        if (($context["required"] ?? null)) {
            echo " required=\"required\"";
        }
        // line 460
        $this->displayBlock("attributes", $context, $blocks);
    }

    // line 463
    public function block_widget_container_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 464
        if ( !twig_test_empty(($context["id"] ?? null))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 465
        $this->displayBlock("attributes", $context, $blocks);
    }

    // line 468
    public function block_button_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 469
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\"";
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 470
        $this->displayBlock("attributes", $context, $blocks);
    }

    // line 473
    public function block_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 474
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 475
            echo " ";
            // line 476
            if (twig_in_filter($context["attrname"], [0 => "placeholder", 1 => "title"])) {
                // line 477
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((($context["translation_domain"] ?? null) === false) || (null === $context["attrvalue"]))) ? ($context["attrvalue"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["attrvalue"], ($context["attr_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)))), "html", null, true);
                echo "\"";
            } elseif ((            // line 478
$context["attrvalue"] === true)) {
                // line 479
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 480
$context["attrvalue"] === false)) {
                // line 481
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1347 => 481,  1345 => 480,  1340 => 479,  1338 => 478,  1333 => 477,  1331 => 476,  1329 => 475,  1325 => 474,  1321 => 473,  1317 => 470,  1308 => 469,  1304 => 468,  1300 => 465,  1294 => 464,  1290 => 463,  1286 => 460,  1282 => 459,  1278 => 458,  1272 => 457,  1268 => 456,  1260 => 452,  1256 => 451,  1252 => 450,  1244 => 443,  1242 => 442,  1239 => 439,  1236 => 437,  1234 => 436,  1232 => 435,  1230 => 434,  1228 => 433,  1221 => 429,  1219 => 428,  1215 => 427,  1211 => 426,  1206 => 422,  1198 => 420,  1194 => 419,  1192 => 418,  1190 => 417,  1186 => 416,  1182 => 413,  1179 => 411,  1177 => 410,  1173 => 409,  1166 => 405,  1164 => 404,  1144 => 403,  1141 => 401,  1138 => 399,  1136 => 398,  1134 => 397,  1132 => 396,  1128 => 395,  1124 => 392,  1122 => 391,  1120 => 390,  1116 => 389,  1112 => 384,  1108 => 383,  1104 => 380,  1102 => 379,  1090 => 378,  1086 => 377,  1082 => 374,  1080 => 373,  1078 => 372,  1076 => 371,  1074 => 370,  1062 => 369,  1059 => 367,  1057 => 366,  1055 => 365,  1051 => 364,  1047 => 361,  1043 => 356,  1037 => 349,  1034 => 347,  1032 => 346,  1028 => 343,  1025 => 341,  1023 => 340,  1021 => 339,  1017 => 338,  1012 => 334,  1010 => 333,  996 => 332,  994 => 331,  992 => 330,  988 => 329,  982 => 325,  976 => 320,  973 => 318,  971 => 317,  967 => 314,  964 => 312,  962 => 311,  960 => 310,  956 => 307,  953 => 304,  952 => 303,  951 => 302,  949 => 301,  947 => 300,  943 => 299,  936 => 295,  934 => 294,  919 => 293,  916 => 291,  914 => 290,  911 => 288,  909 => 287,  907 => 286,  903 => 285,  894 => 278,  889 => 277,  887 => 276,  884 => 274,  882 => 273,  878 => 272,  874 => 269,  872 => 268,  868 => 267,  864 => 264,  862 => 263,  858 => 262,  854 => 259,  852 => 258,  848 => 257,  844 => 254,  842 => 253,  838 => 252,  834 => 249,  830 => 246,  827 => 244,  825 => 243,  821 => 240,  818 => 238,  816 => 237,  814 => 236,  808 => 235,  804 => 232,  802 => 231,  800 => 229,  799 => 228,  798 => 227,  796 => 226,  794 => 225,  790 => 224,  786 => 221,  784 => 220,  780 => 219,  776 => 216,  774 => 215,  770 => 214,  766 => 211,  764 => 210,  760 => 209,  756 => 206,  754 => 205,  750 => 204,  742 => 201,  740 => 200,  736 => 199,  732 => 196,  730 => 195,  726 => 194,  722 => 191,  720 => 190,  716 => 189,  712 => 186,  708 => 185,  704 => 182,  702 => 181,  698 => 180,  694 => 177,  692 => 176,  688 => 174,  683 => 170,  679 => 169,  675 => 166,  669 => 165,  663 => 164,  657 => 163,  651 => 162,  645 => 161,  639 => 160,  633 => 159,  628 => 155,  622 => 154,  616 => 153,  610 => 152,  604 => 151,  598 => 150,  592 => 149,  586 => 148,  580 => 145,  578 => 144,  574 => 143,  571 => 141,  569 => 140,  565 => 139,  560 => 135,  550 => 134,  545 => 133,  543 => 132,  540 => 130,  538 => 129,  534 => 128,  529 => 124,  527 => 122,  526 => 121,  525 => 120,  524 => 119,  520 => 118,  517 => 116,  515 => 115,  511 => 114,  506 => 110,  504 => 109,  502 => 108,  500 => 107,  498 => 106,  494 => 105,  491 => 103,  489 => 102,  485 => 101,  471 => 98,  467 => 97,  453 => 94,  449 => 93,  413 => 88,  410 => 86,  408 => 85,  406 => 84,  401 => 83,  399 => 82,  382 => 81,  378 => 80,  374 => 77,  372 => 76,  370 => 75,  368 => 74,  362 => 71,  360 => 70,  358 => 69,  355 => 68,  353 => 67,  351 => 66,  342 => 64,  340 => 63,  333 => 62,  330 => 60,  328 => 59,  324 => 58,  320 => 55,  314 => 53,  312 => 52,  308 => 51,  304 => 50,  300 => 49,  295 => 45,  292 => 43,  290 => 42,  286 => 41,  278 => 38,  274 => 37,  270 => 34,  267 => 32,  265 => 31,  261 => 30,  257 => 27,  255 => 26,  253 => 25,  250 => 23,  248 => 22,  244 => 21,  240 => 20,  226 => 17,  223 => 15,  221 => 13,  219 => 12,  215 => 11,  210 => 7,  207 => 5,  205 => 4,  201 => 3,  197 => 473,  195 => 468,  193 => 463,  191 => 456,  189 => 450,  186 => 447,  184 => 426,  182 => 416,  180 => 409,  178 => 395,  176 => 389,  174 => 383,  172 => 377,  170 => 364,  168 => 356,  165 => 353,  163 => 338,  160 => 337,  158 => 329,  155 => 328,  153 => 325,  151 => 299,  149 => 285,  147 => 272,  145 => 267,  143 => 262,  141 => 257,  139 => 252,  137 => 224,  135 => 219,  133 => 214,  131 => 209,  129 => 204,  127 => 199,  125 => 194,  123 => 189,  121 => 185,  119 => 180,  117 => 174,  115 => 139,  113 => 128,  111 => 114,  109 => 101,  107 => 97,  105 => 93,  103 => 80,  101 => 58,  99 => 49,  97 => 41,  95 => 37,  93 => 30,  91 => 20,  89 => 11,  87 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "form_div_layout.html.twig", "/var/www/vendor/symfony/twig-bridge/Resources/views/Form/form_div_layout.html.twig");
    }
}
