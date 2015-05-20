<?php

/* MSIMClientBundle:Default:acceuil.html.twig */
class __TwigTemplate_177f66d0e817d2f360d5e9e90661efe75791b44a1fa268acd59be8feb21e322b extends Twig_Template
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
        echo "<body BgColor=\"#64BCE5\">
 <h1> A Faire :</h1>
<li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("affiche");
        echo "\"><h2>Ajouter tache</h2></a></li>
 <li>  <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("consult");
        echo "\"><h2><h2>Faire le ménage</h2></h2></a></li>
 <li><a href=\"\"><h2>Dormir</h2></a></li>
 </body>";
    }

    public function getTemplateName()
    {
        return "MSIMClientBundle:Default:acceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }
}
