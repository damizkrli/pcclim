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

/* @WebProfiler/Profiler/profiler.css.twig */
class __TwigTemplate_8e58eedbf60a87685e0378d097da79cd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/profiler.css.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/profiler.css.twig"));

        // line 6
        echo "button,hr,input{overflow:visible}progress,sub,sup{vertical-align:baseline}[type=checkbox],[type=radio],legend{box-sizing:border-box;padding:0}html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}details,main{display:block}h1{font-size:2em;margin:.67em 0}hr{box-sizing:content-box;height:0}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}a{background-color:transparent}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:bolder}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}img{border-style:none}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;line-height:1.15;margin:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:ButtonText dotted 1px}fieldset{padding:.35em .75em .625em}legend{color:inherit;display:table;max-width:100%;white-space:normal}textarea{overflow:auto}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}[hidden],template{display:none}

:root {
    --font-family-system: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", \"Liberation Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    --font-family-monospace: \"JetBrains Mono\", ui-monospace, \"Roboto Mono\", SFMono-Regular, Menlo, Monaco, Consolas,\"Liberation Mono\", \"Courier New\", monospace;
    --font-size-body: 14px;
    --font-size-monospace: 13px;
    --font-variant-ligatures-monospace: none;
    --summary-status-border-width: 6px;

    --white: #fff;
    --black: #000;
    --gray-50: #fafafa;
    --gray-100: #f5f5f5;
    --gray-200: #e5e5e5;
    --gray-300: #d4d4d4;
    --gray-400: #a3a3a3;
    --gray-500: #737373;
    --gray-600: #525252;
    --gray-700: #404040;
    --gray-800: #262626;
    --gray-900: #171717;
    --green-50: #eff5f5;
    --green-100: #deeaea;
    --green-200: #bbd5d5;
    --green-300: #99bfbf;
    --green-400: #76a9a9;
    --green-500: #598e8e;
    --green-600: #436c6c;
    --green-700: #2e4949;
    --green-800: #182727;
    --green-900: #030404;
    --yellow-50: #fef7e1;
    --yellow-100: #fef2cd;
    --yellow-200: #fde496;
    --yellow-300: #fcd55f;
    --yellow-400: #fbc728;
    --yellow-500: #e6af05;
    --yellow-600: #af8503;
    --yellow-700: #785b02;
    --yellow-800: #413101;
    --yellow-900: #0a0800;
    --red-50: #FEFBFC;
    --red-100: #FCE9ED;
    --red-200: #F5B8C5;
    --red-300: #EF869C;
    --red-400: #E85574;
    --red-500: #E1244B;
    --red-600: #B41939;
    --red-700: #83122A;
    --red-800: #510B1A;
    --red-900: #20040A;

    --page-grid-dot-color: var(--gray-200);
    --page-background: var(--white);
    --page-color: var(--gray-700);

    --color-text: var(--gray-800);
    --color-muted: var(--gray-500);
    --color-link: #1d4ed8;

    --success-background: var(--green-100);

    --header-background: var(--gray-100);
    --header-border-color: var(--gray-200);
    --header-status-request-method-color: var(--color-muted);
    --header-metadata-key: var(--gray-500);
    --header-metadata-value: var(--gray-600);

    --header-success-background: var(--green-50);
    --header-success-border-color: var(--green-500);
    --header-success-box-shadow: inset 0 0 0 1px var(--green-100);
    --header-success-title-color: var(--color-text);
    --header-success-status-code-background: var(--green-500);
    --header-success-status-code-color: var(--white);
    --header-success-status-text-color: var(--green-600);

    --header-warning-background: var(--yellow-50);
    --header-warning-border-color: var(--yellow-300);
    --header-warning-box-shadow: inset 0 0 0 1px var(--yellow-100);
    --header-warning-title-color: var(--color-text);
    --header-warning-status-code-background: var(--yellow-200);
    --header-warning-status-code-color: var(--yellow-700);
    --header-warning-status-text-color: var(--color-warning);

    --header-error-background: var(--red-100);
    --header-error-border-color: var(--red-500);
    --header-error-box-shadow: inset 0 0 0 1px var(--red-100);
    --header-error-title-color: var(--color-text);
    --header-error-status-code-background: transparent;
    --header-error-status-code-color: var(--red-500);
    --header-error-status-text-color: var(--red-400);

    --color-success: #4f805d;
    --color-warning: var(--yellow-700);
    --color-error: var(--red-600);
    --h2-border-color: var(--gray-200);
    --heading-code-background: var(--gray-100);
    --form-input-border-color: var(--gray-300);
    --button-background: var(--gray-100);
    --button-border-color: var(--gray-300);
    --button-box-shadow: 0 1px 0 0 var(--gray-300);
    --button-color: var(--gray-800);
    --button-active-background: var(--gray-200);
    --badge-background: var(--gray-200);
    --badge-color: var(--gray-600);
    --badge-shadow: none;
    --selected-badge-background: var(--gray-200);
    --selected-badge-color: var(--gray-600);
    --selected-badge-shadow: inset 0 0 0 1px var(--gray-300);
    --badge-light-background: var(--gray-100);
    --badge-light-color: var(--gray-500);
    --badge-success-background: var(--green-100);
    --badge-success-color: var(--green-700);
    --badge-success-shadow: none;
    --badge-warning-background: var(--yellow-200);
    --badge-warning-color: var(--yellow-700);
    --badge-warning-shadow: none;
    --selected-badge-warning-background: var(--yellow-200);
    --selected-badge-warning-color: var(--yellow-700);
    --selected-badge-warning-shadow: inset 0 0 0 1px var(--yellow-500);
    --badge-danger-background: var(--red-100);
    --badge-danger-color: var(--red-700);
    --badge-danger-shadow: none;
    --selected-badge-danger-background: var(--red-100);
    --selected-badge-danger-color: var(--red-700);
    --selected-badge-danger-shadow: inset 0 0 0 1px var(--red-200);
    --sidebar-shadow: inset 0 0 0 1px var(--menu-border-color), 0 0 0 3px var(--gray-50), 0 0 0 5px var(--page-background);
    --menu-border-color: var(--gray-300);
    --menu-color: var(--gray-700);
    --menu-disabled-color: var(--gray-400);
    --menu-icon-color: var(--gray-500);
    --menu-icon-disabled-color: var(--gray-200);
    --menu-active-color: var(--color-link);
    --menu-active-marker-background: var(--color-link);
    --menu-active-background: var(--gray-100);
    --tab-background: #f0f0f0;
    --tab-border-color: var(--gray-200);
    --tab-active-border-color: var(--gray-300);
    --tab-color: #444;
    --tab-active-background: var(--page-background);
    --tab-active-color: var(--color-text);
    --tab-disabled-background: #f5f5f5;
    --tab-disabled-color: #999;
    --log-filter-active-num-color: #2563EB;
    --log-timestamp-color: #555;
    --code-block-background: var(--gray-50);
    --metric-value-background: var(--page-background);
    --metric-border-color: var(--gray-300);
    --metric-value-color: inherit;
    --metric-unit-color: #999;
    --metric-label-background: #e0e0e0;
    --metric-label-color: inherit;
    --metric-icon-green-color: var(--color-success);
    --metric-icon-red-color: var(--red-600);
    --trace-selected-background: #F7E5A1;
    --table-border-color: var(--gray-300);
    --table-background: var(--page-background);
    --table-header: var(--gray-100);
    --table-header-border-color: var(--gray-300);
    --info-background: #ddf;
    --tree-active-background: var(--gray-200);
    --exception-title-color: var(--base-2);
    --shadow: 0px 0px 1px rgba(128, 128, 128, .2);
    --border: 1px solid #e0e0e0;
    --background-error: var(--color-error);
    --mailer-email-table-wrapper-background: var(--gray-100);
    --mailer-email-table-active-row-background: #dbeafe;
    --mailer-email-table-active-row-color: var(--color-text);

    --highlight-variable: #e36209;
    --highlight-string: #22863a;
    --highlight-comment: #6a737d;
    --highlight-keyword: #d73a49;
    --highlight-constant: #1750eb;
    --highlight-error: var(--red-600);

    /* legacy variables kept for backward-compatibility purposes */
    --font-sans-serif: var(--font-family-system);
    --table-border: var(--table-border-color);
    --highlight-default: #222222;
    --highlight-selected-line: rgba(255, 255, 153, 0.5);
    --base-0: #fff;
    --base-1: #f5f5f5;
    --base-2: #e0e0e0;
    --base-3: #ccc;
    --base-4: #666;
    --base-5: #444;
    --base-6: #222;
    --card-label-background: var(--gray-200);
    --card-label-color: var(--gray-800);
}

.theme-dark {
    --page-background: var(--gray-800);
    --page-grid-dot-color: var(--gray-700);
    --page-color: var(--gray-100);

    --color-text: var(--gray-100);
    --color-muted: var(--gray-400);
    --color-link: #93C5FD;

    --color-success: var(--green-200);
    --color-warning: var(--yellow-300);
    --color-error: #ff7b72;
    --success-background: #1dc9a433;

    --header-background: var(--gray-700);
    --header-border-color: var(--gray-500);
    --header-status-request-method-color: #ffffff99;
    --header-metadata-key: #ffffff99;
    --header-metadata-value: #ffffffbb;

    --header-success-background: #1dc9a433;
    --header-success-border-color: #1dc9a4;
    --header-success-box-shadow: none;
    --header-success-title-color: #36e2bd;
    --header-success-status-code-background: #1dc9a4;
    --header-success-status-code-color: var(--page-background);
    --header-success-status-text-color: #1dc9a4;

    --header-warning-background: #f97a1f33;
    --header-warning-border-color: var(--yellow-500);
    --header-warning-box-shadow: none;
    --header-warning-title-color: #FCDE83;
    --header-warning-status-code-background: var(--yellow-200);
    --header-warning-status-code-color: var(--page-background);
    --header-warning-status-text-color: var(--color-warning);

    --header-error-background: #c91d424d;
    --header-error-border-color: var(--red-500);
    --header-error-box-shadow: none;
    --header-error-title-color: #F9D2DB;
    --header-error-status-code-background: transparent;
    --header-error-status-code-color: var(--red-300);
    --header-error-status-text-color: var(--red-200);

    --h2-border-color: var(--gray-500);
    --heading-code-background: var(--gray-600);
    --form-input-border-color: var(--gray-400);
    --button-background: var(--gray-300);
    --button-border-color: var(--gray-500);
    --button-box-shadow: 0 1px 0 0 var(--gray-500);
    --button-color: var(--gray-800);
    --button-active-background: var(--gray-400);
    --badge-background: rgba(221, 221, 221, 0.2);
    --badge-color: var(--gray-300);
    --badge-shadow: none;
    --selected-badge-background: #555;
    --selected-badge-color: #ddd;
    --selected-badge-shadow: none;
    --badge-light-background: var(--gray-700);
    --badge-light-color: var(--gray-300);
    --badge-success-background: #1dc9a420;
    --badge-success-color: #36e2bd;
    --badge-success-shadow: inset 0 0 0 1px #36e2bd4d;
    --badge-warning-background: #f97a1f33;
    --badge-warning-color: #FCDE83;
    --badge-warning-shadow: inset 0 0 0 1px #e6af0580;
    --selected-badge-warning-background: var(--yellow-300);
    --selected-badge-warning-color: var(--yellow-700);
    --selected-badge-warning-shadow: inset 0 0 0 1px var(--yellow-600);
    --badge-danger-background: #E1244B20;
    --badge-danger-color: var(--red-300);
    --badge-danger-shadow: inset 0 0 0 1px #e1244Bd0;
    --selected-badge-danger-background: var(--red-600);
    --selected-badge-danger-color: var(--red-100);
    --selected-badge-danger-shadow: none;
    --sidebar-shadow: inset 0 0 0 1px var(--menu-border-color), 0 0 0 5px var(--page-background);
    --menu-border-color: var(--gray-500);
    --menu-color: var(--gray-300);
    --menu-disabled-color: var(--gray-500);
    --menu-icon-color: var(--gray-400);
    --menu-icon-disabled-color: var(--gray-600);
    --menu-active-color: var(--gray-800);
    --menu-active-marker-background: transparent;
    --menu-active-background: var(--gray-300);
    --tab-background: var(--gray-700);
    --tab-border-color: var(--gray-500);
    --tab-active-border-color: var(--gray-900);
    --tab-color: var(--color-text);
    --tab-active-background: var(--gray-300);
    --tab-active-color: var(--gray-800);
    --tab-disabled-background: var(--page-background);
    --tab-disabled-color: var(--gray-400);
    --log-filter-active-num-color: #2563EB;
    --log-timestamp-color: #ccc;
    --code-block-background: var(--gray-900);
    --metric-value-background: var(--page-background);
    --metric-border-color: var(--gray-500);
    --metric-value-color: inherit;
    --metric-unit-color: #999;
    --metric-label-background: #777;
    --metric-label-color: #e0e0e0;
    --metric-icon-green-color: #7ee787;
    --metric-icon-red-color: #ff7b72;
    --trace-selected-background: #71663acc;
    --table-border-color: var(--gray-600);
    --table-background: var(--page-background);
    --table-header: var(--gray-700);
    --table-header-border-color: var(--gray-600);
    --info-background: rgba(79, 148, 195, 0.5);
    --tree-active-background: var(--metric-label-background);
    --exception-title-color: var(--base-2);
    --shadow: 0px 0px 1px rgba(32, 32, 32, .2);
    --border: 1px solid #666;
    --background-error: #b0413e;
    --mailer-email-table-wrapper-background: var(--gray-900);
    --mailer-email-table-active-row-background: var(--gray-300);
    --mailer-email-table-active-row-color: var(--gray-800);
    --highlight-variable: #ffa657;
    --highlight-string: #7ee787;
    --highlight-comment: #8b949e;
    --highlight-keyword: #ff7b72;
    --highlight-constant: #54aeff;
    --highlight-error: var(--red-400);

    /* legacy variables kept for backward-compatibility purposes */
    --highlight-default: var(--base-6);
    --highlight-selected-line: rgba(14, 14, 14, 0.5);
    --base-0: #2e3136;
    --base-1: #444;
    --base-2: #666;
    --base-3: #666;
    --base-4: #666;
    --base-5: #e0e0e0;
    --base-6: #f5f5f5;
    --card-label-background: var(--tab-active-background);
    --card-label-color: var(--tab-active-color);
}

";
        // line 339
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/fonts.css.twig");
        echo "

";
        // line 343
        echo "html {
    /* this avoids \"jumps\" when scrolling between pages with and without scroll bars */
    overflow-y: scroll;
}
html, body  {
    height: 100%;
    width: 100%;
}
body {
    background-attachment: fixed;
    background-color: var(--page-background);
    background-image: radial-gradient(var(--page-grid-dot-color) 1px, transparent 0);
    background-size: 15px 15px;
    color: var(--page-color);
    font-family: var(--font-family-system);
    font-size: var(--font-size-body);
    line-height: 1.4;
}

h2, h3, h4 {
    font-weight: 500;
    margin: 1.5em 0 .5em;
}
h2 + h3,
h3 + h4 {
    margin-top: 1em;
}
h2 {
    font-size: 21px;
}
h3 {
    font-size: 18px;
}
h4 {
    font-size: 16px;
}
h2 span, h3 span, h4 span,
h2 small, h3 small, h4 small {
    color: var(--color-muted);
}

summary {
    display: block;
}

li {
    margin-bottom: 10px;
}

p {
    font-size: 16px;
    margin-bottom: 1em;
}

a {
    color: var(--color-link);
    text-decoration: none;
}
a:hover {
    text-decoration: underline;
}
a.link-inverse {
    text-decoration: underline;
}
a.link-inverse:hover {
    text-decoration: none;
}
a:active,
a:hover {
    outline: 0;
}
a.stretched-link:after {
    background: transparent;
    content: \"\";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
    pointer-events: auto;
}
h2 a,
h3 a,
h4 a {
    text-decoration: underline;
}
h2 a:hover,
h3 a:hover,
h4 a:hover {
    text-decoration: none;
}

abbr {
    border-bottom: 1px dotted var(--base-5);
    cursor: help;
}

code, pre {
    font-family: var(--font-family-monospace);
    font-size: var(--font-size-monospace);
    font-variant-ligatures: var(--font-variant-ligatures-monospace);
}
h1 code, h2 code, h3 code, h4 code, h5 code, h6 code {
    color: inherit;
    font-weight: inherit;
    font-family: inherit;
    font-size: inherit;
    background: var(--heading-code-background);
    border-radius: 4px;
    padding: 0 3px;
    word-break: break-word;
}

input, select {
    background-color: var(--page-background);
    border: 0;
    border-radius: 4px;
    box-shadow: inset 0 0 0 1px var(--form-input-border-color);
    color: var(--color-text);
    padding: 5px 6px;
}
input[type=\"radio\"], input[type=\"checkbox\"] {
    box-shadow: none;
}

/* Used to hide elements added for accessibility reasons (the !important modifier is needed here) */
.visually-hidden {
    border: 0 !important;
    clip: rect(0, 0, 0, 0) !important;
    height: 1px !important;
    margin: -1px !important;
    overflow: hidden !important;
    padding: 0 !important;
    position: absolute !important;
    width: 1px !important;
    white-space: nowrap !important;
}

