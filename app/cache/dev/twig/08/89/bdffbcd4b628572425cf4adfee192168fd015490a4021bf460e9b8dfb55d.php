<?php

/* MSIMClientBundle:Default:supprimer.html.twig */
class __TwigTemplate_0889bdffbcd4b628572425cf4adfee192168fd015490a4021bf460e9b8dfb55d extends Twig_Template
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
        echo "        <body BgColor=\"#9CD3ED\">

    <h2 style=\"color:#565656;text-align: center ; text-decoration: underline\" >votre client N° ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " est bien supprimé</h2>

    <table border=\"1\" style=\"border-collapse: collapse;margin-left: 33%\"><tr  bgcolor=\"#20769D\"><td style=\"width: 40px;text-align: center\"> identifiant</td><td style=\"width: 100px;text-align: center\">Nom</td> <td style=\"width: 100px;text-align: center\">Adresse</td><td style=\"width: 100px;text-align: center\" colspan=\"3\">Opération</td></tr>
";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Client"]) ? $context["Client"] : $this->getContext($context, "Client")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 9
            echo "    <tr><td style=\"width: 40px;text-align: center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "</td>
         <td style=\"width: 100px;text-align: center\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", array()), "html", null, true);
            echo "</td>
        <td style=\"width: 100px;text-align: center\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "adresse", array()), "html", null, true);
            echo "</td>
        <td style=\"width: 100px;text-align: center\"><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
        <td style=\"width: 100px;text-align: center\"><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "

</table>
    </body>
";
    }

    public function getTemplateName()
    {
        return "MSIMClientBundle:Default:supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 16,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  53 => 9,  49 => 8,  43 => 5,  39 => 3,  36 => 2,  11 => 1,);
    }
}
