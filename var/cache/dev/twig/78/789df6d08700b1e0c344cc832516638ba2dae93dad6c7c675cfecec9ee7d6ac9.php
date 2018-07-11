<?php

/* @Elislam/post/index.html.twig */
class __TwigTemplate_6d07ee8cb06ed81b8d29218e45d02570155daba30f13e07ff8d92aae532599ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Elislam/Default/base.html.twig", "@Elislam/post/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Elislam/Default/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Elislam/post/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Elislam/post/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/elislam/css/sub.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 8
            echo "       <div class=\"container-fluid col-9\">
           <h1 class=\"text-center text-white\">Gallerij lijst</h1>
           <table class=\"table table-striped table-dark table-bordered table-responsive\">
               <thead>
               <tr>
                   <th>Id</th>
                   <th>Image</th>
                   <th>Actions</th>
               </tr>
               </thead>
               <tbody>
               ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 20
                echo "                   <tr>
                       <td><a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                echo "</a></td>
                       <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "image", array()), "html", null, true);
                echo "</td>
                       <td>
                           <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "\" style=\"padding-left: 7px;\"><span class=\"fa fa-eye\"></span></a>
                       </td>
                   </tr>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "               </tbody>
           </table>
           <button class=\"btn btn-success space_box\"><a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_new");
            echo "\"><span class=\"fa fa-plus\" style=\"color: #FFFFFF;\"> Create a new media</span></a></button>
       </div>
    ";
        } else {
            // line 33
            echo "        <section class=\"gallery-block grid-gallery\">
            <div class=\"container\">
                <div class=\"heading\">
                    <h1 style=\"color: #FFFFFF\" class=\"text-center\">Grid Gallery</h1>
                </div>
                ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 39
                echo "                    <div class=\"row\">
                        <div class=\"col-md-6 col-lg-4 item\">
                            <a class=\"lightbox\" href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["post"], "image", array()))), "html", null, true);
                echo "\">
                                <img class=\"img-fluid image scale-on-hover\" src=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["post"], "image", array()))), "html", null, true);
                echo "\">
                            </a>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "            </div>
        </section>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Elislam/post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 47,  146 => 42,  142 => 41,  138 => 39,  134 => 38,  127 => 33,  121 => 30,  117 => 28,  107 => 24,  102 => 22,  96 => 21,  93 => 20,  89 => 19,  76 => 8,  73 => 7,  64 => 6,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Elislam/Default/base.html.twig' %}
{% block stylesheets %}
    <link href=\"{{ asset('bundles/elislam/css/sub.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css\" />
{% endblock %}
{% block body %}
    {% if app.user %}
       <div class=\"container-fluid col-9\">
           <h1 class=\"text-center text-white\">Gallerij lijst</h1>
           <table class=\"table table-striped table-dark table-bordered table-responsive\">
               <thead>
               <tr>
                   <th>Id</th>
                   <th>Image</th>
                   <th>Actions</th>
               </tr>
               </thead>
               <tbody>
               {% for post in posts %}
                   <tr>
                       <td><a href=\"{{ path('post_show', { 'id': post.id }) }}\">{{ post.id }}</a></td>
                       <td>{{ post.image }}</td>
                       <td>
                           <a href=\"{{ path('post_show', { 'id': post.id }) }}\" style=\"padding-left: 7px;\"><span class=\"fa fa-eye\"></span></a>
                       </td>
                   </tr>
               {% endfor %}
               </tbody>
           </table>
           <button class=\"btn btn-success space_box\"><a href=\"{{ path('post_new') }}\"><span class=\"fa fa-plus\" style=\"color: #FFFFFF;\"> Create a new media</span></a></button>
       </div>
    {% else %}
        <section class=\"gallery-block grid-gallery\">
            <div class=\"container\">
                <div class=\"heading\">
                    <h1 style=\"color: #FFFFFF\" class=\"text-center\">Grid Gallery</h1>
                </div>
                {% for post in posts %}
                    <div class=\"row\">
                        <div class=\"col-md-6 col-lg-4 item\">
                            <a class=\"lightbox\" href=\"{{ asset('uploads/images/' ~ post.image) }}\">
                                <img class=\"img-fluid image scale-on-hover\" src=\"{{ asset('uploads/images/' ~ post.image) }}\">
                            </a>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </section>
    {% endif %}
{% endblock %}
", "@Elislam/post/index.html.twig", "C:\\xampp\\htdocs\\elislam\\src\\ElislamBundle\\Resources\\views\\post\\index.html.twig");
    }
}