";
        // line 484
        echo ".btn {
    background: var(--button-background);
    border-radius: 6px;
    border: 1px solid var(--button-border-color);
    box-shadow: var(--button-box-shadow);
    color: var(--button-color);
    cursor: pointer;
    display: inline-block;
    font-size: var(--font-size-body);
    font-weight: 500;
    line-height: 20px;
    padding: 5px 15px;
    white-space: nowrap;
}
.btn:hover {
    text-decoration: none;
}
.btn:active {
    background: var(--button-active-background);
    box-shadow: none;
    transform: translateY(1px);
}
.btn-sm {
    font-size: 12px;
    line-height: 20px;
    padding: 3px 12px;
}
.btn-sm svg {
    height: 16px;
    width: 16px;
    vertical-align: middle;
}
.btn-link, .btn-link:active {
    border-color: transparent;
    box-shadow: none;
    color: var(--color-link);
    text-decoration: none;
    background-color: transparent;
    outline: none;
    border: 0;
    padding: 0;
    cursor: pointer;
}
.btn-link:hover {
    text-decoration: underline;
}
";
        // line 532
        echo "table, tr, th, td {
    border-collapse: collapse;
    line-height: 1.5;
    vertical-align: top;
}
table {
    background: var(--page-background);
    border-radius: 6px;
    margin: 1em 0;
    overflow: hidden;
    width: 100%;
    box-shadow: 0 0 0 1px var(--table-border-color), 0 0 0 5px var(--page-background);
}
table + table {
    margin-top: 20px;
}

table th, table td {
    padding: 8px 10px;
}

table th {
    font-weight: bold;
    text-align: left;
    vertical-align: top;
}
table thead th {
    background-color: var(--table-header);
    border-bottom: 1px solid var(--table-header-border-color);
    vertical-align: bottom;
}
table thead th.key {
    width: 19%;
}
table thead.small th {
    font-size: 12px;
    padding: 4px 10px;
}

table tbody th,
table tbody td {
    border: 1px solid var(--table-border-color);
    border-width: 1px 0;
    font-family: var(--font-family-monospace);
    font-size: var(--font-size-monospace);
    font-variant-ligatures: var(--font-variant-ligatures-monospace);
}
table tbody th.font-normal,
table tbody td.font-normal {
    font-size: var(--font-size-body);
}
table tbody tr:last-of-type th,
table tbody tr:last-of-type td {
    border-bottom: 0;
}

table tbody div {
    margin: .25em 0;
}
table tbody ul {
    margin: 0;
    padding: 0 0 0 1em;
}

table thead th.num-col,
table tbody td.num-col {
    text-align: center;
}

";
        // line 603
        echo ".block {
    display: block;
}
.full-width {
    width: 100%;
}
.hidden {
    display: none;
}
.nowrap {
    white-space: pre;
}
.prewrap {
    white-space: pre-wrap;
}
.newline {
    display: block;
}
.break-long-words {
    -ms-word-break: break-all;
    word-break: break-all;
    word-break: break-word;
    -webkit-hyphens: auto;
    -moz-hyphens: auto;
    hyphens: auto;
}
.text-small {
    font-size: 12px !important;
}
.text-muted {
    color: var(--color-muted);
}
.text-danger {
    color: var(--color-error);
}
.text-bold {
    font-weight: bold;
}
.text-right {
    text-align: right;
}
.text-center {
    text-align: center;
}
.font-normal {
    font-family: var(--font-family-system);
    font-size: var(--font-size-body);
}
.help {
    color: var(--color-muted);
    font-size: var(--font-size-body);
    margin: .5em 0;
}
.empty {
    background-color: var(--page-background);
    background-image: url(\"data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%23e5e5e5' stroke-width='4' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e\");
    border-radius: 6px;
    box-shadow: 0 0 0 5px var(--page-background);
    color: var(--color-muted);
    margin: 1em 0;
    padding: .5em 2em;
    text-align: center;
}
.theme-dark .empty {
    background-image: url(\"data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%23737373' stroke-width='4' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e\");
}
.empty p {
    font-size: var(--font-size-body);
    max-width: 60ch;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}
.empty.empty-panel {
    background: transparent;
    color: var(--color-muted);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    height: 400px;
    margin: 45px auto;
    max-width: 800px;
}
.empty.empty-panel p {
    background: var(--page-background);
    padding: 5px 10px;
}

.label {
    background-color: var(--badge-background);
    border-radius: 4px;
    box-shadow: var(--badge-shadow);
    color: #FAFAFA;
    display: inline-block;
    font-size: 12px;
    font-weight: bold;
    padding: 3px 7px;
    white-space: nowrap;
}
.label.same-width {
    min-width: 70px;
    text-align: center;
}
.label.status-success { background: var(--badge-success-background); box-shadow: var(--badge-success-shadow); color: var(--badge-success-color); }
.label.status-warning { background: var(--badge-warning-background); box-shadow: var(--badge-warning-shadow); color: var(--badge-warning-color); }
.label.status-error { background: var(--badge-danger-background); box-shadow: var(--badge-danger-shadow); color: var(--badge-danger-color); }

";
        // line 713
        echo ".metrics {
    align-items: flex-start;
    display: flex;
    margin: 1em 0;
    flex-wrap: wrap;
}
.metrics .metric {
    margin: 0 1em 1em 0;
}

.metric-group, .metric {
    background: var(--metric-value-background);
    box-shadow: inset 0 0 0 1px var(--metric-border-color), 0 0 0 5px var(--page-background);
    border-radius: 6px;
    color: var(--metric-value-color);
    display: inline-flex;
    flex-direction: column-reverse;
    min-width: 60px;
    padding: 10px 15px;
    text-align: center;
}
.metric-group {
    align-items: stretch;
    flex-direction: row;
    padding: 10px 0;
}
.metric-group .metric {
    background: transparent;
    border: none;
    border-radius: 0;
    box-shadow: none;
    justify-content: flex-end;
    margin: 0;
    min-height: auto;
    padding: 0 15px;
}
.metric-group .metric + .metric {
    border-left: 1px solid var(--table-border-color);
}

.metric .value {
    display: block;
    font-size: 24px;
    font-variant: tabular-nums;
}
.metric .value-is-icon {
    color: var(--gray-400);
}
.theme-dark .metric .value-is-icon {
    color: var(--gray-200);
}
.metric .value-is-icon svg {
    height: 32px;
    width: 32px;
}
.metric .value-shows-no-color {
    filter: grayscale(1);
}
.theme-dark .metric .value-shows-no-color {
    filter: invert(1) grayscale(1);
}
.theme-light .metric .value-shows-no-color,
.theme-light .metric .value-shows-no-color {
    opacity: 0.4;
}
.metric svg[data-icon-name=\"icon-tabler-check\"],
.metric svg[data-icon-name=\"icon-tabler-x\"] {
    stroke-width: 5px;
    height: 25px;
    width: 25px;
    transform: translateY(5px);
}
.metric svg[data-icon-name=\"icon-tabler-check\"] {
    color: var(--metric-icon-green-color);
}
.metric svg[data-icon-name=\"icon-tabler-x\"] {
    color: var(--metric-icon-red-color);
}

.metric .unit {
    color: var(--metric-unit-color);
    font-size: 18px;
    margin-left: -4px;
}
.metric .label {
    background: transparent;
    color: var(--color-link);
    display: block;
    font-size: 12px;
    padding: 0;
}

.metrics-horizontal .metric {
    min-height: 0;
    min-width: 0;
}
.metrics-horizontal .metric .value,
.metrics-horizontal .metric .label {
    display: inline;
    padding: 2px 6px;
}
.metrics-horizontal .metric .label {
    display: inline-block;
    padding: 6px;
}
.metrics-horizontal .metric .value {
    font-size: 16px;
}
.metrics-horizontal .metric .value svg {
    max-height: 14px;
    line-height: 10px;
    margin: 0;
    padding-left: 4px;
    vertical-align: middle;
}

.metric-divider {
    display: inline-flex;
    margin: 0 10px;
    min-height: 1px; ";
        // line 833
        echo "}

";
        // line 837
        echo ".card {
    background: var(--page-background);
    border-radius: 6px;
    box-shadow: inset 0 0 0 1px var(--form-input-border-color), 0 0 0 5px var(--page-background);
    margin: 1em 0;
    padding: 10px;
    overflow-y: auto;
}
.card-block + .card-block {
    border-top: 1px solid var(--form-input-border-color);
    padding-top: 10px;
}
.card *:first-child,
.card-block *:first-child {
    margin-top: 0;
}

";
        // line 856
        echo ".status-success {
    background: var(--success-background);
}
.status-warning {
    background: var(--badge-warning-background);
    color: var(--badge-warning-color);
}
.status-error {
    background: rgba(176, 65, 62, 0.2);
}
.status-success td,
.status-warning td,
.status-error td {
    background: transparent;
}
tr.status-error td,
tr.status-warning td {
    border-bottom: 1px solid var(--base-2);
    border-top: 1px solid var(--base-2);
}

.status-warning .colored {
    color: var(--color-warning);
}
.status-error .colored  {
    color: var(--color-error);
}

";
        // line 886
        echo ".highlight pre {
    margin: 0;
    white-space: pre-wrap;
}

.highlight .keyword   { color: var(--highlight-keyword); font-weight: bold; }
.highlight .word      { color: var(--color-text); }
.highlight .variable  { color: var(--highlight-variable); }
.highlight .symbol    { color: var(--color-text); }
.highlight .comment   { color: var(--highlight-comment); }
.highlight .backtick  { color: var(--color-muted); }
.highlight .string    { color: var(--highlight-string); }
.highlight .number    { color: var(--highlight-constant); font-weight: bold; }
.highlight .error     { color: var(--highlight-error); }

";
        // line 903
        echo ".sf-icon {
    vertical-align: middle;
    background-repeat: no-repeat;
    background-size: contain;
    width: 16px;
    height: 16px;
    display: inline-block;
}
.sf-icon svg {
    width: 16px;
    height: 16px;
}
.sf-icon.sf-medium,
.sf-icon.sf-medium svg {
    width: 24px;
    height: 24px;
}
.sf-icon.sf-large,
.sf-icon.sf-large svg {
    width: 32px;
    height: 32px;
}

";
        // line 928
        echo ".container {
    margin: 0 5px;
    max-width: 98%;
}
@media (min-width: 992px) {
    .container { margin: 0 15px; }
}
@media (min-width: 1200px) {
    .container { margin: 0 auto; max-width: 1200px; }
}

#header {
    flex: 0 0 auto;
}
#header .container {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
#content {
    height: 100%;
}
#main {
    display: flex;
    align-items: flex-start;
    flex-direction: row;
}
#sidebar {
    border-radius: 4px;
    flex: 0 0 220px;
}
#collector-wrapper {
    flex: 0 1 100%;
    min-width: 0;
}
#collector-wrapper h2 {
    box-shadow: inset 0 -1px 0 var(--page-background), 0 1px 0 var(--h2-border-color), 0 4px 0 var(--page-background);
    padding-bottom: 5px;
}
#collector-content {
    margin: 0 0 15px 0;
    padding: 0 0 15px 15px;
}
@media (min-width: 768px) {
    #collector-content {
        margin: 0 0 30px 0;
        padding: 0 0 15px 30px;
    }
}
#main #collector-content > h2:first-of-type {
    box-shadow: inset 0 -1px 0 var(--page-background), 0 2px 0 var(--h2-border-color), 0 5px 0 var(--page-background);
    font-size: 24px;
    margin: 5px 0 30px;
}
#main #collector-content > h2:first-of-type a {
    text-decoration: none;
}
#main #collector-content > h2:first-of-type a:hover {
    text-decoration: underline;
}

";
        // line 991
        echo "#header {
    align-items: center;
    display: flex;
    justify-content: space-between;
    overflow: hidden;
    padding: 10px 0;
}
#header h1 {
    align-items: center;
    background: var(--page-background);
    box-shadow: 0 0 0 5px var(--page-background);
    color: var(--gray-600);
    display: flex;
    font-weight: 500;
    font-size: 18px;
    margin: 0;
}
.theme-dark #header h1 {
    color: var(--gray-200);
}
#header h1 svg {
    height: 28px;
    width: 28px;
    margin-right: 6px;
}
#header .search {
    margin-right: 2px;
}
#header .search input {
    background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' data-icon-name='icon-tabler-search' width='21' height='21' viewBox='0 0 24 24' stroke='%23737373' fill='none' stroke-linecap='round' stroke-linejoin='round' stroke-width='3'%3E%3Cpath stroke='none' d='M0 0h24v24H0z' fill='none'%3E%3C/path%3E%3Ccircle cx='10' cy='10' r='7'%3E%3C/circle%3E%3Cline x1='21' y1='21' x2='15' y2='15'%3E%3C/line%3E%3C/svg%3E\");
    background-repeat: no-repeat;
    background-size: 16px;
    background-position: 5px;
    box-shadow: inset 0 0 0 1px var(--form-input-border-color), 0 0 0 3px var(--page-background);
    padding: 5px 8px 5px 30px;
    width: 215px;
}
.theme-dark #header .search input {
    background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' data-icon-name='icon-tabler-search' width='21' height='21' viewBox='0 0 24 24' stroke='%23a3a3a3' fill='none' stroke-linecap='round' stroke-linejoin='round' stroke-width='3'%3E%3Cpath stroke='none' d='M0 0h24v24H0z' fill='none'%3E%3C/path%3E%3Ccircle cx='10' cy='10' r='7'%3E%3C/circle%3E%3Cline x1='21' y1='21' x2='15' y2='15'%3E%3C/line%3E%3C/svg%3E\");
}

";
        // line 1034
        echo "#summary {
    box-shadow: 0 0 0 5px var(--page-background);
    margin: 0 0 15px;
    background: var(--page-background);
    color: var(--color-text);
}
#summary .status {
    background: var(--header-background);
    border-radius: 6px;
    color: var(--header-metadata-value);
    padding: calc(15px + var(--summary-status-border-width)) 15px 15px;
    position: relative;
}
#summary .status:before {
    background: var(--header-border-color);
    border-radius: 3px 3px 0 0;
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: var(--summary-status-border-width);
}
#summary .status-compact {
    padding: 13px 15px 10px;
    position: relative;
}
#summary .status-compact.status-compact-forward {
    padding: 10px 15px;
}
#summary .status + .status {
    margin-top: 10px;
}
#summary h2 {
    display: flex;
    align-items: flex-start;
}
#summary h2,
#summary h2 a {
    display: flex;
    font-size: 24px;
    line-height: 1.25;
    margin: 0;
    text-decoration: none;
    word-break: break-all;
}
#summary h2 a:hover {
    text-decoration: underline;
}
#summary .status .metadata .icon-referer {
    color: var(--color-link);
    display: inline-block;
    height: 21px;
    width: 21px;
    vertical-align: middle;
}
#summary .status .metadata .icon-referer svg {
    height: 21px;
    width: 21px;
}
#summary .status .metadata a.referer {
    color: var(--color-link);
}
#summary .status .metadata a.referer:hover {
    text-decoration: underline;
}

#summary .status-compact {
    font-size: 13px;
    margin: 0 0 10px;
}
#summary .status-compact .status-request-method {
    border-width: 1px;
    font-size: 12px;
    font-weight: bold;
    margin: 0 2px;
    padding: 1px 2px;
    white-space: nowrap;
}
#summary .status-compact .icon {
    display: inline-block;
    transform: translateY(2px);
    vertical-align: bottom;
}
#summary .status-compact .icon,
#summary .status-compact .icon svg {
    height: 21px;
    width: 21px;
}
#summary .status-compact .icon svg {
    color: var(--gray-500);
}
.theme-dark #summary .status-compact .icon svg {
    color: var(--gray-300);
}
#summary .status-compact .icon.icon-redirect svg,
#summary .status-compact .icon.icon-forward svg {
    stroke-width: 2;
}
#summary .status-compact .icon.icon-redirect svg {
    transform: rotate(90deg) translateX(3px);
}
#summary .status-compact.status-warning .icon svg {
    color: var(--yellow-600);
}
.theme-dark #summary .status-compact.status-warning .icon svg {
    color: var(--yellow-400);
}

#summary .status-response-status-code {
    background: var(--gray-600);
    border-radius: 4px;
    color: var(--white);
    display: inline-block;
    font-size: 12px;
    font-weight: bold;
    margin-right: 2px;
    padding: 1px 3px;
}
#summary .status-response-status-text {
    font-weight: bold;
}

#summary .status-success {
    background: var(--header-success-background);
    box-shadow: var(--header-success-box-shadow);
}
#summary .status-success:before {
    background: var(--header-success-border-color);
}
#summary .status-success h2 a { color: var(--header-success-title-color); }
#summary .status-success .status-response-status-code { background: var(--header-success-status-code-background); color: var(--header-success-status-code-color); }
#summary .status-success .status-response-status-text { color: var(--header-success-status-text-color); }

#summary .status-warning {
    background: var(--header-warning-background);
    box-shadow: var(--header-warning-box-shadow);
}
#summary .status-warning:before {
    background: var(--header-warning-border-color);
}
#summary .status-warning h2 a { color: var(--header-warning-title-color); }
#summary .status-warning .status-response-status-code,
#summary .summary-status-redirect .status-response-status-code { background: var(--header-warning-status-code-background); color: var(--header-warning-status-code-color); }
#summary .status-warning .status-response-status-text { color: var(--header-warning-status-text-color); }

