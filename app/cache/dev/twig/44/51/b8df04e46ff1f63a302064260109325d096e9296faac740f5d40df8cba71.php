<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_4451b8df04e46ff1f63a302064260109325d096e9296faac740f5d40df8cba71 extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  70 => 26,  66 => 25,  62 => 24,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  26 => 3,  24 => 2,  19 => 1,  2258 => 1726,  2250 => 1994,  2241 => 1988,  2237 => 1987,  2233 => 1986,  2229 => 1985,  2225 => 1984,  2219 => 1981,  2213 => 1978,  2207 => 1975,  2201 => 1972,  2195 => 1969,  2189 => 1966,  2173 => 1953,  2145 => 1928,  2101 => 1887,  2096 => 1885,  2092 => 1884,  2088 => 1883,  2084 => 1882,  2056 => 1857,  2052 => 1856,  2041 => 1848,  2031 => 1841,  2021 => 1834,  2011 => 1827,  2001 => 1820,  1991 => 1813,  1966 => 1791,  1962 => 1790,  1951 => 1782,  1941 => 1775,  1931 => 1768,  1921 => 1761,  1911 => 1754,  1901 => 1747,  1881 => 1729,  1879 => 1726,  1863 => 1713,  1857 => 1710,  1847 => 1703,  1841 => 1700,  1831 => 1693,  1825 => 1690,  1818 => 1686,  1804 => 1675,  1798 => 1672,  1788 => 1665,  1782 => 1662,  1772 => 1655,  1766 => 1652,  1759 => 1648,  1745 => 1637,  1739 => 1634,  1729 => 1627,  1723 => 1624,  1713 => 1617,  1707 => 1614,  1700 => 1610,  1528 => 1441,  1496 => 1412,  1464 => 1383,  1431 => 1353,  1391 => 1316,  1331 => 1259,  1288 => 1219,  1131 => 1065,  1088 => 1025,  961 => 901,  918 => 861,  576 => 522,  533 => 482,  342 => 294,  299 => 254,  97 => 55,  75 => 28,  69 => 33,  63 => 30,  59 => 29,  55 => 27,  51 => 25,  45 => 21,  40 => 13,  34 => 10,  30 => 5,  20 => 1,  33 => 3,  28 => 2,);
    }
}
