---
layout: default
title: Chaussons Adulte
shorttitle: Adulte
weight: 2
category: adulte
---
{% assign url = page.url | remove: "index.html" %}

{% include sousmenu.html %}


<div class="centered">Bientôt, une boutique en ligne</div>
La collection *Adulte*, à partir de la taille 35. 

Fabriqués artisanalement par mes petits soins, en séries limités.

Je les façonne sans couture, directement en une seule forme, au fur et à mesure de mes inspirations et des couleurs disponibles.

Nouveau :


{% assign prods = site.pages | sort: "url" %}
<ul class="prods">
	{% for onepage in prods %}
	  {% if onepage.layout == 'produit' %}
		  {% assign onepageurl = onepage.url | remove: "index.html" %}
		  {% assign tCategories = onepage.categories | split:" " %}
		  {% assign tPointures = onepage.pointures | split:" " %}
		  {% capture sPointure %}{{ page.pointure }}{% endcapture %}
		  {% if tCategories contains adultenouveau or tPointures contains sPointure %}
				<li><a href="{{ onepageurl | prepend: site.baseurl }}#page-content"><img src="{{ onepageurl | prepend: site.baseurl }}petite.jpg" sizes="(min-width: 600px) 160px, 100vw" srcset="{{ onepageurl | prepend: site.baseurl }}vignette.jpg 160w,
				{{ onepageurl | prepend: site.baseurl }}petite.jpg 480w,
				{{ onepageurl | prepend: site.baseurl }}moyenne.jpg 800w,
				{{ onepageurl | prepend: site.baseurl }}grande.jpg 2272w"></a>
		  {% endif %}
	  {% endif %}
	{% endfor %}
</ul>


Anciens :



{% assign prods = site.pages | sort: "url" %}
<ul class="prods">
	{% for onepage in prods %}
	  {% if onepage.layout == 'produit' %}
		  {% assign onepageurl = onepage.url | remove: "index.html" %}
		  {% assign tCategories = onepage.categories | split:" " %}
		  {% assign tPointures = onepage.pointures | split:" " %}
		  {% capture sPointure %}{{ page.pointure }}{% endcapture %}
		  {% if tCategories contains page.category or tPointures contains sPointure %}
				<li><a href="{{ onepageurl | prepend: site.baseurl }}#page-content"><img src="{{ onepageurl | prepend: site.baseurl }}petite.jpg" sizes="(min-width: 600px) 160px, 100vw" srcset="{{ onepageurl | prepend: site.baseurl }}vignette.jpg 160w,
				{{ onepageurl | prepend: site.baseurl }}petite.jpg 480w,
				{{ onepageurl | prepend: site.baseurl }}moyenne.jpg 800w,
				{{ onepageurl | prepend: site.baseurl }}grande.jpg 2272w"></a>
		  {% endif %}
	  {% endif %}
	{% endfor %}
</ul>






{% include sousmenupointures.html %}