#summary .status-error {
    background: var(--header-error-background);
    box-shadow: var(--header-error-box-shadow);
}
#summary .status-error:before {
    background: var(--header-error-border-color);
}
#summary .status-error h2 a { color: var(--header-error-title-color); }
#summary .status-error .status-response-status-code { background: var(--header-error-status-code-background); color: var(--header-error-status-code-color); }
#summary .status-error .status-response-status-text { color: var(--header-error-status-text-color);  }

#summary .status-request-method {
    border: 1px solid var(--header-status-request-method-color);
    border-radius: 5px;
    color: var(--header-status-request-method-color);
    display: inline-block;
    font-size: 16px;
    line-height: 1;
    margin-right: 6px;
    padding: 2px 4px;
    text-align: center;
    white-space: nowrap;
}
#summary .status:not(.status-compact) .status-request-method {
    transform: translateY(5px);
}

#summary .status-error-details {
    align-items: center;
    display: flex;
    font-size: 13px;
    line-height: 1;
    margin: 0 0 10px;
}
#summary .status-error-details .icon {
    display: inline-block;
}
#summary .status-error-details .icon svg {
    border-radius: 50%;
    box-shadow: inset 0 0 0 2px var(--red-200);
    color: var(--red-500);
    fill: var(--red-50);
    stroke-width: 3px;
    height: 24px;
    width: 24px;
}
.theme-dark #summary .status-error-details .icon svg {
    box-shadow: inset 0 0 0 2px var(--red-800);
    color: var(--red-200);
    fill: var(--red-700);
}
#summary .status-error-details .icon svg circle {
    stroke-width: 2px;
}
#summary .status-error-details .status-response-status-code {
    font-size: 15px;
    font-weight: bold;
    letter-spacing: -0.5px;
    line-height: 1;
    padding: 5px 8px;
    text-transform: uppercase;
}
#summary .status-error-details .status-response-status-text {
    color: var(--header-error-status-text-color);
    font-weight: normal;
}

#summary dl.metadata {
    margin: 10px 0 0;
}
#summary dl.metadata dt,
#summary dl.metadata dd {
    display: inline-block;
    font-size: 13px;
}
#summary dl.metadata dt {
    color: var(--header-metadata-key);
}
#summary dl.metadata dt {
    font-weight: bold;
}
#summary dl.metadata dt:not(:empty):after {
    content: ':';
}
#summary dl.metadata dd,
#summary dl.metadata dd a {
    color: var(--header-metadata-value);
}
#summary dl.metadata dd {
    margin: 0 1.5em 0 0;
}

";
        // line 1274
        echo "#sidebar {
    margin-bottom: 30px;
    position: sticky;
    top: 20px;
    width: 220px;
    z-index: 9999;
}
#sidebar-contents {
    background: var(--page-background);
    border-radius: 6px;
    box-shadow: var(--sidebar-shadow);
    color: var(--gray-500);
    margin: 0;
}

";
        // line 1291
        echo "#sidebar #sidebar-shortcuts {
    color: var(--gray-500);
    padding: 10px 15px;
}
#sidebar #sidebar-shortcuts .shortcuts {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
#sidebar #sidebar-shortcuts .shortcuts .btn-link {
    color: var(--color-muted);
    display: flex;
    align-items: center;
    font-size: 13px;
}
#sidebar #sidebar-shortcuts:hover .btn-link {
    color: var(--menu-color);
}
#sidebar-shortcuts .shortcuts svg {
    height: 16px;
    width: 16px;
    margin-right: 4px;
}

";
        // line 1317
        echo "#sidebar-search {
    padding: 5px 0;
}
#sidebar-search .form-group-row {
    display: flex;
    justify-content: space-between;
    padding-top: 10px;
}
#sidebar-search .form-group-row .form-group {
    padding-top: 0;
}
#sidebar-search .form-group {
    padding-top: 10px;
}
#sidebar-search .form-group:first-child {
    padding-top: 0;
}
#sidebar-search .form-group label {
    color: var(--color-muted);
    display: block;
    font-size: 12px;
    font-weight: bold;
    margin-bottom: 3px;
}
#sidebar-search .form-group input,
#sidebar-search .form-group select {
    font-size: 13px;
}
#sidebar-search select#method {
    width: 11ch;
}
#sidebar-search input#status_code {
    width: 8ch;
}
#sidebar-search input#ip,
#sidebar-search input#url {
    width: calc(100% - 12px);
}
#sidebar-search .form-group-row-search-button {
    align-items: flex-end;
}

";
        // line 1361
        echo "#menu-profiler {
    border-top: 1px solid var(--menu-border-color);
    list-style-type: none;
    margin: 0;
    padding: 7px;
}
#menu-profiler li {
    margin-bottom: 0;
    position: relative;
}
#menu-profiler li + li {
    margin-top: 4px;
}
#menu-profiler li a:hover {
    text-decoration: none;
}
#menu-profiler li a .label {
    background: transparent;
    border-radius: 4px;
    color: var(--menu-color);
    display: flex;
    align-items: center;
    padding: 5px 7px;
    overflow: hidden;
}
#menu-profiler li a .label .icon {
    color: var(--menu-icon-color);
    display: flex;
    margin-right: 8px;
    text-align: center;
}
#menu-profiler .label .icon img,
#menu-profiler .label .icon svg {
    height: 24px;
    max-width: 24px;
}
#menu-profiler li a .label strong {
    flex: 1;
    font-size: var(--font-size-body);
    font-weight: 500;
}
#menu-profiler li a .label.disabled {
    color: var(--menu-disabled-color);
    font-weight: normal;
}
#menu-profiler li a .label.disabled .icon {
    color: var(--menu-icon-disabled-color);
}
#menu-profiler li a .label.disabled strong {
    font-weight: normal;
}

#menu-profiler li.selected::before {
    background: var(--menu-active-marker-background);
    border-radius: 6px;
    content: '';
    position: absolute;
    top: calc(50% - 14px);
    left: -8px;
    width: 4px;
    height: 28px;
}
#menu-profiler li.selected a .label,
#menu-profiler:hover li.selected a:hover .label,
#menu-profiler li a:hover .label {
    background: var(--menu-active-background);
}
#menu-profiler li.selected a .label,
#menu-profiler li a:hover .label {
    color: var(--menu-active-color);
}
#menu-profiler li.selected a .icon svg,
#menu-profiler li a:hover .icon svg,
#menu-profiler li.selected a .disabled .icon svg,
#menu-profiler li a:hover .disabled .icon svg {
    color: var(--menu-active-color);
}

#menu-profiler li a .count {
    background: var(--selected-badge-background);
    border-radius: 4px;
    box-shadow: var(--selected-badge-shadow);
    color: var(--selected-badge-color);
    display: inline-block;
    font-weight: bold;
    line-height: 1;
    min-width: 10px;
    padding: 3px 6px;
    text-align: center;
    white-space: nowrap;
}
#menu-profiler li a span.count span {
    font-size: 12px;
}
#menu-profiler li a span.count span + span::before {
    content: \" / \";
    color: #AAA;
}

#menu-profiler .label-status-warning .count {
    background: var(--selected-badge-warning-background);
    color: var(--selected-badge-warning-color);
    box-shadow: var(--selected-badge-warning-shadow);
}
#menu-profiler .label-status-error .count {
    background: var(--selected-badge-danger-background);
    color: var(--selected-badge-danger-color);
    box-shadow: var(--selected-badge-danger-shadow);
}

";
        // line 1473
        echo "#timeline-control {
    background: var(--table-background);
    box-shadow: var(--shadow);
    margin: 1em 0;
    padding: 10px;
}
#timeline-control label {
    font-weight: bold;
    margin-right: 1em;
}
#timeline-control input {
    background: var(--metric-value-background);
    font-size: 16px;
    padding: 4px;
    text-align: right;
    width: 5em;
}
#timeline-control .help {
    margin-left: 1em;
}

.sf-profiler-timeline .legends {
    font-size: 12px;
    line-height: 1.5em;
}
.sf-profiler-timeline .legends button {
    color: var(--color-text);
}
.sf-profiler-timeline + p.help {
    margin-top: 0;
}

";
        // line 1507
        echo ".sf-profiler-httpclient-requests thead th {
    vertical-align: top;
}
.sf-profiler-httpclient-requests .http-method {
    border: 1px solid var(--header-status-request-method-color);
    border-radius: 5px;
    color: var(--header-status-request-method-color);
    display: inline-block;
    font-weight: 500;
    line-height: 1;
    margin-right: 6px;
    padding: 2px 4px;
    text-align: center;
    white-space: nowrap;
}
.sf-profiler-httpclient-requests .status-response-status-code {
    background: var(--gray-600);
    border-radius: 4px;
    color: var(--white);
    display: inline-block;
    font-size: 12px;
    font-weight: bold;
    margin-bottom: 2px;
    padding: 1px 3px;
}
.sf-profiler-httpclient-requests .status-response-status-code.status-success { background: var(--header-success-status-code-background); color: var(--header-success-status-code-color); }
.sf-profiler-httpclient-requests .status-response-status-code.status-warning { background: var(--header-warning-status-code-background); color: var(--header-warning-status-code-color); }
.sf-profiler-httpclient-requests .status-response-status-code.status-error { background: var(--header-error-status-code-background); color: var(--header-error-status-code-color); }


";
        // line 1539
        echo ".tab-navigation {
    background-color: var(--tab-background);
    border-radius: 6px;
    box-shadow: inset 0 0 0 1px var(--tab-border-color), 0 0 0 5px var(--page-background);
    display: inline-flex;
    flex-wrap: wrap;
    margin: 0 0 15px;
    padding: 0;
    user-select: none;
    -webkit-user-select: none;
}
.sf-tabs-sm .tab-navigation {
    box-shadow: inset 0 0 0 1px var(--tab-border-color), 0 0 0 4px var(--page-background);
    margin: 0 0 10px;
}
.tab-navigation li {
    box-shadow: none;
    transition: box-shadow .05s ease-in, background-color .05s ease-in;
    cursor: pointer;
    font-weight: 500;
    list-style: none;
    margin: 0;
    padding: 4px 14px;
    position: relative;
    text-align: center;
    z-index: 1;
}
.sf-tabs-sm .tab-navigation li {
    font-size: 13px;
    padding: 2.5px 10px;
}
.tab-navigation li:before {
    background: var(--tab-border-color);
    bottom: 15%;
    content: \"\";
    left: 0;
    position: absolute;
    top: 15%;
    width: 1px;
}
.tab-navigation li:first-child:before, .tab-navigation li.active + li:before, .tab-navigation li.active:before {
    width: 0;
}
.tab-navigation li .badge {
    background: var(--selected-badge-background);
    box-shadow: var(--selected-badge-shadow);
    color: var(--selected-badge-color);
    display: inline-block;
    font-size: 12px;
    font-weight: bold;
    line-height: 1;
    margin-left: 8px;
    min-width: 10px;
    padding: 2px 6px;
    text-align: center;
    white-space: nowrap;
}
.tab-navigation li.disabled {
    color: var(--tab-disabled-color);
}
.tab-navigation li.active {
    background-color: var(--tab-active-background);
    border-radius: 6px;
    box-shadow: inset 0 0 0 1.5px var(--tab-active-border-color);
    color: var(--tab-active-color);
    position: relative;
    z-index: 1;
}
.theme-dark .tab-navigation li.active {
    box-shadow: inset 0 0 0 1px var(--tab-border-color);
}
.tab-content > *:first-child {
    margin-top: 0;
}
.tab-navigation li .badge.status-warning {
    background: var(--selected-badge-warning-background);
    box-shadow: var(--selected-badge-warning-shadow);
    color: var(--selected-badge-warning-color);
}
.tab-navigation li .badge.status-error {
    background: var(--selected-badge-danger-background);
    box-shadow: var(--selected-badge-danger-shadow);
    color: var(--selected-badge-danger-color);
}

.sf-tabs .tab:not(:first-child) { display: none; }

";
        // line 1628
        echo ".sf-toggle-content {
    -moz-transition: display .25s ease;
    -webkit-transition: display .25s ease;
    transition: display 3.25s ease;
}
.sf-toggle-content.sf-toggle-hidden {
    display: none;
}
.sf-toggle-content.sf-toggle-visible {
    display: block;
}

";
        // line 1642
        echo "[data-filters] { position: relative; }
[data-filtered] { cursor: pointer; }
[data-filtered]:after { content: '\\00a0\\25BE'; }
[data-filtered]:hover .filter-list li { display: inline-flex; }
[class*=\"filter-hidden-\"] { display: none; }
.filter-list { position: absolute; border: var(--border); box-shadow: var(--shadow); margin: 0; padding: 0; display: flex; flex-direction: column; }
.filter-list :after { content: ''; }
.filter-list li {
    background: var(--tab-disabled-background);
    border-bottom: var(--border);
    color: var(--tab-disabled-color);
    display: none;
    list-style: none;
    margin: 0;
    padding: 5px 10px;
    text-align: left;
    font-weight: normal;
}
.filter-list li.active {
    background: var(--tab-background);
    color: var(--tab-color);
}
.filter-list li.last-active {
    background: var(--tab-active-background);
    color: var(--tab-active-color);
}

.filter-list-level li { cursor: s-resize; }
.filter-list-level li.active { cursor: n-resize; }
.filter-list-level li.last-active { cursor: default; }
.filter-list-level li.last-active:before { content: '\\2714\\00a0'; }
.filter-list-choice li:before { content: '\\2714\\00a0'; color: transparent; }
.filter-list-choice li.active:before { color: unset; }

";
        // line 1678
        echo "#twig-dump pre {
    font-size: var(--font-size-monospace);
    line-height: 1.7;
    background-color: var(--base-0);
    border: var(--border);
    border-radius: 6px;
    padding: 15px;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
}
#twig-dump span {
    border-radius: 2px;
    padding: 1px 2px;
}
#twig-dump .status-error { background: transparent; color: var(--color-error); }
#twig-dump .status-warning { background: rgba(240, 181, 24, 0.3); }
#twig-dump .status-success { background: rgba(100, 189, 99, 0.2); }
#twig-dump .status-info { background: var(--info-background); }
.theme-dark #twig-dump .status-warning { color: var(--yellow-200); }
.theme-dark #twig-dump .status-success { color: var(--green-200); }

#twig-table tbody td {
    position: relative;
}
#twig-table tbody td div {
    margin: 0;
}
#twig-table .template-file-path {
    color: var(--color-muted);
    display: block;
}

";
        // line 1711
        echo ".empty-query-post-files {
    display: flex;
    justify-content: space-between;
}
.empty-query-post-files > div {
    flex: 1;
}
.empty-query-post-files > div + div {
    margin-left: 30px;
}
.empty-query-post-files h3 {
    margin-top: 0;
}
.empty-query-post-files .empty {
    margin-bottom: 0;
}

";
        // line 1730
        echo ".badge {
    background: var(--badge-background);
    border-radius: 4px;
    color: var(--badge-color);
    font-size: 12px;
    font-weight: bold;
    padding: 1px 4px;
}
.badge-success {
    background: var(--badge-success-background);
    color: var(--badge-success-color);
}
.badge-warning {
    background: var(--badge-warning-background);
    color: var(--badge-warning-color);
}

.log-filters {
    display: flex;
    flex-wrap: wrap;
}
.log-filters .log-filter {
    flex-shrink: 0;
    margin-right: 15px;
    position: relative;
}
.log-filters .log-filter summary {
    align-items: center;
    background: var(--button-background);
    border-radius: 6px;
    border: 1px solid var(--button-border-color);
    box-shadow: var(--button-box-shadow);
    color: var(--button-color);
    cursor: pointer;
    display: flex;
    font-size: 13px;
    font-weight: 500;
    padding: 4px 8px;
    white-space: nowrap;
}
.log-filters .log-filter summary:active {
    box-shadow: none;
    transform: translateY(1px);
}
.log-filters .log-filter summary .icon {
    height: 18px;
    width: 18px;
    margin: 0 7px 0 0;
}
.log-filters .log-filter summary svg {
    height: 18px;
    width: 18px;
    opacity: 0.7;
}
.log-filters .log-filter summary svg {
    stroke-width: 2;
}
.log-filters .log-filter summary .filter-active-num {
    color: var(--log-filter-active-num-color);
    font-weight: bold;
    padding: 0 1px;
}
.log-filter .tab-navigation li input {
    display: none;
}
.log-filter .tab-navigation li label {
    cursor: pointer;
}
.log-filters .log-filter .log-filter-content {
    background: var(--base-0);
    border: 1px solid var(--table-border-color);
    border-radius: 6px;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    padding: 15px;
    position: absolute;
    left: 0;
    top: 32px;
    max-width: 400px;
    min-width: 200px;
    z-index: 9999;
}
.log-filters .log-filter .log-filter-content .log-filter-option {
    align-items: center;
    display: flex;
}
.log-filter .filter-select-all-or-none {
    margin-bottom: 10px;
}
.log-filter .filter-select-all-or-none button + button {
    margin-left: 15px;
}
.log-filters .log-filter .log-filter-content .log-filter-option + .log-filter-option {
    margin: 7px 0 0;
}
.log-filters .log-filter .log-filter-content .log-filter-option label {
    cursor: pointer;
    flex: 1;
    padding-left: 10px;
}

