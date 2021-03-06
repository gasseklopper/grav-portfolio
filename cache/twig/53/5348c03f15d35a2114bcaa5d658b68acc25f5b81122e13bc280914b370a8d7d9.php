<?php

/* partials/logo.html.twig */
class __TwigTemplate_8776df919edac325c532f4bbfb1b3b91ff8ccbf98510bcaf2e8a94974bfabdee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "logo_text", array())) {
            // line 2
            echo "<h3>
\t<a href=\"";
            // line 3
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "\">
\t\t";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "logo_text", array()), "html", null, true);
            echo "
\t</a>
\t<a class=\"front-end hint--left\" data-hint=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VIEW_SITE_TIP"), "html", null, true);
            echo "\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative_frontend"] ?? null), "html", null, true);
            echo "\"> <i class=\"fa fa-bookmark-o\"></i></a>
</h3>
";
        } else {
            // line 9
            echo "<div class=\"admin-logo\">
\t<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "\">
\t\t<svg id=\"grav-logo-small\" class=\"grav-logo\" width=\"100%\" height=\"100%\" viewBox=\"0 0 91 103\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xml:space=\"preserve\" xmlns:serif=\"http://www.serif.com/\" style=\"fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;\"><g transform=\"matrix(1,0,0,1,-411.231,-328.021)\"><path d=\"M498.522,382.22L487.883,382.22C486.266,382.22 484.953,383.536 484.953,385.158L484.953,405.594L484.744,405.77C478.482,411.052 470.564,413.956 462.45,413.956C443.311,413.956 427.739,398.384 427.739,379.241C427.739,360.097 443.311,344.527 462.45,344.527C469.893,344.527 477.01,346.883 483.034,351.344C484.203,352.21 485.825,352.091 486.856,351.064L494.441,343.477C495.034,342.888 495.342,342.07 495.294,341.235C495.248,340.4 494.847,339.627 494.189,339.106C485.176,331.956 473.905,328.021 462.45,328.021C434.21,328.021 411.232,350.998 411.232,379.241C411.232,407.485 434.21,430.46 462.45,430.46C477.032,430.46 490.979,424.187 500.713,413.242C501.191,412.705 501.455,412.014 501.455,411.295L501.455,385.158C501.455,383.536 500.142,382.22 498.522,382.22\" style=\"fill-rule:nonzero;\"/></g></svg>
\t\t<svg id=\"grav-logo-large\" class=\"grav-logo\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" viewBox=\"0 0 444 103\" clip-rule=\"evenodd\"><path d=\"M87.3 54.2H76.64c-1.6 0-2.93 1.3-2.93 2.94v20.43l-.2.18c-6.27 5.28-14.2 8.2-22.3 8.2-19.14-.02-34.7-15.6-34.7-34.73 0-19.14 15.56-34.7 34.7-34.7 7.44 0 14.56 2.34 20.58 6.8 1.17.87 2.8.75 3.83-.28l7.58-7.58c.6-.6.9-1.4.86-2.25-.04-.82-.44-1.6-1.1-2.12C73.94 3.94 62.66 0 51.22 0 22.98 0 0 22.98 0 51.22s22.98 51.22 51.22 51.22c14.58 0 28.53-6.27 38.26-17.22.48-.54.74-1.23.74-1.95V57.14c0-1.63-1.3-2.94-2.93-2.94M443.24 4.7c-.54-.8-1.47-1.3-2.45-1.3h-11.6c-1.16 0-2.22.68-2.68 1.76l-32.65 75.8-33.22-75.82c-.47-1.06-1.53-1.75-2.7-1.75h-11.6c-1 0-1.92.5-2.46 1.32-.55.83-.65 1.87-.24 2.78l40.24 91.8c.47 1.08 1.53 1.77 2.7 1.77h14.65c1.17 0 2.23-.7 2.7-1.77L443.5 7.48c.37-.9.28-1.95-.26-2.77\"/><path d=\"M291.1 5.14c-.48-1.06-1.53-1.75-2.7-1.75h-14.65c-1.17 0-2.23.68-2.7 1.76l-39.53 91.8c-.4.92-.3 1.96.24 2.78.54.83 1.46 1.33 2.45 1.33h11.6c1.16 0 2.22-.7 2.7-1.77l32.62-75.8 33.23 75.8c.47 1.08 1.52 1.77 2.68 1.77h11.63c1 0 1.92-.5 2.45-1.33.56-.83.64-1.88.25-2.8L291.1 5.15zM185.1 67.48l.65-.3c11.56-5.6 19.03-17.45 19.03-30.23 0-18.5-15.05-33.56-33.56-33.56h-42.5c-1.6 0-2.92 1.3-2.92 2.92v91.8c0 1.63 1.3 2.95 2.93 2.95h10.64c1.62 0 2.93-1.3 2.93-2.94V19.9h28.92c9.4 0 17.06 7.64 17.06 17.05 0 7.85-5.33 14.65-12.97 16.55-1.36.34-2.74.52-4.08.52h-10.64c-1.1 0-2.1.62-2.6 1.6-.5 1-.42 2.17.24 3.07l30.16 41.17c.55.75 1.42 1.2 2.36 1.2h13.22c1.1 0 2.12-.62 2.6-1.6.52-1 .42-2.18-.24-3.07l-21.2-28.92z\"/></svg>
\t</a>
\t<a class=\"front-end hint--left\" data-hint=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VIEW_SITE_TIP"), "html", null, true);
            echo "\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative_frontend"] ?? null), "html", null, true);
            echo "\"> <i class=\"fa fa-external-link\"></i></a>
