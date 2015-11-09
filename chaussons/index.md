---
layout: page
title: Chaussons
weight: 2
---
<!--
{% for produit in site.produits %}
<li><a href="{{ produit.url }}">{{ produit.title }}</a>
{% endfor %}

{% assign groups = site.produits | group_by: "category" %}

{% for group in groups %}
<li>{{ group.name }}
    {% for item in group.items %}
        <a href="{{item.url| replace: 'index.html','' }}">{{item.title}}</a>
    {%endfor%}
{%endfor%}
-->

	{% for page in site.pages %}
	  {% if page.path contains path %}
	  <div><a href="{{ page.url | prepend: site.baseurl |  replace: 'index.html' ,'' }}"><img src="{{ site.baseurl }}{{ page.url  |  replace: 'index.html' ,'' }}categorie.png"></a></div>
	  {% endif %}
	{% endfor %}
