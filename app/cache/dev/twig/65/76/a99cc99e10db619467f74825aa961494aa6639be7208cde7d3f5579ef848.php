<?php

/* MSIMClientBundle:Default:FormPr.html.twig */
class __TwigTemplate_6576a99cc99e10db619467f74825aa961494aa6639be7208cde7d3f5579ef848 extends Twig_Template
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
        echo "
    ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form');
        echo "

";
    }

    public function getTemplateName()
    {
        return "MSIMClientBundle:Default:FormPr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