table.logs {
    border-bottom-width: 0;
    border-collapse: collapse;
}
table.logs tr + tr td {
    border-width: 1px 0 0;
}
table.logs .metadata {
    display: block;
    font-size: 12px;
}
.theme-dark tr.status-error td,
.theme-dark tr.status-warning td { border-bottom: unset; border-top: unset; }

table.logs .log-timestamp {
    color: var(--log-timestamp-color);
}
table.logs .log-metadata {
    margin: 8px 0 0;
}
table.logs .log-metadata > span {
    display: inline-block;
}
table.logs .log-metadata > span + span {
    margin-left: 10px;
}
table.logs .log-metadata .log-channel {
    color: var(--base-1);
    font-size: 13px;
    font-weight: bold;
}
table.logs .log-metadata .badge {
    background: var(--badge-light-background);
    color: var(--badge-light-color);
}
table.logs .log-metadata .log-num-occurrences {
    color: var(--color-muted);
    font-size: 13px;
}
table.logs .log-metadata .context {
    background: var(--code-block-background);
    border-radius: 4px;
    padding: 5px;
}
table.logs .log-metadata .context + .context {
    margin-top: 10px;
}
.log-type-badge {
    background: var(--badge-light-background);
    box-shadow: none;
    color: var(--badge-light-color);
    display: inline-block;
    font-family: var(--font-family-system);
    margin-top: 5px;
}
.log-type-badge.badge-deprecation,
.log-type-badge.badge-warning {
    background: var(--badge-warning-background);
    color: var(--badge-warning-color);
}
.log-type-badge.badge-error {
    background: var(--badge-danger-background);
    color: var(--badge-danger-color);
}
.log-type-badge.badge-silenced {
    background: #EDE9FE;
    color: #6D28D9;
}
.theme-dark .log-type-badge.badge-silenced {
    background: #5B21B6;
    color: #EDE9FE;
}

tr.log-status-warning > td:first-child,
tr.log-status-error > td:first-child,
tr.log-status-silenced > td:first-child {
    position: relative;
}
tr.log-status-warning > td:first-child:before,
tr.log-status-error > td:first-child:before,
tr.log-status-silenced > td:first-child:before {
    background: transparent;
    border-radius: 0;
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
}
tr.log-status-warning > td:first-child:before {
    background: var(--yellow-400);
}
tr.log-status-error > td:first-child:before {
    background: var(--red-400);
}
tr.log-status-silenced > td:first-child:before {
    background: #a78bfa;
}

.container-compilation-logs {
    background: var(--table-background);
    border: 1px solid var(--base-2);
    border-radius: 6px;
    margin-top: 30px;
    padding: 15px;
}
.container-compilation-logs summary {
    cursor: pointer;
}
.container-compilation-logs summary h4 {
    margin: 0 0 5px;
}
.container-compilation-logs summary p {
    margin: 0;
}

";
        // line 1949
        echo ".mailer-email-summary-table-wrapper {
    background: var(--mailer-email-table-wrapper-background);
    border-bottom: 4px double var(--table-border-color);
    border-radius: inherit;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    margin: 0 -9px 10px -9px;
    padding-bottom: 10px;
    transform: translateY(-9px);
    max-height: 265px;
    overflow-y: auto;
}
.mailer-email-summary-table,
.mailer-email-summary-table tr,
.mailer-email-summary-table td {
    border: 0;
    border-radius: inherit;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    box-shadow: none;
}
.mailer-email-summary-table th {
    color: var(--color-muted);
    font-size: 13px;
    padding: 4px 10px;
}
.mailer-email-summary-table tr td,
.mailer-email-summary-table tr:last-of-type td {
    border: solid var(--table-border-color);
    border-width: 1px 0;
}
.mailer-email-summary-table-row {
    margin: 5px 0;
}
.mailer-email-summary-table-row:hover {
    cursor: pointer;
}
.mailer-email-summary-table-row.active {
    background: var(--mailer-email-table-active-row-background);
    color: var(--mailer-email-table-active-row-color);
}
.mailer-email-summary-table-row td {
    font-family: var(--font-family-system);
    font-size: inherit;
}
.mailer-email-details {
    display: none;
}
.mailer-email-details.active {
    display: block;
}
.mailer-transport-information {
    border-bottom: 1px solid var(--form-input-border-color);
    padding-bottom: 5px;
    font-size: var(--font-size-body);
    margin: 5px 0 10px 5px;
}
.mailer-transport-information .badge {
    font-size: inherit;
    font-weight: inherit;
}
.mailer-message-subject {
    font-size: 21px;
    font-weight: bold;
    margin: 5px;
}
.mailer-message-headers {
    margin-bottom: 10px;
}
.mailer-message-headers p {
    font-size: var(--font-size-body);
    margin: 2px 5px;
}
.mailer-message-header-secondary {
    color: var(--color-muted);
}
.mailer-message-attachments-title {
    align-items: center;
    display: flex;
    font-size: var(--font-size-body);
    font-weight: 600;
    margin-bottom: 10px;
}
.mailer-message-attachments-title svg {
    color: var(--color-muted);
    margin-right: 5px;
    height: 18px;
    width: 18px;
}
.mailer-message-attachments-title span {
    font-weight: normal;
    margin-left: 4px;
}
.mailer-message-attachments-list {
    list-style: none;
    margin: 0 0 5px 20px;
    padding: 0;
}
.mailer-message-attachments-list li {
    align-items: center;
    display: flex;
}
.mailer-message-attachments-list li svg {
    margin-right: 5px;
    height: 18px;
    width: 18px;
}
.mailer-message-attachments-list li a {
    margin-left: 5px;
}
.mailer-message-download-raw {
    align-items: center;
    display: flex;
    padding: 5px 0 0 5px;
}
.mailer-message-download-raw svg {
    height: 18px;
    width: 18px;
    margin-right: 3px;
}

";
        // line 2072
        echo ".sql-runnable {
    background: var(--base-1);
    margin: .5em 0;
    padding: 1em;
}
.sql-explain {
    overflow-x: auto;
    max-width: 888px;
}
.width-full .sql-explain {
    max-width: unset;
}
.sql-explain table td, .sql-explain table tr {
    word-break: normal;
}
.queries-table pre {
    margin: 0;
    white-space: pre-wrap;
    -ms-word-break: break-all;
    word-break: break-all;
    word-break: break-word;
    -webkit-hyphens: auto;
    -moz-hyphens: auto;
    hyphens: auto;
}

";
        // line 2100
        echo "#collector-content .decision-log .voter_result td {
    border-top-width: 1px;
    border-bottom-width: 0;
    padding-bottom: 0;
}

#collector-content .decision-log .voter_details td {
    border-top-width: 0;
    border-bottom-width: 1px;
    padding-bottom: 0;
}

#collector-content .decision-log .voter_details table {
    border: 0;
    margin: 0;
    box-shadow: unset;
}

#collector-content .decision-log .voter_details table td {
    border: 0;
    padding: 0 0 8px 0;
}

";
        // line 2125
        echo "
#collector-content .sf-validator {
    margin-bottom: 2em;
}

#collector-content .sf-validator .sf-validator-context,
#collector-content .sf-validator .trace {
    border: var(--border);
    background: var(--base-0);
    padding: 10px;
    margin: 0.5em 0;
    overflow: auto;
}
#collector-content .sf-validator .trace {
    font-size: 12px;
}
#collector-content .sf-validator .trace li {
    margin-bottom: 0;
    padding: 0;
}
#collector-content .sf-validator .trace li.selected {
    background: var(--highlight-selected-line);
}

";
        // line 2151
        echo "
#collector-content .sf-serializer {
    margin-bottom: 2em;
}

#collector-content .sf-serializer .trace {
    border: var(--border);
    background: var(--base-0);
    padding: 10px;
    margin: 0.5em 0;
    overflow: auto;
}
#collector-content .sf-serializer .trace {
    font-size: 12px;
}
#collector-content .sf-serializer .trace li {
    margin-bottom: 0;
    padding: 0;
}
#collector-content .sf-serializer .trace li.selected {
    background: var(--highlight-selected-line);
}

";
        // line 2176
        echo "
#collector-content .message-bus .trace {
    border: var(--border);
    background: var(--base-0);
    padding: 10px;
    margin: 0.5em 0;
    overflow: auto;
}
#collector-content .message-bus .trace {
    font-size: 12px;
}
#collector-content .message-bus .trace li {
    margin-bottom: 0;
    padding: 0;
}
#collector-content .message-bus .trace li.selected {
    background: var(--highlight-selected-line);
}

";
        // line 2197
        echo "pre.sf-dump, pre.sf-dump .sf-dump-default {
    white-space: pre-wrap;
    z-index: 1000 !important;
}

#collector-content .sf-dump {
    margin-bottom: 2em;
}
#collector-content pre.sf-dump,
#collector-content .sf-dump code,
#collector-content .sf-dump samp {
    font-family: var(--font-family-monospace);
    font-size: var(--font-size-monospace);
    font-variant-ligatures: var(--font-variant-ligatures-monospace);
}
#collector-content .sf-dump a {
    cursor: pointer;
}
#collector-content .sf-dump pre.sf-dump,
#collector-content .sf-dump .trace {
    border: var(--border);
    padding: 10px;
    margin: 0.5em 0;
    overflow: auto;
}

#collector-content pre.sf-dump,
#collector-content .sf-dump-default {
    background: none;
}
#collector-content .sf-dump-ellipsis { max-width: 100em; }

#collector-content .sf-dump {
    margin: 0;
    padding: 0;
    line-height: 1.4;
}

#collector-content .dump-inline .sf-dump {
    display: inline;
    white-space: normal;
    font-size: var(--font-size-monospace);
    line-height: inherit;
}
#collector-content .dump-inline .sf-dump:after {
    display: none;
}

#collector-content .sf-dump .trace {
    font-size: 12px;
}
#collector-content .sf-dump .trace li {
    margin-bottom: 0;
    padding: 0;
}

";
        // line 2255
        echo ".form-type-class {
    font-size: var(--font-size-body);
    display: flex;
    margin: 0 0 15px;
}
.form-type-class-label {
    margin-right: 4px;
}
.form-type-class pre.sf-dump {
    font-family: var(--font-family-system) !important;
    font-size: var(--font-size-body) !important;
    margin-left: 5px;
}
.form-type-class .sf-dump .sf-dump-str {
    color: var(--color-link) !important;
    text-decoration: underline;
}
.form-type-class .sf-dump .sf-dump-str:hover {
    text-decoration: none;
}

";
        // line 2278
        echo ".config-symfony-version-lts {
    border: 0;
    color: var(--color-muted);
    font-size: 21px;
    line-height: 33px;
}
.config-symfony-version-lts[title] {
    text-decoration: none;
}
.config-symfony-version-status-badge {
    background-color: var(--badge-background);
    border-radius: 4px;
    color: var(--badge-color);
    display: inline-block;
    font-size: 15px;
    font-weight: bold;
    margin: 10px 0 5px;
    padding: 3px 7px;
    white-space: nowrap;
}
.config-symfony-version-status-badge.status-success {
    background-color: var(--badge-success-background);
    color: var(--badge-success-color);
}
.config-symfony-version-status-badge.status-warning {
    background-color: var(--badge-warning-background);
    color: var(--badge-warning-color);
}
.config-symfony-version-status-badge.status-error {
    background-color: var(--badge-danger-background);
    color: var(--badge-danger-color);
}
.config-symfony-version-roadmap-link {
    display: inline-block;
    margin: 10px 5px 5px;
}
.config-symfony-eol {
    margin-top: 5px;
}

";
        // line 2320
        echo "#search-results td {
    font-family: var(--font-family-system);
    vertical-align: middle;
}

#search-results .sf-search {

    visibility: hidden;
    margin-left: 2px;
}
#search-results tr:hover .sf-search {
    visibility: visible;
}
#search-results .sf-search svg {
    stroke-width: 3;
}

";
        // line 2339
        echo "
.visible-small {
    display: none;
}
.hidden-small {
    display: inherit;
}

@media (max-width: 768px) {
    #summary .status {
        padding: calc(10px + var(--summary-status-border-width)) 10px 10px;
    }

    #sidebar {
        flex-basis: 50px;
        overflow-x: hidden;
        transition: flex-basis 200ms ease-out;
    }
    #sidebar:hover, #sidebar.expanded {
        flex-basis: 220px;
    }

    #sidebar-search {
        display: none;
    }
    #sidebar:hover #sidebar-search.sf-toggle-visible, #sidebar.expanded #sidebar-search.sf-toggle-visible {
        display: block;
    }

    #sidebar .module {
        display: none;
    }
    #sidebar:hover .module, #sidebar.expanded .module {
        display: block;
    }

    #sidebar:not(:hover):not(.expanded) .label .count {
        border-radius: 50%;
        border: 1px solid #eee;
        height: 8px;
        min-width: 0;
        padding: 0;
        right: 4px;
        text-indent: -9999px;
        top: 50%;
        width: 8px;
    }

    .visible-small {
        display: inherit;
    }
    .hidden-small {
        display: none;
    }

    .btn-sm svg {
        margin-left: 2px;
    }
}

";
        // line 2401
        echo "body.width-full .container {
    margin: 0 5px;
    max-width: 100%;
}

@media (min-width: 992px) {
    body.width-full .container { margin: 0 15px; }
}
@media (min-width: 1200px) {
    body.width-full .container { margin: 0 30px; }
}

";
        // line 2415
        echo "#collector-content pre.sf-dump, #collector-content .sf-dump code, #collector-content .sf-dump samp {
    font-size: var(--font-size-monospace);
    font-weight: normal;
}

#collector-content .sf-dump pre.sf-dump,
#collector-content .sf-dump .trace {
    background: var(--page-background);
}
#collector-content pre.sf-dump,
#collector-content .sf-dump-default {
    color: var(--color-text);
}
#collector-content .sf-dump samp {
    line-height: 1.7;
}
body.theme-light #collector-content .sf-dump-expanded { color: var(--color-text); }
body.theme-light #collector-content .sf-dump-str { color: var(--highlight-string); }
body.theme-light #collector-content .sf-dump-private,
body.theme-light #collector-content .sf-dump-protected,
body.theme-light #collector-content .sf-dump-public { color: var(--color-text); }
body.theme-light #collector-content .sf-dump-note { color: #e36209; }
body.theme-light #collector-content .sf-dump-meta { color: #6f42c1; }
body.theme-light #collector-content .sf-dump-key { color: #067d17; }
body.theme-light #collector-content .sf-dump-num,
body.theme-light #collector-content .sf-dump-const { color: var(--highlight-constant); }
body.theme-light #collector-content .sf-dump-ref { color: #6E6E6E; }
body.theme-light #collector-content .sf-dump-ellipsis { color: var(--gray-600); max-width: 100em; }
body.theme-light #collector-content .sf-dump-ellipsis-path { max-width: 5em; }
body.theme-light #collector-content .sf-dump .trace li.selected {
    background: rgba(255, 255, 153, 0.5);
}
body.theme-dark #collector-content .sf-dump-expanded { color: var(--color-text); }
body.theme-dark #collector-content .sf-dump-str { color: var(--highlight-string); }
body.theme-dark #collector-content .sf-dump-private,
body.theme-dark #collector-content .sf-dump-protected,
body.theme-dark #collector-content .sf-dump-public { color: var(--color-text); }
body.theme-dark #collector-content .sf-dump-note { color: #ffa657; }
body.theme-dark #collector-content .sf-dump-meta { color: #d2a8ff; }
body.theme-dark #collector-content .sf-dump-key { color: #a5d6ff; }
body.theme-dark #collector-content .sf-dump-num,
body.theme-dark #collector-content .sf-dump-const { color: var(--highlight-constant); }
body.theme-dark #collector-content .sf-dump-ref { color: var(--gray-400); }
body.theme-dark #collector-content .sf-dump-ellipsis { color: var(--gray-300); max-width: 100em; }
body.theme-dark #collector-content .sf-dump-ellipsis-path { max-width: 5em; }
body.theme-dark #collector-content .sf-dump .trace li.selected {
    background: rgba(255, 255, 153, 0.5);
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/profiler.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2454 => 2415,  2440 => 2401,  2378 => 2339,  2359 => 2320,  2317 => 2278,  2294 => 2255,  2236 => 2197,  2215 => 2176,  2190 => 2151,  2164 => 2125,  2139 => 2100,  2111 => 2072,  1988 => 1949,  1769 => 1730,  1750 => 1711,  1717 => 1678,  1681 => 1642,  1667 => 1628,  1578 => 1539,  1546 => 1507,  1512 => 1473,  1400 => 1361,  1356 => 1317,  1330 => 1291,  1313 => 1274,  1073 => 1034,  1030 => 991,  967 => 928,  942 => 903,  925 => 886,  895 => 856,  876 => 837,  872 => 833,  751 => 713,  641 => 603,  570 => 532,  522 => 484,  381 => 343,  376 => 339,  43 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{# This file is partially duplicated in TwigBundle/Resources/views/exceotion.css.twig.
   If you make any change in this file, verify the same change is needed in the other file. #}
{# Normalization
   (normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css)
   ========================================================================= #}
button,hr,input{overflow:visible}progress,sub,sup{vertical-align:baseline}[type=checkbox],[type=radio],legend{box-sizing:border-box;padding:0}html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}details,main{display:block}h1{font-size:2em;margin:.67em 0}hr{box-sizing:content-box;height:0}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}a{background-color:transparent}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:bolder}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}img{border-style:none}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;line-height:1.15;margin:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:ButtonText dotted 1px}fieldset{padding:.35em .75em .625em}legend{color:inherit;display:table;max-width:100%;white-space:normal}textarea{overflow:auto}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}[hidden],template{display:none}

