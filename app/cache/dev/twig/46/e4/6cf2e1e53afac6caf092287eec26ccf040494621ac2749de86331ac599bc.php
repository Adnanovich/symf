<?php

/* MSIMClientBundle:Default:affiche.html.twig */
class __TwigTemplate_46e46cf2e1e53afac6caf092287eec26ccf040494621ac2749de86331ac599bc extends Twig_Template
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
        echo "    <body BgColor=\"#9CD3ED\">
         <center>
<h1 style=\"color:#AC2F2F;text-align: center; text-decoration: underline\">Listes des taches 2015</h1>
    <table border=\"1\" style=\"border-collapse: collapse\"><tr  bgcolor=\"#20769D\"><td style=\"width: 40px;text-align: center\"> identifiant</td><td style=\"width: 100px;text-align: center\">Nom</td> <td style=\"width: 100px;text-align: center\">Adresse</td></tr>
";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Chose"]) ? $context["Chose"] : $this->getContext($context, "Chose")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 8
            echo "    <tr><td style=\"width: 40px;text-align: center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "</td>
         <td style=\"width: 100px;text-align: center\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "chose", array()), "html", null, true);
            echo "</td>
        <td style=\"width: 100px;text-align: center\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "description", array()), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "

</table>
    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("affiche");
        echo "\">Retour</a></center>
    </body>

";
    }

    public function getTemplateName()
    {
        return "MSIMClientBundle:Default:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  67 => 13,  58 => 10,  54 => 9,  49 => 8,  45 => 7,  39 => 3,  36 => 2,  11 => 1,);
    }
}
