<?php

/* MSIMClientBundle:Default:ajout.html.twig */
class __TwigTemplate_fd229e0bcce6430fe52c2a29001c0bd6c8ab9ee12ca872499ef6d070ea2a3b95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "   <h1> id=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Client"]) ? $context["Client"] : $this->getContext($context, "Client")), "id", array()), "html", null, true);
        echo " </h1><br/>
    nom=";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Client"]) ? $context["Client"] : $this->getContext($context, "Client")), "nom", array()), "html", null, true);
        echo " <br/>
    adresse=";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Client"]) ? $context["Client"] : $this->getContext($context, "Client")), "adresse", array()), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "MSIMClientBundle:Default:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 5,  44 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
