<?php

/* @Elislam/Default/index.html.twig */
class __TwigTemplate_ebaab0d653d45005ea3e53165a657a6c0aa9520e97d9711828248bb573d03190 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Elislam/Default/base.html.twig", "@Elislam/Default/index.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Elislam/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Elislam/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    ";
        // line 4
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 5
            echo "         <div class=\"container-fluid\">
             <h1 class=\"text-center\">Welkom op uw dashboard ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo "</h1>
         </div>
         <div class=\"row mb-2 container-fluid\">
             <div class=\"col-md-2\"></div>
             <div class=\"col-md-6 container-fluid col-form-label-sm\">
                 <div class=\"card flex-md-row mb-4 badge-primary box-shadow h-md-250\" style=\"margin-left: 52px;\">
                     <div class=\"card-body d-flex flex-column\">
                         <span class=\"fa fa-user-md text-center fa-5x\"></span>
                         <h2 class=\"text-center\">
                             <a class=\"text-dark\" href=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">Profile</a>
                         </h2>
                     </div>
                 </div>
             </div>
             <div class=\"col-md-1\"></div>
             <div class=\"col-md-1\"></div>
             <div class=\"col-md-6 container-fluid col-form-label-sm\">
                 <div class=\"card flex-md-row mb-4 badge-info box-shadow h-md-250\" style=\"margin-left: 52px;\">
                     <div class=\"card-body d-flex flex-column\">
                         <span class=\"fa fa-cogs text-center fa-5x\"></span>
                         <h2 class=\"text-center\">
                             <a class=\"text-dark\" href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("elislam_adminsys_index");
            echo "\">admin system</a>
                         </h2>
                     </div>
                 </div>
             </div>
             <div class=\"col-md-12\"></div>
             <div class=\"col-md-6 container-fluid col-form-label-sm\">
                 <div class=\"card flex-md-row mb-4 badge-warning box-shadow h-md-250\" style=\"margin-left: 52px;\">
                     <div class=\"card-body d-flex flex-column\">
                         <span class=\"fa fa-key text-center fa-5x\"></span>
                         <h2 class=\"text-center\">
                             <a class=\"text-dark text-size-m\" href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\">ChangePassword</a>
                         </h2>
                     </div>
                 </div>
             </div>
         </div>
    ";
        } else {
            // line 45
            echo "        <div class=\" p-3 p-md-5 text-white bg-dark islam-bg\">
            <div class=\"col-md-6 px-0\">
                <h1 class=\"display-4 card-title font-weight-bold text-center\">El-islam</h1>
                <p class=\"lead my-3\">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
            </div>
        </div>
        <div class=\"jumbotron p-3 text-white bg-dark\" style=\"border-radius: 0!important;\">
            <div class=\"col-md-auto cntr\"><h5 class=\"text-center\" style=\"float: left; margin-left: 17%;\">Woensdag 20 Juni Fadjr 03:07 Shoroeq 05:18 Dohr 13:46 Asr 18:10 Maghrib 22:10 Ishae 23:40</h5> <a class=\"btn btn-primary btn-lg tijd\" href=\"map.jpg\" target=\"_blank\" role=\"button\" style=\"margin: -16px;
    margin-left: 13px;\">bekijk hele maand</a></div>

        </div>
        <div class=\"row mb-2 container-fluid\">
            <div class=\"col-md-6 container-fluid\">
                <div class=\"card flex-md-row mb-4 box-shadow h-md-250\">
                    <div class=\"card-body d-flex flex-column align-items-start\">
                        <strong class=\"d-inline-block mb-2 text-primary\">World</strong>
                        <h3 class=\"mb-0\">
                            <a class=\"text-dark\" href=\"#\">Featured post</a>
                        </h3>
                        <div class=\"mb-1 text-muted\">Nov 12</div>
                        <p class=\"card-text mb-auto\">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href=\"#\">Continue reading</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 container-fluid\">
                <div class=\"card flex-md-row mb-4 box-shadow h-md-250\">
                    <div class=\"card-body d-flex flex-column align-items-start\">
                        <strong class=\"d-inline-block mb-2 text-success\">Design</strong>
                        <h3 class=\"mb-0\">
                            <a class=\"text-dark\" href=\"#\">Post title</a>
                        </h3>
                        <div class=\"mb-1 text-muted\">Nov 11</div>
                        <p class=\"card-text mb-auto\">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href=\"#\">Continue reading</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <main role=\"main\" class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-8 blog-main\">
                    <h3 class=\"pb-3 mb-4 font-italic border-bottom\">
                        From the Firehose
                    </h3>

                    <div class=\"blog-post\">
                        <h2 class=\"blog-post-title\">El-islam</h2>
                        <p class=\"blog-post-meta\">January 1, 2014 by <a href=\"#\">Mark</a></p>

                        <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
                        <hr>
                        <p>Cum sociis natoque penatibus et magnis <a href=\"#\">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                        <blockquote>
                            <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </blockquote>
                        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <h2>Heading</h2>
                        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                        <h3>Sub-heading</h3>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <pre><code>Example code block</code></pre>
                        <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                        <h3>Sub-heading</h3>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        <ul>
                            <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                            <li>Donec id elit non mi porta gravida at eget metus.</li>
                            <li>Nulla vitae elit libero, a pharetra augue.</li>
                        </ul>
                        <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
                        <ol>
                            <li>Vestibulum id ligula porta felis euismod semper.</li>
                            <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                            <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
                        </ol>
                        <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
                    </div><!-- /.blog-post -->

                    <div class=\"blog-post\">
                        <h2 class=\"blog-post-title\">Another blog post</h2>
                        <p class=\"blog-post-meta\">December 23, 2013 by <a href=\"#\">Jacob</a></p>

                        <p>Cum sociis natoque penatibus et magnis <a href=\"#\">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                        <blockquote>
                            <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </blockquote>
                        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    </div><!-- /.blog-post -->

                    <div class=\"blog-post\">
                        <h2 class=\"blog-post-title\">New feature</h2>
                        <p class=\"blog-post-meta\">December 14, 2013 by <a href=\"#\">Chris</a></p>

                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        <ul>
                            <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                            <li>Donec id elit non mi porta gravida at eget metus.</li>
                            <li>Nulla vitae elit libero, a pharetra augue.</li>
                        </ul>
                        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
                    </div><!-- /.blog-post -->

                    <nav class=\"blog-pagination\">
                        <a class=\"btn btn-outline-primary\" href=\"#\">Older</a>
                        <a class=\"btn btn-outline-secondary disabled\" href=\"#\">Newer</a>
                    </nav>

                </div><!-- /.blog-main -->

                <aside class=\"col-md-4 blog-sidebar\">
                    <div class=\"p-3 mb-3 bg-light rounded\">
                        <blockquote class=\"quote-card shadow\">
                            <p>
                                Onderhoud de relaties met jullie verwanten, al is het maar door hen te begroeten.
                            </p>

                            <cite>
                                Sahih al Bukharie
                            </cite>
                        </blockquote>
                    </div>

                    <div class=\"p-3\">
                        <h4 class=\"font-italic\">Archives</h4>
                        <ol class=\"list-unstyled mb-0\">
                            <li><a href=\"#\">March 2014</a></li>
                            <li><a href=\"#\">February 2014</a></li>
                            <li><a href=\"#\">January 2014</a></li>
                            <li><a href=\"#\">December 2013</a></li>
                            <li><a href=\"#\">November 2013</a></li>
                            <li><a href=\"#\">October 2013</a></li>
                            <li><a href=\"#\">September 2013</a></li>
                            <li><a href=\"#\">August 2013</a></li>
                            <li><a href=\"#\">July 2013</a></li>
                            <li><a href=\"#\">June 2013</a></li>
                            <li><a href=\"#\">May 2013</a></li>
                            <li><a href=\"#\">April 2013</a></li>
                        </ol>
                    </div>

                    <div class=\"p-3\">
                        <h4 class=\"font-italic\">El islam social</h4>
                        <ol class=\"list-unstyled text-spacing\">
                            <li><a href=\"#\"><span class=\"fa fa-facebook-square fa-5x\" style=\"color: #0000F0\"></span></a></li>
                            <li><a href=\"#\"><span class=\"fa fa-twitter-square fa-5x\" style=\"color: #00bcd4\"></span></a></li>
                            <li><a href=\"#\"><span class=\"fa fa-youtube-square fa-5x\" style=\"color: #ff1100\"></span></a></li>
                            <li><a href=\"#\"><span class=\"fa fa-instagram fa-5x\"style=\"background: -webkit-linear-gradient(\t45deg, #ffdf9e, #ffc273, #e56969, #c1558b, #8a49a1);
                            -webkit-background-clip: text;
                             -webkit-text-fill-color: transparent;\">
                                    </span></a></li>
                        </ol>
                    </div>
                </aside><!-- /.blog-sidebar -->

            </div><!-- /.row -->

        </main><!-- /.container -->
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Elislam/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 45,  98 => 38,  84 => 27,  69 => 15,  57 => 6,  54 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
{% block body %}

    {% if app.user %}
         <div class=\"container-fluid\">
             <h1 class=\"text-center\">Welkom op uw dashboard {{ app.user }}</h1>
         </div>
         <div class=\"row mb-2 container-fluid\">
             <div class=\"col-md-2\"></div>
             <div class=\"col-md-6 container-fluid col-form-label-sm\">
                 <div class=\"card flex-md-row mb-4 badge-primary box-shadow h-md-250\" style=\"margin-left: 52px;\">
                     <div class=\"card-body d-flex flex-column\">
                         <span class=\"fa fa-user-md text-center fa-5x\"></span>
                         <h2 class=\"text-center\">
                             <a class=\"text-dark\" href=\"{{ path('fos_user_profile_show') }}\">Profile</a>
                         </h2>
                     </div>
                 </div>
             </div>
             <div class=\"col-md-1\"></div>
             <div class=\"col-md-1\"></div>
             <div class=\"col-md-6 container-fluid col-form-label-sm\">
                 <div class=\"card flex-md-row mb-4 badge-info box-shadow h-md-250\" style=\"margin-left: 52px;\">
                     <div class=\"card-body d-flex flex-column\">
                         <span class=\"fa fa-cogs text-center fa-5x\"></span>
                         <h2 class=\"text-center\">
                             <a class=\"text-dark\" href=\"{{ path('elislam_adminsys_index') }}\">admin system</a>
                         </h2>
                     </div>
                 </div>
             </div>
             <div class=\"col-md-12\"></div>
             <div class=\"col-md-6 container-fluid col-form-label-sm\">
                 <div class=\"card flex-md-row mb-4 badge-warning box-shadow h-md-250\" style=\"margin-left: 52px;\">
                     <div class=\"card-body d-flex flex-column\">
                         <span class=\"fa fa-key text-center fa-5x\"></span>
                         <h2 class=\"text-center\">
                             <a class=\"text-dark text-size-m\" href=\"{{ path('fos_user_change_password') }}\">ChangePassword</a>
                         </h2>
                     </div>
                 </div>
             </div>
         </div>
    {% else %}
        <div class=\" p-3 p-md-5 text-white bg-dark islam-bg\">
            <div class=\"col-md-6 px-0\">
                <h1 class=\"display-4 card-title font-weight-bold text-center\">El-islam</h1>
                <p class=\"lead my-3\">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
            </div>
        </div>
        <div class=\"jumbotron p-3 text-white bg-dark\" style=\"border-radius: 0!important;\">
            <div class=\"col-md-auto cntr\"><h5 class=\"text-center\" style=\"float: left; margin-left: 17%;\">Woensdag 20 Juni Fadjr 03:07 Shoroeq 05:18 Dohr 13:46 Asr 18:10 Maghrib 22:10 Ishae 23:40</h5> <a class=\"btn btn-primary btn-lg tijd\" href=\"map.jpg\" target=\"_blank\" role=\"button\" style=\"margin: -16px;
    margin-left: 13px;\">bekijk hele maand</a></div>

        </div>
        <div class=\"row mb-2 container-fluid\">
            <div class=\"col-md-6 container-fluid\">
                <div class=\"card flex-md-row mb-4 box-shadow h-md-250\">
                    <div class=\"card-body d-flex flex-column align-items-start\">
                        <strong class=\"d-inline-block mb-2 text-primary\">World</strong>
                        <h3 class=\"mb-0\">
                            <a class=\"text-dark\" href=\"#\">Featured post</a>
                        </h3>
                        <div class=\"mb-1 text-muted\">Nov 12</div>
                        <p class=\"card-text mb-auto\">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href=\"#\">Continue reading</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 container-fluid\">
                <div class=\"card flex-md-row mb-4 box-shadow h-md-250\">
                    <div class=\"card-body d-flex flex-column align-items-start\">
                        <strong class=\"d-inline-block mb-2 text-success\">Design</strong>
                        <h3 class=\"mb-0\">
                            <a class=\"text-dark\" href=\"#\">Post title</a>
                        </h3>
                        <div class=\"mb-1 text-muted\">Nov 11</div>
                        <p class=\"card-text mb-auto\">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href=\"#\">Continue reading</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <main role=\"main\" class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-8 blog-main\">
                    <h3 class=\"pb-3 mb-4 font-italic border-bottom\">
                        From the Firehose
                    </h3>

                    <div class=\"blog-post\">
                        <h2 class=\"blog-post-title\">El-islam</h2>
                        <p class=\"blog-post-meta\">January 1, 2014 by <a href=\"#\">Mark</a></p>

                        <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
                        <hr>
                        <p>Cum sociis natoque penatibus et magnis <a href=\"#\">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                        <blockquote>
                            <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </blockquote>
                        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <h2>Heading</h2>
                        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                        <h3>Sub-heading</h3>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <pre><code>Example code block</code></pre>
                        <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                        <h3>Sub-heading</h3>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        <ul>
                            <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                            <li>Donec id elit non mi porta gravida at eget metus.</li>
                            <li>Nulla vitae elit libero, a pharetra augue.</li>
                        </ul>
                        <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
                        <ol>
                            <li>Vestibulum id ligula porta felis euismod semper.</li>
                            <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                            <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
                        </ol>
                        <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
                    </div><!-- /.blog-post -->

                    <div class=\"blog-post\">
                        <h2 class=\"blog-post-title\">Another blog post</h2>
                        <p class=\"blog-post-meta\">December 23, 2013 by <a href=\"#\">Jacob</a></p>

                        <p>Cum sociis natoque penatibus et magnis <a href=\"#\">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                        <blockquote>
                            <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </blockquote>
                        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    </div><!-- /.blog-post -->

                    <div class=\"blog-post\">
                        <h2 class=\"blog-post-title\">New feature</h2>
                        <p class=\"blog-post-meta\">December 14, 2013 by <a href=\"#\">Chris</a></p>

                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        <ul>
                            <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                            <li>Donec id elit non mi porta gravida at eget metus.</li>
                            <li>Nulla vitae elit libero, a pharetra augue.</li>
                        </ul>
                        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
                    </div><!-- /.blog-post -->

                    <nav class=\"blog-pagination\">
                        <a class=\"btn btn-outline-primary\" href=\"#\">Older</a>
                        <a class=\"btn btn-outline-secondary disabled\" href=\"#\">Newer</a>
                    </nav>

                </div><!-- /.blog-main -->

                <aside class=\"col-md-4 blog-sidebar\">
                    <div class=\"p-3 mb-3 bg-light rounded\">
                        <blockquote class=\"quote-card shadow\">
                            <p>
                                Onderhoud de relaties met jullie verwanten, al is het maar door hen te begroeten.
                            </p>

                            <cite>
                                Sahih al Bukharie
                            </cite>
                        </blockquote>
                    </div>

                    <div class=\"p-3\">
                        <h4 class=\"font-italic\">Archives</h4>
                        <ol class=\"list-unstyled mb-0\">
                            <li><a href=\"#\">March 2014</a></li>
                            <li><a href=\"#\">February 2014</a></li>
                            <li><a href=\"#\">January 2014</a></li>
                            <li><a href=\"#\">December 2013</a></li>
                            <li><a href=\"#\">November 2013</a></li>
                            <li><a href=\"#\">October 2013</a></li>
                            <li><a href=\"#\">September 2013</a></li>
                            <li><a href=\"#\">August 2013</a></li>
                            <li><a href=\"#\">July 2013</a></li>
                            <li><a href=\"#\">June 2013</a></li>
                            <li><a href=\"#\">May 2013</a></li>
                            <li><a href=\"#\">April 2013</a></li>
                        </ol>
                    </div>

                    <div class=\"p-3\">
                        <h4 class=\"font-italic\">El islam social</h4>
                        <ol class=\"list-unstyled text-spacing\">
                            <li><a href=\"#\"><span class=\"fa fa-facebook-square fa-5x\" style=\"color: #0000F0\"></span></a></li>
                            <li><a href=\"#\"><span class=\"fa fa-twitter-square fa-5x\" style=\"color: #00bcd4\"></span></a></li>
                            <li><a href=\"#\"><span class=\"fa fa-youtube-square fa-5x\" style=\"color: #ff1100\"></span></a></li>
                            <li><a href=\"#\"><span class=\"fa fa-instagram fa-5x\"style=\"background: -webkit-linear-gradient(\t45deg, #ffdf9e, #ffc273, #e56969, #c1558b, #8a49a1);
                            -webkit-background-clip: text;
                             -webkit-text-fill-color: transparent;\">
                                    </span></a></li>
                        </ol>
                    </div>
                </aside><!-- /.blog-sidebar -->

            </div><!-- /.row -->

        </main><!-- /.container -->
    {% endif %}
{% endblock %}
", "@Elislam/Default/index.html.twig", "C:\\xampp\\htdocs\\newP\\elislam\\src\\ElislamBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