:root {
    --font-family-system: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", \"Liberation Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    --font-family-monospace: \"JetBrains Mono\", ui-monospace, \"Roboto Mono\", SFMono-Regular, Menlo, Monaco, Consolas,\"Liberation Mono\", \"Courier New\", monospace;
    --font-size-body: 14px;
    --font-size-monospace: 13px;
    --font-variant-ligatures-monospace: none;
    --summary-status-border-width: 6px;

    --white: #fff;
    --black: #000;
    --gray-50: #fafafa;
    --gray-100: #f5f5f5;
    --gray-200: #e5e5e5;
    --gray-300: #d4d4d4;
    --gray-400: #a3a3a3;
    --gray-500: #737373;
    --gray-600: #525252;
    --gray-700: #404040;
    --gray-800: #262626;
    --gray-900: #171717;
    --green-50: #eff5f5;
    --green-100: #deeaea;
    --green-200: #bbd5d5;
    --green-300: #99bfbf;
    --green-400: #76a9a9;
    --green-500: #598e8e;
    --green-600: #436c6c;
    --green-700: #2e4949;
    --green-800: #182727;
    --green-900: #030404;
    --yellow-50: #fef7e1;
    --yellow-100: #fef2cd;
    --yellow-200: #fde496;
    --yellow-300: #fcd55f;
    --yellow-400: #fbc728;
    --yellow-500: #e6af05;
    --yellow-600: #af8503;
    --yellow-700: #785b02;
    --yellow-800: #413101;
    --yellow-900: #0a0800;
    --red-50: #FEFBFC;
    --red-100: #FCE9ED;
    --red-200: #F5B8C5;
    --red-300: #EF869C;
    --red-400: #E85574;
    --red-500: #E1244B;
    --red-600: #B41939;
    --red-700: #83122A;
    --red-800: #510B1A;
    --red-900: #20040A;

    --page-grid-dot-color: var(--gray-200);
    --page-background: var(--white);
    --page-color: var(--gray-700);

    --color-text: var(--gray-800);
    --color-muted: var(--gray-500);
    --color-link: #1d4ed8;

    --success-background: var(--green-100);

    --header-background: var(--gray-100);
    --header-border-color: var(--gray-200);
    --header-status-request-method-color: var(--color-muted);
    --header-metadata-key: var(--gray-500);
    --header-metadata-value: var(--gray-600);

    --header-success-background: var(--green-50);
    --header-success-border-color: var(--green-500);
    --header-success-box-shadow: inset 0 0 0 1px var(--green-100);
    --header-success-title-color: var(--color-text);
    --header-success-status-code-background: var(--green-500);
    --header-success-status-code-color: var(--white);
    --header-success-status-text-color: var(--green-600);

    --header-warning-background: var(--yellow-50);
    --header-warning-border-color: var(--yellow-300);
    --header-warning-box-shadow: inset 0 0 0 1px var(--yellow-100);
    --header-warning-title-color: var(--color-text);
    --header-warning-status-code-background: var(--yellow-200);
    --header-warning-status-code-color: var(--yellow-700);
    --header-warning-status-text-color: var(--color-warning);

    --header-error-background: var(--red-100);
    --header-error-border-color: var(--red-500);
    --header-error-box-shadow: inset 0 0 0 1px var(--red-100);
    --header-error-title-color: var(--color-text);
    --header-error-status-code-background: transparent;
    --header-error-status-code-color: var(--red-500);
    --header-error-status-text-color: var(--red-400);

    --color-success: #4f805d;
    --color-warning: var(--yellow-700);
    --color-error: var(--red-600);
    --h2-border-color: var(--gray-200);
    --heading-code-background: var(--gray-100);
    --form-input-border-color: var(--gray-300);
    --button-background: var(--gray-100);
    --button-border-color: var(--gray-300);
    --button-box-shadow: 0 1px 0 0 var(--gray-300);
    --button-color: var(--gray-800);
    --button-active-background: var(--gray-200);
    --badge-background: var(--gray-200);
    --badge-color: var(--gray-600);
    --badge-shadow: none;
    --selected-badge-background: var(--gray-200);
    --selected-badge-color: var(--gray-600);
    --selected-badge-shadow: inset 0 0 0 1px var(--gray-300);
    --badge-light-background: var(--gray-100);
    --badge-light-color: var(--gray-500);
    --badge-success-background: var(--green-100);
    --badge-success-color: var(--green-700);
    --badge-success-shadow: none;
    --badge-warning-background: var(--yellow-200);
    --badge-warning-color: var(--yellow-700);
    --badge-warning-shadow: none;
    --selected-badge-warning-background: var(--yellow-200);
    --selected-badge-warning-color: var(--yellow-700);
    --selected-badge-warning-shadow: inset 0 0 0 1px var(--yellow-500);
    --badge-danger-background: var(--red-100);
    --badge-danger-color: var(--red-700);
    --badge-danger-shadow: none;
    --selected-badge-danger-background: var(--red-100);
    --selected-badge-danger-color: var(--red-700);
    --selected-badge-danger-shadow: inset 0 0 0 1px var(--red-200);
    --sidebar-shadow: inset 0 0 0 1px var(--menu-border-color), 0 0 0 3px var(--gray-50), 0 0 0 5px var(--page-background);
    --menu-border-color: var(--gray-300);
    --menu-color: var(--gray-700);
    --menu-disabled-color: var(--gray-400);
    --menu-icon-color: var(--gray-500);
    --menu-icon-disabled-color: var(--gray-200);
    --menu-active-color: var(--color-link);
    --menu-active-marker-background: var(--color-link);
    --menu-active-background: var(--gray-100);
    --tab-background: #f0f0f0;
    --tab-border-color: var(--gray-200);
    --tab-active-border-color: var(--gray-300);
    --tab-color: #444;
    --tab-active-background: var(--page-background);
    --tab-active-color: var(--color-text);
    --tab-disabled-background: #f5f5f5;
    --tab-disabled-color: #999;
    --log-filter-active-num-color: #2563EB;
    --log-timestamp-color: #555;
    --code-block-background: var(--gray-50);
    --metric-value-background: var(--page-background);
    --metric-border-color: var(--gray-300);
    --metric-value-color: inherit;
    --metric-unit-color: #999;
    --metric-label-background: #e0e0e0;
    --metric-label-color: inherit;
    --metric-icon-green-color: var(--color-success);
    --metric-icon-red-color: var(--red-600);
    --trace-selected-background: #F7E5A1;
    --table-border-color: var(--gray-300);
    --table-background: var(--page-background);
    --table-header: var(--gray-100);
    --table-header-border-color: var(--gray-300);
    --info-background: #ddf;
    --tree-active-background: var(--gray-200);
    --exception-title-color: var(--base-2);
    --shadow: 0px 0px 1px rgba(128, 128, 128, .2);
    --border: 1px solid #e0e0e0;
    --background-error: var(--color-error);
    --mailer-email-table-wrapper-background: var(--gray-100);
    --mailer-email-table-active-row-background: #dbeafe;
    --mailer-email-table-active-row-color: var(--color-text);

    --highlight-variable: #e36209;
    --highlight-string: #22863a;
    --highlight-comment: #6a737d;
    --highlight-keyword: #d73a49;
    --highlight-constant: #1750eb;
    --highlight-error: var(--red-600);

    /* legacy variables kept for backward-compatibility purposes */
    --font-sans-serif: var(--font-family-system);
    --table-border: var(--table-border-color);
    --highlight-default: #222222;
    --highlight-selected-line: rgba(255, 255, 153, 0.5);
    --base-0: #fff;
    --base-1: #f5f5f5;
    --base-2: #e0e0e0;
    --base-3: #ccc;
    --base-4: #666;
    --base-5: #444;
    --base-6: #222;
    --card-label-background: var(--gray-200);
    --card-label-color: var(--gray-800);
}

.theme-dark {
    --page-background: var(--gray-800);
    --page-grid-dot-color: var(--gray-700);
    --page-color: var(--gray-100);

    --color-text: var(--gray-100);
    --color-muted: var(--gray-400);
    --color-link: #93C5FD;

    --color-success: var(--green-200);
    --color-warning: var(--yellow-300);
    --color-error: #ff7b72;
    --success-background: #1dc9a433;

    --header-background: var(--gray-700);
    --header-border-color: var(--gray-500);
    --header-status-request-method-color: #ffffff99;
    --header-metadata-key: #ffffff99;
    --header-metadata-value: #ffffffbb;

    --header-success-background: #1dc9a433;
    --header-success-border-color: #1dc9a4;
    --header-success-box-shadow: none;
    --header-success-title-color: #36e2bd;
    --header-success-status-code-background: #1dc9a4;
    --header-success-status-code-color: var(--page-background);
    --header-success-status-text-color: #1dc9a4;

    --header-warning-background: #f97a1f33;
    --header-warning-border-color: var(--yellow-500);
    --header-warning-box-shadow: none;
    --header-warning-title-color: #FCDE83;
    --header-warning-status-code-background: var(--yellow-200);
    --header-warning-status-code-color: var(--page-background);
    --header-warning-status-text-color: var(--color-warning);

    --header-error-background: #c91d424d;
    --header-error-border-color: var(--red-500);
    --header-error-box-shadow: none;
    --header-error-title-color: #F9D2DB;
    --header-error-status-code-background: transparent;
    --header-error-status-code-color: var(--red-300);
    --header-error-status-text-color: var(--red-200);

    --h2-border-color: var(--gray-500);
    --heading-code-background: var(--gray-600);
    --form-input-border-color: var(--gray-400);
    --button-background: var(--gray-300);
    --button-border-color: var(--gray-500);
    --button-box-shadow: 0 1px 0 0 var(--gray-500);
    --button-color: var(--gray-800);
    --button-active-background: var(--gray-400);
    --badge-background: rgba(221, 221, 221, 0.2);
    --badge-color: var(--gray-300);
    --badge-shadow: none;
    --selected-badge-background: #555;
    --selected-badge-color: #ddd;
    --selected-badge-shadow: none;
    --badge-light-background: var(--gray-700);
    --badge-light-color: var(--gray-300);
    --badge-success-background: #1dc9a420;
    --badge-success-color: #36e2bd;
    --badge-success-shadow: inset 0 0 0 1px #36e2bd4d;
    --badge-warning-background: #f97a1f33;
    --badge-warning-color: #FCDE83;
    --badge-warning-shadow: inset 0 0 0 1px #e6af0580;
    --selected-badge-warning-background: var(--yellow-300);
    --selected-badge-warning-color: var(--yellow-700);
    --selected-badge-warning-shadow: inset 0 0 0 1px var(--yellow-600);
    --badge-danger-background: #E1244B20;
    --badge-danger-color: var(--red-300);
    --badge-danger-shadow: inset 0 0 0 1px #e1244Bd0;
    --selected-badge-danger-background: var(--red-600);
    --selected-badge-danger-color: var(--red-100);
    --selected-badge-danger-shadow: none;
    --sidebar-shadow: inset 0 0 0 1px var(--menu-border-color), 0 0 0 5px var(--page-background);
    --menu-border-color: var(--gray-500);
    --menu-color: var(--gray-300);
    --menu-disabled-color: var(--gray-500);
    --menu-icon-color: var(--gray-400);
    --menu-icon-disabled-color: var(--gray-600);
    --menu-active-color: var(--gray-800);
    --menu-active-marker-background: transparent;
    --menu-active-background: var(--gray-300);
    --tab-background: var(--gray-700);
    --tab-border-color: var(--gray-500);
    --tab-active-border-color: var(--gray-900);
    --tab-color: var(--color-text);
    --tab-active-background: var(--gray-300);
    --tab-active-color: var(--gray-800);
    --tab-disabled-background: var(--page-background);
    --tab-disabled-color: var(--gray-400);
    --log-filter-active-num-color: #2563EB;
    --log-timestamp-color: #ccc;
    --code-block-background: var(--gray-900);
    --metric-value-background: var(--page-background);
    --metric-border-color: var(--gray-500);
    --metric-value-color: inherit;
    --metric-unit-color: #999;
    --metric-label-background: #777;
    --metric-label-color: #e0e0e0;
    --metric-icon-green-color: #7ee787;
    --metric-icon-red-color: #ff7b72;
    --trace-selected-background: #71663acc;
    --table-border-color: var(--gray-600);
    --table-background: var(--page-background);
    --table-header: var(--gray-700);
    --table-header-border-color: var(--gray-600);
    --info-background: rgba(79, 148, 195, 0.5);
    --tree-active-background: var(--metric-label-background);
    --exception-title-color: var(--base-2);
    --shadow: 0px 0px 1px rgba(32, 32, 32, .2);
    --border: 1px solid #666;
    --background-error: #b0413e;
    --mailer-email-table-wrapper-background: var(--gray-900);
    --mailer-email-table-active-row-background: var(--gray-300);
    --mailer-email-table-active-row-color: var(--gray-800);
    --highlight-variable: #ffa657;
    --highlight-string: #7ee787;
    --highlight-comment: #8b949e;
    --highlight-keyword: #ff7b72;
    --highlight-constant: #54aeff;
    --highlight-error: var(--red-400);

    /* legacy variables kept for backward-compatibility purposes */
    --highlight-default: var(--base-6);
    --highlight-selected-line: rgba(14, 14, 14, 0.5);
    --base-0: #2e3136;
    --base-1: #444;
    --base-2: #666;
    --base-3: #666;
    --base-4: #666;
    --base-5: #e0e0e0;
    --base-6: #f5f5f5;
    --card-label-background: var(--tab-active-background);
    --card-label-color: var(--tab-active-color);
}

