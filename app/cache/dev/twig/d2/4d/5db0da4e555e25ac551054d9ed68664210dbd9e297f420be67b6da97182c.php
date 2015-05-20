<?php

/* MSIMClientBundle:Default:FormPr.html.twig */
class __TwigTemplate_d24d5db0da4e555e25ac551054d9ed68664210dbd9e297f420be67b6da97182c extends Twig_Template
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
        echo "    <html>
        <body BgColor=\"#64BCE5\">
                   

           
        <center>
            <h1> Bonjour dans mon espace</h1>
                        <h3> Veuillez remplir le formulaire suivant :</h3>

    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form');
        echo "
    <br>
    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("consult");
        echo "\">Lister les taches</a>
    </center>
    </body>
</html>
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
        return array (  55 => 14,  50 => 12,  39 => 3,  36 => 2,  11 => 1,);
    }
}
