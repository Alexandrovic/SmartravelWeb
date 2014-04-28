<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_780a988e78d668efde179dffcf41870d103e5472e2fabfe149a61d2b78cb3bae extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == $this->getContext($context, "position"))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  70 => 26,  66 => 25,  62 => 24,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  26 => 3,  24 => 2,  19 => 1,  2258 => 1726,  2250 => 1994,  2241 => 1988,  2237 => 1987,  2233 => 1986,  2229 => 1985,  2225 => 1984,  2219 => 1981,  2213 => 1978,  2207 => 1975,  2201 => 1972,  2195 => 1969,  2189 => 1966,  2173 => 1953,  2145 => 1928,  2101 => 1887,  2096 => 1885,  2092 => 1884,  2088 => 1883,  2084 => 1882,  2056 => 1857,  2052 => 1856,  2041 => 1848,  2031 => 1841,  2021 => 1834,  2011 => 1827,  2001 => 1820,  1991 => 1813,  1966 => 1791,  1962 => 1790,  1951 => 1782,  1941 => 1775,  1931 => 1768,  1921 => 1761,  1911 => 1754,  1901 => 1747,  1881 => 1729,  1879 => 1726,  1863 => 1713,  1857 => 1710,  1847 => 1703,  1841 => 1700,  1831 => 1693,  1825 => 1690,  1818 => 1686,  1804 => 1675,  1798 => 1672,  1788 => 1665,  1782 => 1662,  1772 => 1655,  1766 => 1652,  1759 => 1648,  1745 => 1637,  1739 => 1634,  1729 => 1627,  1723 => 1624,  1713 => 1617,  1707 => 1614,  1700 => 1610,  1528 => 1441,  1496 => 1412,  1464 => 1383,  1431 => 1353,  1391 => 1316,  1331 => 1259,  1288 => 1219,  1131 => 1065,  1088 => 1025,  961 => 901,  918 => 861,  576 => 522,  533 => 482,  342 => 294,  299 => 254,  97 => 55,  75 => 28,  69 => 33,  63 => 30,  59 => 29,  55 => 27,  51 => 25,  45 => 21,  40 => 13,  34 => 10,  30 => 5,  20 => 1,  33 => 3,  28 => 2,);
    }
}
