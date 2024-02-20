# Kirby CMS Template

### Get The Latest kirby Plainkit
```
git clone https://github.com/getkirby/plainkit.git
```  
Replace the **site** and **assets** folder from the **plainkit** with the same folders from this template.

The heart of this build is the `site/snippets/site-structure.php`  
which must be used in every page template.  
In the `site/templates/default.php` you can find a all use of the `slots()` method for this snippet.  
  
  
### Use The Following Slots:

`slot('default')`   most used: this will fill in content inside the `<main>` element  
  
`slot('head')`      here you can add `<link>` or `<script>` tags to the **head** of the document  
  
`slot('header')`    here you can ad elements to display in the **header** of the page (often unused)  
  
`slot('footer')`    here you can ad elements to display in the **footer** of the page (often unused)  
  
`slot('foot')`      here you can add `<link>` or `<script>` tags right before the `<body>` tag closes  


______________________

### There is a bunch of preset SCSS to make life easier
All SCSS should be compiled into the `assets/css/templates` folder  
for example with the VS Code Extension "Live Sass Compiler" by Glenn Marks  


## Components

### Gallery Sliders
#### import in the main.js
```
import {  
  createGalleryHandlers,  
} from '/assets/js/components/gallery.js';
```  

#### use the gallery object
The Gallery is use with the kirby `block` method.  
Create a gallery either rendering blocks directly in the panel or by using the kirby's `layout` field  
The `layout` field also has a preset in this template  

#### make changes to the gallery
Change how the gallery get's rendered in the `site/snippets/blocks/gallery.php` file  
Change how the gallery get's handled in the `assets/js/components/gallery.js` file  


### Accordion
#### Blueprint
You need to extend the Accordion blueprint file first  
```
accordion:  
  extends: fields/accordion  
  label: MyAccordionName
``` 

and render it by calling the snippet:  
`<?= snippet('components/accordion') ?>`

#### Make Changes
Change the structure or how the accordion get's handled in the `site/snippets/components/accordion.php` file

Change the style of the accordion in the `assets/scss/components/_accordion.scss` file


### Burger Menu Button
You can get the preset menu button by adding the following HTML element:  
```
<div id="menu-button">  
    <span class="bar1"></span>  
    <span class="bar2"></span>  
    <span class="bar3"></span>  
</div>
```

Change the button's stlye inside the `assets/scss/components/_burger-menu.scss`  

there is no button handling there yet. An animation will be triggered if a `open` class is added or removed from the `menu-button`  


### Layout
You need to extend the Layout blueprint file first  
```
layout:  
  label: MyLayoutName  
  extends: fields/layout
```

and render it by calling the snippet:  
`<?= snippet('components/layout') ?>`

#### Make Changes
The single elements that get rendered inside the layout are "kirby block elements"   
To change how these get rendered you can go to `site/snippets/blocks`  
get more info about it on [Kirby Reference](https://getkirby.com/docs/reference/panel/fields/blocks)   

To change the Layout's structure see this `site/snippets/components/layout.php` file  

The Layout has no direct Styling since it is only stucturing elements together. The stucture is based on the grid system within this template:  
`assets/scss/utilities/_grid.scss`


### Text Cursor
To get a cursur that shows actual AND dynamicly changeble text  

#### import in the main.js
```
import {  
  initTextCursor,  
} from '/assets/js/components/text-cursor.js';
``` 

Add elements to your HTML that have a `data-cursor` attribute  
The content of that attribute will be shown by the cursor  

