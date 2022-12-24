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

/* accueil.html.twig */
class __TwigTemplate_d39d25a45c944d13bc0fce291b2a27d077e709bfffdfe0aad9e1c6d5facda498 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Vive le numérique !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "        
        <div class=\"container\">
          <div class=\"row p-3  mb-5\">

            <div class=\"col-6 shadow\">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem itaque, officiis, repellendus unde eligendi minus ratione excepturi iusto ea, recusandae reiciendis veniam quasi officia dignissimos iste quaerat rerum consequuntur dolore.
              Temporibus necessitatibus odit non id odio maiores quas est quod officiis laborum nihil quisquam sed sunt eos reiciendis repudiandae aliquam ipsa consectetur ipsum, quo dolor. Molestias autem tempore inventore at. Blanditiis delectus
              magnam distinctio et tempora possimus quas totam cum accusamus. Voluptatem, quae architecto soluta eius ipsam natus? Explicabo, dolorem tempore enim quod ipsam perferendis unde officiis veritatis dolorum qui.</p>
            </div>
  
            <div class=\"col-6 shadow\">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem itaque, officiis, repellendus unde eligendi minus ratione excepturi iusto ea, recusandae reiciendis veniam quasi officia dignissimos iste quaerat rerum consequuntur dolore.
                Temporibus necessitatibus odit non id odio maiores quas est quod officiis laborum nihil quisquam sed sunt eos reiciendis repudiandae aliquam ipsa consectetur ipsum, quo dolor. Molestias autem tempore inventore at. Blanditiis delectus
                magnam distinctio et tempora possimus quas totam cum accusamus. Voluptatem, quae architecto soluta eius ipsam natus? Explicabo, dolorem tempore enim quod ipsam perferendis unde officiis veritatis dolorum qui.</p>
            </div>
          </div>

          <div class=\"row p-5\">
            <h1 class=\"display-5 text-center m-auto\">Découvrez tous nos ateliers</h1>
          </div>
           
          <div class=\"row p-5\">

            <div class=\"col-6\">
              <img src=\" ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/1.jpg"), "html", null, true);
        echo " \" alt=\"IMAGE 1\" class=\"img-fluid rounded-circle\">
            </div>

            <div class=\"col-6\">
              <img src=\" ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/2.jpg"), "html", null, true);
        echo " \" alt=\"IMAGE 2\" class=\"img-fluid rounded-circle\">
            </div>

          </div>
          
          <button type=\"button\" class=\"btn btn-primary btn-sm\"><a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ateliers_index");
        echo "\" class=\"mx-auto btn btn-primary text-center\">Nos ateliers</a></button>
        </div>
        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 38,  121 => 33,  114 => 29,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Vive le numérique !{% endblock %}
{% block body %}
        
        <div class=\"container\">
          <div class=\"row p-3  mb-5\">

            <div class=\"col-6 shadow\">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem itaque, officiis, repellendus unde eligendi minus ratione excepturi iusto ea, recusandae reiciendis veniam quasi officia dignissimos iste quaerat rerum consequuntur dolore.
              Temporibus necessitatibus odit non id odio maiores quas est quod officiis laborum nihil quisquam sed sunt eos reiciendis repudiandae aliquam ipsa consectetur ipsum, quo dolor. Molestias autem tempore inventore at. Blanditiis delectus
              magnam distinctio et tempora possimus quas totam cum accusamus. Voluptatem, quae architecto soluta eius ipsam natus? Explicabo, dolorem tempore enim quod ipsam perferendis unde officiis veritatis dolorum qui.</p>
            </div>
  
            <div class=\"col-6 shadow\">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem itaque, officiis, repellendus unde eligendi minus ratione excepturi iusto ea, recusandae reiciendis veniam quasi officia dignissimos iste quaerat rerum consequuntur dolore.
                Temporibus necessitatibus odit non id odio maiores quas est quod officiis laborum nihil quisquam sed sunt eos reiciendis repudiandae aliquam ipsa consectetur ipsum, quo dolor. Molestias autem tempore inventore at. Blanditiis delectus
                magnam distinctio et tempora possimus quas totam cum accusamus. Voluptatem, quae architecto soluta eius ipsam natus? Explicabo, dolorem tempore enim quod ipsam perferendis unde officiis veritatis dolorum qui.</p>
            </div>
          </div>

          <div class=\"row p-5\">
            <h1 class=\"display-5 text-center m-auto\">Découvrez tous nos ateliers</h1>
          </div>
           
          <div class=\"row p-5\">

            <div class=\"col-6\">
              <img src=\" {{ asset('img/1.jpg') }} \" alt=\"IMAGE 1\" class=\"img-fluid rounded-circle\">
            </div>

            <div class=\"col-6\">
              <img src=\" {{ asset('img/2.jpg') }} \" alt=\"IMAGE 2\" class=\"img-fluid rounded-circle\">
            </div>

          </div>
          
          <button type=\"button\" class=\"btn btn-primary btn-sm\"><a href=\"{{ path('app_ateliers_index') }}\" class=\"mx-auto btn btn-primary text-center\">Nos ateliers</a></button>
        </div>
        
{% endblock %}", "accueil.html.twig", "C:\\laragon\\www\\ouedraogo_NUMERIQUE\\numerique\\templates\\accueil.html.twig");
    }
}