{# Embedded font
   ========================================================================= #}
{{ include('@WebProfiler/Profiler/fonts.css.twig') }}

{# Basic styles
   ========================================================================= #}
html {
    /* this avoids \"jumps\" when scrolling between pages with and without scroll bars */
    overflow-y: scroll;
}
html, body  {
    height: 100%;
    width: 100%;
}
body {
    background-attachment: fixed;
    background-color: var(--page-background);
    background-image: radial-gradient(var(--page-grid-dot-color) 1px, transparent 0);
    background-size: 15px 15px;
    color: var(--page-color);
    font-family: var(--font-family-system);
    font-size: var(--font-size-body);
    line-height: 1.4;
}

h2, h3, h4 {
    font-weight: 500;
    margin: 1.5em 0 .5em;
}
h2 + h3,
h3 + h4 {
    margin-top: 1em;
}
h2 {
    font-size: 21px;
}
h3 {
    font-size: 18px;
}
h4 {
    font-size: 16px;
}
h2 span, h3 span, h4 span,
h2 small, h3 small, h4 small {
    color: var(--color-muted);
}

summary {
    display: block;
}

li {
    margin-bottom: 10px;
}

p {
    font-size: 16px;
    margin-bottom: 1em;
}

a {
    color: var(--color-link);
    text-decoration: none;
}
a:hover {
    text-decoration: underline;
}
a.link-inverse {
    text-decoration: underline;
}
a.link-inverse:hover {
    text-decoration: none;
}
a:active,
a:hover {
    outline: 0;
}
a.stretched-link:after {
    background: transparent;
    content: \"\";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
    pointer-events: auto;
}
h2 a,
h3 a,
h4 a {
    text-decoration: underline;
}
h2 a:hover,
h3 a:hover,
h4 a:hover {
    text-decoration: none;
}

abbr {
    border-bottom: 1px dotted var(--base-5);
    cursor: help;
}

code, pre {
    font-family: var(--font-family-monospace);
    font-size: var(--font-size-monospace);
    font-variant-ligatures: var(--font-variant-ligatures-monospace);
}
h1 code, h2 code, h3 code, h4 code, h5 code, h6 code {
    color: inherit;
    font-weight: inherit;
    font-family: inherit;
    font-size: inherit;
    background: var(--heading-code-background);
    border-radius: 4px;
    padding: 0 3px;
    word-break: break-word;
}

input, select {
    background-color: var(--page-background);
    border: 0;
    border-radius: 4px;
    box-shadow: inset 0 0 0 1px var(--form-input-border-color);
    color: var(--color-text);
    padding: 5px 6px;
}
input[type=\"radio\"], input[type=\"checkbox\"] {
    box-shadow: none;
}

/* Used to hide elements added for accessibility reasons (the !important modifier is needed here) */
.visually-hidden {
    border: 0 !important;
    clip: rect(0, 0, 0, 0) !important;
    height: 1px !important;
    margin: -1px !important;
    overflow: hidden !important;
    padding: 0 !important;
    position: absolute !important;
    width: 1px !important;
    white-space: nowrap !important;
}

{# Buttons (the colors of this element don't change based on the selected theme)
   ------------------------------------------------------------------------- #}
.btn {
    background: var(--button-background);
    border-radius: 6px;
    border: 1px solid var(--button-border-color);
    box-shadow: var(--button-box-shadow);
    color: var(--button-color);
    cursor: pointer;
    display: inline-block;
    font-size: var(--font-size-body);
    font-weight: 500;
    line-height: 20px;
    padding: 5px 15px;
    white-space: nowrap;
}
.btn:hover {
    text-decoration: none;
}
.btn:active {
    background: var(--button-active-background);
    box-shadow: none;
    transform: translateY(1px);
}
.btn-sm {
    font-size: 12px;
    line-height: 20px;
    padding: 3px 12px;
}
.btn-sm svg {
    height: 16px;
    width: 16px;
    vertical-align: middle;
}
.btn-link, .btn-link:active {
    border-color: transparent;
    box-shadow: none;
    color: var(--color-link);
    text-decoration: none;
    background-color: transparent;
    outline: none;
    border: 0;
    padding: 0;
    cursor: pointer;
}
.btn-link:hover {
    text-decoration: underline;
}
{# Tables
   ------------------------------------------------------------------------- #}
table, tr, th, td {
    border-collapse: collapse;
    line-height: 1.5;
    vertical-align: top;
}
table {
    background: var(--page-background);
    border-radius: 6px;
    margin: 1em 0;
    overflow: hidden;
    width: 100%;
    box-shadow: 0 0 0 1px var(--table-border-color), 0 0 0 5px var(--page-background);
}
table + table {
    margin-top: 20px;
}

table th, table td {
    padding: 8px 10px;
}

table th {
    font-weight: bold;
    text-align: left;
    vertical-align: top;
}
table thead th {
    background-color: var(--table-header);
    border-bottom: 1px solid var(--table-header-border-color);
    vertical-align: bottom;
}
table thead th.key {
    width: 19%;
}
table thead.small th {
    font-size: 12px;
    padding: 4px 10px;
}

table tbody th,
table tbody td {
    border: 1px solid var(--table-border-color);
    border-width: 1px 0;
    font-family: var(--font-family-monospace);
    font-size: var(--font-size-monospace);
    font-variant-ligatures: var(--font-variant-ligatures-monospace);
}
table tbody th.font-normal,
table tbody td.font-normal {
    font-size: var(--font-size-body);
}
table tbody tr:last-of-type th,
table tbody tr:last-of-type td {
    border-bottom: 0;
}

table tbody div {
    margin: .25em 0;
}
table tbody ul {
    margin: 0;
    padding: 0 0 0 1em;
}

table thead th.num-col,
table tbody td.num-col {
    text-align: center;
}

{# Utility classes
   ========================================================================= #}
.block {
    display: block;
}
.full-width {
    width: 100%;
}
.hidden {
    display: none;
}
.nowrap {
    white-space: pre;
}
.prewrap {
    white-space: pre-wrap;
}
.newline {
    display: block;
}
.break-long-words {
    -ms-word-break: break-all;
    word-break: break-all;
    word-break: break-word;
    -webkit-hyphens: auto;
    -moz-hyphens: auto;
    hyphens: auto;
}
.text-small {
    font-size: 12px !important;
}
.text-muted {
    color: var(--color-muted);
}
.text-danger {
    color: var(--color-error);
}
.text-bold {
    font-weight: bold;
}
.text-right {
    text-align: right;
}
.text-center {
    text-align: center;
}
.font-normal {
    font-family: var(--font-family-system);
    font-size: var(--font-size-body);
}
.help {
    color: var(--color-muted);
    font-size: var(--font-size-body);
    margin: .5em 0;
}
.empty {
    background-color: var(--page-background);
    background-image: url(\"data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%23e5e5e5' stroke-width='4' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e\");
    border-radius: 6px;
    box-shadow: 0 0 0 5px var(--page-background);
    color: var(--color-muted);
    margin: 1em 0;
    padding: .5em 2em;
    text-align: center;
}
.theme-dark .empty {
    background-image: url(\"data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%23737373' stroke-width='4' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e\");
}
.empty p {
    font-size: var(--font-size-body);
    max-width: 60ch;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}
.empty.empty-panel {
    background: transparent;
    color: var(--color-muted);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    height: 400px;
    margin: 45px auto;
    max-width: 800px;
}
.empty.empty-panel p {
    background: var(--page-background);
    padding: 5px 10px;
}

.label {
    background-color: var(--badge-background);
    border-radius: 4px;
    box-shadow: var(--badge-shadow);
    color: #FAFAFA;
    display: inline-block;
    font-size: 12px;
    font-weight: bold;
    padding: 3px 7px;
    white-space: nowrap;
}
.label.same-width {
    min-width: 70px;
    text-align: center;
}
.label.status-success { background: var(--badge-success-background); box-shadow: var(--badge-success-shadow); color: var(--badge-success-color); }
.label.status-warning { background: var(--badge-warning-background); box-shadow: var(--badge-warning-shadow); color: var(--badge-warning-color); }
.label.status-error { background: var(--badge-danger-background); box-shadow: var(--badge-danger-shadow); color: var(--badge-danger-color); }

{# Metrics
   ------------------------------------------------------------------------- #}
.metrics {
    align-items: flex-start;
    display: flex;
    margin: 1em 0;
    flex-wrap: wrap;
}
.metrics .metric {
    margin: 0 1em 1em 0;
}

.metric-group, .metric {
    background: var(--metric-value-background);
    box-shadow: inset 0 0 0 1px var(--metric-border-color), 0 0 0 5px var(--page-background);
    border-radius: 6px;
    color: var(--metric-value-color);
    display: inline-flex;
    flex-direction: column-reverse;
    min-width: 60px;
    padding: 10px 15px;
    text-align: center;
}
.metric-group {
    align-items: stretch;
    flex-direction: row;
    padding: 10px 0;
}
.metric-group .metric {
    background: transparent;
    border: none;
    border-radius: 0;
    box-shadow: none;
    justify-content: flex-end;
    margin: 0;
    min-height: auto;
    padding: 0 15px;
}
.metric-group .metric + .metric {
    border-left: 1px solid var(--table-border-color);
}

.metric .value {
    display: block;
    font-size: 24px;
    font-variant: tabular-nums;
}
.metric .value-is-icon {
    color: var(--gray-400);
}
.theme-dark .metric .value-is-icon {
    color: var(--gray-200);
}
.metric .value-is-icon svg {
    height: 32px;
    width: 32px;
}
.metric .value-shows-no-color {
    filter: grayscale(1);
}
.theme-dark .metric .value-shows-no-color {
    filter: invert(1) grayscale(1);
}
.theme-light .metric .value-shows-no-color,
.theme-light .metric .value-shows-no-color {
    opacity: 0.4;
}
.metric svg[data-icon-name=\"icon-tabler-check\"],
.metric svg[data-icon-name=\"icon-tabler-x\"] {
    stroke-width: 5px;
    height: 25px;
    width: 25px;
    transform: translateY(5px);
}
.metric svg[data-icon-name=\"icon-tabler-check\"] {
    color: var(--metric-icon-green-color);
}
.metric svg[data-icon-name=\"icon-tabler-x\"] {
    color: var(--metric-icon-red-color);
}

.metric .unit {
    color: var(--metric-unit-color);
    font-size: 18px;
    margin-left: -4px;
}
.metric .label {
    background: transparent;
    color: var(--color-link);
    display: block;
    font-size: 12px;
    padding: 0;
}

.metrics-horizontal .metric {
    min-height: 0;
    min-width: 0;
}
.metrics-horizontal .metric .value,
.metrics-horizontal .metric .label {
    display: inline;
    padding: 2px 6px;
}
.metrics-horizontal .metric .label {
    display: inline-block;
    padding: 6px;
}
.metrics-horizontal .metric .value {
    font-size: 16px;
}
.metrics-horizontal .metric .value svg {
    max-height: 14px;
    line-height: 10px;
    margin: 0;
    padding-left: 4px;
    vertical-align: middle;
}

.metric-divider {
    display: inline-flex;
    margin: 0 10px;
    min-height: 1px; {# required to apply 'margin' to an empty 'div' #}
}

{# Cards
   ------------------------------------------------------------------------- #}
.card {
    background: var(--page-background);
    border-radius: 6px;
    box-shadow: inset 0 0 0 1px var(--form-input-border-color), 0 0 0 5px var(--page-background);
    margin: 1em 0;
    padding: 10px;
    overflow-y: auto;
}
.card-block + .card-block {
    border-top: 1px solid var(--form-input-border-color);
    padding-top: 10px;
}
.card *:first-child,
.card-block *:first-child {
    margin-top: 0;
}

{# Status
   ------------------------------------------------------------------------- #}
.status-success {
    background: var(--success-background);
}
.status-warning {
    background: var(--badge-warning-background);
    color: var(--badge-warning-color);
}
.status-error {
    background: rgba(176, 65, 62, 0.2);
}
.status-success td,
.status-warning td,
.status-error td {
    background: transparent;
}
tr.status-error td,
tr.status-warning td {
    border-bottom: 1px solid var(--base-2);
    border-top: 1px solid var(--base-2);
}

.status-warning .colored {
    color: var(--color-warning);
}
.status-error .colored  {
    color: var(--color-error);
}

{# Syntax highlighting
   ========================================================================= #}
.highlight pre {
    margin: 0;
    white-space: pre-wrap;
}

.highlight .keyword   { color: var(--highlight-keyword); font-weight: bold; }
.highlight .word      { color: var(--color-text); }
.highlight .variable  { color: var(--highlight-variable); }
.highlight .symbol    { color: var(--color-text); }
.highlight .comment   { color: var(--highlight-comment); }
.highlight .backtick  { color: var(--color-muted); }
.highlight .string    { color: var(--highlight-string); }
.highlight .number    { color: var(--highlight-constant); font-weight: bold; }
.highlight .error     { color: var(--highlight-error); }

{# Icons
   ========================================================================= #}
.sf-icon {
    vertical-align: middle;
    background-repeat: no-repeat;
    background-size: contain;
    width: 16px;
    height: 16px;
    display: inline-block;
}
.sf-icon svg {
    width: 16px;
    height: 16px;
}
.sf-icon.sf-medium,
.sf-icon.sf-medium svg {
    width: 24px;
    height: 24px;
}
.sf-icon.sf-large,
.sf-icon.sf-large svg {
    width: 32px;
    height: 32px;
}

{# Layout
   ========================================================================= #}
.container {
    margin: 0 5px;
    max-width: 98%;
}
@media (min-width: 992px) {
    .container { margin: 0 15px; }
}
@media (min-width: 1200px) {
    .container { margin: 0 auto; max-width: 1200px; }
}

#header {
    flex: 0 0 auto;
}
#header .container {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
#content {
    height: 100%;
}
#main {
    display: flex;
    align-items: flex-start;
    flex-direction: row;
}
#sidebar {
    border-radius: 4px;
    flex: 0 0 220px;
}
#collector-wrapper {
    flex: 0 1 100%;
    min-width: 0;
}
#collector-wrapper h2 {
    box-shadow: inset 0 -1px 0 var(--page-background), 0 1px 0 var(--h2-border-color), 0 4px 0 var(--page-background);
    padding-bottom: 5px;
}
#collector-content {
    margin: 0 0 15px 0;
    padding: 0 0 15px 15px;
}
@media (min-width: 768px) {
    #collector-content {
        margin: 0 0 30px 0;
        padding: 0 0 15px 30px;
    }
}
#main #collector-content > h2:first-of-type {
    box-shadow: inset 0 -1px 0 var(--page-background), 0 2px 0 var(--h2-border-color), 0 5px 0 var(--page-background);
    font-size: 24px;
    margin: 5px 0 30px;
}
#main #collector-content > h2:first-of-type a {
    text-decoration: none;
}
#main #collector-content > h2:first-of-type a:hover {
    text-decoration: underline;
}

{# Header
   ========================================================================= #}
#header {
    align-items: center;
    display: flex;
    justify-content: space-between;
    overflow: hidden;
    padding: 10px 0;
}
#header h1 {
    align-items: center;
    background: var(--page-background);
    box-shadow: 0 0 0 5px var(--page-background);
    color: var(--gray-600);
    display: flex;
    font-weight: 500;
    font-size: 18px;
    margin: 0;
}
.theme-dark #header h1 {
    color: var(--gray-200);
}
#header h1 svg {
    height: 28px;
    width: 28px;
    margin-right: 6px;
}
#header .search {
    margin-right: 2px;
}
#header .search input {
    background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' data-icon-name='icon-tabler-search' width='21' height='21' viewBox='0 0 24 24' stroke='%23737373' fill='none' stroke-linecap='round' stroke-linejoin='round' stroke-width='3'%3E%3Cpath stroke='none' d='M0 0h24v24H0z' fill='none'%3E%3C/path%3E%3Ccircle cx='10' cy='10' r='7'%3E%3C/circle%3E%3Cline x1='21' y1='21' x2='15' y2='15'%3E%3C/line%3E%3C/svg%3E\");
    background-repeat: no-repeat;
    background-size: 16px;
    background-position: 5px;
    box-shadow: inset 0 0 0 1px var(--form-input-border-color), 0 0 0 3px var(--page-background);
    padding: 5px 8px 5px 30px;
    width: 215px;
}
.theme-dark #header .search input {
    background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' data-icon-name='icon-tabler-search' width='21' height='21' viewBox='0 0 24 24' stroke='%23a3a3a3' fill='none' stroke-linecap='round' stroke-linejoin='round' stroke-width='3'%3E%3Cpath stroke='none' d='M0 0h24v24H0z' fill='none'%3E%3C/path%3E%3Ccircle cx='10' cy='10' r='7'%3E%3C/circle%3E%3Cline x1='21' y1='21' x2='15' y2='15'%3E%3C/line%3E%3C/svg%3E\");
}

{# Summary
   ========================================================================= #}
#summary {
    box-shadow: 0 0 0 5px var(--page-background);
    margin: 0 0 15px;
    background: var(--page-background);
    color: var(--color-text);
}
#summary .status {
    background: var(--header-background);
    border-radius: 6px;
    color: var(--header-metadata-value);
    padding: calc(15px + var(--summary-status-border-width)) 15px 15px;
    position: relative;
}
#summary .status:before {
    background: var(--header-border-color);
    border-radius: 3px 3px 0 0;
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: var(--summary-status-border-width);
}
#summary .status-compact {
    padding: 13px 15px 10px;
    position: relative;
}
#summary .status-compact.status-compact-forward {
    padding: 10px 15px;
}
#summary .status + .status {
    margin-top: 10px;
}
#summary h2 {
    display: flex;
    align-items: flex-start;
}
#summary h2,
#summary h2 a {
    display: flex;
    font-size: 24px;
    line-height: 1.25;
    margin: 0;
    text-decoration: none;
    word-break: break-all;
}
#summary h2 a:hover {
    text-decoration: underline;
}
#summary .status .metadata .icon-referer {
    color: var(--color-link);
    display: inline-block;
    height: 21px;
    width: 21px;
    vertical-align: middle;
}
#summary .status .metadata .icon-referer svg {
    height: 21px;
    width: 21px;
}
#summary .status .metadata a.referer {
    color: var(--color-link);
}
#summary .status .metadata a.referer:hover {
    text-decoration: underline;
}

#summary .status-compact {
    font-size: 13px;
    margin: 0 0 10px;
}
#summary .status-compact .status-request-method {
    border-width: 1px;
    font-size: 12px;
    font-weight: bold;
    margin: 0 2px;
    padding: 1px 2px;
    white-space: nowrap;
}
#summary .status-compact .icon {
    display: inline-block;
    transform: translateY(2px);
    vertical-align: bottom;
}
#summary .status-compact .icon,
#summary .status-compact .icon svg {
    height: 21px;
    width: 21px;
}
#summary .status-compact .icon svg {
    color: var(--gray-500);
}
.theme-dark #summary .status-compact .icon svg {
    color: var(--gray-300);
}
#summary .status-compact .icon.icon-redirect svg,
#summary .status-compact .icon.icon-forward svg {
    stroke-width: 2;
}
#summary .status-compact .icon.icon-redirect svg {
    transform: rotate(90deg) translateX(3px);
}
#summary .status-compact.status-warning .icon svg {
    color: var(--yellow-600);
}
.theme-dark #summary .status-compact.status-warning .icon svg {
    color: var(--yellow-400);
}

#summary .status-response-status-code {
    background: var(--gray-600);
    border-radius: 4px;
    color: var(--white);
    display: inline-block;
    font-size: 12px;
    font-weight: bold;
    margin-right: 2px;
    padding: 1px 3px;
}
#summary .status-response-status-text {
    font-weight: bold;
}

#summary .status-success {
    background: var(--header-success-background);
    box-shadow: var(--header-success-box-shadow);
}
#summary .status-success:before {
    background: var(--header-success-border-color);
}
#summary .status-success h2 a { color: var(--header-success-title-color); }
#summary .status-success .status-response-status-code { background: var(--header-success-status-code-background); color: var(--header-success-status-code-color); }
#summary .status-success .status-response-status-text { color: var(--header-success-status-text-color); }