</div>
";
        }
        // line 17
        echo "



";
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 17,  51 => 14,  44 => 10,  41 => 9,  33 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if config.plugins.admin.logo_text %}
<h3>
\t<a href=\"{{ base_url_relative }}\">
\t\t{{ config.plugins.admin.logo_text }}
\t</a>
\t<a class=\"front-end hint--left\" data-hint=\"{{ \"PLUGIN_ADMIN.VIEW_SITE_TIP\"|tu }}\" target=\"_blank\" href=\"{{ base_url_relative_frontend }}\"> <i class=\"fa fa-bookmark-o\"></i></a>
</h3>
{% else %}
<div class=\"admin-logo\">
\t<a href=\"{{ base_url_relative }}\">
\t\t<svg id=\"grav-logo-small\" class=\"grav-logo\" width=\"100%\" height=\"100%\" viewBox=\"0 0 91 103\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xml:space=\"preserve\" xmlns:serif=\"http://www.serif.com/\" style=\"fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;\"><g transform=\"matrix(1,0,0,1,-411.231,-328.021)\"><path d=\"M498.522,382.22L487.883,382.22C486.266,382.22 484.953,383.536 484.953,385.158L484.953,405.594L484.744,405.77C478.482,411.052 470.564,413.956 462.45,413.956C443.311,413.956 427.739,398.384 427.739,379.241C427.739,360.097 443.311,344.527 462.45,344.527C469.893,344.527 477.01,346.883 483.034,351.344C484.203,352.21 485.825,352.091 486.856,351.064L494.441,343.477C495.034,342.888 495.342,342.07 495.294,341.235C495.248,340.4 494.847,339.627 494.189,339.106C485.176,331.956 473.905,328.021 462.45,328.021C434.21,328.021 411.232,350.998 411.232,379.241C411.232,407.485 434.21,430.46 462.45,430.46C477.032,430.46 490.979,424.187 500.713,413.242C501.191,412.705 501.455,412.014 501.455,411.295L501.455,385.158C501.455,383.536 500.142,382.22 498.522,382.22\" style=\"fill-rule:nonzero;\"/></g></svg>
\t\t<svg id=\"grav-logo-large\" class=\"grav-logo\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" viewBox=\"0 0 444 103\" clip-rule=\"evenodd\"><path d=\"M87.3 54.2H76.64c-1.6 0-2.93 1.3-2.93 2.94v20.43l-.2.18c-6.27 5.28-14.2 8.2-22.3 8.2-19.14-.02-34.7-15.6-34.7-34.73 0-19.14 15.56-34.7 34.7-34.7 7.44 0 14.56 2.34 20.58 6.8 1.17.87 2.8.75 3.83-.28l7.58-7.58c.6-.6.9-1.4.86-2.25-.04-.82-.44-1.6-1.1-2.12C73.94 3.94 62.66 0 51.22 0 22.98 0 0 22.98 0 51.22s22.98 51.22 51.22 51.22c14.58 0 28.53-6.27 38.26-17.22.48-.54.74-1.23.74-1.95V57.14c0-1.63-1.3-2.94-2.93-2.94M443.24 4.7c-.54-.8-1.47-1.3-2.45-1.3h-11.6c-1.16 0-2.22.68-2.68 1.76l-32.65 75.8-33.22-75.82c-.47-1.06-1.53-1.75-2.7-1.75h-11.6c-1 0-1.92.5-2.46 1.32-.55.83-.65 1.87-.24 2.78l40.24 91.8c.47 1.08 1.53 1.77 2.7 1.77h14.65c1.17 0 2.23-.7 2.7-1.77L443.5 7.48c.37-.9.28-1.95-.26-2.77\"/><path d=\"M291.1 5.14c-.48-1.06-1.53-1.75-2.7-1.75h-14.65c-1.17 0-2.23.68-2.7 1.76l-39.53 91.8c-.4.92-.3 1.96.24 2.78.54.83 1.46 1.33 2.45 1.33h11.6c1.16 0 2.22-.7 2.7-1.77l32.62-75.8 33.23 75.8c.47 1.08 1.52 1.77 2.68 1.77h11.63c1 0 1.92-.5 2.45-1.33.56-.83.64-1.88.25-2.8L291.1 5.15zM185.1 67.48l.65-.3c11.56-5.6 19.03-17.45 19.03-30.23 0-18.5-15.05-33.56-33.56-33.56h-42.5c-1.6 0-2.92 1.3-2.92 2.92v91.8c0 1.63 1.3 2.95 2.93 2.95h10.64c1.62 0 2.93-1.3 2.93-2.94V19.9h28.92c9.4 0 17.06 7.64 17.06 17.05 0 7.85-5.33 14.65-12.97 16.55-1.36.34-2.74.52-4.08.52h-10.64c-1.1 0-2.1.62-2.6 1.6-.5 1-.42 2.17.24 3.07l30.16 41.17c.55.75 1.42 1.2 2.36 1.2h13.22c1.1 0 2.12-.62 2.6-1.6.52-1 .42-2.18-.24-3.07l-21.2-28.92z\"/></svg>
\t</a>
\t<a class=\"front-end hint--left\" data-hint=\"{{ \"PLUGIN_ADMIN.VIEW_SITE_TIP\"|tu }}\" target=\"_blank\" href=\"{{ base_url_relative_frontend }}\"> <i class=\"fa fa-external-link\"></i></a>
</div>
{% endif %}




", "partials/logo.html.twig", "C:\\xampp\\htdocs\\grav-portfolio\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\logo.html.twig");
    }
}