#summary .status-warning {
    background: var(--header-warning-background);
    box-shadow: var(--header-warning-box-shadow);
}
#summary .status-warning:before {
    background: var(--header-warning-border-color);
}
#summary .status-warning h2 a { color: var(--header-warning-title-color); }
#summary .status-warning .status-response-status-code,
#summary .summary-status-redirect .status-response-status-code { background: var(--header-warning-status-code-background); color: var(--header-warning-status-code-color); }
#summary .status-warning .status-response-status-text { color: var(--header-warning-status-text-color); }

#summary .status-error {
    background: var(--header-error-background);
    box-shadow: var(--header-error-box-shadow);
}
#summary .status-error:before {
    background: var(--header-error-border-color);
}
#summary .status-error h2 a { color: var(--header-error-title-color); }
#summary .status-error .status-response-status-code { background: var(--header-error-status-code-background); color: var(--header-error-status-code-color); }
#summary .status-error .status-response-status-text { color: var(--header-error-status-text-color);  }

#summary .status-request-method {
    border: 1px solid var(--header-status-request-method-color);
    border-radius: 5px;
    color: var(--header-status-request-method-color);
    display: inline-block;
    font-size: 16px;
    line-height: 1;
    margin-right: 6px;
    padding: 2px 4px;
    text-align: center;
    white-space: nowrap;
}
#summary .status:not(.status-compact) .status-request-method {
    transform: translateY(5px);
}

#summary .status-error-details {
    align-items: center;
    display: flex;
    font-size: 13px;
    line-height: 1;
    margin: 0 0 10px;
}
#summary .status-error-details .icon {
    display: inline-block;
}
#summary .status-error-details .icon svg {
    border-radius: 50%;
    box-shadow: inset 0 0 0 2px var(--red-200);
    color: var(--red-500);
    fill: var(--red-50);
    stroke-width: 3px;
    height: 24px;
    width: 24px;
}
.theme-dark #summary .status-error-details .icon svg {
    box-shadow: inset 0 0 0 2px var(--red-800);
    color: var(--red-200);
    fill: var(--red-700);
}
#summary .status-error-details .icon svg circle {
    stroke-width: 2px;
}
#summary .status-error-details .status-response-status-code {
    font-size: 15px;
    font-weight: bold;
    letter-spacing: -0.5px;
    line-height: 1;
    padding: 5px 8px;
    text-transform: uppercase;
}
#summary .status-error-details .status-response-status-text {
    color: var(--header-error-status-text-color);
    font-weight: normal;
}

#summary dl.metadata {
    margin: 10px 0 0;
}
#summary dl.metadata dt,
#summary dl.metadata dd {
    display: inline-block;
    font-size: 13px;
}
#summary dl.metadata dt {
    color: var(--header-metadata-key);
}
#summary dl.metadata dt {
    font-weight: bold;
}
#summary dl.metadata dt:not(:empty):after {
    content: ':';
}
#summary dl.metadata dd,
#summary dl.metadata dd a {
    color: var(--header-metadata-value);
}
#summary dl.metadata dd {
    margin: 0 1.5em 0 0;
}

{# Sidebar
   ========================================================================= #}
#sidebar {
    margin-bottom: 30px;
    position: sticky;
    top: 20px;
    width: 220px;
    z-index: 9999;
}
#sidebar-contents {
    background: var(--page-background);
    border-radius: 6px;
    box-shadow: var(--sidebar-shadow);
    color: var(--gray-500);
    margin: 0;
}

{# Sidebar Shortcuts
   ------------------------------------------------------------------------- #}
#sidebar #sidebar-shortcuts {
    color: var(--gray-500);
    padding: 10px 15px;
}
#sidebar #sidebar-shortcuts .shortcuts {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
#sidebar #sidebar-shortcuts .shortcuts .btn-link {
    color: var(--color-muted);
    display: flex;
    align-items: center;
    font-size: 13px;
}
#sidebar #sidebar-shortcuts:hover .btn-link {
    color: var(--menu-color);
}
#sidebar-shortcuts .shortcuts svg {
    height: 16px;
    width: 16px;
    margin-right: 4px;
}

{# Sidebar Search (the colors of this element don't change based on the selected theme)
   ------------------------------------------------------------------------- #}
#sidebar-search {
    padding: 5px 0;
}
#sidebar-search .form-group-row {
    display: flex;
    justify-content: space-between;
    padding-top: 10px;
}
#sidebar-search .form-group-row .form-group {
    padding-top: 0;
}
#sidebar-search .form-group {
    padding-top: 10px;
}
#sidebar-search .form-group:first-child {
    padding-top: 0;
}
#sidebar-search .form-group label {
    color: var(--color-muted);
    display: block;
    font-size: 12px;
    font-weight: bold;
    margin-bottom: 3px;
}
#sidebar-search .form-group input,
#sidebar-search .form-group select {
    font-size: 13px;
}
#sidebar-search select#method {
    width: 11ch;
}
#sidebar-search input#status_code {
    width: 8ch;
}
#sidebar-search input#ip,
#sidebar-search input#url {
    width: calc(100% - 12px);
}
#sidebar-search .form-group-row-search-button {
    align-items: flex-end;
}

{# Sidebar Menu
   ------------------------------------------------------------------------- #}
#menu-profiler {
    border-top: 1px solid var(--menu-border-color);
    list-style-type: none;
    margin: 0;
    padding: 7px;
}
#menu-profiler li {
    margin-bottom: 0;
    position: relative;
}
#menu-profiler li + li {
    margin-top: 4px;
}
#menu-profiler li a:hover {
    text-decoration: none;
}
#menu-profiler li a .label {
    background: transparent;
    border-radius: 4px;
    color: var(--menu-color);
    display: flex;
    align-items: center;
    padding: 5px 7px;
    overflow: hidden;
}
#menu-profiler li a .label .icon {
    color: var(--menu-icon-color);
    display: flex;
    margin-right: 8px;
    text-align: center;
}
#menu-profiler .label .icon img,
#menu-profiler .label .icon svg {
    height: 24px;
    max-width: 24px;
}
#menu-profiler li a .label strong {
    flex: 1;
    font-size: var(--font-size-body);
    font-weight: 500;
}
#menu-profiler li a .label.disabled {
    color: var(--menu-disabled-color);
    font-weight: normal;
}
#menu-profiler li a .label.disabled .icon {
    color: var(--menu-icon-disabled-color);
}
#menu-profiler li a .label.disabled strong {
    font-weight: normal;
}

#menu-profiler li.selected::before {
    background: var(--menu-active-marker-background);
    border-radius: 6px;
    content: '';
    position: absolute;
    top: calc(50% - 14px);
    left: -8px;
    width: 4px;
    height: 28px;
}
#menu-profiler li.selected a .label,
#menu-profiler:hover li.selected a:hover .label,
#menu-profiler li a:hover .label {
    background: var(--menu-active-background);
}
#menu-profiler li.selected a .label,
#menu-profiler li a:hover .label {
    color: var(--menu-active-color);
}
#menu-profiler li.selected a .icon svg,
#menu-profiler li a:hover .icon svg,
#menu-profiler li.selected a .disabled .icon svg,
#menu-profiler li a:hover .disabled .icon svg {
    color: var(--menu-active-color);
}

#menu-profiler li a .count {
    background: var(--selected-badge-background);
    border-radius: 4px;
    box-shadow: var(--selected-badge-shadow);
    color: var(--selected-badge-color);
    display: inline-block;
    font-weight: bold;
    line-height: 1;
    min-width: 10px;
    padding: 3px 6px;
    text-align: center;
    white-space: nowrap;
}
#menu-profiler li a span.count span {
    font-size: 12px;
}
#menu-profiler li a span.count span + span::before {
    content: \" / \";
    color: #AAA;
}

#menu-profiler .label-status-warning .count {
    background: var(--selected-badge-warning-background);
    color: var(--selected-badge-warning-color);
    box-shadow: var(--selected-badge-warning-shadow);
}
#menu-profiler .label-status-error .count {
    background: var(--selected-badge-danger-background);
    color: var(--selected-badge-danger-color);
    box-shadow: var(--selected-badge-danger-shadow);
}

{# Timeline panel
   ========================================================================= #}
#timeline-control {
    background: var(--table-background);
    box-shadow: var(--shadow);
    margin: 1em 0;
    padding: 10px;
}
#timeline-control label {
    font-weight: bold;
    margin-right: 1em;
}
#timeline-control input {
    background: var(--metric-value-background);
    font-size: 16px;
    padding: 4px;
    text-align: right;
    width: 5em;
}
#timeline-control .help {
    margin-left: 1em;
}

.sf-profiler-timeline .legends {
    font-size: 12px;
    line-height: 1.5em;
}
.sf-profiler-timeline .legends button {
    color: var(--color-text);
}
.sf-profiler-timeline + p.help {
    margin-top: 0;
}

{# HttpClient panel
   ========================================================================= #}
.sf-profiler-httpclient-requests thead th {
    vertical-align: top;
}
.sf-profiler-httpclient-requests .http-method {
    border: 1px solid var(--header-status-request-method-color);
    border-radius: 5px;
    color: var(--header-status-request-method-color);
    display: inline-block;
    font-weight: 500;
    line-height: 1;
    margin-right: 6px;
    padding: 2px 4px;
    text-align: center;
    white-space: nowrap;
}
.sf-profiler-httpclient-requests .status-response-status-code {
    background: var(--gray-600);
    border-radius: 4px;
    color: var(--white);
    display: inline-block;
    font-size: 12px;
    font-weight: bold;
    margin-bottom: 2px;
    padding: 1px 3px;
}
.sf-profiler-httpclient-requests .status-response-status-code.status-success { background: var(--header-success-status-code-background); color: var(--header-success-status-code-color); }
.sf-profiler-httpclient-requests .status-response-status-code.status-warning { background: var(--header-warning-status-code-background); color: var(--header-warning-status-code-color); }
.sf-profiler-httpclient-requests .status-response-status-code.status-error { background: var(--header-error-status-code-background); color: var(--header-error-status-code-color); }


{# Tabbed navigation
   ========================================================================= #}
.tab-navigation {
    background-color: var(--tab-background);
    border-radius: 6px;
    box-shadow: inset 0 0 0 1px var(--tab-border-color), 0 0 0 5px var(--page-background);
    display: inline-flex;
    flex-wrap: wrap;
    margin: 0 0 15px;
    padding: 0;
    user-select: none;
    -webkit-user-select: none;
}
.sf-tabs-sm .tab-navigation {
    box-shadow: inset 0 0 0 1px var(--tab-border-color), 0 0 0 4px var(--page-background);
    margin: 0 0 10px;
}
.tab-navigation li {
    box-shadow: none;
    transition: box-shadow .05s ease-in, background-color .05s ease-in;
    cursor: pointer;
    font-weight: 500;
    list-style: none;
    margin: 0;
    padding: 4px 14px;
    position: relative;
    text-align: center;
    z-index: 1;
}
.sf-tabs-sm .tab-navigation li {
    font-size: 13px;
    padding: 2.5px 10px;
}
.tab-navigation li:before {
    background: var(--tab-border-color);
    bottom: 15%;
    content: \"\";
    left: 0;
    position: absolute;
    top: 15%;
    width: 1px;
}
.tab-navigation li:first-child:before, .tab-navigation li.active + li:before, .tab-navigation li.active:before {
    width: 0;
}
.tab-navigation li .badge {
    background: var(--selected-badge-background);
    box-shadow: var(--selected-badge-shadow);
    color: var(--selected-badge-color);
    display: inline-block;
    font-size: 12px;
    font-weight: bold;
    line-height: 1;
    margin-left: 8px;
    min-width: 10px;
    padding: 2px 6px;
    text-align: center;
    white-space: nowrap;
}
.tab-navigation li.disabled {
    color: var(--tab-disabled-color);
}
.tab-navigation li.active {
    background-color: var(--tab-active-background);
    border-radius: 6px;
    box-shadow: inset 0 0 0 1.5px var(--tab-active-border-color);
    color: var(--tab-active-color);
    position: relative;
    z-index: 1;
}
.theme-dark .tab-navigation li.active {
    box-shadow: inset 0 0 0 1px var(--tab-border-color);
}
.tab-content > *:first-child {
    margin-top: 0;
}
.tab-navigation li .badge.status-warning {
    background: var(--selected-badge-warning-background);
    box-shadow: var(--selected-badge-warning-shadow);
    color: var(--selected-badge-warning-color);
}
.tab-navigation li .badge.status-error {
    background: var(--selected-badge-danger-background);
    box-shadow: var(--selected-badge-danger-shadow);
    color: var(--selected-badge-danger-color);
}

.sf-tabs .tab:not(:first-child) { display: none; }

{# Toggles
   ========================================================================= #}
.sf-toggle-content {
    -moz-transition: display .25s ease;
    -webkit-transition: display .25s ease;
    transition: display 3.25s ease;
}
.sf-toggle-content.sf-toggle-hidden {
    display: none;
}
.sf-toggle-content.sf-toggle-visible {
    display: block;
}

{# Filters
   ========================================================================= #}
[data-filters] { position: relative; }
[data-filtered] { cursor: pointer; }
[data-filtered]:after { content: '\\00a0\\25BE'; }
[data-filtered]:hover .filter-list li { display: inline-flex; }
[class*=\"filter-hidden-\"] { display: none; }
.filter-list { position: absolute; border: var(--border); box-shadow: var(--shadow); margin: 0; padding: 0; display: flex; flex-direction: column; }
.filter-list :after { content: ''; }
.filter-list li {
    background: var(--tab-disabled-background);
    border-bottom: var(--border);
    color: var(--tab-disabled-color);
    display: none;
    list-style: none;
    margin: 0;
    padding: 5px 10px;
    text-align: left;
    font-weight: normal;
}
.filter-list li.active {
    background: var(--tab-background);
    color: var(--tab-color);
}
.filter-list li.last-active {
    background: var(--tab-active-background);
    color: var(--tab-active-color);
}

.filter-list-level li { cursor: s-resize; }
.filter-list-level li.active { cursor: n-resize; }
.filter-list-level li.last-active { cursor: default; }
.filter-list-level li.last-active:before { content: '\\2714\\00a0'; }
.filter-list-choice li:before { content: '\\2714\\00a0'; color: transparent; }
.filter-list-choice li.active:before { color: unset; }

{# Twig panel
   ========================================================================= #}
#twig-dump pre {
    font-size: var(--font-size-monospace);
    line-height: 1.7;
    background-color: var(--base-0);
    border: var(--border);
    border-radius: 6px;
    padding: 15px;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
}
#twig-dump span {
    border-radius: 2px;
    padding: 1px 2px;
}
#twig-dump .status-error { background: transparent; color: var(--color-error); }
#twig-dump .status-warning { background: rgba(240, 181, 24, 0.3); }
#twig-dump .status-success { background: rgba(100, 189, 99, 0.2); }
#twig-dump .status-info { background: var(--info-background); }
.theme-dark #twig-dump .status-warning { color: var(--yellow-200); }
.theme-dark #twig-dump .status-success { color: var(--green-200); }

#twig-table tbody td {
    position: relative;
}
#twig-table tbody td div {
    margin: 0;
}
#twig-table .template-file-path {
    color: var(--color-muted);
    display: block;
}

{# Request panel
   ========================================================================= #}
.empty-query-post-files {
    display: flex;
    justify-content: space-between;
}
.empty-query-post-files > div {
    flex: 1;
}
.empty-query-post-files > div + div {
    margin-left: 30px;
}
.empty-query-post-files h3 {
    margin-top: 0;
}
.empty-query-post-files .empty {
    margin-bottom: 0;
}

{# Logger panel
   ========================================================================= #}
.badge {
    background: var(--badge-background);
    border-radius: 4px;
    color: var(--badge-color);
    font-size: 12px;
    font-weight: bold;
    padding: 1px 4px;
}
.badge-success {
    background: var(--badge-success-background);
    color: var(--badge-success-color);
}
.badge-warning {
    background: var(--badge-warning-background);
    color: var(--badge-warning-color);
}

.log-filters {
    display: flex;
    flex-wrap: wrap;
}
.log-filters .log-filter {
    flex-shrink: 0;
    margin-right: 15px;
    position: relative;
}
.log-filters .log-filter summary {
    align-items: center;
    background: var(--button-background);
    border-radius: 6px;
    border: 1px solid var(--button-border-color);
    box-shadow: var(--button-box-shadow);
    color: var(--button-color);
    cursor: pointer;
    display: flex;
    font-size: 13px;
    font-weight: 500;
    padding: 4px 8px;
    white-space: nowrap;
}
.log-filters .log-filter summary:active {
    box-shadow: none;
    transform: translateY(1px);
}
.log-filters .log-filter summary .icon {
    height: 18px;
    width: 18px;
    margin: 0 7px 0 0;
}
.log-filters .log-filter summary svg {
    height: 18px;
    width: 18px;
    opacity: 0.7;
}
.log-filters .log-filter summary svg {
    stroke-width: 2;
}
.log-filters .log-filter summary .filter-active-num {
    color: var(--log-filter-active-num-color);
    font-weight: bold;
    padding: 0 1px;
}
.log-filter .tab-navigation li input {
    display: none;
}
.log-filter .tab-navigation li label {
    cursor: pointer;
}
.log-filters .log-filter .log-filter-content {
    background: var(--base-0);
    border: 1px solid var(--table-border-color);
    border-radius: 6px;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    padding: 15px;
    position: absolute;
    left: 0;
    top: 32px;
    max-width: 400px;
    min-width: 200px;
    z-index: 9999;
}
.log-filters .log-filter .log-filter-content .log-filter-option {
    align-items: center;
    display: flex;
}
.log-filter .filter-select-all-or-none {
    margin-bottom: 10px;
}
.log-filter .filter-select-all-or-none button + button {
    margin-left: 15px;
}
.log-filters .log-filter .log-filter-content .log-filter-option + .log-filter-option {
    margin: 7px 0 0;
}
.log-filters .log-filter .log-filter-content .log-filter-option label {
    cursor: pointer;
    flex: 1;
    padding-left: 10px;
}

table.logs {
    border-bottom-width: 0;
    border-collapse: collapse;
}
table.logs tr + tr td {
    border-width: 1px 0 0;
}
table.logs .metadata {
    display: block;
    font-size: 12px;
}
.theme-dark tr.status-error td,
.theme-dark tr.status-warning td { border-bottom: unset; border-top: unset; }

table.logs .log-timestamp {
    color: var(--log-timestamp-color);
}
table.logs .log-metadata {
    margin: 8px 0 0;
}
table.logs .log-metadata > span {
    display: inline-block;
}
table.logs .log-metadata > span + span {
    margin-left: 10px;
}
table.logs .log-metadata .log-channel {
    color: var(--base-1);
    font-size: 13px;
    font-weight: bold;
}
table.logs .log-metadata .badge {
    background: var(--badge-light-background);
    color: var(--badge-light-color);
}
table.logs .log-metadata .log-num-occurrences {
    color: var(--color-muted);
    font-size: 13px;
}
table.logs .log-metadata .context {
    background: var(--code-block-background);
    border-radius: 4px;
    padding: 5px;
}
table.logs .log-metadata .context + .context {
    margin-top: 10px;
}
.log-type-badge {
    background: var(--badge-light-background);
    box-shadow: none;
    color: var(--badge-light-color);
    display: inline-block;
    font-family: var(--font-family-system);
    margin-top: 5px;
}
.log-type-badge.badge-deprecation,
.log-type-badge.badge-warning {
    background: var(--badge-warning-background);
    color: var(--badge-warning-color);
}
.log-type-badge.badge-error {
    background: var(--badge-danger-background);
    color: var(--badge-danger-color);
}
.log-type-badge.badge-silenced {
    background: #EDE9FE;
    color: #6D28D9;
}
.theme-dark .log-type-badge.badge-silenced {
    background: #5B21B6;
    color: #EDE9FE;
}

tr.log-status-warning > td:first-child,
tr.log-status-error > td:first-child,
tr.log-status-silenced > td:first-child {
    position: relative;
}
tr.log-status-warning > td:first-child:before,
tr.log-status-error > td:first-child:before,
tr.log-status-silenced > td:first-child:before {
    background: transparent;
    border-radius: 0;
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
}
tr.log-status-warning > td:first-child:before {
    background: var(--yellow-400);
}
tr.log-status-error > td:first-child:before {
    background: var(--red-400);
}
tr.log-status-silenced > td:first-child:before {
    background: #a78bfa;
}

.container-compilation-logs {
    background: var(--table-background);
    border: 1px solid var(--base-2);
    border-radius: 6px;
    margin-top: 30px;
    padding: 15px;
}
.container-compilation-logs summary {
    cursor: pointer;
}
.container-compilation-logs summary h4 {
    margin: 0 0 5px;
}
.container-compilation-logs summary p {
    margin: 0;
}

{# Mailer panel
   ========================================================================= #}
.mailer-email-summary-table-wrapper {
    background: var(--mailer-email-table-wrapper-background);
    border-bottom: 4px double var(--table-border-color);
    border-radius: inherit;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    margin: 0 -9px 10px -9px;
    padding-bottom: 10px;
    transform: translateY(-9px);
    max-height: 265px;
    overflow-y: auto;
}
.mailer-email-summary-table,
.mailer-email-summary-table tr,
.mailer-email-summary-table td {
    border: 0;
    border-radius: inherit;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    box-shadow: none;
}
.mailer-email-summary-table th {
    color: var(--color-muted);
    font-size: 13px;
    padding: 4px 10px;
}
.mailer-email-summary-table tr td,
.mailer-email-summary-table tr:last-of-type td {
    border: solid var(--table-border-color);
    border-width: 1px 0;
}
.mailer-email-summary-table-row {
    margin: 5px 0;
}
.mailer-email-summary-table-row:hover {
    cursor: pointer;
}
.mailer-email-summary-table-row.active {
    background: var(--mailer-email-table-active-row-background);
    color: var(--mailer-email-table-active-row-color);
}
.mailer-email-summary-table-row td {
    font-family: var(--font-family-system);
    font-size: inherit;
}
.mailer-email-details {
    display: none;
}
.mailer-email-details.active {
    display: block;
}
.mailer-transport-information {
    border-bottom: 1px solid var(--form-input-border-color);
    padding-bottom: 5px;
    font-size: var(--font-size-body);
    margin: 5px 0 10px 5px;
}
.mailer-transport-information .badge {
    font-size: inherit;
    font-weight: inherit;
}
.mailer-message-subject {
    font-size: 21px;
    font-weight: bold;
    margin: 5px;
}
.mailer-message-headers {
    margin-bottom: 10px;
}
.mailer-message-headers p {
    font-size: var(--font-size-body);
    margin: 2px 5px;
}
.mailer-message-header-secondary {
    color: var(--color-muted);
}
.mailer-message-attachments-title {
    align-items: center;
    display: flex;
    font-size: var(--font-size-body);
    font-weight: 600;
    margin-bottom: 10px;
}
.mailer-message-attachments-title svg {
    color: var(--color-muted);
    margin-right: 5px;
    height: 18px;
    width: 18px;
}
.mailer-message-attachments-title span {
    font-weight: normal;
    margin-left: 4px;
}
.mailer-message-attachments-list {
    list-style: none;
    margin: 0 0 5px 20px;
    padding: 0;
}
.mailer-message-attachments-list li {
    align-items: center;
    display: flex;
}
.mailer-message-attachments-list li svg {
    margin-right: 5px;
    height: 18px;
    width: 18px;
}
.mailer-message-attachments-list li a {
    margin-left: 5px;
}
.mailer-message-download-raw {
    align-items: center;
    display: flex;
    padding: 5px 0 0 5px;
}
.mailer-message-download-raw svg {
    height: 18px;
    width: 18px;
    margin-right: 3px;
}

{# Doctrine panel
   ========================================================================= #}
.sql-runnable {
    background: var(--base-1);
    margin: .5em 0;
    padding: 1em;
}
.sql-explain {
    overflow-x: auto;
    max-width: 888px;
}
.width-full .sql-explain {
    max-width: unset;
}
.sql-explain table td, .sql-explain table tr {
    word-break: normal;
}
.queries-table pre {
    margin: 0;
    white-space: pre-wrap;
    -ms-word-break: break-all;
    word-break: break-all;
    word-break: break-word;
    -webkit-hyphens: auto;
    -moz-hyphens: auto;
    hyphens: auto;
}

{# Security panel
   ========================================================================= #}
#collector-content .decision-log .voter_result td {
    border-top-width: 1px;
    border-bottom-width: 0;
    padding-bottom: 0;
}

#collector-content .decision-log .voter_details td {
    border-top-width: 0;
    border-bottom-width: 1px;
    padding-bottom: 0;
}

#collector-content .decision-log .voter_details table {
    border: 0;
    margin: 0;
    box-shadow: unset;
}

#collector-content .decision-log .voter_details table td {
    border: 0;
    padding: 0 0 8px 0;
}

{# Validator panel
   ========================================================================= #}

#collector-content .sf-validator {
    margin-bottom: 2em;
}

#collector-content .sf-validator .sf-validator-context,
#collector-content .sf-validator .trace {
    border: var(--border);
    background: var(--base-0);
    padding: 10px;
    margin: 0.5em 0;
    overflow: auto;
}
#collector-content .sf-validator .trace {
    font-size: 12px;
}
#collector-content .sf-validator .trace li {
    margin-bottom: 0;
    padding: 0;
}
#collector-content .sf-validator .trace li.selected {
    background: var(--highlight-selected-line);
}

{# Serializer panel
   ========================================================================= #}

#collector-content .sf-serializer {
    margin-bottom: 2em;
}

#collector-content .sf-serializer .trace {
    border: var(--border);
    background: var(--base-0);
    padding: 10px;
    margin: 0.5em 0;
    overflow: auto;
}
#collector-content .sf-serializer .trace {
    font-size: 12px;
}
#collector-content .sf-serializer .trace li {
    margin-bottom: 0;
    padding: 0;
}
#collector-content .sf-serializer .trace li.selected {
    background: var(--highlight-selected-line);
}

{# Messenger panel
   ========================================================================= #}

#collector-content .message-bus .trace {
    border: var(--border);
    background: var(--base-0);
    padding: 10px;
    margin: 0.5em 0;
    overflow: auto;
}
#collector-content .message-bus .trace {
    font-size: 12px;
}
#collector-content .message-bus .trace li {
    margin-bottom: 0;
    padding: 0;
}
#collector-content .message-bus .trace li.selected {
    background: var(--highlight-selected-line);
}

{# Dump panel
   ========================================================================= #}
pre.sf-dump, pre.sf-dump .sf-dump-default {
    white-space: pre-wrap;
    z-index: 1000 !important;
}

#collector-content .sf-dump {
    margin-bottom: 2em;
}
#collector-content pre.sf-dump,
#collector-content .sf-dump code,
#collector-content .sf-dump samp {
    font-family: var(--font-family-monospace);
    font-size: var(--font-size-monospace);
    font-variant-ligatures: var(--font-variant-ligatures-monospace);
}
#collector-content .sf-dump a {
    cursor: pointer;
}
#collector-content .sf-dump pre.sf-dump,
#collector-content .sf-dump .trace {
    border: var(--border);
    padding: 10px;
    margin: 0.5em 0;
    overflow: auto;
}

#collector-content pre.sf-dump,
#collector-content .sf-dump-default {
    background: none;
}
#collector-content .sf-dump-ellipsis { max-width: 100em; }

#collector-content .sf-dump {
    margin: 0;
    padding: 0;
    line-height: 1.4;
}

#collector-content .dump-inline .sf-dump {
    display: inline;
    white-space: normal;
    font-size: var(--font-size-monospace);
    line-height: inherit;
}
#collector-content .dump-inline .sf-dump:after {
    display: none;
}

#collector-content .sf-dump .trace {
    font-size: 12px;
}
#collector-content .sf-dump .trace li {
    margin-bottom: 0;
    padding: 0;
}

{# Forms panel
   ========================================================================= #}
.form-type-class {
    font-size: var(--font-size-body);
    display: flex;
    margin: 0 0 15px;
}
.form-type-class-label {
    margin-right: 4px;
}
.form-type-class pre.sf-dump {
    font-family: var(--font-family-system) !important;
    font-size: var(--font-size-body) !important;
    margin-left: 5px;
}
.form-type-class .sf-dump .sf-dump-str {
    color: var(--color-link) !important;
    text-decoration: underline;
}
.form-type-class .sf-dump .sf-dump-str:hover {
    text-decoration: none;
}

{# Configuration panel
   ========================================================================= #}
.config-symfony-version-lts {
    border: 0;
    color: var(--color-muted);
    font-size: 21px;
    line-height: 33px;
}
.config-symfony-version-lts[title] {
    text-decoration: none;
}
.config-symfony-version-status-badge {
    background-color: var(--badge-background);
    border-radius: 4px;
    color: var(--badge-color);
    display: inline-block;
    font-size: 15px;
    font-weight: bold;
    margin: 10px 0 5px;
    padding: 3px 7px;
    white-space: nowrap;
}
.config-symfony-version-status-badge.status-success {
    background-color: var(--badge-success-background);
    color: var(--badge-success-color);
}
.config-symfony-version-status-badge.status-warning {
    background-color: var(--badge-warning-background);
    color: var(--badge-warning-color);
}
.config-symfony-version-status-badge.status-error {
    background-color: var(--badge-danger-background);
    color: var(--badge-danger-color);
}
.config-symfony-version-roadmap-link {
    display: inline-block;
    margin: 10px 5px 5px;
}
.config-symfony-eol {
    margin-top: 5px;
}

{# Search Results page
   ========================================================================= #}
#search-results td {
    font-family: var(--font-family-system);
    vertical-align: middle;
}

#search-results .sf-search {

    visibility: hidden;
    margin-left: 2px;
}
#search-results tr:hover .sf-search {
    visibility: visible;
}
#search-results .sf-search svg {
    stroke-width: 3;
}

{# Small screens
   ========================================================================= #}

.visible-small {
    display: none;
}
.hidden-small {
    display: inherit;
}

@media (max-width: 768px) {
    #summary .status {
        padding: calc(10px + var(--summary-status-border-width)) 10px 10px;
    }

    #sidebar {
        flex-basis: 50px;
        overflow-x: hidden;
        transition: flex-basis 200ms ease-out;
    }
    #sidebar:hover, #sidebar.expanded {
        flex-basis: 220px;
    }

    #sidebar-search {
        display: none;
    }
    #sidebar:hover #sidebar-search.sf-toggle-visible, #sidebar.expanded #sidebar-search.sf-toggle-visible {
        display: block;
    }

    #sidebar .module {
        display: none;
    }
    #sidebar:hover .module, #sidebar.expanded .module {
        display: block;
    }

    #sidebar:not(:hover):not(.expanded) .label .count {
        border-radius: 50%;
        border: 1px solid #eee;
        height: 8px;
        min-width: 0;
        padding: 0;
        right: 4px;
        text-indent: -9999px;
        top: 50%;
        width: 8px;
    }

    .visible-small {
        display: inherit;
    }
    .hidden-small {
        display: none;
    }

    .btn-sm svg {
        margin-left: 2px;
    }
}

{# Config Options
   ========================================================================= #}
body.width-full .container {
    margin: 0 5px;
    max-width: 100%;
}

@media (min-width: 992px) {
    body.width-full .container { margin: 0 15px; }
}
@media (min-width: 1200px) {
    body.width-full .container { margin: 0 30px; }
}

{# VarDumper dumps
   ========================================================================= #}
#collector-content pre.sf-dump, #collector-content .sf-dump code, #collector-content .sf-dump samp {
    font-size: var(--font-size-monospace);
    font-weight: normal;
}

#collector-content .sf-dump pre.sf-dump,
#collector-content .sf-dump .trace {
    background: var(--page-background);
}
#collector-content pre.sf-dump,
#collector-content .sf-dump-default {
    color: var(--color-text);
}
#collector-content .sf-dump samp {
    line-height: 1.7;
}
body.theme-light #collector-content .sf-dump-expanded { color: var(--color-text); }
body.theme-light #collector-content .sf-dump-str { color: var(--highlight-string); }
body.theme-light #collector-content .sf-dump-private,
body.theme-light #collector-content .sf-dump-protected,
body.theme-light #collector-content .sf-dump-public { color: var(--color-text); }
body.theme-light #collector-content .sf-dump-note { color: #e36209; }
body.theme-light #collector-content .sf-dump-meta { color: #6f42c1; }
body.theme-light #collector-content .sf-dump-key { color: #067d17; }
body.theme-light #collector-content .sf-dump-num,
body.theme-light #collector-content .sf-dump-const { color: var(--highlight-constant); }
body.theme-light #collector-content .sf-dump-ref { color: #6E6E6E; }
body.theme-light #collector-content .sf-dump-ellipsis { color: var(--gray-600); max-width: 100em; }
body.theme-light #collector-content .sf-dump-ellipsis-path { max-width: 5em; }
body.theme-light #collector-content .sf-dump .trace li.selected {
    background: rgba(255, 255, 153, 0.5);
}
body.theme-dark #collector-content .sf-dump-expanded { color: var(--color-text); }
body.theme-dark #collector-content .sf-dump-str { color: var(--highlight-string); }
body.theme-dark #collector-content .sf-dump-private,
body.theme-dark #collector-content .sf-dump-protected,
body.theme-dark #collector-content .sf-dump-public { color: var(--color-text); }
body.theme-dark #collector-content .sf-dump-note { color: #ffa657; }
body.theme-dark #collector-content .sf-dump-meta { color: #d2a8ff; }
body.theme-dark #collector-content .sf-dump-key { color: #a5d6ff; }
body.theme-dark #collector-content .sf-dump-num,
body.theme-dark #collector-content .sf-dump-const { color: var(--highlight-constant); }
body.theme-dark #collector-content .sf-dump-ref { color: var(--gray-400); }
body.theme-dark #collector-content .sf-dump-ellipsis { color: var(--gray-300); max-width: 100em; }
body.theme-dark #collector-content .sf-dump-ellipsis-path { max-width: 5em; }
body.theme-dark #collector-content .sf-dump .trace li.selected {
    background: rgba(255, 255, 153, 0.5);
}
", "@WebProfiler/Profiler/profiler.css.twig", "/var/www/html/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/profiler.css.twig");
    }
}
